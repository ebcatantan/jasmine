<?php
namespace Modules\UniversitySetting\Controllers;

use Modules\UniversitySetting\Models\SemestersModel;
use Modules\UserManagement\Models\PermissionsModel;
use App\Controllers\BaseController;

class Semesters extends BaseController
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
    	$this->hasPermissionRedirect('list-of-semester');
			// die("here");
    	$model = new SemestersModel();

    	//kailangan ito para sa pagination
       	$data['all_items'] = $model->get(['status'=> 'a']);
       	$data['offset'] = $offset;

				$fields = [];
				$tables = [];
				$conditions = ['status' => 'a'];
				if ($_POST['search_something'] != '') {
					$_SESSION['search_input'] = 'Result for: ' . $_POST['search_something'];
					$this->session->markAsFlashdata('search_input');
					$data['semesters'] = $model->get($conditions,$fields,$tables, ['offset' => $offset, 'limit' => PERPAGE], ['name' => $_POST['search_something']]);
				}
				else {
					unset($_SESSION['search_input']);
					$data['semesters'] = $model->get($conditions,$fields,$tables, ['offset' => $offset, 'limit' => PERPAGE]);
				}

        $data['function_title'] = "Semester List";
        $data['viewName'] = 'Modules\UniversitySetting\Views\semesters\index';
        echo view('App\Views\theme\index', $data);
    }

    public function add_semester()
    {
    	$this->hasPermissionRedirect('add-semester');

    	$permissions_model = new PermissionsModel();

    	$data['permissions'] = $this->permissions;

    	helper(['form', 'url']);
    	$model = new SemestersModel();

    	if(!empty($_POST))
    	{
	    	if (!$this->validate('semester'))
		    {
		    	$data['errors'] = \Config\Services::validation()->getErrors();
		        $data['function_title'] = "Adding Semester";
		        $data['viewName'] = 'Modules\UniversitySetting\Views\semesters\frmSemester';
		        echo view('App\Views\theme\index', $data);
		    }
		    else
		    {
		        if($model->add($_POST))
		        {
		        	$_SESSION['success'] = 'You have added a new record';
							$this->session->markAsFlashdata('success');
		        	return redirect()->to(base_url('semesters'));
		        }
		        else
		        {
		        	$_SESSION['error'] = 'You have an error in adding a new record';
							$this->session->markAsFlashdata('error');
		        	return redirect()->to(base_url('semesters'));
		        }
		    }
    	}
    	else
    	{

	    	$data['function_title'] = "Adding Semester";
	        $data['viewName'] = 'Modules\UniversitySetting\Views\semesters\frmSemester';
	        echo view('App\Views\theme\index', $data);
    	}
    }

    public function edit_semester($id)
    {
    	$this->hasPermissionRedirect('edit-semester');
    	helper(['form', 'url']);
    	$model = new SemestersModel();
    	$data['rec'] = $model->find($id);

    	$permissions_model = new PermissionsModel();

    	$data['permissions'] = $this->permissions;

    	if(!empty($_POST))
    	{
	    	if (!$this->validate('semester'))
		    {
		    	$data['errors'] = \Config\Services::validation()->getErrors();
		        $data['function_title'] = "Edit of Semester";
		        $data['viewName'] = 'Modules\UniversitySetting\Views\semesters\frmSemester';
		        echo view('App\Views\theme\index', $data);
		    }
		    else
		    {
		    	if($model->edit($_POST, $id))
		        {
		        	$_SESSION['success'] = 'You have updated a record';
							$this->session->markAsFlashdata('success');
		        	return redirect()->to(base_url('semesters'));
		        }
		        else
		        {
		        	$_SESSION['error'] = 'You have an error in updating a record';
							$this->session->markAsFlashdata('error');
		        	return redirect()->to(base_url('semesters'));
		        }
		    }
    	}
    	else
    	{
	    		$data['function_title'] = "Editing of Semester";
	        $data['viewName'] = 'Modules\UniversitySetting\Views\semesters\frmSemester';
	        echo view('App\Views\theme\index', $data);
    	}
    }

    public function delete_semester($id)
    {

    	$this->hasPermissionRedirect('delete-semester');

    	$model = new SemestersModel();
    	$model->erase($id);
    }

}
