<?php namespace App\Database\Migrations;

class CreateSubjectOfferings extends \CodeIgniter\Database\Migration {

        public function up()
        {
                $this->forge->addField([
                        'id'          => [
                                'type'           => 'BIGINT',
                                'constraint'     => '20',
                                'unsigned'       => TRUE,
                                'auto_increment' => TRUE
                        ],

                        'employee_id'          => [
                                'type'           => 'BIGINT',
                                'constraint'     => '20',
                                'comment'       => 'employee id of the professor that will handle the subject'
                        ],

                        'academic_year_instance_id'          => [
                                'type'           => 'BIGINT',
                                'constraint'     => '20',
                        ],

                        'course_id'          => [
                                'type'           => 'BIGINT',
                                'constraint'     => '20',
                        ],
                        
                        'section_id'          => [
                                'type'           => 'BIGINT',
                                'constraint'     => '20',
                        ],
                        
                        'curriculum_subject_id'          => [
                                'type'           => 'BIGINT',
                                'constraint'     => '20',
                        ],

                        
                        'room_id'          => [
                                'type'           => 'BIGINT',
                                'constraint'     => '20',
                        ],
                        
                        'grade_submitted_by_id'          => [
                                'type'           => 'BIGINT',
                                'constraint'     => '20',
                        ],
                        
                        'grade_finalized_by_id'          => [
                                'type'           => 'BIGINT',
                                'constraint'     => '20',
                        ],

                        'labday'          => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '100',
                        ],

                        'labday_time'          => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '100',
                        ],

                        'lecture_day'          => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '100',
                        ],

                        'lecture_time'          => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '100',
                        ],

                        'allowed_no_student'          => [
                                'type'           => 'SMALLINT',
                                'constraint'    => '6'
                        ],

                        'so_status'          => [
                                'type'           => 'CHAR',
                                'constraint'    => '1',
                                'default'       => 'o'
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
                $this->forge->createTable('subject_offerings');
        }

        public function down()
        {
                $this->forge->dropTable('subject_offerings');
        }
}