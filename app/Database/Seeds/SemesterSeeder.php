<?php namespace App\Database\Seeds;

class SemesterSeeder extends \CodeIgniter\Database\Seeder
{
        public $table = 'permissions';

        public function run()
        {
                $data = [
                    [
                        'name_on_class' => 'list_of_semester',
                        'function_name' => 'list of semester',
                        'function_description' => 'list of semester',
                        'slugs' => 'list-of-semester',
                        'page_title' => 'list of semester',
                        'module_id' => '2',
                        'link_icon' => '',
                        'order' => 1,
                        'table_name' => 'semesters',
                        'func_action' => 'link',
                        'func_type' => 1,
                        'allowed_roles' => '[1,2]',
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'name_on_class' => 'add_semester',
                        'function_name' => 'add semester',
                        'function_description' => 'add semester',
                        'slugs' => 'add-semester',
                        'page_title' => 'add semester',
                        'module_id' => '2',
                        'link_icon' => '',
                        'order' => 2,
                        'table_name' => 'semesters',
                        'func_action' => 'add',
                        'func_type' => 3,
                        'allowed_roles' => '[1,2]',
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'name_on_class' => 'edit_semester',
                        'function_name' => 'edit semester',
                        'function_description' => 'edit semester',
                        'slugs' => 'edit-semester',
                        'page_title' => 'edit semester',
                        'module_id' => '2',
                        'link_icon' => '<i class="fas fa-pencil"></i>',
                        'order' => 3,
                        'table_name' => 'semesters',
                        'func_action' => 'edit',
                        'func_type' => 3,
                        'allowed_roles' => '[1,2]',
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'name_on_class' => 'delete_semester',
                        'function_name' => 'delete semester',
                        'function_description' => 'delete semester',
                        'slugs' => 'delete-semester',
                        'page_title' => 'delete semester',
                        'module_id' => '2',
                        'link_icon' => '',
                        'order' => 4,
                        'table_name' => 'semesters',
                        'func_action' => 'delete',
                        'func_type' => 3,
                        'allowed_roles' => '[1,2]',
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
