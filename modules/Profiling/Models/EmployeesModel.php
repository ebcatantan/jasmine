<?php
namespace Modules\Profiling\Models;

use CodeIgniter\Model;

class EmployeesModel extends \CodeIgniter\Model
{
    protected $table = 'employees';

    protected $allowedFields = ['department_id', 'user_id', 'employee_no', 'employee_image', 'title_prefix',
     'last_name', 'first_name', 'middle_name', 'extension_name', 'title_suffix', 'address', 'email', 'contact_no', 'birth_date',
     'birth_place', 'gender', 'civil_status', 'maiden_name', 'height', 'weight', 'religion', 'date_employed', 'employment_status',
     'is_faculty', 'status', 'created_at','updated_at', 'deleted_at'];

    public function getEmployeeWithCondition($conditions = [])
	{
		foreach($conditions as $field => $value)
		{
			$this->where($field, $value);
		}
	    return $this->findAll();
	}

	public function getEmployeeWithFunction($args = [])
	{
		$db = \Config\Database::connect();

		$str = "SELECT * FROM employees WHERE status = '".$args['status']."' LIMIT ". $args['offset'] .','.$args['limit'];
		// print_r($str); die();
		$query = $db->query($str);

		// print_r($query->getResultArray()); die();
	    return $query->getResultArray();
	}

    public function getEmployees()
	{
	    return $this->findAll();
	}

    public function addEmployees($val_array = [])
	{
      $val_array['user_id'] = $_SESSION['uid'];
  		$val_array['created_at'] = (new \DateTime())->format('Y-m-d H:i:s');
    	$val_array['status'] = 'a';
	    return $this->save($val_array);
	}

    public function editEmployees($val_array = [], $id)
	{
		$val_array['updated_at'] = (new \DateTime())->format('Y-m-d H:i:s');
		$val_array['status'] = 'a';
		return $this->update($id, $val_array);
	}

    public function deleteEmployee($id)
	{
		$val_array['deleted_at'] = (new \DateTime())->format('Y-m-d H:i:s');
		$val_array['status'] = 'd';
		return $this->update($id, $val_array);
	}
}
