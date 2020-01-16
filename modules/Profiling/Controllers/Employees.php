<?php
namespace Modules\Profiling\Controllers;
           //Module name            //Model name
use Modules\Profiling\Models\EmployeesModel;
use Modules\UserManagement\Models\PermissionsModel;
use App\Controllers\BaseController;
      //controller name
class Employees extends BaseController
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
    	$this->hasPermissionRedirect('list-of-employee');

    	$model = new EmployeesModel();

    	//kailangan ito para sa pagination
			$data['all_items'] = $model->getEmployeeWithCondition(['status'=> 'a']);
			$data['offset'] = $offset;

			$data['employees'] = $model->getEmployeeWithFunction(['status'=> 'a', 'limit' => PERPAGE, 'offset' =>  $offset]);

			$data['function_title'] = "List of Employees";
			$data['viewName'] = 'Modules\Profiling\Views\employees\index';
		echo view('App\Views\theme\index', $data);
    }

    public function show_employee($id)
	{
		$this->hasPermissionRedirect('show-employee');
		$data['permissions'] = $this->permissions;

		$model = new EmployeesModel();

		$data['employee'] = $model->getEmployeeWithCondition(['id' => $id]);

		$data['function_title'] = "Employee Details";
        $data['viewName'] = 'Modules\Profiling\Views\employees\employeeDetails';
        echo view('App\Views\theme\index', $data);
	}

    public function add_employee()
    {
    	$this->hasPermissionRedirect('add-employee');
    	$permissions_model = new PermissionsModel();

    	$data['permissions'] = $this->permissions;

    	helper(['form', 'url']);
    	$model = new EmployeesModel();

    	if(!empty($_POST))
    	{
	    	if (!$this->validate('employee'))
		    {
		    	$data['errors'] = \Config\Services::validation()->getErrors();
		        $data['function_title'] = "Adding Employee";
		        $data['viewName'] = 'Modules\Profiling\Views\employees\frmEmployee';
		        echo view('App\Views\theme\index', $data);
		    }
		    else
		    {
		        if($model->addEmployees($_POST))
		        {
		        	$_SESSION['success'] = 'You have added a new record';
							$this->session->markAsFlashdata('success');
		        	return redirect()->to(base_url('employees'));
		        }
		        else
		        {
		        	$_SESSION['error'] = 'You have an error in adding a new record';
					$this->session->markAsFlashdata('error');
		        	return redirect()->to(base_url('employees'));
		        }
		    }
    	}
    	else
    	{
	    		$data['function_title'] = "Adding Employee";
	        $data['viewName'] = 'Modules\Profiling\Views\employees\frmEmployee';
	        echo view('App\Views\theme\index', $data);
    	}
    }

    public function edit_employee($id)
    {
    	$this->hasPermissionRedirect('edit-employee');
    	helper(['form', 'url']);
    	$model = new EmployeesModel();
    	$data['rec'] = $model->find($id);

    	$permissions_model = new PermissionsModel();

    	$data['permissions'] = $this->permissions;

    	if(!empty($_POST))
    	{
	    	if (!$this->validate('employee'))
		    {
		    	$data['errors'] = \Config\Services::validation()->getErrors();
		        $data['function_title'] = "Edit of Employee";
		        $data['viewName'] = 'Modules\Profiling\Views\employees\frmEmployee';
		        echo view('App\Views\theme\index', $data);
		    }
		    else
		    {
		    	if($model->editEmployees($_POST, $id))
		        {
		        	//$permissions_model->update_permitted_role($id, $_POST['function_id'], $data['rec']['function_id']);
		        	$_SESSION['success'] = 'You have updated a record';
					$this->session->markAsFlashdata('success');
		        	return redirect()->to(base_url('employees'));
		        }
		        else
		        {
		        	$_SESSION['error'] = 'You an error in updating a record';
					$this->session->markAsFlashdata('error');
		        	return redirect()->to( base_url('employees'));
		        }
		    }
    	}
    	else
    	{
	    	$data['function_title'] = "Editing of Employee";
	        $data['viewName'] = 'Modules\Profiling\Views\employees\frmEmployee';
	        echo view('App\Views\theme\index', $data);
    	}
    }

    public function delete_employee($id)
    {
    	$this->hasPermissionRedirect('delete-employee');

    	$model = new EmployeesModel();
    	$model->deleteEmployee($id);
    }

}
