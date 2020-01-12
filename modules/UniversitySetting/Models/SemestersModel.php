<?php
namespace Modules\UniversitySetting\Models;

use App\Models\BaseModel;

class SemestersModel extends BaseModel
{
    protected $table = 'semesters';

    protected $allowedFields = ['id', 'name','status', 'created_at','updated_at', 'deleted_at'];

}
