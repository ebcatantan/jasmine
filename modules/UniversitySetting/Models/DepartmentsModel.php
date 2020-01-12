<?php
namespace Modules\UniversitySetting\Models;

use App\Models\BaseModel;

class DepartmentsModel extends BaseModel
{

  protected $table = 'departments';

  protected $allowedFields = ['college_id','department_head_id','department_code', 'department_name', 'description','status', 'created_at','updated_at', 'deleted_at'];

}
