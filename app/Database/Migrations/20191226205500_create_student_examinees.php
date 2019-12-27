<?php namespace App\Database\Migrations;

class CreateStudentExaminees extends \CodeIgniter\Database\Migration {

        public function up()
        {
                $this->forge->addField([
                        'id'          => [
                                'type'           => 'BIGINT',
                                'constraint'     => '20',
                                'unsigned'       => TRUE,
                                'auto_increment' => TRUE
                        ],

                        'first_course_id'          => [
                                'type'           => 'BIGINT',
                                'constraint'     => '20',
                                'comment'       => 'academic year when this student started attending in this school'
                        ],

                        'second_course_id'          => [
                                'type'           => 'BIGINT',
                                'constraint'     => '20',
                        ],

                        'academic_year_id'          => [
                                'type'           => 'BIGINT',
                                'constraint'     => '20',
                        ],

                        'examinee_no'          => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '50',
                        ],

                        'exam_schedule_id'          => [
                                'type'           => 'DATETIME'
                        ],

                        'last_name'          => [
                                'type'           => 'VARCHAR',
                                'constraint'        => '100',
                        ],

                        'first_name'          => [
                                'type'           => 'VARCHAR',
                                'constraint'        => '100',
                        ],

                        'middle_name'          => [
                                'type'           => 'VARCHAR',
                                'constraint'        => '100',
                        ],

                        'extension_name'          => [
                                'type'           => 'VARCHAR',
                                'constraint'        => '100',
                        ],

                        'address'          => [
                                'type'           => 'TEXT'
                        ],

                        'barangay'          => [
                                'type'           => 'TEXT'
                        ],

                        'email'          => [
                                'type'           => 'VARCHAR',
                                'constraint'        => '50',
                        ],

                        'contact_no'          => [
                                'type'           => 'VARCHAR',
                                'constraint'        => '20',
                        ],

                        'birth_date'          => [
                                'type'           => 'DATE'
                        ],

                        'birth_place'          => [
                                'type'           => 'TEXT'
                        ],

                        'gender'          => [
                                'type'           => 'VARCHAR',
                                'constraint'        => '1',
                        ],

                        'civil_status'          => [
                                'type'           => 'VARCHAR',
                                'constraint'        => '20',
                        ],

                        'maiden_name'          => [
                                'type'           => 'VARCHAR',
                                'constraint'        => '100',
                        ],

                        'height'          => [
                                'type'           => 'SMALLINT',
                                'constraint'        => '6',
                        ],

                        'weight'          => [
                                'type'           => 'SMALLINT',
                                'constraint'        => '6',
                        ],

                        'religion'          => [
                                'type'           => 'TEXT'
                        ],


                        'last_school_attended' => [
                                'type'           => 'TEXT',
                        ],

                        'last_school_address' => [
                                'type'           => 'TEXT',
                        ],

                        'examination_score'          => [
                                'type'           => 'INT',
                                'constraint'        => '5',
                        ],

                        'isProfiled'          => [
                                'type'           => 'TINYINT',
                                'constraint'        => '1',
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
                $this->forge->createTable('student_examinees');
        }

        public function down()
        {
                $this->forge->dropTable('student_examinees');
        }
}