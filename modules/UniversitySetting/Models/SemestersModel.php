<?php
namespace Modules\UniversitySetting\Models;

use CodeIgniter\Model;

class SemestersModel extends \CodeIgniter\Model
{
    protected $table = 'semesters';

    protected $allowedFields = ['id', 'name','status', 'created_at','updated_at', 'deleted_at'];

    public function getSemesterWithCondition($conditions = [])
	{
		foreach($conditions as $field => $value)
		{
			$this->where($field, $value);
		}
	    return $this->findAll();
	}

	public function getSemesterWithFunction($args = [])
	{
		$db = \Config\Database::connect();

		$str = "SELECT * FROM semesters WHERE status = '".$args['status']."' LIMIT ". $args['offset'] .','.$args['limit'];
		// print_r($str); die();
		$query = $db->query($str);

		// print_r($query->getResultArray()); die();
	    return $query->getResultArray();
	}

    public function getSemesters()
	{
	    return $this->findAll();
	}

    public function addSemesters($val_array = [])
	{
		$val_array['created_at'] = (new \DateTime())->format('Y-m-d H:i:s');
		$val_array['status'] = 'a';
	    return $this->save($val_array);
	}

    public function editSemesters($val_array = [], $id)
	{
		$val_array['updated_at'] = (new \DateTime())->format('Y-m-d H:i:s');
		$val_array['status'] = 'a';
		return $this->update($id, $val_array);
	}

    public function deleteSemesters($id)
	{
		$val_array['deleted_at'] = (new \DateTime())->format('Y-m-d H:i:s');
		$val_array['status'] = 'd';
		return $this->update($id, $val_array);
	}
}
