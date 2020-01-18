<?php namespace App\Database\Migrations;

class CreateCurriculumBuildupsPermission extends \CodeIgniter\Database\Migration {

        private $table = 'permissions';
        public function up()
        {

          $data = [
            [
                'id' => 52,
                'name_on_class' => 'list_of_curriculum',//read
                'function_name' => 'list\'s of curriculum',
                'function_description' => 'list\'s of curriculum',
                'slugs' => 'list-of-curriculum',
                'page_title' => 'list\'s of curriculum',
                'module_id' => '3',
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
                'id' => 53,
                'function_name' => 'show curriculum details',
                'function_description' => 'show curriculum details',
                'slugs' => 'show-curriculum',
                'name_on_class' => 'show_curriculum',
                'page_title' => 'curriculum details',
                'module_id' => '3',
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
              'id' => 54,
              'name_on_class' => 'add_curriculum',//add
              'function_name' => 'add curriculum',
              'function_description' => 'add curriculum',
              'slugs' => 'add-curriculum',
              'page_title' => 'add curriculum',
              'module_id' => '3',
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
                'id' => 55,
                'function_name' => 'edit_curriculum',//edit
                'function_description' => 'edit curriculum',
                'slugs' => 'edit-curriculum',
                'name_on_class' => 'edit_curriculum',
                'page_title' => 'edit curriculum',
                'module_id' => '3',
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
                'id' => 56,
                'function_name' => 'delete_curriculum',//delete
                'function_description' => 'delete curriculum',
                'slugs' => 'delete-curriculum',
                'name_on_class' => 'delete_curriculum',
                'page_title' => 'delete curriculum',
                'module_id' => '3',
                'link_icon' => '',
                'order' => '5',
                'table_name' => 'curriculums',
                'func_action' => 'delete',
                'func_type' => 3,
                'allowed_roles' => "[1]",
                'status' => 'a',
                'created_at' => date('Y-m-d H:i:s')
            ],

            //for curriculum subject equivalence
            [
                'id' => 57,
                'name_on_class' => 'list_of_curriculum_subject_equivallence',//read
                'function_name' => 'list\'s of curriculum subject equivalence',
                'function_description' => 'list\'s of curriculum subject equivalence',
                'slugs' => 'list-of-curriculum-subject-equivallence',
                'page_title' => 'list\'s of curriculum subject equivalence',
                'module_id' => '3',
                'link_icon' => '<i class="fas fa-book"></i>',
                'order' => '6',
                'table_name' => 'curriculum_subject_equivallence',
                'func_action' => 'link',
                'func_type' => 1,
                'allowed_roles' => '[1,2]',
                'status' => 'a',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 58,
                'function_name' => 'show curriculum subject equivalence details',
                'function_description' => 'show curriculum subject equivalence details',
                'slugs' => 'show-curriculum-subject-equivallence',
                'name_on_class' => 'show_curriculum_subject_equivallence',
                'page_title' => 'curriculum subject equivalence details',
                'module_id' => '3',
                 'link_icon' => '',
                'order' => '7',
                'table_name' => 'curriculum_subject_equivallence',
                'func_action' => 'show',
                'func_type' => 3,
                'allowed_roles' => "[1]",
                'status' => 'a',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
              'id' => 59,
              'name_on_class' => 'add_curriculum_subject_equivallence',//add
              'function_name' => 'add curriculum subject equivalence',
              'function_description' => 'add curriculum subject equivalence',
              'slugs' => 'add-curriculum-subject-equivallence',
              'page_title' => 'add curriculum subject equivalence',
              'module_id' => '3',
              'link_icon' => '',
              'order' => '8',
              'table_name' => 'curriculum_subject_equivallence',
              'func_action' => 'add',
              'func_type' => 3,
              'allowed_roles' => '[1]',
              'status' => 'a',
              'created_at' => date('Y-m-d H:i:s')
            ],


            [
                'id' => 60,
                'function_name' => 'edit_curriculum_subject_equivallence',//edit
                'function_description' => 'edit curriculum subject equivalence',
                'slugs' => 'edit-curriculum-subject-equivallence',
                'name_on_class' => 'edit_curriculum_subject_equivallence',
                'page_title' => 'edit curriculum subject equivalence',
                'module_id' => '3',
                'link_icon' => '',
                'order' => '9',
                'table_name' => 'curriculum_subject_equivallence',
                'func_action' => 'edit',
                'func_type' => 3,
                'allowed_roles' => "[1]",
                'status' => 'a',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 61,
                'function_name' => 'delete_curriculum_subject_equivallence',//delete
                'function_description' => 'delete curriculum subject equivalence',
                'slugs' => 'delete-curriculum-subject-equivallence',
                'name_on_class' => 'delete_curriculum_subject_equivallence',
                'page_title' => 'delete curriculum subject equivalence',
                'module_id' => '3',
                'link_icon' => '',
                'order' => '10',
                'table_name' => 'curriculum_subject_equivallence',
                'func_action' => 'delete',
                'func_type' => 3,
                'allowed_roles' => "[1]",
                'status' => 'a',
                'created_at' => date('Y-m-d H:i:s')
            ],
          ];
          $db      = \Config\Database::connect();
          $builder = $db->table($this->table);
          $builder->insertBatch($data);
        }

        public function down()
        {
          $db      = \Config\Database::connect();
          $builder = $db->table($this->table);
          $db->simpleQuery('DELETE FROM '.$this->table.' WHERE id >= 52 AND id <= 61');

          // $builder->where('id', $id);
          // $builder->delete();
        }
}
