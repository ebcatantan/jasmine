<?php namespace App\Database\Seeds;

class EmployeesSeeder extends \CodeIgniter\Database\Seeder
{
        public $table = 'permissions';

        public function run()
        {
                $data = [
                    [
                        'name_on_class' => 'list_of_employee',
                        'function_name' => 'list\'s of employee',
                        'function_description' => 'list\'s of employee',
                        'slugs' => 'list-of-employee',
                        'page_title' => 'list\'s of employee',
                        'module_id' => '2',
                        'link_icon' => '<i class="far fa-address-card"></i>',
                        'order' => 1,
                        'table_name' => 'employees',
                        'func_action' => 'link',
                        'func_type' => 1,
                        'allowed_roles' => '[1]',
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'show employee details',
                        'function_description' => 'show employee details',
                        'slugs' => 'show-employee',
                        'name_on_class' => 'show_employee',
                        'page_title' => 'Employee details',
                        'module_id' => '2',
                         'link_icon' => '',
                        'order' => 2,
                        'table_name' => 'employees',
                        'func_action' => 'show',
                        'func_type' => 3,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'name_on_class' => 'add_employee',
                        'function_name' => 'add employee',
                        'function_description' => 'add employee',
                        'slugs' => 'add-employee',
                        'page_title' => 'add employee',
                        'module_id' => '2',
                        'link_icon' => '',
                        'order' => 3,
                        'table_name' => 'employees',
                        'func_action' => 'add',
                        'func_type' => 3,
                        'allowed_roles' => '[1]',
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'name_on_class' => 'edit_employee',
                        'function_name' => 'edit employee',
                        'function_description' => 'edit employee',
                        'slugs' => 'edit-employee',
                        'page_title' => 'edit employee',
                        'module_id' => '2',
                        'link_icon' => '',
                        'order' => 4,
                        'table_name' => 'employees',
                        'func_action' => 'edit',
                        'func_type' => 3,
                        'allowed_roles' => '[1]',
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'name_on_class' => 'delete_employee',
                        'function_name' => 'delete employee',
                        'function_description' => 'delete employee',
                        'slugs' => 'delete-employee',
                        'page_title' => 'delete employee',
                        'module_id' => '2',
                        'link_icon' => '',
                        'order' => 5,
                        'table_name' => 'employees',
                        'func_action' => 'delete',
                        'func_type' => 3,
                        'allowed_roles' => '[1]',
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                ];
                //print_r($data); die();
                $db      = \Config\Database::connect();
                $builder = $db->table($this->table);
                $builder->insertBatch($data);
        }
}
