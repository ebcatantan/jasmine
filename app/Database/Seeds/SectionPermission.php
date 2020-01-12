<?php namespace App\Database\Seeds;

class SectionPermission extends \CodeIgniter\Database\Seeder
{
        public $table = 'permissions';

        public function run()
        {
                $data = [
                    [
                        'name_on_class' => 'list_of_section', //read
                        'function_name' => 'list of section',
                        'function_description' => 'list of section',
                        'slugs' => 'list-of-section',
                        'page_title' => 'list of section',
                        'module_id' => '2',
                        'link_icon' => '<i class="far fa-address-card"></i>',
                        'order' => 1,
                        'table_name' => 'sections',
                        'func_action' => 'link',
                        'func_type' => 1,
                        'allowed_roles' => '[1]',
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'name_on_class' => 'add_section', //create
                        'function_name' => 'add section',
                        'function_description' => 'add section',
                        'slugs' => 'add-section',
                        'page_title' => 'add section',
                        'module_id' => '2',
                        'link_icon' => '',
                        'order' => 2,
                        'table_name' => 'sections',
                        'func_action' => 'add',
                        'func_type' => 3,
                        'allowed_roles' => '[1]',
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],

                    [
                        'name_on_class' => 'edit_section', //edit
                        'function_name' => 'edit section',
                        'function_description' => 'edit section',
                        'slugs' => 'edit-section',
                        'page_title' => 'edit section',
                        'module_id' => '2',
                        'link_icon' => '',
                        'order' => 3,
                        'table_name' => 'sections',
                        'func_action' => 'edit',
                        'func_type' => 3,
                        'allowed_roles' => '[1]',
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'name_on_class' => 'delete_section', //delete
                        'function_name' => 'delete section',
                        'function_description' => 'delete section',
                        'slugs' => 'delete-section',
                        'page_title' => 'delete section',
                        'module_id' => '2',
                        'link_icon' => '',
                        'order' => 4,
                        'table_name' => 'sections',
                        'func_action' => 'delete',
                        'func_type' => 3,
                        'allowed_roles' => '[1]',
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ]
                ];
                //print_r($data); die();
                $db      = \Config\Database::connect();
                $builder = $db->table($this->table);
                $builder->insertBatch($data);
        }
}
