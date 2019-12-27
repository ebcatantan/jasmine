<?php namespace App\Database\Migrations;

class CreatestudentEnrolledSubjects extends \CodeIgniter\Database\Migration {

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
                                'constraint'    => '20'
                        ],

                        'subject_offering_id'          => [
                                'type'           => 'BIGINT',
                                'constraint'    => '20'
                        ],
                        
                        'enrollment_detail_id'          => [
                                'type'           => 'BIGINT',
                                'constraint'    => '20'
                        ],
                        
                        'academic_year_instance_id'          => [
                                'type'           => 'BIGINT',
                                'constraint'    => '20'
                        ],
                        
                        'date_enrolled'          => [
                                'type'           => 'DATE'
                        ],
                        
                        'is_added_subject'          => [
                                'type'           => 'TINYINT',
                                'constraint'    => '1'
                        ],
                        
                        'date_subject_added'          => [
                                'type'           => 'DATE'
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
                $this->forge->createTable('student_enrolled_subjects');
        }

        public function down()
        {
                $this->forge->dropTable('student_enrolled_subjects');
        }
}