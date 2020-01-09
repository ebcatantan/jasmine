<?php namespace App\Database\Seeds;

class SubjectsSeeder extends \CodeIgniter\Database\Seeder
{
        public $table = 'permissions';

        public function run()
        {
                $data = [
                    [
                        'name_on_class' => 'user_own_profile',
                        'function_name' => 'user\'s own profile',
                        'function_description' => 'user\'s own profile',
                        'slugs' => 'user-own-profile',
                        'page_title' => 'user\'s own profile',
                        'module_id' => '1',
                        'link_icon' => '<i class="far fa-address-card"></i>',
                        'order' => 14,
                        'table_name' => 'subjects',
                        'func_action' => 'link',
                        'func_type' => 1,
                        'allowed_roles' => '[1]',
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'name_on_class' => 'list_of_subjects',
                        'function_name' => 'list of subjects',
                        'function_description' => 'list of subject',
                        'slugs' => 'list-of-subject',
                        'page_title' => 'list of subject',
                        'module_id' => '2',
                        'link_icon' => '<i class="far fa-address-card"></i>',
                        'order' => 15,
                        'table_name' => 'subjects',
                        'func_action' => 'link',
                        'func_type' => 1,
                        'allowed_roles' => '[1]',
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'show_subject',
                        'function_description' => 'show subjects',
                        'slugs' => 'show-',
                        'name_on_class' => 'show_subject',
                        'page_title' => 'subject details',
                        'module_id' => '1',
                        'link_icon' => '',
                        'order' => 19,
                        'table_name' => 'subjects',
                        'func_action' => 'show',
                        'func_type' => 3,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'name_on_class' => 'add_subjects',
                        'function_name' => 'add subjects',
                        'function_description' => 'add subject',
                        'slugs' => 'add-subject',
                        'page_title' => 'add subject',
                        'module_id' => '2',
                        'link_icon' => '<i class="far fa-address-card"></i>',
                        'order' => 16,
                        'table_name' => 'subjects',
                        'func_action' => 'add',
                        'func_type' => 3,
                        'allowed_roles' => '[1]',
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'name_on_class' => 'edit_subjects',
                        'function_name' => 'edit subjects',
                        'function_description' => 'edit subject',
                        'slugs' => 'edit-subject',
                        'page_title' => 'edit subject',
                        'module_id' => '2',
                        'link_icon' => '<i class="far fa-address-card"></i>',
                        'order' => 17,
                        'table_name' => 'subjects',
                        'func_action' => 'edit',
                        'func_type' => 3,
                        'allowed_roles' => '[1]',
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'name_on_class' => 'delete_subjects',
                        'function_name' => 'delete subjects',
                        'function_description' => 'delete subject',
                        'slugs' => 'delete-subject',
                        'page_title' => 'delete subject',
                        'module_id' => '2',
                        'link_icon' => '<i class="far fa-address-card"></i>',
                        'order' => 18,
                        'table_name' => 'subjects',
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
