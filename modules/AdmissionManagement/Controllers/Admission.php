<?php
namespace Modules\AdmissionManagement\Controllers;

use Modules\AdmissionManagement\Models\AdmissionModel;
use Modules\UserManagement\Models\PermissionsModel;
use App\Controllers\BaseController;

class Admission extends BaseController
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
    	$this->hasPermissionRedirect('list-of-admission');

			 // die("here");
    	$model = new AdmissionModel();

    	//kailangan ito para sa pagination
       	$data['all_items'] = $model->getAdmissionWithCondition(['status'=> 'a']);
       	$data['offset'] = $offset;

        $data['admissions'] = $model->getAdmissionWithFunction(['status'=> 'a', 'limit' => PERPAGE, 'offset' =>  $offset]);

        $data['function_title'] = "admissions List";
        $data['viewName'] = 'Modules\AdmissionManagement\Views\admissions\index';
        echo view('App\Views\theme\index', $data);
    }

    public function show_admission($id)
	{
		$this->hasPermissionRedirect('show-admission');
		$data['permissions'] = $this->permissions;

		$model = new AdmissionModel();

		$data['admission'] = $model->getAdmissionWithCondition(['id' => $id]);

		$data['function_title'] = "admission Details";
        $data['viewName'] = 'Modules\AdmissionManagement\Views\admissions\admissionDetails';
        echo view('App\Views\theme\index', $data);
	}

    public function add_admission()
    {
    	$this->hasPermissionRedirect('add-admission');

    	$permissions_model = new PermissionsModel();
    	$data['permissions'] = $this->permissions;

    	helper(['form', 'url']);
    	$model = new AdmissionModel();

			// die("here");
    	if(!empty($_POST))
    	{
	    	if (!$this->validate('admissions'))
		    {
		    	$data['errors'] = \Config\Services::validation()->getErrors();
		        $data['function_title'] = "Adding admission";
		        $data['viewName'] = 'Modules\AdmissionManagement\Views\admissions\frmadmission';
		        echo view('App\Views\theme\index', $data);
		    }
		    else
		    {
		        if($model->addAdmissions($_POST))
		        {
		        	$_SESSION['success'] = 'You have added a new record';
							$this->session->markAsFlashdata('success');
		        	return redirect()->to(base_url('student-examinees'));
		        }
		        else
		        {
		        	$_SESSION['error'] = 'You have an error in adding a new record';
					$this->session->markAsFlashdata('error');
		        	return redirect()->to(base_url('student-examinees'));
		        }
		    }
    	}
    	else
    	{

	    	$data['function_title'] = "Adding admission";
	        $data['viewName'] = 'Modules\AdmissionManagement\Views\admissions\frmadmission';
	        echo view('App\Views\theme\index', $data);
    	}
    }

    public function edit_admissions($id)
    {
    	$this->hasPermissionRedirect('edit-admission');
    	helper(['form', 'url']);
    	$model = new AdmissionModel();
    	$data['rec'] = $model->find($id);

    	$permissions_model = new PermissionsModel();

    	$data['permissions'] = $this->permissions;
    	if(!empty($_POST))
    	{
	    	if (!$this->validate('admissions'))
		    {
		    		$data['errors'] = \Config\Services::validation()->getErrors();
		        $data['function_title'] = "Edit of admission";
		        $data['viewName'] = 'Modules\AdmissionManagement\Views\admissions\frmadmission';
		        echo view('App\Views\theme\index', $data);
		    }
		    else
		    {
		    	if($model->editAdmissions($_POST, $id))
		        {
		        	$_SESSION['success'] = 'You have updated a record';
							$this->session->markAsFlashdata('success');
			        	return redirect()->to(base_url('student-examinees'));
		        }
		        else
		        {
		        	$_SESSION['error'] = 'You an errot in updating a record';
					$this->session->markAsFlashdata('error');
		        	return redirect()->to( base_url('student-examinees'));
		        }
		    }
    	}
    	else
    	{
	    	$data['function_title'] = "Editing of admission";
	        $data['viewName'] = 'Modules\AdmissionManagement\Views\admissions\frmadmission';
	        echo view('App\Views\theme\index', $data);
    	}
    }

    public function delete_admission($id)
    {
    	$this->hasPermissionRedirect('delete-admission');

    	$model = new AdmissionModel();
    	$model->deleteAdmission($id);
    }

}
