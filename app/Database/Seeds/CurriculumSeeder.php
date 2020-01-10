<?php namespace App\Database\Seeds;

class CurriculumSeeder extends \CodeIgniter\Database\Seeder
{
        public $table = 'permissions';

        public function run()
        {
                $data = [

                    [
                        'name_on_class' => 'list_of_curriculum',//read
                        'function_name' => 'list\'s of curriculum',
                        'function_description' => 'list\'s of curriculum',
                        'slugs' => 'list-of-curriculum',
                        'page_title' => 'list\'s of curriculum',
                        'module_id' => '2',
                        'link_icon' => '<i class="fas fa-book"></i>',
                        'order' => 1,
                        'table_name' => 'curriculums',
                        'func_action' => 'link',
                        'func_type' => 1,
                        'allowed_roles' => '[1,2]',
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'show curriculum details',
                        'function_description' => 'show curriculum details',
                        'slugs' => 'show-curriculum',
                        'name_on_class' => 'show_curriculum',
                        'page_title' => 'curriculum details',
                        'module_id' => '1',
                         'link_icon' => '',
                        'order' => '2',
                        'table_name' => 'curriculums',
                        'func_action' => 'show',
                        'func_type' => 3,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                      'name_on_class' => 'add_curriculum',//add
                      'function_name' => 'add curriculum',
                      'function_description' => 'add curriculum',
                      'slugs' => 'add-curriculum',
                      'page_title' => 'add curriculum',
                      'module_id' => '2',
                      'link_icon' => '',
                      'order' => 3,
                      'table_name' => 'curriculums',
                      'func_action' => 'add',
                      'func_type' => 3,
                      'allowed_roles' => '[1]',
                      'status' => 'a',
                      'created_at' => date('Y-m-d H:i:s')
                    ],


                    [
                        'function_name' => 'edit_curriculum',//edit
                        'function_description' => 'edit curriculum',
                        'slugs' => 'edit-curriculum',
                        'name_on_class' => 'edit_curriculum',
                        'page_title' => 'edit curriculum',
                        'module_id' => '2',
                        'link_icon' => '',
                        'order' => 4,
                        'table_name' => 'curriculums',
                        'func_action' => 'edit',
                        'func_type' => 3,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'delete_curriculum',//delete
                        'function_description' => 'delete curriculum',
                        'slugs' => 'delete-curriculum',
                        'name_on_class' => 'delete_curriculum',
                        'page_title' => 'delete curriculum',
                        'module_id' => '2',
                        'link_icon' => '',
                        'order' => '5',
                        'table_name' => 'curriculums',
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
