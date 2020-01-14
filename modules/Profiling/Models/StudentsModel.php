<?php
namespace Modules\Profiling\Models;

use CodeIgniter\Model;

class StudentsModel extends \CodeIgniter\Model
{
    protected $table = 'students';

    protected $allowedFields = ['academic_year_instance_id', 'student_examinee_id', 'user_id', 'profiller_id', 'student_no',
     'last_name', 'first_name', 'middle_name', 'extension_name', 'address', 'barangay', 'email', 'contact_no', 'birth_date',
     'birth_place', 'gender', 'civil_status', 'maiden_name', 'height', 'weight', 'religion', 'year_profiled', 'father_name',
     'father_occupation', 'mother_name','mother_occupation', 'guardian', 'relation_guardian', 'guardian_contact_no', 'voter_id',
     'person_to_notify', 'emergency_no', 'status', 'created_at','updated_at', 'deleted_at'];

    public function getStudentWithCondition($conditions = [])
	{
		foreach($conditions as $field => $value)
		{
			$this->where($field, $value);
		}
	    return $this->findAll();
	}

	public function getStudentWithFunction($args = [])
	{
		$db = \Config\Database::connect();

		$str = "SELECT * FROM students WHERE status = '".$args['status']."' LIMIT ". $args['offset'] .','.$args['limit'];
		// print_r($str); die();
		$query = $db->query($str);

		// print_r($query->getResultArray()); die();
	    return $query->getResultArray();
	}

    public function getStudents()
	{
	    return $this->findAll();
	}

    public function addStudents($val_array = [])
	{
      $val_array['profiller_id'] = $_SESSION['uid']; //dito nagwowhoops(need ivalidate para di pumasok ng walang laman)
      $val_array['user_id'] = $_SESSION['uid'];
  		$val_array['created_at'] = (new \DateTime())->format('Y-m-d H:i:s');
    	$val_array['status'] = 'a';
	    return $this->save($val_array);
	}

    public function editStudents($val_array = [], $id)
	{
		$val_array['updated_at'] = (new \DateTime())->format('Y-m-d H:i:s');
		$val_array['status'] = 'a';
		return $this->update($id, $val_array);
	}

    public function deleteStudent($id)
	{
		$val_array['deleted_at'] = (new \DateTime())->format('Y-m-d H:i:s');
		$val_array['status'] = 'd';
		return $this->update($id, $val_array);
	}
}
