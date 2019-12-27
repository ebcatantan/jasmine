<?php namespace App\Database\Migrations;

class CreateStudentProfilingDetails extends \CodeIgniter\Database\Migration {

        public function up()
        {
                $this->forge->addField([
                        'id'          => [
                                'type'           => 'BIGINT',
                                'constraint'     => '20',
                                'unsigned'       => TRUE,
                                'auto_increment' => TRUE
                        ],

                        'student_id'          => [
                                'type'           => 'BIGINT',
                                'constraint'     => '20',
                        ],

                        'course_id'          => [
                                'type'           => 'BIGINT',
                                'constraint'     => '20',
                        ],

                        'curriculum_id'          => [
                                'type'           => 'BIGINT',
                                'constraint'     => '20',
                        ],

                        'academic_year_instance_id'          => [
                                'type'           => 'BIGINT',
                                'constraint'     => '20',
                        ],

                        'profiler_id'          => [
                                'type'           => 'BIGINT',
                                'constraint'     => '20',
                                'comment'       => 'user id of the profiler'
                        ],

                        'date_profiled'          => [
                                'type'           => 'DATE',
                        ],

                        'initial_section'          => [
                                'type'           => 'VARCHAR',
                                'constraint'    => '20',
                                'comment'       => 'section code of the initail section wher the student will be inlisted'
                        ],

                        'remarks'          => [
                                'type'           => 'TEXT',
                        ],

                        'status' => [
                                'type'           => 'CHAR',
                                'constraint'     => '1',
                                'default'        => 'a'
                        ],
                        
                        'created_at' => [
                                'type'           => 'DATETIME',
                                'comment'        => 'Date of creation',
                        ],

                        'updated_at' => [
                                'type'           => 'DATETIME',
                                'null'           => true,
                                'default'        => null,
                                'comment'        => 'Date last updated',
                        ],
                        'deleted_at' => [
                                'type'           => 'DATETIME',
                                'null'           => true,
                                'default'        => null,
                                'comment'        => 'Date of soft deletion',
                        ]
                ]);
                $this->forge->addKey('id', TRUE);
                $this->forge->createTable('student_profiling_details');
        }

        public function down()
        {
                $this->forge->dropTable('student_profiling_details');
        }
}