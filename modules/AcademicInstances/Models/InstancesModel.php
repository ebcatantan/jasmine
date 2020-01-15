<?php
namespace Modules\AcademicInstances\Models;

use CodeIgniter\Model;

class InstancesModel extends \CodeIgniter\Model
{
    protected $table = 'academic_years';

    protected $allowedFields = ['ay_start_year', 'ay_end_year', 'function_id', 'description','is_accepting_examinee','status', 'created_at','updated_at', 'deleted_at'];

    public function getInstanceWithCondition($conditions = [])
	{
		foreach($conditions as $field => $value)
		{
			$this->where($field, $value);
		}
	    return $this->findAll();
	}

	public function getInstanceWithFunction($args = [])
	{
		$db = \Config\Database::connect();

		$str = "SELECT * FROM academic_years WHERE status = '".$args['status']."' LIMIT ". $args['offset'] .','.$args['limit'];
		// print_r($str); die();
		$query = $db->query($str);

		// print_r($query->getResultArray()); die();
	    return $query->getResultArray();
	}

    public function getInstances()
	{
	    return $this->findAll();
	}

    public function addInstance($val_array = [])
	{
		$val_array['created_at'] = (new \DateTime())->format('Y-m-d H:i:s');
		$val_array['status'] = 'a';
	    return $this->save($val_array);
	}

    public function editInstance($val_array = [], $id)
	{
		$val_array['updated_at'] = (new \DateTime())->format('Y-m-d H:i:s');
		$val_array['status'] = 'a';
		return $this->update($id, $val_array);
	}

    public function deleteInstance($id)
	{
		$val_array['deleted_at'] = (new \DateTime())->format('Y-m-d H:i:s');
		$val_array['status'] = 'd';
		return $this->update($id, $val_array);
	}
}