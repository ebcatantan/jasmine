<?php
namespace Modules\AcademicInstances\Controllers;

use Modules\AcademicInstances\Models\InstancesModel;
use Modules\UserManagement\Models\PermissionsModel;
use App\Controllers\BaseController;

class Instances extends BaseController
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
    	$this->hasPermissionRedirect('list-of-instance');

    	$model = new InstancesModel();

    	//kailangan ito para sa pagination
       	$data['all_items'] = $model->getInstanceWithCondition(['status'=> 'a']);
       	$data['offset'] = $offset;

        $data['academic_years'] = $model->getInstanceWithFunction(['status'=> 'a', 'limit' => PERPAGE, 'offset' =>  $offset]);

        $data['function_title'] = "Academic Year Instances List";
        $data['viewName'] = 'Modules\AcademicInstances\Views\instances\index';
        echo view('App\Views\theme\index', $data);
    }

    public function show_role($id)
	{
		$this->hasPermissionRedirect('show-role-details');
		$data['permissions'] = $this->permissions;

		$model = new RolesModel();

		$data['role'] = $model->getRoleWithCondition(['id' => $id]);

		$data['function_title'] = "Role Details";
        $data['viewName'] = 'Modules\UserManagement\Views\roles\roleDetails';
        echo view('App\Views\theme\index', $data);
	}

    public function add_instance()
    {
    	$this->hasPermissionRedirect('add-instance');

    	$permissions_model = new PermissionsModel();

    	$data['permissions'] = $this->permissions;

    	helper(['form', 'url']);
    	$model = new InstancesModel();

    	if(!empty($_POST))
    	{
	    	if (!$this->validate('instance'))
		    {
		    	$data['errors'] = \Config\Services::validation()->getErrors();
		        $data['function_title'] = "Adding Academic Year";
		        $data['viewName'] = 'Modules\AcademicInstances\Views\instances\frmInstance';
		        echo view('App\Views\theme\index', $data);
		    }
		    else
		    {
		        if($model->addInstance($_POST))
		        {
		        	$role_id = $model->insertID();
		        	//$permissions_model->update_permitted_role($intance_id, $_POST['function_id']);
		        	$_SESSION['success'] = 'You have added a new record';
					$this->session->markAsFlashdata('success');
		        	return redirect()->to(base_url('academic-years'));
		        }
		        else
		        {
		        	$_SESSION['error'] = 'You have an error in adding a new record';
					$this->session->markAsFlashdata('error');
		        	return redirect()->to(base_url('academic-years'));
		        }
		    }
    	}
    	else
    	{

	    	$data['function_title'] = "Adding Academic Year";
	        $data['viewName'] = 'Modules\AcademicInstances\Views\instances\frmInstance';
	        echo view('App\Views\theme\index', $data);
    	}
    }

    public function edit_instance($id)
    {
    	$this->hasPermissionRedirect('edit-instance');
    	helper(['form', 'url']);
    	$model = new InstancesModel();
    	$data['rec'] = $model->find($id);

    	$permissions_model = new PermissionsModel();

    	$data['permissions'] = $this->permissions;

    	if(!empty($_POST))
    	{
	    	if (!$this->validate('instance'))
		    {
		    	$data['errors'] = \Config\Services::validation()->getErrors();
		        $data['function_title'] = "Edit of Academic Year";
		        $data['viewName'] = 'Modules\AcademicInstances\Views\instances\frmInstance';
		        echo view('App\Views\theme\index', $data);
		    }
		    else
		    {
		    	if($model->editInstance($_POST, $id))
		        {
		        	//$permissions_model->update_permitted_role($id, $_POST['function_id'], $data['rec']['function_id']);
		        	$_SESSION['success'] = 'You have updated a record';
					$this->session->markAsFlashdata('success');
		        	return redirect()->to(base_url('academic-years'));
		        }
		        else
		        {
		        	$_SESSION['error'] = 'You an error in updating a record';
					$this->session->markAsFlashdata('error');
		        	return redirect()->to( base_url('academic-years'));
		        }
		    }
    	}
    	else
    	{
	    	$data['function_title'] = "Editing of Academic Year";
	        $data['viewName'] = 'Modules\AcademicInstances\Views\instances\frmInstance';
	        echo view('App\Views\theme\index', $data);
    	}
    }

    public function delete_instance($id)
    {
    	$this->hasPermissionRedirect('delete-instance');
    	$model = new InstancesModel();
    	$model->deleteInstance($id);
    }
}
