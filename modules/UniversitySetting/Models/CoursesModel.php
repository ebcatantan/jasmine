<?php
namespace Modules\UniversitySetting\Models;

use CodeIgniter\Model;

class CoursesModel extends \CodeIgniter\Model
{

  protected $table = 'courses';

  protected $allowedFields = ['college_id', 'course_code', 'course_title','degree','major','status', 'created_at','updated_at', 'deleted_at'];

  public function get($fields = [], $tables = [], $conditions = [], $args = [])
  {
    $this->select('courses.*');
    foreach ($fields as $table => $field) {
      $this->select($field . '.' . $table);
    }

    foreach ($tables as $a => $array) {
      foreach ($array as $fk => $id) {
        $this->join($a, $fk .'='. $id);
      }
    }

    foreach($conditions as $field => $value) {
      $this->where($field, $value);
    }

    if (!empty($args)) {
      return $this->findAll($args['limit'], $args['offset']);
    }

    return $this->findAll();
  }

    public function deleteCourse($id)
    {
      $val_array['deleted_at'] = (new \DateTime())->format('Y-m-d H:i:s');
      $val_array['status'] = 'd';
      return $this->update($id, $val_array);
    }

    public function add($val_array = [])
	  {
		  $val_array['created_at'] = (new \DateTime())->format('Y-m-d H:i:s');
		  $val_array['status'] = 'a';
	    return $this->save($val_array);
	  }

    public function edit($val_array = [], $id)
	  {
  		$val_array['updated_at'] = (new \DateTime())->format('Y-m-d H:i:s');
  		$val_array['status'] = 'a';
  		return $this->update($id, $val_array);
	  }

}
