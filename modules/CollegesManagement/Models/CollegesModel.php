<?php
namespace Modules\CollegesManagement\Models;

use CodeIgniter\Model;

class CollegesModel extends \CodeIgniter\Model
{
    protected $table = 'colleges';

    protected $allowedFields = ['college_code','description','other_notes','status', 'created_at','updated_at', 'deleted_at'];

    public function getCollegeWithCondition($conditions = [])
	{
		foreach($conditions as $field => $value)
		{
			$this->where($field, $value);
		}
	    return $this->findAll();
	}

	public function getCollegeWithFunction($args = [])
	{
		$db = \Config\Database::connect();

    $str = "SELECT *  FROM colleges WHERE status = '".$args['status']."' LIMIT ". $args['offset'] .','.$args['limit'];
  // print_r($str); die();
  $query = $db->query($str);


		// print_r($query->getResultArray()); die();
	    return $query->getResultArray();
	}

    public function getColleges()
	{
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
