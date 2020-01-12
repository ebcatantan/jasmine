<?php
namespace Modules\UniversitySetting\Models;


use App\Models\BaseModel;



class BuildingsModel extends BaseModel
{

  protected $table = 'buildings';

  protected $allowedFields = ['building_code', 'building_name', 'description','status', 'created_at','updated_at', 'deleted_at'];

}
