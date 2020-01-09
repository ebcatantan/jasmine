<?php
namespace Modules\StudentManagement\Controllers;
           //Module name            //Model name
use Modules\StudentManagement\Models\StudentsModel;
use Modules\UserManagement\Models\PermissionsModel;
use App\Controllers\BaseController;
      //controller name
class Students extends BaseController
{
	//private $permissions;

	public function __construct()
	{
		parent:: __construct();

		$permissions_model = new PermissionsModel();
		$this->permissions = $permissions_model->getPermissionsWithCondition(['status' => 'a']);
	}

    public function index($offset = 0) //list
    {
    	$this->hasPermissionRedirect('list-of-student');

    	$model = new StudentsModel();

    	//kailangan ito para sa pagination
       	$data['all_items'] = $model->getStudentWithCondition(['status'=> 'a']);
       	$data['offset'] = $offset;

        $data['students'] = $model->getStudentWithFunction(['status'=> 'a', 'limit' => PERPAGE, 'offset' =>  $offset]);

        $data['function_title'] = "Student List";
        $data['viewName'] = 'Modules\StudentManagement\Views\students\index';
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

    public function add_student()
    {
    	$this->hasPermissionRedirect('add-student');
    	$permissions_model = new PermissionsModel();

    	$data['permissions'] = $this->permissions;

    	helper(['form', 'url']);
    	$model = new StudentsModel();

    	if(!empty($_POST))
    	{
	    	if (!$this->validate('student'))
		    {
		    	$data['errors'] = \Config\Services::validation()->getErrors();
		        $data['function_title'] = "Adding Student";
		        $data['viewName'] = 'Modules\StudentManagement\Views\students\frmStudent';
		        echo view('App\Views\theme\index', $data);
		    }
		    else
		    {
		        if($model->addStudents($_POST))
		        {
		        	$_SESSION['success'] = 'You have added a new record';
							$this->session->markAsFlashdata('success');
		        	return redirect()->to(base_url('students'));
		        }
		        else
		        {
		        	$_SESSION['error'] = 'You have an error in adding a new record';
					$this->session->markAsFlashdata('error');
		        	return redirect()->to(base_url('students'));
		        }
		    }
    	}
    	else
    	{
					$model->addStudents([]);	
	    		$data['function_title'] = "Adding Student";
	        $data['viewName'] = 'Modules\StudentManagement\Views\students\frmStudent';
	        echo view('App\Views\theme\index', $data);
    	}
    }

    public function edit_student($id)
    {
    	$this->hasPermissionRedirect('edit-student');
    	helper(['form', 'url']);
    	$model = new StudentsModel();
    	$data['rec'] = $model->find($id);

    	$permissions_model = new PermissionsModel();

    	$data['permissions'] = $this->permissions;

    	if(!empty($_POST))
    	{
	    	if (!$this->validate('student'))
		    {
		    	$data['errors'] = \Config\Services::validation()->getErrors();
		        $data['function_title'] = "Edit of Student";
		        $data['viewName'] = 'Modules\StudentManagement\Views\students\frmStudent';
		        echo view('App\Views\theme\index', $data);
		    }
		    else
		    {
		    	if($model->editStudents($_POST, $id))
		        {
		        	//$permissions_model->update_permitted_role($id, $_POST['function_id'], $data['rec']['function_id']);
		        	$_SESSION['success'] = 'You have updated a record';
					$this->session->markAsFlashdata('success');
		        	return redirect()->to(base_url('students'));
		        }
		        else
		        {
		        	$_SESSION['error'] = 'You an error in updating a record';
					$this->session->markAsFlashdata('error');
		        	return redirect()->to( base_url('students'));
		        }
		    }
    	}
    	else
    	{
	    	$data['function_title'] = "Editing of Role";
	        $data['viewName'] = 'Modules\StudentManagement\Views\students\frmStudent';
	        echo view('App\Views\theme\index', $data);
    	}
    }

    public function delete_student($id)
    {
    	$this->hasPermissionRedirect('delete-student');

    	$model = new StudentsModel();
    	$model->deleteStudent($id);
    }

}
