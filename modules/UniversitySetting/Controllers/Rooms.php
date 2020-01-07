<?php
namespace Modules\UniversitySetting\Controllers;

use Modules\UserManagement\Models\PermissionsModel;
use Modules\UniversitySetting\Models\RoomsModel;
use App\Controllers\BaseController;
use Modules\UniversitySetting\Models\BuildingsModel;
class Rooms extends BaseController
{
	//private $permissions;
	// get($fields = [], $tables = [], $conditions = [], $args = [])
	public function __construct()
	{
		parent:: __construct();
		$permissions_model = new PermissionsModel();

		$this->permissions = $permissions_model->getPermissionsWithCondition(['status' => 'a']);
	}

    public function index($offset = 0)
    {
    	$this->hasPermissionRedirect('list-room');

    	$model = new RoomsModel();
    	//kailangan ito para sa pagination
     	$data['all_items'] = $model->get([],[],['status'=> 'a'],[]);
     	$data['offset'] = $offset;
			$fields = [
				'building_name' => 'buildings'
			];
			$tables = [
				'buildings' => [
					'rooms.building_id' => 'buildings.id'
				]
			];
			$conditions = [];
      $data['rooms'] = $model->get($fields,$tables,['rooms.status'=> 'a'], ['offset' => $offset, 'limit' => PERPAGE]);
      $data['function_title'] = "Room List";
      $data['viewName'] = 'Modules\UniversitySetting\Views\rooms\index';
      echo view('App\Views\theme\index', $data);
    }

    public function show_room($id)
		{
			$this->hasPermissionRedirect('show-room');
			$data['permissions'] = $this->permissions;

			$model = new RoomsModel();

			$data['room'] = $model->get([],[],['id' => $id],[]);
			$data['function_title'] = "Room Details";
	    $data['viewName'] = 'Modules\UniversitySetting\Views\rooms\roomDetails';
	  	echo view('App\Views\theme\index', $data);
		}

    public function add_room()
    {
    	$this->hasPermissionRedirect('add-room');
			$building_model = new BuildingsModel();
			$data['buildings'] = $building_model->get([],[],['status' => 'a'],[]);

    	$permissions_model = new PermissionsModel();

    	$data['permissions'] = $this->permissions;

    	helper(['form', 'url']);
    	$model = new RoomsModel();

    	if(!empty($_POST))
    	{
	    	if (!$this->validate('room'))
		    {
		    		$data['errors'] = \Config\Services::validation()->getErrors();
		        $data['function_title'] = "Adding Room";
		        $data['viewName'] = 'Modules\UniversitySetting\Views\rooms\frmRoom';
		        echo view('App\Views\theme\index', $data);
		    }
		    else
		    {
		        if($model->add($_POST))
		        {
		        	$_SESSION['success'] = 'You have added a new record';
							$this->session->markAsFlashdata('success');
		        	return redirect()->to(base_url('rooms'));
		        }
		        else
		        {
		        	$_SESSION['error'] = 'You have an error in adding a new record';
							$this->session->markAsFlashdata('error');
		        	return redirect()->to(base_url('rooms'));
		        }
		    }
    	}
    	else
    	{
	    	$data['function_title'] = "Adding Room";
	      $data['viewName'] = 'Modules\UniversitySetting\Views\rooms\frmRoom';
	      echo view('App\Views\theme\index', $data);
    	}
    }

    public function edit_room($id)
    {
    	$this->hasPermissionRedirect('edit-room');
    	helper(['form', 'url']);
    	$model = new RoomsModel();
    	$data['rec'] = $model->find($id);
			$building_model = new BuildingsModel();
			$data['buildings'] = $building_model->get([],[],['status' => 'a'],[]);
    	$permissions_model = new PermissionsModel();

    	$data['permissions'] = $this->permissions;

    	if(!empty($_POST))
    	{
	    	if (!$this->validate('room'))
		    {
		    	$data['errors'] = \Config\Services::validation()->getErrors();
		      $data['function_title'] = "Edit of Room";
		      $data['viewName'] = 'Modules\UniversitySetting\Views\rooms\frmRoom';
		      echo view('App\Views\theme\index', $data);
		    }
		    else
		    {
		    	if($model->edit($_POST, $id))
		        {
		        	$permissions_model->update_permitted_room($id, $_POST['function_id'], $data['rec']['function_id']);
		        	$_SESSION['success'] = 'You have updated a record';
							$this->session->markAsFlashdata('success');
		        	return redirect()->to(base_url('rooms'));
		        }
		        else
		        {
		        	$_SESSION['error'] = 'You an errot in updating a record';
							$this->session->markAsFlashdata('error');
		        	return redirect()->to( base_url('rooms'));
		        }
		    }
    	}
    	else
    	{
	    		$data['function_title'] = "Editing of Room";
	        $data['viewName'] = 'Modules\UniversitySetting\Views\rooms\frmRoom';
	        echo view('App\Views\theme\index', $data);
    	}
    }

    public function delete_room($id)
    {
    	$this->hasPermissionRedirect('delete-room');
    	$model = new RoomsModel();
    	$model->deleteRoom($id);
    }

}
