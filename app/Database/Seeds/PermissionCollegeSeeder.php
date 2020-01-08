<?php namespace App\Database\Seeds;

class PermissionCollegeSeeder extends \CodeIgniter\Database\Seeder
{
        public $table = 'permissions';

        public function run()
        {
                $data = [
                    [
                        'function_name' => 'show college details',
                        'function_description' => 'show college details',
                        'slugs' => 'show-college',
                        'name_on_class' => 'show college',
                        'page_title' =>  'college details',
                        'module_id' => '2',
                         'link_icon' => '',
                        'order' => '15',
                        'table_name' => 'colleges',
                        'func_action' => 'show',
                        'func_type' => 3,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'create college account',
                        'function_description' => 'create college account',
                        'slugs' => 'add-college',
                        'name_on_class' => 'add_college',
                        'page_title' => 'create a college account',
                        'module_id' => '2',
                        'link_icon' => '',
                        'order' => '16',
                        'table_name' => 'colleges',
                        'func_action' => 'add',
                        'func_type' => 3,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'list of colleges',
                        'function_description' => 'list of colleges',
                        'slugs' => 'list-college',
                        'name_on_class' => 'index',
                        'page_title' => 'list of colleges',
                        'module_id' => '2',
                        'link_icon' => '<i class="fas fa-school"></i>',
                        'order' => '17',
                        'table_name' => 'colleges',
                        'func_action' => 'link',
                        'func_type' => 1,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'edit college account',
                        'function_description' => 'edit college account',
                        'slugs' => 'edit-college',
                        'name_on_class' => 'edit_college',
                        'page_title' => 'edit college account',
                        'module_id' => '2',
                        'link_icon' => '',
                        'order' => '18',
                        'table_name' => 'colleges',
                        'func_action' => 'edit',
                        'func_type' => 3,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'delete college account',
                        'function_description' => 'delete college account',
                        'slugs' => 'delete-college',
                        'name_on_class' => 'delete_college',
                        'page_title' => 'delete college account',
                        'module_id' => '2',
                        'link_icon' => '',
                        'order' => '19',
                        'table_name' => 'colleges',
                        'func_action' => 'delete',
                        'func_type' => 3,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                ];
                // print_r($data); die();
                $db      = \Config\Database::connect();
                $builder = $db->table($this->table);
                $builder->insertBatch($data);
        }
}
