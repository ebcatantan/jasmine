<?php
namespace Modules\UniversitySetting\Models;

use App\Models\BaseModel;

class CoursesModel extends BaseModel
{

  protected $table = 'courses';

  protected $allowedFields = ['college_id', 'course_code', 'course_title','degree','major','status', 'created_at','updated_at', 'deleted_at'];

}
