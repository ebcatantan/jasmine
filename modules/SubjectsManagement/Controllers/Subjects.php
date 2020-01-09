<?php
namespace Modules\SubjectsManagement\Controllers;

use Modules\SubjectsManagement\Models\SubjectsModel;
use Modules\UserManagement\Models\PermissionsModel;
use App\Controllers\BaseController;

class Subjects extends BaseController
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
    	$this->hasPermissionRedirect('list-of-subject');

    	$model = new SubjectsModel();

    	//kailangan ito para sa pagination
       	$data['all_items'] = $model->getSubjectWithCondition(['status'=> 'a']);
       	$data['offset'] = $offset;

        $data['subjects'] = $model->getSubjectWithFunction(['status'=> 'a', 'limit' => PERPAGE, 'offset' =>  $offset]);

        $data['function_title'] = "Subject List";
        $data['viewName'] = 'Modules\SubjectsManagement\Views\subjects\index';
        echo view('App\Views\theme\index', $data);
    }

    public function show_subject($id)
	{
		$this->hasPermissionRedirect('list-of-subject');
		$data['permissions'] = $this->permissions;

		$model = new SubjectsModel();

		$data['subject'] = $model->getSubjectWithCondition(['id' => $id]);

		$data['function_title'] = "Subject Details";
        $data['viewName'] = 'Modules\SubjectsManagement\Views\subjects\subjectDetails';
        echo view('App\Views\theme\index', $data);
	}
    public function add_subject()
    {
    	$this->hasPermissionRedirect('add-subject');

    	$permissions_model = new PermissionsModel();

    	$data['permissions'] = $this->permissions;

    	helper(['form', 'url']);
    	$model = new SubjectsModel();

    	if(!empty($_POST))
    	{
	    	if (!$this->validate('subject'))
		    {
		    	$data['errors'] = \Config\Services::validation()->getErrors();
		        $data['function_title'] = "Adding Subject";
		        $data['viewName'] = 'Modules\SubjectsManagement\Views\subjects\frmSubject';
		        echo view('App\Views\theme\index', $data);
		    }
		    else
		    {
		        if($model->addSubjects($_POST))
		        {
		        	$subject_id = $model->insertID();
		        	$permissions_model->update_permitted_subject($subject_id, $_POST['function_id']);
		        	$_SESSION['success'] = 'You have added a new record';
					$this->session->markAsFlashdata('success');
		        	return redirect()->to(base_url('subjects'));
		        }
		        else
		        {
		        	$_SESSION['error'] = 'You have an error in adding a new record';
					$this->session->markAsFlashdata('error');
		        	return redirect()->to(base_url('subjects'));
		        }
		    }
    	}
    	else
    	{

	    	$data['function_title'] = "Adding Subject";
	        $data['viewName'] = 'Modules\SubjectsManagement\Views\subjects\frmSubject';
	        echo view('App\Views\theme\index', $data);
    	}
    }

    public function edit_subject($id)
    {
    	$this->hasPermissionRedirect('edit-subject');
    	helper(['form', 'url']);
    	$model = new SubjectsModel();
    	$data['rec'] = $model->find($id);

    	$permissions_model = new PermissionsModel();

    	$data['permissions'] = $this->permissions;

    	if(!empty($_POST))
    	{
	    	if (!$this->validate('subject'))
		    {
		    	$data['errors'] = \Config\Services::validation()->getErrors();
		        $data['function_title'] = "Edit of Subject";
		        $data['viewName'] = 'Modules\SubjectsManagement\Views\subjects\frmSubject';
		        echo view('App\Views\theme\index', $data);
		    }
		    else
		    {
		    	if($model->editSubjects($_POST, $id))
		        {
		        	$permissions_model->update_permitted_subject($id, $_POST['function_id'], $data['rec']['function_id']);
		        	$_SESSION['success'] = 'You have updated a record';
					$this->session->markAsFlashdata('success');
		        	return redirect()->to(base_url('subjects'));
		        }
		        else
		        {
		        	$_SESSION['error'] = 'You an error in updating a record';
					$this->session->markAsFlashdata('error');
		        	return redirect()->to( base_url('subjects'));
		        }
		    }
    	}
    	else
    	{
	    	$data['function_title'] = "Editing of Subject";
	        $data['viewName'] = 'Modules\SubjectsManagement\Views\subjects\frmSubject';
	        echo view('App\Views\theme\index', $data);
    	}
    }

    public function delete_subject($id)
    {
    	$this->hasPermissionRedirect('delete-subject');

    	$model = new SubjectsModel();
    	$model->deleteSubject($id);
    }

}
