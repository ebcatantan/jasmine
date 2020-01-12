<?php namespace App\Database\Seeds;

class StudentsSeeder extends \CodeIgniter\Database\Seeder
{
        public $table = 'permissions';

        public function run()
        {
                $data = [
                    [
                        'name_on_class' => 'list_of_student',
                        'function_name' => 'list\'s of student',
                        'function_description' => 'list\'s of student',
                        'slugs' => 'list-of-student',
                        'page_title' => 'list\'s of student',
                        'module_id' => '2',
                        'link_icon' => '<i class="far fa-address-card"></i>',
                        'order' => 1,
                        'table_name' => 'students',
                        'func_action' => 'link',
                        'func_type' => 1,
                        'allowed_roles' => '[1]',
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'name_on_class' => 'show_student',
                        'function_name' => 'show student details',
                        'function_description' => 'show student details',
                        'slugs' => 'show-student-details',
                        'page_title' => 'student details',
                        'module_id' => '2',
                         'link_icon' => '',
                        'order' => '2',
                        'table_name' => 'students',
                        'func_action' => 'show',
                        'func_type' => 3,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'name_on_class' => 'add_student',
                        'function_name' => 'add student',
                        'function_description' => 'add student',
                        'slugs' => 'add-student',
                        'page_title' => 'add student',
                        'module_id' => '2',
                        'link_icon' => '',
                        'order' => '3',
                        'table_name' => 'students',
                        'func_action' => 'add',
                        'func_type' => 3,
                        'allowed_roles' => '[1]',
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'name_on_class' => 'edit_student',
                        'function_name' => 'edit student',
                        'function_description' => 'edit student',
                        'slugs' => 'edit-student',
                        'page_title' => 'edit student',
                        'module_id' => '2',
                        'link_icon' => '',
                        'order' => '4',
                        'table_name' => 'students',
                        'func_action' => 'edit',
                        'func_type' => 3,
                        'allowed_roles' => '[1]',
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'name_on_class' => 'delete_student',
                        'function_name' => 'delete student',
                        'function_description' => 'delete student',
                        'slugs' => 'delete-student',
                        'page_title' => 'delete student',
                        'module_id' => '2',
                        'link_icon' => '',
                        'order' => '5',
                        'table_name' => 'students',
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
