<?php
namespace Modules\UniversitySettings\Models;

use CodeIgniter\Model;

class SubjectsModel extends \CodeIgniter\Model
{
    protected $table = 'subjects';

    protected $allowedFields = ['subject_code', 'subject_title', 'description','units','lecture_hour','lab_hour','status', 'created_at','updated_at', 'deleted_at'];

    public function getSubjectWithCondition($conditions = [])
	{
		foreach($conditions as $field => $value)
		{
			$this->where($field, $value);
		}
	    return $this->findAll();
	}

	public function getSubjectWithFunction($args = [])
	{
		$db = \Config\Database::connect();

    $str = "SELECT * FROM subjects WHERE status = '".$args['status']."' LIMIT ". $args['offset'] .','.$args['limit'];
		// print_r($str); die();
		$query = $db->query($str);

		// print_r($query->getResultArray()); die();
	    return $query->getResultArray();
	}

    public function getSubjects()
	{
	    return $this->findAll();
	}

    public function addSubjects($val_array = [])
	{
		$val_array['created_at'] = (new \DateTime())->format('Y-m-d H:i:s');
		$val_array['status'] = 'a';
	    return $this->save($val_array);
	}

    public function editSubjects($val_array = [], $id)
	{
		$val_array['updated_at'] = (new \DateTime())->format('Y-m-d H:i:s');
		$val_array['status'] = 'a';
		return $this->update($id, $val_array);
	}

    public function deleteSubject($id)
	{
		$val_array['deleted_at'] = (new \DateTime())->format('Y-m-d H:i:s');
		$val_array['status'] = 'd';
		return $this->update($id, $val_array);
	}
}
