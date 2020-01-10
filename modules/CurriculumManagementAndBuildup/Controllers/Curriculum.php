<?php
namespace Modules\CurriculumManagementAndBuildup\Controllers;

use Modules\CurriculumManagementAndBuildup\Models\CurriculumModel;
use Modules\UserManagement\Models\PermissionsModel;
use App\Controllers\BaseController;

class Curriculum extends BaseController
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
    	$this->hasPermissionRedirect('list-of-curriculum');

    	$model = new CurriculumModel();

    	//kailangan ito para sa pagination
       	$data['all_items'] = $model->getCurriculumWithCondition(['status'=> 'a']);
       	$data['offset'] = $offset;

        $data['curriculums'] = $model->getCurriculumWithFunction(['status'=> 'a', 'limit' => PERPAGE, 'offset' =>  $offset]);

        $data['function_title'] = "Lists of Curriculum";
        $data['viewName'] = 'Modules\CurriculumManagementAndBuildup\Views\curriculums\index';
        echo view('App\Views\theme\index', $data);
    }

    public function show_curriculum($id)
	{
		$this->hasPermissionRedirect('show-curriculum');
		$data['permissions'] = $this->permissions;

		$model = new CurriculumModel();

		$data['curriculums'] = $model->getCurriculumWithCondition(['id' => $id]);

		$data['function_title'] = "Curriculum Details";
        $data['viewName'] = 'Modules\CurriculumManagementAndBuildup\Views\curriculums\curriculumDetails';
        echo view('App\Views\theme\index', $data);
	}

    public function add_curriculum()
    {
    	$this->hasPermissionRedirect('add-curriculum');

    	$permissions_model = new PermissionsModel();

    	$data['permissions'] = $this->permissions;

    	helper(['form', 'url']);
    	$model = new CurriculumModel();

    	if(!empty($_POST))
    	{
	    	if (!$this->validate('curriculum'))
		    {
		    	$data['errors'] = \Config\Services::validation()->getErrors();
		        $data['function_title'] = "Adding Curriculum";
		        $data['viewName'] = 'Modules\CurriculumManagementAndBuildup\Views\curriculums\frmCurriculum';
		        echo view('App\Views\theme\index', $data);
		    }
		    else
		    {
		        if($model->addCurriculum($_POST))
		        {
		        	// $curriculum_id = $model->insertID();
		        	// $permissions_model->update_permitted_curriculum($curriculum_id, $_POST['function_id']);
		        	$_SESSION['success'] = 'You have added a new record';
							$this->session->markAsFlashdata('success');
		        	return redirect()->to(base_url('curriculums'));
		        }
		        else
		        {
		        	$_SESSION['error'] = 'You have an error in adding a new record';
							$this->session->markAsFlashdata('error');
		        	return redirect()->to(base_url('curriculums'));
		        }
		    }
    	}
    	else
    	{

	    	$data['function_title'] = "Adding Curriculum";
	        $data['viewName'] = 'Modules\CurriculumManagementAndBuildup\Views\curriculums\frmCurriculum';
	        echo view('App\Views\theme\index', $data);
    	}
    }

    public function edit_curriculum($id)
    {
    	$this->hasPermissionRedirect('edit-curriculum');
    	helper(['form', 'url']);
    	$model = new CurriculumModel();
    	$data['rec'] = $model->find($id);

    	$permissions_model = new PermissionsModel();

    	$data['permissions'] = $this->permissions;

    	if(!empty($_POST))
    	{
	    	if (!$this->validate('curriculum'))
		    {
		    	$data['errors'] = \Config\Services::validation()->getErrors();
		        $data['function_title'] = "Edit of Curriculum";
		        $data['viewName'] = 'Modules\CurriculumManagementAndBuildup\Views\curriculums\frmCurriculum';
		        echo view('App\Views\theme\index', $data);
		    }
		    else
		    {
		    	if($model->editCurriculum($_POST, $id))//curriculum model
		        {
		        	// $permissions_model->update_permitted_curriculum($id, $_POST['function_id'], $data['rec']['function_id']);
		        	$_SESSION['success'] = 'You have updated a record';
							$this->session->markAsFlashdata('success');
		        	return redirect()->to(base_url('curriculums'));
		        }
		        else
		        {
		        	$_SESSION['error'] = 'You have an error in updating a record';
							$this->session->markAsFlashdata('error');
		        	return redirect()->to( base_url('curriculums'));
		        }
		    }
    	}
    	else
    	{
	    	$data['function_title'] = "Editing of Curriculum";
	        $data['viewName'] = 'Modules\CurriculumManagementAndBuildup\Views\curriculums\frmCurriculum';
	        echo view('App\Views\theme\index', $data);
    	}
    }

    public function delete_curriculum($id)
    {
    	$this->hasPermissionRedirect('delete-curriculum');

    	$model = new CurriculumModel();
    	$model->deleteCurriculum($id);
    }

}
