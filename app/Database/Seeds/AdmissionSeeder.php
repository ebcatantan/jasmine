<?php namespace App\Database\Seeds;

class AdmissionSeeder extends \CodeIgniter\Database\Seeder
{
        public $table = 'permissions';

        public function run()
        {
                $data = [
                    [
                        'name_on_class' => 'list_of_admission',
                        'function_name' => 'list of admission',
                        'function_description' => 'list of admission',
                        'slugs' => 'list-of-admission',
                        'page_title' => 'list of admission',
                        'module_id' => '2',
                        'link_icon' => '<i class="far fa-address-card"></i>',
                        'order' => 1,
                        'table_name' => 'student_examinees',
                        'func_action' => 'link',
                        'func_type' => 1,
                        'allowed_roles' => '[1]',
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'show admission details',
                        'function_description' => 'show admission details',
                        'slugs' => 'show-admission',
                        'name_on_class' => 'show_admission',
                        'page_title' => 'admission details',
                        'module_id' => '1',
                         'link_icon' => '',
                        'order' => '2',
                        'table_name' => 'student_examinees',
                        'func_action' => 'show',
                        'func_type' => 3,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'name_on_class' => 'add_admission',
                        'function_name' => 'add admission',
                        'function_description' => 'add admission',
                        'slugs' => 'add-admission',
                        'page_title' => 'add admission',
                        'module_id' => '2',
                        'link_icon' => '',
                        'order' => 3,
                        'table_name' => 'student_examinees',
                        'func_action' => 'add',
                        'func_type' => 3,
                        'allowed_roles' => '[1]',
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'name_on_class' => 'edit_admission',
                        'function_name' => 'edit admission',
                        'function_description' => 'edit admission',
                        'slugs' => 'edit-admission',
                        'page_title' => 'edit admission',
                        'module_id' => '2',
                        'link_icon' => '',
                        'order' => 4,
                        'table_name' => 'student_examinees',
                        'func_action' => 'edit',
                        'func_type' => 3,
                        'allowed_roles' => '[1]',
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'name_on_class' => 'delete_admission',
                        'function_name' => 'delete admission',
                        'function_description' => 'delete admission',
                        'slugs' => 'delete-admission',
                        'page_title' => 'delete admission',
                        'module_id' => '2',
                        'link_icon' => '',
                        'order' => 5,
                        'table_name' => 'student_examinees',
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
