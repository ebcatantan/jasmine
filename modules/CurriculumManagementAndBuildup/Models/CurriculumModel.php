<?php
namespace Modules\CurriculumManagementAndBuildup\Models;

use CodeIgniter\Model;

class CurriculumModel extends \CodeIgniter\Model
{
    protected $table = 'curriculums';

    protected $allowedFields = ['curriculum_code', 'title', 'is_finalized','is_active_curriculum', 'status'];

    public function getCurriculumWithCondition($conditions = [])
      	{
      		foreach($conditions as $field => $value)
      		{
      			$this->where($field, $value);
      		}
      	    return $this->findAll();
      	}

	public function getCurriculumWithFunction($args = [])
	{
		$db = \Config\Database::connect();

		$str = "SELECT a.*, b.ay_start_year, c.course_code FROM curriculums a LEFT JOIN academic_years b ON a.academic_year_id = b.id LEFT JOIN courses c ON b.id = c.course_code WHERE a.status = '".$args['status']."' LIMIT ". $args['offset'] .','.$args['limit'];


    // print_r($str); die();
		$query = $db->query($str);

		// print_r($query->getResultArray()); die();
	    return $query->getResultArray();
	}

    public function getCurriculum()
	{
	    return $this->findAll();
	}
  //
    public function addCurriculum($val_array = [])
	{
		$val_array['created_at'] = (new \DateTime())->format('Y-m-d H:i:s');
		$val_array['status'] = 'a';
	    return $this->save($val_array);
	}

     public function editCurriculum($val_array = [], $id)
	 {
	 	$val_array['updated_at'] = (new \DateTime())->format('Y-m-d H:i:s');
	 	$val_array['status'] = 'a';
	 	return $this->update($id, $val_array);
	 }

     public function deleteCurriculum($id)
	 {
	 	$val_array['deleted_at'] = (new \DateTime())->format('Y-m-d H:i:s');
	 	$val_array['status'] = 'd';
	 	return $this->update($id, $val_array);
	 }
}
