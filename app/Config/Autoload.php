<?php namespace Config;

require_once SYSTEMPATH . 'Config/AutoloadConfig.php';

/**
 * -------------------------------------------------------------------
 * AUTO-LOADER
 * -------------------------------------------------------------------
 * This file defines the namespaces and class maps so the Autoloader
 * can find the files as needed.
 */
class Autoload extends \CodeIgniter\Config\AutoloadConfig
{
	public $psr4 = [];

	public $classmap = [];

	//--------------------------------------------------------------------

	public function __construct()
	{
		parent::__construct();

		$psr4 = [
			'Config'      => APPPATH . 'Config',
			APP_NAMESPACE => APPPATH,                // For custom namespace
			'App'         => APPPATH,                // To ensure filters, etc still found,
			//'BaseControl' => APPPATH . 'Controllers',
			'Modules\Node'  => ROOTPATH.'modules/Node',
			'Modules\UserManagement'  => ROOTPATH.'modules/UserManagement',
			//'Modules\StudentManagement'  => ROOTPATH.'modules/StudentManagement',
			'Modules\AcademicInstances'  => ROOTPATH.'modules/AcademicInstances'
		];

		$classmap = [];

		//--------------------------------------------------------------------
		// Do Not Edit Below This Line
		//--------------------------------------------------------------------

		$this->psr4     = array_merge($this->psr4, $psr4);
		$this->classmap = array_merge($this->classmap, $classmap);

		unset($psr4, $classmap);
	}

	//--------------------------------------------------------------------

}
