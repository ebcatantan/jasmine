<?php namespace App\Database\Seeds;

class BuildingPermission extends \CodeIgniter\Database\Seeder
{
        public $table = 'permissions';

        public function run()
        {
                $data = [
                    [
                        'name_on_class' => 'list_of_building',
                        'function_name' => 'list of building',
                        'function_description' => 'list of building',
                        'slugs' => 'list-of-building',
                        'page_title' => 'list of building',
                        'module_id' => '2',
                        'link_icon' => '<i class="far fa-address-card"></i>',
                        'order' => 1,
                        'table_name' => 'buildings',
                        'func_action' => 'link',
                        'func_type' => 1,
                        'allowed_roles' => '[1]',
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'name_on_class' => 'add_building',
                        'function_name' => 'add building',
                        'function_description' => 'add building',
                        'slugs' => 'add-building',
                        'page_title' => 'add building',
                        'module_id' => '2',
                        'link_icon' => '',
                        'order' => 2,
                        'table_name' => 'buildings',
                        'func_action' => 'add',
                        'func_type' => 3,
                        'allowed_roles' => '[1]',
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'name_on_class' => 'edit_building',
                        'function_name' => 'edit building',
                        'function_description' => 'edit building',
                        'slugs' => 'edit-building',
                        'page_title' => 'edit building',
                        'module_id' => '2',
                        'link_icon' => '',
                        'order' => 3,
                        'table_name' => 'buildings',
                        'func_action' => 'edit',
                        'func_type' => 3,
                        'allowed_roles' => '[1]',
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'name_on_class' => 'delete_building',
                        'function_name' => 'delete building',
                        'function_description' => 'delete building',
                        'slugs' => 'delete-building',
                        'page_title' => 'delete building',
                        'module_id' => '2',
                        'link_icon' => '',
                        'order' => 4,
                        'table_name' => 'buildings',
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
