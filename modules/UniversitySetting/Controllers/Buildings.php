<?php
namespace Modules\UniversitySetting\Controllers;

use Modules\UserManagement\Models\PermissionsModel;
use Modules\UniversitySetting\Models\BuildingsModel;
use App\Controllers\BaseController;

class Buildings extends BaseController
{
	//private $permissions;

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
     	$data['all_items'] = $model->getBuildingWithCondition(['status'=> 'a']);
     	$data['offset'] = $offset;

      $data['buildings'] = $model->getBuildingWithFunction(['status'=> 'a', 'limit' => PERPAGE, 'offset' =>  $offset]);

      $data['function_title'] = "Buildings List";
      $data['viewName'] = 'Modules\UniversitySetting\Views\buildings\index';
      echo view('App\Views\theme\index', $data);
    }

    public function show_building($id)
	{
		$this->hasPermissionRedirect('show-building');
		$data['permissions'] = $this->permissions;

		$model = new BuildingsModel();

		$data['building'] = $model->getBuildingWithCondition(['id' => $id]);

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
		        if($model->addBuildings($_POST))
		        {
		        	$building_id = $model->insertID();
		        	$permissions_model->update_permitted_building($building_id, $_POST['function_id']);
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
		    	if($model->editBuildings($_POST, $id))
		        {
		        	$permissions_model->update_permitted_building($id, $_POST['function_id'], $data['rec']['function_id']);
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
    	$model->deleteBuilding($id);
    }

}
