<?php namespace App\Database\Migrations;

class CreateStudentGrades extends \CodeIgniter\Database\Migration {

        public function up()
        {
                $this->forge->addField([
                        'id'          => [
                                'type'           => 'BIGINT',
                                'constraint'     => '20',
                                'unsigned'       => TRUE,
                                'auto_increment' => TRUE
                        ],

                        'student_subject_enrolled_id'          => [
                                'type'           => 'BIGINT',
                                'constraint'     => '20',
                        ],

                        'academic_year_instance_id'          => [
                                'type'           => 'BIGINT',
                                'constraint'     => '20',
                        ],

                        'employee_id'          => [
                                'type'           => 'BIGINT',
                                'constraint'     => '20',
                                'comment'       => 'employee id of the professor'
                        ],

                        'midterm'          => [
                                'type'           => 'VARCHAR',
                                'constraint'    => '5'
                        ],

                        'finals'          => [
                                'type'           => 'VARCHAR',
                                'constraint'    => '5'
                        ],

                        'final_grade'          => [
                                'type'           => 'VARCHAR',
                                'constraint'    => '5'
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
                $this->forge->createTable('student_grades');
        }

        public function down()
        {
                $this->forge->dropTable('student_grades');
        }
}