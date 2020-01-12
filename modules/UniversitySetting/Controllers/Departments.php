<?php
namespace Modules\UniversitySetting\Controllers;

use Modules\UserManagement\Models\PermissionsModel;
use Modules\UserManagement\Models\UsersModel;
use Modules\UniversitySetting\Models\DepartmentsModel;
use Modules\UniversitySetting\Models\CollegesModel;
use App\Controllers\BaseController;

class Departments extends BaseController
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
    	$this->hasPermissionRedirect('list-department');
    	$model = new DepartmentsModel();
    	//kailangan ito para sa pagination
     	$data['all_items'] = $model->get(['status'=> 'a']);
     	$data['offset'] = $offset;

			$fields = [
				'colleges' => [
					'college_code' => '',
					'description' => 'college_description'
				],
				'users' => [
					'firstname' => '',
					'lastname' => ''
				]
			];
			$tables = [
				'colleges' => [
					'departments.college_id' => 'colleges.id',
				],
				'users' => [
					'departments.department_head_id' => 'users.id'
				]
			];
			$conditions = [
				'departments.status'=> 'a'
			];
			if ($_POST['search_something'] != '') {
				$_SESSION['search_input'] = 'Result for: ' . $_POST['search_something'];
				$this->session->markAsFlashdata('search_input');
				$data['departments'] = $model->get($conditions,$fields,$tables, ['offset' => $offset, 'limit' => PERPAGE], ['department_name' => $_POST['search_something']]);
			}
			else {
				unset($_SESSION['search_input']);
				$data['departments' ] = $model->get($conditions,$fields,$tables,['offset' => $offset, 'limit' => PERPAGE]);
			}
      $data['function_title'] = "Departments List";
      $data['viewName'] = 'Modules\UniversitySetting\Views\departments\index';
      echo view('App\Views\theme\index', $data);
    }

    public function show_department($id)
		{
			$this->hasPermissionRedirect('show-department');
			$data['permissions'] = $this->permissions;

			$model = new DepartmentsModel();

			$fields = [
				'colleges' => [
					'college_code' => '',
					'description' => 'college_description'
				],
				'users' => [
					'firstname' => '',
					'lastname' => ''
				]
			];
			$tables = [
				'colleges' => [
					'departments.college_id' => 'colleges.id',
				],
				'users' => [
					'departments.department_head_id' => 'users.id'
				]
			];
			$conditions = [
				'departments.id' => $id
			];
      $data['department'] = $model->get($conditions, $fields,$tables);
			$data['function_title'] = "Department Details";
	    $data['viewName'] = 'Modules\UniversitySetting\Views\departments\departmentDetails';
	  	echo view('App\Views\theme\index', $data);
		}

    public function add_department()
    {
    	$this->hasPermissionRedirect('add-department');

    	$permissions_model = new PermissionsModel();
			$users_model = new UsersModel();
			$colleges_model = new CollegesModel();

			$data['users'] = $users_model->getUserWithCondition(['status' => 'a']);
			$data['colleges'] = $colleges_model->get(['status' => 'a']);

    	$data['permissions'] = $this->permissions;

    	helper(['form', 'url']);
    	$model = new DepartmentsModel();

    	if(!empty($_POST))
    	{
	    	if (!$this->validate('department'))
		    {
		    		$data['errors'] = \Config\Services::validation()->getErrors();
		        $data['function_title'] = "Adding Department";
		        $data['viewName'] = 'Modules\UniversitySetting\Views\departments\frmDepartment';
		        echo view('App\Views\theme\index', $data);
		    }
		    else
		    {
						if ($_POST['college_id'] == '0'){
							$_POST['college_id'] = NULL;
						}
		        if($model->add($_POST))
		        {
		        	$_SESSION['success'] = 'You have added a new record';
							$this->session->markAsFlashdata('success');
		        	return redirect()->to(base_url('departments'));
		        }
		        else
		        {
		        	$_SESSION['error'] = 'You have an error in adding a new record';
							$this->session->markAsFlashdata('error');
		        	return redirect()->to(base_url('departments'));
		        }
		    }
    	}
    	else
    	{
	    	$data['function_title'] = "Adding Department";
	      $data['viewName'] = 'Modules\UniversitySetting\Views\departments\frmDepartment';
	      echo view('App\Views\theme\index', $data);
    	}
    }

    public function edit_department($id)
    {
    	$this->hasPermissionRedirect('edit-department');
    	helper(['form', 'url']);
    	$model = new DepartmentsModel();
    	$data['rec'] = $model->find($id);
    	$permissions_model = new PermissionsModel();
			$users_model = new UsersModel();
			$colleges_model = new CollegesModel();

			$data['users'] = $users_model->getUserWithCondition(['status' => 'a']);
			$data['colleges'] = $colleges_model->get(['status' => 'a']);

    	$data['permissions'] = $this->permissions;

    	if(!empty($_POST))
    	{
	    	if (!$this->validate('department'))
		    {
		    	$data['errors'] = \Config\Services::validation()->getErrors();
		      $data['function_title'] = "Edit of Department";
		      $data['viewName'] = 'Modules\UniversitySetting\Views\departments\frmDepartment';
		      echo view('App\Views\theme\index', $data);
		    }
		    else
		    {
		    	if($model->edit($_POST, $id))
		        {
		        	$_SESSION['success'] = 'You have updated a record';
							$this->session->markAsFlashdata('success');
		        	return redirect()->to(base_url('departments'));
		        }
		        else
		        {
		        	$_SESSION['error'] = 'You an errot in updating a record';
							$this->session->markAsFlashdata('error');
		        	return redirect()->to( base_url('departments'));
		        }
		    }
    	}
    	else
    	{
	    		$data['function_title'] = "Editing of Department";
	        $data['viewName'] = 'Modules\UniversitySetting\Views\departments\frmDepartment';
	        echo view('App\Views\theme\index', $data);
    	}
    }

    public function delete_department($id)
    {
    	$this->hasPermissionRedirect('delete-department');
    	$model = new DepartmentsModel();
    	$model->erase($id);
    }

}
