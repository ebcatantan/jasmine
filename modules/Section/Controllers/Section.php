<?php
namespace Modules\Section\Controllers;
				//modulenames	  	//modelname
use Modules\Section\Models\SectionModel;
use Modules\UserManagement\Models\PermissionsModel;
use App\Controllers\BaseController;
			//controllername
class Section extends BaseController
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
    	$this->hasPermissionRedirect('list-of-section');
    	$model = new SectionModel();

    	//kailangan ito para sa pagination
       	$data['all_items'] = $model->getSectionWithCondition(['status'=> 'a']);
       	$data['offset'] = $offset;

        $data['sections'] = $model->getSectionWithFunction(['status'=> 'a', 'limit' => PERPAGE, 'offset' =>  $offset]);
        $data['function_title'] = "Section List";
        $data['viewName'] = 'Modules\Section\Views\section\index';
        echo view('App\Views\theme\index', $data);
    }

    public function show_Section($id)
	{
		$this->hasPermissionRedirect('show-section');
		$data['permissions'] = $this->permissions;

		$model = new SectionModel();

		$data['role'] = $model->getSectionWithCondition(['id' => $id]);

		$data['function_title'] = "Section Details";
        $data['viewName'] = 'Modules\Section\Views\section\SectionDetails';
        echo view('App\Views\theme\index', $data);
	}

    public function add_Section()
    {
    	$this->hasPermissionRedirect('add-section');

    	$permissions_model = new PermissionsModel();

    	$data['permissions'] = $this->permissions;

    	helper(['form', 'url']);
    	$model = new SectionModel();
    	if(!empty($_POST))
    	{

	    	if (!$this->validate('section'))
		    {
		    	$data['errors'] = \Config\Services::validation()->getErrors();
		        $data['function_title'] = "Adding Section";
		        $data['viewName'] = 'Modules\Section\Views\section\frmRole';
		        echo view('App\Views\theme\index', $data);
		    }
		    else
		    {
		        if($model->addSection($_POST))
		        {
		        	$_SESSION['success'] = 'You have added a new record';
							$this->session->markAsFlashdata('success');
		        	return redirect()->to(base_url('sections'));
		        }
		        else
		        {
		        	$_SESSION['error'] = 'You have an error in adding a new record';
					$this->session->markAsFlashdata('error');
		        	return redirect()->to(base_url('sections'));
		        }
		    }
    	}
    	else
    	{

	    		$data['function_title'] = "Adding Section";
	        $data['viewName'] = 'Modules\Section\Views\section\frmRole';
	        echo view('App\Views\theme\index', $data);
    	}
    }

    public function edit_Section($id)
    {
    	$this->hasPermissionRedirect('edit-section');
    	helper(['form', 'url']);
    	$model = new SectionModel();
    	$data['rec'] = $model->find($id);

    	$permissions_model = new PermissionsModel();

    	$data['permissions'] = $this->permissions;

    	if(!empty($_POST))
    	{
	    	if (!$this->validate('section'))
		    {
		    	$data['errors'] = \Config\Services::validation()->getErrors();
		        $data['function_title'] = "Edit of Section";
		        $data['viewName'] = 'Modules\Section\Views\section\frmRole';
		        echo view('App\Views\theme\index', $data);
		    }
		    else
		    {
		    	if($model->editSection($_POST, $id))
		        {
		        	$_SESSION['success'] = 'You have updated a record';
							$this->session->markAsFlashdata('success');
		        	return redirect()->to(base_url('sections'));
		        }
		        else
		        {
		        	$_SESSION['error'] = 'You an error in updating a record';
					$this->session->markAsFlashdata('error');
		        	return redirect()->to( base_url('sections'));
		        }
		    }
    	}
    	else
    	{
	    	$data['function_title'] = "Edit Section";
	        $data['viewName'] = 'Modules\Section\Views\section\frmRole';
	        echo view('App\Views\theme\index', $data);
    	}
    }

    public function delete_Section($id)
    {
    	$this->hasPermissionRedirect('delete-section');

    	$model = new SectionModel();
    	$model->deleteSection($id);
    }

}
