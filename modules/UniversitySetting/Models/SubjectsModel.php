<?php
namespace Modules\UniversitySetting\Models;

use App\Models\BaseModel;

class SubjectsModel extends BaseModel
{
    protected $table = 'subjects';

    protected $allowedFields = ['subject_code', 'subject_title', 'description','units','lecture_hour','lab_hour','status', 'created_at','updated_at', 'deleted_at'];

}
