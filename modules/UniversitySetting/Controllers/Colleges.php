<?php
namespace Modules\UniversitySetting\Controllers;

use Modules\UniversitySetting\Models\CollegesModel;
use Modules\UniversitySetting\Models\CoursesModel;
use Modules\UniversitySetting\Models\DepartmentsModel;
use Modules\UserManagement\Models\PermissionsModel;
use App\Controllers\BaseController;

class Colleges extends BaseController
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
    	$this->hasPermissionRedirect('list-college');

    	$model = new CollegesModel();

    	//kailangan ito para sa pagination
       	$data['all_items'] = $model->get(['status'=> 'a']);
       	$data['offset'] = $offset;
        $data['colleges'] = $model->get(['status'=> 'a'],[],[],['limit' => PERPAGE, 'offset' =>  $offset]);

        $data['function_title'] = "Colleges List";
        $data['viewName'] = 'Modules\UniversitySetting\Views\colleges\index';
        echo view('App\Views\theme\index', $data);
    }

   public function show_college($id)
	{
		$this->hasPermissionRedirect('show-college');
		$data['permissions'] = $this->permissions;

		$model = new CollegesModel();

		$data['college'] = $model->get(['id' => $id]);

		$data['function_title'] = "College Details";
        $data['viewName'] = 'Modules\UniversitySetting\Views\colleges\collegeDetails';
        echo view('App\Views\theme\index', $data);
	}

	public function add_college()
	{
		$this->hasPermissionRedirect('add-college');

		$permissions_model = new PermissionsModel();

		$data['permissions'] = $this->permissions;

		helper(['form', 'url']);
		$model = new CollegesModel();

		if(!empty($_POST))
		{
			if (!$this->validate('college'))
			{

				$data['errors'] = \Config\Services::validation()->getErrors();
					$data['function_title'] = "Adding College";
					$data['viewName'] = 'Modules\UniversitySetting\Views\colleges\frmCollege';
					echo view('App\Views\theme\index', $data);
			}
			else
			{
					if($model->add($_POST))
					{
						$_SESSION['success'] = 'You have added a new record';
						$this->session->markAsFlashdata('success');
						return redirect()->to(base_url('colleges'));
					}
					else
					{
						$_SESSION['error'] = 'You have an error in adding a new record';
						$this->session->markAsFlashdata('error');
						return redirect()->to(base_url('colleges'));
					}
			}
		}
		else
		{
			$data['function_title'] = "Adding College";
			$data['viewName'] = 'Modules\UniversitySetting\Views\colleges\frmCollege';
			echo view('App\Views\theme\index', $data);
		}
	}

    public function edit_college($id)
    {
    	$this->hasPermissionRedirect('edit-role');
    	helper(['form', 'url']);
    	$model = new CollegesModel();
    	$data['rec'] = $model->find($id);

    	$permissions_model = new PermissionsModel();

    	$data['permissions'] = $this->permissions;

    	if(!empty($_POST))
    	{
	    	if (!$this->validate('college'))
		    {
		    	$data['errors'] = \Config\Services::validation()->getErrors();
		      $data['function_title'] = "Edit College";
		      $data['viewName'] = 'Modules\UniversitySetting\Views\colleges\frmCollege';
		      echo view('App\Views\theme\index', $data);
		    }
		    else
		    {
		    	if($model->edit($_POST, $id))
		        {
		        	// $permissions_model->update_permitted_role($id, $_POST['function_id'], $data['rec']['function_id']);
		        	$_SESSION['success'] = 'You have updated a record';
					$this->session->markAsFlashdata('success');
		        	return redirect()->to(base_url('colleges'));
		        }
		        else
		        {
		        	$_SESSION['error'] = 'You an errot in updating a record';
					$this->session->markAsFlashdata('error');
		        	return redirect()->to( base_url('colleges'));
		        }
		    }
    	}
    	else
    	{
	    	$data['function_title'] = "Editing College";
	      $data['viewName'] = 'Modules\UniversitySetting\Views\colleges\frmCollege';
	      echo view('App\Views\theme\index', $data);
    	}
    }

    public function delete_college($id)
    {
    	$this->hasPermissionRedirect('delete-role');

    	$model = new CollegesModel();
    	$department_model = new DepartmentsModel();
    	$courses_model = new CoursesModel();
    	$department_model->erase($id, 'college_id');
    	$courses_model->erase($id, 'college_id');
    	$model->erase($id);
    }

}
