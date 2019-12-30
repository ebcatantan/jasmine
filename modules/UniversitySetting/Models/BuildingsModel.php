<?php
namespace Modules\UniversitySetting\Models;

use CodeIgniter\Model;

class BuildingsModel extends \CodeIgniter\Model
{

  protected $table = 'buildings';

  protected $allowedFields = ['building_code', 'building_name', 'description','status', 'created_at','updated_at', 'deleted_at'];

  public function getBuildingWithCondition($conditions = [])
	{
		foreach($conditions as $field => $value)
		{
			$this->where($field, $value);
		}
	    return $this->findAll();
	}

	public function getBuildingWithFunction($args = [])
	{
		$db = \Config\Database::connect();

		$str = "SELECT * FROM buildings WHERE status = '".$args['status']."' LIMIT ". $args['offset'] .','.$args['limit'];
		// print_r($str); die();
		$query = $db->query($str);

		// print_r($query->getResultArray()); die();
	    return $query->getResultArray();
	}

    public function getBuildings()
	{
	    return $this->findAll();
	}

    public function addBuildings($val_array = [])
	{
		$val_array['created_at'] = (new \DateTime())->format('Y-m-d H:i:s');
		$val_array['status'] = 'a';
	    return $this->save($val_array);
	}

    public function editBuildings($val_array = [], $id)
	{
		$val_array['updated_at'] = (new \DateTime())->format('Y-m-d H:i:s');
		$val_array['status'] = 'a';
		return $this->update($id, $val_array);
	}

    public function deleteBuilding($id)
	{
		$val_array['deleted_at'] = (new \DateTime())->format('Y-m-d H:i:s');
		$val_array['status'] = 'd';
		return $this->update($id, $val_array);
	}
}
