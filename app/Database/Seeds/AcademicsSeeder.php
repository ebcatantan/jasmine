<?php namespace App\Database\Seeds;

class AcademicsSeeder extends \CodeIgniter\Database\Seeder
{
        public $table = 'permissions';

        public function run()
        {
                $data = [
                    [
                        'name_on_class' => 'list_of_instance',
                        'function_name' => 'list of instance',
                        'function_description' => 'list of instance',
                        'slugs' => 'list-of-instance',
                        'page_title' => 'list of instance',
                        'module_id' => '2',
                        'link_icon' => '<i class="far fa-address-card"></i>',
                        'order' => 1,
                        'table_name' => 'academic_years',
                        'func_action' => 'link',
                        'func_type' => 1,
                        'allowed_roles' => '[1]',
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'name_on_class' => 'add_instance',
                        'function_name' => 'add instance',
                        'function_description' => 'add instance',
                        'slugs' => 'add-instance',
                        'page_title' => 'add instance',
                        'module_id' => '2',
                        'link_icon' => '',
                        'order' => 2,
                        'table_name' => 'academic_years',
                        'func_action' => 'add',
                        'func_type' => 3,
                        'allowed_roles' => '[1]',
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'name_on_class' => 'edit_instance',
                        'function_name' => 'edit instance',
                        'function_description' => 'edit instance',
                        'slugs' => 'edit-instance',
                        'page_title' => 'edit instance',
                        'module_id' => '2',
                        'link_icon' => '',
                        'order' => 3,
                        'table_name' => 'academic_years',
                        'func_action' => 'edit',
                        'func_type' => 3,
                        'allowed_roles' => '[1]',
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'name_on_class' => 'delete_instance',
                        'function_name' => 'delete instance',
                        'function_description' => 'delete instance',
                        'slugs' => 'delete-instance',
                        'page_title' => 'delete instance',
                        'module_id' => '2',
                        'link_icon' => '',
                        'order' => 4,
                        'table_name' => 'academic_years',
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
