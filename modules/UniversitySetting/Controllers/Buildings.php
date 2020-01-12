<?php
namespace Modules\UniversitySetting\Controllers;

use Modules\UserManagement\Models\PermissionsModel;
use Modules\UniversitySetting\Models\BuildingsModel;
use Modules\UniversitySetting\Models\RoomsModel;
use App\Controllers\BaseController;

class Buildings extends BaseController
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
    	$this->hasPermissionRedirect('list-building');
    	$model = new BuildingsModel();
    	//kailangan ito para sa pagination
			$fields = [];
			$tables = [];
			$conditions = ['status' => 'a'];

     	$data['all_items'] = $model->get($conditions);
     	$data['offset'] = $offset;
			if ($_POST['search_something'] != '') {
				$_SESSION['search_input'] = 'Result for: ' . $_POST['search_something'];
				$this->session->markAsFlashdata('search_input');
				$data['buildings'] = $model->get($conditions,$fields,$tables, ['offset' => $offset, 'limit' => PERPAGE], ['building_code' => $_POST['search_something']]);
			}
			else {
				unset($_SESSION['search_input']);
				$data['buildings'] = $model->get($conditions,$fields,$tables, ['offset' => $offset, 'limit' => PERPAGE]);
			}
      $data['function_title'] = "Buildings List";
      $data['viewName'] = 'Modules\UniversitySetting\Views\buildings\index';
      echo view('App\Views\theme\index', $data);
    }

    public function show_building($id)
		{
			$this->hasPermissionRedirect('show-building');
			$data['permissions'] = $this->permissions;

			$model = new BuildingsModel();

			$data['building'] = $model->get(['id' => $id]);
			$data['function_title'] = "Building Details";
	    $data['viewName'] = 'Modules\UniversitySetting\Views\buildings\buildingDetails';
	  	echo view('App\Views\theme\index', $data);
		}

    public function add_building()
    {
    	$this->hasPermissionRedirect('add-building');
    	$permissions_model = new PermissionsModel();

    	$data['permissions'] = $this->permissions;

    	helper(['form', 'url']);
    	$model = new BuildingsModel();

    	if(!empty($_POST))
    	{
	    	if (!$this->validate('building'))
		    {
		    		$data['errors'] = \Config\Services::validation()->getErrors();
		        $data['function_title'] = "Adding Building";
		        $data['viewName'] = 'Modules\UniversitySetting\Views\buildings\frmBuilding';
		        echo view('App\Views\theme\index', $data);
		    }
		    else
		    {
		        if($model->add($_POST))
		        {
		        	$_SESSION['success'] = 'You have added a new record';
							$this->session->markAsFlashdata('success');
		        	return redirect()->to(base_url('buildings'));
		        }
		        else
		        {
		        	$_SESSION['error'] = 'You have an error in adding a new record';
							$this->session->markAsFlashdata('error');
		        	return redirect()->to(base_url('buildings'));
		        }
		    }
    	}
    	else
    	{
	    	$data['function_title'] = "Adding Building";
	      $data['viewName'] = 'Modules\UniversitySetting\Views\buildings\frmBuilding';
	      echo view('App\Views\theme\index', $data);
    	}
    }

    public function edit_building($id)
    {
    	$this->hasPermissionRedirect('edit-building');
    	helper(['form', 'url']);
    	$model = new BuildingsModel();
    	$data['rec'] = $model->find($id);
    	$permissions_model = new PermissionsModel();

    	$data['permissions'] = $this->permissions;

    	if(!empty($_POST))
    	{
	    	if (!$this->validate('building'))
		    {
		    	$data['errors'] = \Config\Services::validation()->getErrors();
		      $data['function_title'] = "Edit of Building";
		      $data['viewName'] = 'Modules\UniversitySetting\Views\buildings\frmBuilding';
		      echo view('App\Views\theme\index', $data);
		    }
		    else
		    {
		    	if($model->edit($_POST, $id))
		        {
		        	$_SESSION['success'] = 'You have updated a record';
							$this->session->markAsFlashdata('success');
		        	return redirect()->to(base_url('buildings'));
		        }
		        else
		        {
		        	$_SESSION['error'] = 'You an errot in updating a record';
							$this->session->markAsFlashdata('error');
		        	return redirect()->to( base_url('buildings'));
		        }
		    }
    	}
    	else
    	{
	    		$data['function_title'] = "Editing of Building";
	        $data['viewName'] = 'Modules\UniversitySetting\Views\buildings\frmBuilding';
	        echo view('App\Views\theme\index', $data);
    	}
    }

    public function delete_building($id)
    {
    	$this->hasPermissionRedirect('delete-building');
    	$model = new BuildingsModel();
			$room_model = new RoomsModel();
			$room_model->erase($id, 'building_id');
    	$model->erase($id);
    }

}
