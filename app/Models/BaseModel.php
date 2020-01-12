<?php
namespace App\Models;

use CodeIgniter\Model;

class BaseModel extends Model
{

  public function get($conditions = [], $fields = [], $tables = [], $args = [])
  {
    $this->select($this->table.'.*');
    foreach ($fields as $table => $array) {
      foreach ($array as $field => $name) {
        $this->select($table . '.' . $field . ' ' . $name);
      }
    }

    foreach ($tables as $a => $array) {
      foreach ($array as $fk => $id) {
        $this->join($a, $fk .'='. $id, 'left');
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

  public function erase($id, $field = '')
  {
    $val_array['deleted_at'] = (new \DateTime())->format('Y-m-d H:i:s');
    $val_array['status'] = 'd';

    if ($field != '') {
      $this->set($val_array);
      $this->where($field, $id);
      $this->update();
      return;
    }

    return $this->update($id, $val_array);
  }
}
