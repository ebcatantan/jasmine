<?php
namespace Modules\AdmissionManagement\Models;

use CodeIgniter\Model;

class AdmissionModel extends \CodeIgniter\Model
{
    protected $table = 'student_examinees';

    protected $allowedFields = ['first_course_id','second_course_id','academic_year_id','academic_year_id	','examinee_no','exam_schedule_id','last_name','first_name','middle_name','gender','extension_name','address','barangay','email','contact_no','birth_date','birth_place','birth_place','civil_status','maiden_name','height','weight','religion','last_school_attended','last_school_address','examination_score','isProfiled','status','created_at','updated_at','deleted_at'];

    public function getAdmissionWithCondition($conditions = [])
	{
		foreach($conditions as $field => $value)
		{
			$this->where($field, $value);
		}
	    return $this->findAll();
	}

	public function getAdmissionWithFunction($args = [])
	{
		$db = \Config\Database::connect();

		$str = "SELECT * FROM student_examinees WHERE status = '".$args['status']."' LIMIT ". $args['offset'] .','.$args['limit'];
		// print_r($str);die();
		$query = $db->query($str);

		// print_r($query->getResultArray()); die();
	    return $query->getResultArray();
	}

    public function getAdmissions()
	{
	    return $this->findAll();
	}

    public function addAdmissions($val_array = [])
	{
		$val_array['created_at'] = (new \DateTime())->format('Y-m-d H:i:s');
		$val_array['status'] = 'a';

	    return $this->save($val_array);
	}

    public function editAdmissions($val_array = [], $id)
	{
		$val_array['updated_at'] = (new \DateTime())->format('Y-m-d H:i:s');
		$val_array['status'] = 'a';
		return $this->update($id, $val_array);
	}

    public function deleteAdmission($id)
	{
		$val_array['deleted_at'] = (new \DateTime())->format('Y-m-d H:i:s');
		$val_array['status'] = 'd';
		return $this->update($id, $val_array);
	}
}
