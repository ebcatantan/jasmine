<?php
namespace Modules\Section\Models;

use CodeIgniter\Model;

class SectionModel extends \CodeIgniter\Model
{
    protected $table = 'sections';
  //  protected $forge = 'curriculum_subjects';

    protected $allowedFields = ['curriculum_id', 'course_id', 'academic_year_instance_id','section_code', 'section_name','shift','max_no_student','section_status','status','created_at','updated_at', 'deleted_at'];

  //  $forge->addForeignKey('curriculum_id');

    public function getSectionWithCondition($conditions = [])
	{
		foreach($conditions as $field => $value)
		{
			$this->where($field, $value);
		}
	    return $this->findAll();
	}

	public function getSectionWithFunction($args = [])
	{
		$db = \Config\Database::connect();

		$str = "SELECT * FROM sections WHERE status = '".$args['status']."' LIMIT ". $args['offset'] .','.$args['limit'];
		// $str = "SELECT * FROM curriculum_subjects WHERE status = '".$args['status']."' LIMIT ". $args['offset'] .','.$args['limit'];
		// $str = "SELECT * FROM curriculums WHERE status = '".$args['status']."' LIMIT ". $args['offset'] .','.$args['limit'];
		// $str = "SELECT * FROM subject_offerings WHERE status = '".$args['status']."' LIMIT ". $args['offset'] .','.$args['limit'];
		// print_r($str); die();
		$query = $db->query($str);

		// print_r($query->getResultArray()); die();
	    return $query->getResultArray();
	}

  public function getSection()
	{
	    return $this->findAll();
	}

  public function addSection($val_array = [])
	{
		$val_array['created_at'] = (new \DateTime())->format('Y-m-d H:i:s');
		$val_array['status'] = 'a';
	    return $this->save($val_array);
	}

    public function editSection($val_array = [], $id)
	{
		$val_array['updated_at'] = (new \DateTime())->format('Y-m-d H:i:s');
		$val_array['status'] = 'a';
		return $this->update($id, $val_array);
	}

    public function deleteSection($id)
	{
		$val_array['deleted_at'] = (new \DateTime())->format('Y-m-d H:i:s');
		$val_array['status'] = 'd';
		return $this->update($id, $val_array);
	}
}
