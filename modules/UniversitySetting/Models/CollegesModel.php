<?php
namespace Modules\UniversitySetting\Models;

use CodeIgniter\Model;

class CollegesModel extends \CodeIgniter\Model
{
    protected $table = 'colleges';

    protected $allowedFields = ['college_code','description','other_notes','status', 'created_at','updated_at', 'deleted_at'];

    public function get($fields = [], $tables = [], $conditions = [], $args = [])
    {
      $this->select('colleges.*');
      foreach ($fields as $table => $field) {
        $this->select($field . '.' . $tables);
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

    public function addCollege($val_array = [])
	{

    $val_array['created_at'] = (new \DateTime())->format('Y-m-d H:i:s');
		$val_array['status'] = 'a';
	    return $this->save($val_array);
	}

    public function editCollege($val_array = [], $id)
	{
		$val_array['updated_at'] = (new \DateTime())->format('Y-m-d H:i:s');
		$val_array['status'] = 'a';
		return $this->update($id, $val_array);
	}

    public function deleteCollege($id)
	{
		$val_array['deleted_at'] = (new \DateTime())->format('Y-m-d H:i:s');
		$val_array['status'] = 'd';
		return $this->update($id, $val_array);
	}
}
