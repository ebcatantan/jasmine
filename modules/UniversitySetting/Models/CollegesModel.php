<?php
namespace Modules\UniversitySetting\Models;

use App\Models\BaseModel;

class CollegesModel extends BaseModel
{
    protected $table = 'colleges';

    protected $allowedFields = ['college_code','description','other_notes','status', 'created_at','updated_at', 'deleted_at'];

}
