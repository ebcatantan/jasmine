<?php
namespace Modules\UniversitySetting\Controllers;

use Modules\UserManagement\Models\PermissionsModel;
use Modules\UniversitySetting\Models\CoursesModel;
use Modules\UniversitySetting\Models\CollegesModel;
use App\Controllers\BaseController;

class Courses extends BaseController
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
    	$this->hasPermissionRedirect('list-course');

    	$model = new CoursesModel();
    	//kailangan ito para sa pagination
     	$data['all_items'] = $model->get(['status'=> 'a']);
     	$data['offset'] = $offset;
			$fields = [
				 'colleges' => [
					 'description' => ''
				 ]
			];
			$tables = [
				'colleges' => [
					'courses.college_id' => 'colleges.id'
				]
			];
			$conditions = [
				'courses.status' => 'a'
			];
      $data['courses'] = $model->get($conditions,$fields,$tables,['offset' => $offset, 'limit' => PERPAGE]);
      $data['function_title'] = "Courses List";
      $data['viewName'] = 'Modules\UniversitySetting\Views\courses\index';
      echo view('App\Views\theme\index', $data);
    }

    public function show_course($id)
		{
			$this->hasPermissionRedirect('show-course');
			$data['permissions'] = $this->permissions;

			$model = new CoursesModel();
			$fields = [
				'colleges' => [
					'description' => ''
				]
			];
			$tables = [
				'colleges' => [
					'courses.college_id' => 'colleges.id'
				]
			];
			$conditions = [
				'courses.id' => $id
			];
			$data['course'] = $model->get($conditions,$fields,$tables);
			$data['function_title'] = "Course Details";
	    $data['viewName'] = 'Modules\UniversitySetting\Views\courses\courseDetails';
	  	echo view('App\Views\theme\index', $data);
		}

    public function add_course()
    {
    	$this->hasPermissionRedirect('add-course');

    	$permissions_model = new PermissionsModel();
			$colleges_model = new CollegesModel();
			$data['colleges'] = $colleges_model->get(['status' => 'a']);
    	$data['permissions'] = $this->permissions;

    	helper(['form', 'url']);
    	$model = new CoursesModel();

    	if(!empty($_POST))
    	{
	    	if (!$this->validate('course'))
		    {
		    		$data['errors'] = \Config\Services::validation()->getErrors();
		        $data['function_title'] = "Adding Course";
		        $data['viewName'] = 'Modules\UniversitySetting\Views\courses\frmCourse';
		        echo view('App\Views\theme\index', $data);
		    }
		    else
		    {
		        if($model->add($_POST))
		        {
		        	$_SESSION['success'] = 'You have added a new record';
							$this->session->markAsFlashdata('success');
		        	return redirect()->to(base_url('courses'));
		        }
		        else
		        {
		        	$_SESSION['error'] = 'You have an error in adding a new record';
							$this->session->markAsFlashdata('error');
		        	return redirect()->to(base_url('courses'));
		        }
		    }
    	}
    	else
    	{
	    	$data['function_title'] = "Adding Course";
	      $data['viewName'] = 'Modules\UniversitySetting\Views\courses\frmCourse';
	      echo view('App\Views\theme\index', $data);
    	}
    }

    public function edit_course($id)
    {
    	$this->hasPermissionRedirect('edit-course');
    	helper(['form', 'url']);
    	$model = new CoursesModel();
    	$data['rec'] = $model->find($id);
    	$permissions_model = new PermissionsModel();
			$colleges_model = new CollegesModel();
			$data['colleges'] = $colleges_model->get(['status' => 'a']);
    	$data['permissions'] = $this->permissions;

    	if(!empty($_POST))
    	{
	    	if (!$this->validate('course'))
		    {
		    	$data['errors'] = \Config\Services::validation()->getErrors();
		      $data['function_title'] = "Edit of Course";
		      $data['viewName'] = 'Modules\UniversitySetting\Views\courses\frmCourse';
		      echo view('App\Views\theme\index', $data);
		    }
		    else
		    {
		    	if($model->edit($_POST, $id))
		        {
		        	$_SESSION['success'] = 'You have updated a record';
							$this->session->markAsFlashdata('success');
		        	return redirect()->to(base_url('courses'));
		        }
		        else
		        {
		        	$_SESSION['error'] = 'You an errot in updating a record';
							$this->session->markAsFlashdata('error');
		        	return redirect()->to( base_url('courses'));
		        }
		    }
    	}
    	else
    	{
	    		$data['function_title'] = "Editing of Course";
	        $data['viewName'] = 'Modules\UniversitySetting\Views\courses\frmCourse';
	        echo view('App\Views\theme\index', $data);
    	}
    }

    public function delete_course($id)
    {
    	$this->hasPermissionRedirect('delete-course');
    	$model = new CoursesModel();
    	$model->erase($id);
    }

}
