<?php namespace App\Database\Seeds;

class BuildingsPermissionSeeder extends \CodeIgniter\Database\Seeder
{
        public $table = 'permissions';

        public function run()
        {
                $data = [
                    [
                        'function_name' => 'show building details',
                        'function_description' => 'show building details',
                        'slugs' => 'show-building',
                        'name_on_class' => 'show_building',
                        'page_title' => 'building details',
                        'module_id' => '2',
                         'link_icon' => '',
                        'order' => 1,
                        'table_name' => 'buildings',
                        'func_action' => 'show',
                        'func_type' => 3,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'create building account',
                        'function_description' => 'create building account',
                        'slugs' => 'add-building',
                        'name_on_class' => 'add_building',
                        'page_title' => 'create a building account',
                        'module_id' => '2',
                        'link_icon' => '',
                        'order' => 2,
                        'table_name' => 'buildings',
                        'func_action' => 'add',
                        'func_type' => 3,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'list of buildings',
                        'function_description' => 'list of buildings',
                        'slugs' => 'list-building',
                        'name_on_class' => 'index',
                        'page_title' => 'list of buildings',
                        'module_id' => '2',
                        'link_icon' => '<i class="fas fa-building"></i>',
                        'order' => 3,
                        'table_name' => 'buildings',
                        'func_action' => 'link',
                        'func_type' => 1,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'edit building account',
                        'function_description' => 'edit building account',
                        'slugs' => 'edit-building',
                        'name_on_class' => 'edit_building',
                        'page_title' => 'edit building account',
                        'module_id' => '2',
                        'link_icon' => '',
                        'order' => 4,
                        'table_name' => 'buildings',
                        'func_action' => 'edit',
                        'func_type' => 3,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'delete building account',
                        'function_description' => 'delete building account',
                        'slugs' => 'delete-building',
                        'name_on_class' => 'delete_building',
                        'page_title' => 'delete building account',
                        'module_id' => '2',
                        'link_icon' => '',
                        'order' => 5,
                        'table_name' => 'buildings',
                        'func_action' => 'delete',
                        'func_type' => 3,
                        'allowed_roles' => "[1]",
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
