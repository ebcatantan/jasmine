<?php namespace App\Database\Migrations;

class CreateUniversitySettingsPermission extends \CodeIgniter\Database\Migration {

        private $table = 'permissions';
        public function up()
        {

          $data = [
              // START OF BUILDING
              [
                  'id' => 14,
                  'function_name' => 'show building details',
                  'function_description' => 'show building details',
                  'slugs' => 'show-building',
                  'name_on_class' => 'show_building',
                  'page_title' => 'building details',
                  'module_id' => '2',
                   'link_icon' => '',
                  'order' => 1,
                  'table_name' => 'buildings',
                  'func_action' => 'show',
                  'func_type' => 3,
                  'allowed_roles' => "[1]",
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 15,
                  'function_name' => 'create building account',
                  'function_description' => 'create building account',
                  'slugs' => 'add-building',
                  'name_on_class' => 'add_building',
                  'page_title' => 'create a building account',
                  'module_id' => '2',
                  'link_icon' => '',
                  'order' => 2,
                  'table_name' => 'buildings',
                  'func_action' => 'add',
                  'func_type' => 3,
                  'allowed_roles' => "[1]",
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 16,
                  'function_name' => 'list of buildings',
                  'function_description' => 'list of buildings',
                  'slugs' => 'list-building',
                  'name_on_class' => 'index',
                  'page_title' => 'list of buildings',
                  'module_id' => '2',
                  'link_icon' => '<i class="fas fa-building"></i>',
                  'order' => 3,
                  'table_name' => 'buildings',
                  'func_action' => 'link',
                  'func_type' => 1,
                  'allowed_roles' => "[1]",
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 17,
                  'function_name' => 'edit building account',
                  'function_description' => 'edit building account',
                  'slugs' => 'edit-building',
                  'name_on_class' => 'edit_building',
                  'page_title' => 'edit building account',
                  'module_id' => '2',
                  'link_icon' => '',
                  'order' => 4,
                  'table_name' => 'buildings',
                  'func_action' => 'edit',
                  'func_type' => 3,
                  'allowed_roles' => "[1]",
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 18,
                  'function_name' => 'delete building account',
                  'function_description' => 'delete building account',
                  'slugs' => 'delete-building',
                  'name_on_class' => 'delete_building',
                  'page_title' => 'delete building account',
                  'module_id' => '2',
                  'link_icon' => '',
                  'order' => 5,
                  'table_name' => 'buildings',
                  'func_action' => 'delete',
                  'func_type' => 3,
                  'allowed_roles' => "[1]",
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              // END OF BUILDING
              // START OF ROOMS
              [
                  'id' => 19,
                  'function_name' => 'show room details',
                  'function_description' => 'show room details',
                  'slugs' => 'show-room',
                  'name_on_class' => 'show_room',
                  'page_title' => 'room details',
                  'module_id' => '2',
                   'link_icon' => '',
                  'order' => 6,
                  'table_name' => 'rooms',
                  'func_action' => 'show',
                  'func_type' => 3,
                  'allowed_roles' => "[1]",
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 20,
                  'function_name' => 'create room account',
                  'function_description' => 'create room account',
                  'slugs' => 'add-room',
                  'name_on_class' => 'add_room',
                  'page_title' => 'create a room account',
                  'module_id' => '2',
                  'link_icon' => '',
                  'order' => 7,
                  'table_name' => 'rooms',
                  'func_action' => 'add',
                  'func_type' => 3,
                  'allowed_roles' => "[1]",
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 21,
                  'function_name' => 'list of rooms',
                  'function_description' => 'list of rooms',
                  'slugs' => 'list-room',
                  'name_on_class' => 'index',
                  'page_title' => 'list of rooms',
                  'module_id' => '2',
                  'link_icon' => '<i class="fas fa-door-open"></i>',
                  'order' => 8,
                  'table_name' => 'rooms',
                  'func_action' => 'link',
                  'func_type' => 1,
                  'allowed_roles' => "[1]",
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 22,
                  'function_name' => 'edit room account',
                  'function_description' => 'edit room account',
                  'slugs' => 'edit-room',
                  'name_on_class' => 'edit_room',
                  'page_title' => 'edit room account',
                  'module_id' => '2',
                  'link_icon' => '',
                  'order' => 9,
                  'table_name' => 'rooms',
                  'func_action' => 'edit',
                  'func_type' => 3,
                  'allowed_roles' => "[1]",
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 23,
                  'function_name' => 'delete room account',
                  'function_description' => 'delete room account',
                  'slugs' => 'delete-room',
                  'name_on_class' => 'delete_room',
                  'page_title' => 'delete room account',
                  'module_id' => '2',
                  'link_icon' => '',
                  'order' => 10,
                  'table_name' => 'rooms',
                  'func_action' => 'delete',
                  'func_type' => 3,
                  'allowed_roles' => "[1]",
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              // END OF ROOMS
              // START OF COLLEGES
              [
                  'id' => 24,
                  'function_name' => 'show college details',
                  'function_description' => 'show college details',
                  'slugs' => 'show-college',
                  'name_on_class' => 'show college',
                  'page_title' =>  'college details',
                  'module_id' => '2',
                   'link_icon' => '',
                  'order' => 11,
                  'table_name' => 'colleges',
                  'func_action' => 'show',
                  'func_type' => 3,
                  'allowed_roles' => "[1]",
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 25,
                  'function_name' => 'create college account',
                  'function_description' => 'create college account',
                  'slugs' => 'add-college',
                  'name_on_class' => 'add_college',
                  'page_title' => 'create a college account',
                  'module_id' => '2',
                  'link_icon' => '',
                  'order' => 12,
                  'table_name' => 'colleges',
                  'func_action' => 'add',
                  'func_type' => 3,
                  'allowed_roles' => "[1]",
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 26,
                  'function_name' => 'list of colleges',
                  'function_description' => 'list of colleges',
                  'slugs' => 'list-college',
                  'name_on_class' => 'index',
                  'page_title' => 'list of colleges',
                  'module_id' => '2',
                  'link_icon' => '<i class="fas fa-school"></i>',
                  'order' => 13,
                  'table_name' => 'colleges',
                  'func_action' => 'link',
                  'func_type' => 1,
                  'allowed_roles' => "[1]",
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 27,
                  'function_name' => 'edit college account',
                  'function_description' => 'edit college account',
                  'slugs' => 'edit-college',
                  'name_on_class' => 'edit_college',
                  'page_title' => 'edit college account',
                  'module_id' => '2',
                  'link_icon' => '',
                  'order' => 14,
                  'table_name' => 'colleges',
                  'func_action' => 'edit',
                  'func_type' => 3,
                  'allowed_roles' => "[1]",
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 28,
                  'function_name' => 'delete college account',
                  'function_description' => 'delete college account',
                  'slugs' => 'delete-college',
                  'name_on_class' => 'delete_college',
                  'page_title' => 'delete college account',
                  'module_id' => '2',
                  'link_icon' => '',
                  'order' => 15,
                  'table_name' => 'colleges',
                  'func_action' => 'delete',
                  'func_type' => 3,
                  'allowed_roles' => "[1]",
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              // END OF COLLEGES
              // START OF SEMESTERS
              [
                  'id' => 29,
                  'name_on_class' => 'list_of_semester',
                  'function_name' => 'list of semester',
                  'function_description' => 'list of semester',
                  'slugs' => 'list-of-semester',
                  'page_title' => 'list of semester',
                  'module_id' => '2',
                  'link_icon' => '<i class="fas fa-box"></i>',
                  'order' => 16,
                  'table_name' => 'semesters',
                  'func_action' => 'link',
                  'func_type' => 1,
                  'allowed_roles' => '[1,2]',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 30,
                  'name_on_class' => 'add_semester',
                  'function_name' => 'add semester',
                  'function_description' => 'add semester',
                  'slugs' => 'add-semester',
                  'page_title' => 'add semester',
                  'module_id' => '2',
                  'link_icon' => '',
                  'order' => 17,
                  'table_name' => 'semesters',
                  'func_action' => 'add',
                  'func_type' => 3,
                  'allowed_roles' => '[1,2]',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 31,
                  'name_on_class' => 'edit_semester',
                  'function_name' => 'edit semester',
                  'function_description' => 'edit semester',
                  'slugs' => 'edit-semester',
                  'page_title' => 'edit semester',
                  'module_id' => '2',
                  'link_icon' => '',
                  'order' => 18,
                  'table_name' => 'semesters',
                  'func_action' => 'edit',
                  'func_type' => 3,
                  'allowed_roles' => '[1,2]',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 32,
                  'name_on_class' => 'delete_semester',
                  'function_name' => 'delete semester',
                  'function_description' => 'delete semester',
                  'slugs' => 'delete-semester',
                  'page_title' => 'delete semester',
                  'module_id' => '2',
                  'link_icon' => '',
                  'order' => 19,
                  'table_name' => 'semesters',
                  'func_action' => 'delete',
                  'func_type' => 3,
                  'allowed_roles' => '[1,2]',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              // END OF SEMSETERS
              // START OF SUBJECTS
              [
                  'id' => 33,
                  'name_on_class' => 'list_of_subjects',
                  'function_name' => 'list of subjects',
                  'function_description' => 'list of subject',
                  'slugs' => 'list-of-subject',
                  'page_title' => 'list of subject',
                  'module_id' => '2',
                  'link_icon' => '<i class="far fa-address-card"></i>',
                  'order' => 20,
                  'table_name' => 'subjects',
                  'func_action' => 'link',
                  'func_type' => 1,
                  'allowed_roles' => '[1]',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 34,
                  'function_name' => 'show_subject',
                  'function_description' => 'show subjects',
                  'slugs' => 'show-',
                  'name_on_class' => 'show_subject',
                  'page_title' => 'subject details',
                  'module_id' => '1',
                  'link_icon' => '',
                  'order' => 21,
                  'table_name' => 'subjects',
                  'func_action' => 'show',
                  'func_type' => 3,
                  'allowed_roles' => "[1]",
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 35,
                  'name_on_class' => 'add_subjects',
                  'function_name' => 'add subjects',
                  'function_description' => 'add subject',
                  'slugs' => 'add-subject',
                  'page_title' => 'add subject',
                  'module_id' => '2',
                  'link_icon' => '',
                  'order' => 22,
                  'table_name' => 'subjects',
                  'func_action' => 'add',
                  'func_type' => 3,
                  'allowed_roles' => '[1]',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 36,
                  'name_on_class' => 'edit_subjects',
                  'function_name' => 'edit subjects',
                  'function_description' => 'edit subject',
                  'slugs' => 'edit-subject',
                  'page_title' => 'edit subject',
                  'module_id' => '2',
                  'link_icon' => '',
                  'order' => 23,
                  'table_name' => 'subjects',
                  'func_action' => 'edit',
                  'func_type' => 3,
                  'allowed_roles' => '[1]',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 37,
                  'name_on_class' => 'delete_subjects',
                  'function_name' => 'delete subjects',
                  'function_description' => 'delete subject',
                  'slugs' => 'delete-subject',
                  'page_title' => 'delete subject',
                  'module_id' => '2',
                  'link_icon' => '',
                  'order' => 24,
                  'table_name' => 'subjects',
                  'func_action' => 'delete',
                  'func_type' => 3,
                  'allowed_roles' => '[1]',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              // END OF SUBJECTS
              // START OF COURSES
              [
                  'id' => 38,
                  'function_name' => 'show course details',
                  'function_description' => 'show course details',
                  'slugs' => 'show-course',
                  'name_on_class' => 'show_course',
                  'page_title' => 'course details',
                  'module_id' => '2',
                   'link_icon' => '',
                  'order' => 25,
                  'table_name' => 'courses',
                  'func_action' => 'show',
                  'func_type' => 3,
                  'allowed_roles' => "[1]",
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 39,
                  'function_name' => 'create course account',
                  'function_description' => 'create course account',
                  'slugs' => 'add-course',
                  'name_on_class' => 'add_course',
                  'page_title' => 'create a course account',
                  'module_id' => '2',
                  'link_icon' => '',
                  'order' => 26,
                  'table_name' => 'courses',
                  'func_action' => 'add',
                  'func_type' => 3,
                  'allowed_roles' => "[1]",
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 40,
                  'function_name' => 'list of courses',
                  'function_description' => 'list of courses',
                  'slugs' => 'list-course',
                  'name_on_class' => 'index',
                  'page_title' => 'list of courses',
                  'module_id' => '2',
                  'link_icon' => '<i class="fas fa-id-card-alt"></i>',
                  'order' => 27,
                  'table_name' => 'courses',
                  'func_action' => 'link',
                  'func_type' => 1,
                  'allowed_roles' => "[1]",
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 41,
                  'function_name' => 'edit course account',
                  'function_description' => 'edit course account',
                  'slugs' => 'edit-course',
                  'name_on_class' => 'edit_course',
                  'page_title' => 'edit course account',
                  'module_id' => '2',
                  'link_icon' => '',
                  'order' => 28,
                  'table_name' => 'courses',
                  'func_action' => 'edit',
                  'func_type' => 3,
                  'allowed_roles' => "[1]",
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 42,
                  'function_name' => 'delete course account',
                  'function_description' => 'delete course account',
                  'slugs' => 'delete-course',
                  'name_on_class' => 'delete_course',
                  'page_title' => 'delete course account',
                  'module_id' => '2',
                  'link_icon' => '',
                  'order' => 29,
                  'table_name' => 'courses',
                  'func_action' => 'delete',
                  'func_type' => 3,
                  'allowed_roles' => "[1]",
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              // END OF COURSES
              // START OF DEPARTMENT
              [
                  'id' => 43,
                  'function_name' => 'show department details',
                  'function_description' => 'show department details',
                  'slugs' => 'show-department',
                  'name_on_class' => 'show_department',
                  'page_title' => 'department details',
                  'module_id' => '2',
                   'link_icon' => '',
                  'order' => 30,
                  'table_name' => 'departments',
                  'func_action' => 'show',
                  'func_type' => 3,
                  'allowed_roles' => "[1]",
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 44,
                  'function_name' => 'create department account',
                  'function_description' => 'create department account',
                  'slugs' => 'add-department',
                  'name_on_class' => 'add_department',
                  'page_title' => 'create a department account',
                  'module_id' => '2',
                  'link_icon' => '',
                  'order' => 31,
                  'table_name' => 'departments',
                  'func_action' => 'add',
                  'func_type' => 3,
                  'allowed_roles' => "[1]",
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 45,
                  'function_name' => 'list of departments',
                  'function_description' => 'list of departments',
                  'slugs' => 'list-department',
                  'name_on_class' => 'index',
                  'page_title' => 'list of departments',
                  'module_id' => '2',
                  'link_icon' => '<i class="fas fa-window-maximize"></i>',
                  'order' => 32,
                  'table_name' => 'departments',
                  'func_action' => 'link',
                  'func_type' => 1,
                  'allowed_roles' => "[1]",
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 46,
                  'function_name' => 'edit department account',
                  'function_description' => 'edit department account',
                  'slugs' => 'edit-department',
                  'name_on_class' => 'edit_department',
                  'page_title' => 'edit department account',
                  'module_id' => '2',
                  'link_icon' => '',
                  'order' => 33,
                  'table_name' => 'departments',
                  'func_action' => 'edit',
                  'func_type' => 3,
                  'allowed_roles' => "[1]",
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 47,
                  'function_name' => 'delete department account',
                  'function_description' => 'delete department account',
                  'slugs' => 'delete-department',
                  'name_on_class' => 'delete_department',
                  'page_title' => 'delete department account',
                  'module_id' => '2',
                  'link_icon' => '',
                  'order' => 34,
                  'table_name' => 'departments',
                  'func_action' => 'delete',
                  'func_type' => 3,
                  'allowed_roles' => "[1]",
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              // END OF DEPARTMENT
          ];
          $db      = \Config\Database::connect();
          $builder = $db->table($this->table);
          $builder->insertBatch($data);
        }

        public function down()
        {
          $db      = \Config\Database::connect();
          $builder = $db->table($this->table);
          $db->simpleQuery('DELETE FROM '.$this->table.' WHERE id >= 14 AND id <= 32');

          // $builder->where('id', $id);
          // $builder->delete();
        }
}