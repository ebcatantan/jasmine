<?php
namespace Modules\UniversitySetting\Models;

use App\Models\BaseModel;

class RoomsModel extends BaseModel
{

  protected $table = 'rooms';

  protected $allowedFields = ['building_id', 'room_code', 'room_name','description','status', 'created_at','updated_at', 'deleted_at'];

}
