<?php namespace App\Database\Seeds;

class RoomsPermissionSeeder extends \CodeIgniter\Database\Seeder
{
        public $table = 'permissions';

        public function run()
        {
                $data = [
                    [
                        'function_name' => 'show room details',
                        'function_description' => 'show room details',
                        'slugs' => 'show-room',
                        'name_on_class' => 'show_room',
                        'page_title' => 'room details',
                        'module_id' => '2',
                         'link_icon' => '',
                        'order' => 19,
                        'table_name' => 'rooms',
                        'func_action' => 'show',
                        'func_type' => 3,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'create room account',
                        'function_description' => 'create room account',
                        'slugs' => 'add-room',
                        'name_on_class' => 'add_room',
                        'page_title' => 'create a room account',
                        'module_id' => '2',
                        'link_icon' => '',
                        'order' => 20,
                        'table_name' => 'rooms',
                        'func_action' => 'add',
                        'func_type' => 3,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'list of rooms',
                        'function_description' => 'list of rooms',
                        'slugs' => 'list-room',
                        'name_on_class' => 'index',
                        'page_title' => 'list of rooms',
                        'module_id' => '2',
                        'link_icon' => '<i class="fas fa-door-open"></i>',
                        'order' => 21,
                        'table_name' => 'rooms',
                        'func_action' => 'link',
                        'func_type' => 1,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:iroom:s')
                    ],
                    [
                        'function_name' => 'edit roomrooms account',
                        'function_description' => 'edit room account',
                        'slugs' => 'edit-room',
                        'name_on_class' => 'edit_room',
                        'page_title' => 'edit room account',
                        'module_id' => '2',
                        'link_icon' => '',
                        'order' => 22,
                        'table_name' => 'rooms',
                        'func_action' => 'edit',
                        'func_type' => 3,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'delete room account',
                        'function_description' => 'delete room account',
                        'slugs' => 'delete-room',
                        'name_on_class' => 'delete_room',
                        'page_title' => 'delete room account',
                        'module_id' => '2',
                        'link_icon' => '',
                        'order' => 23,
                        'table_name' => 'rooms',
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
