<?php namespace App\Database\Migrations;

class CreateEnrollmentDetails extends \CodeIgniter\Database\Migration {

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
                                'constraint'     => '20'
                        ],

                        'course_id'          => [
                                'type'           => 'BIGINT',
                                'constraint'     => '20',
                        ],

                        'year_level'          => [
                                'type'           => 'TINYINT',
                                'constraint'     => '1',
                        ],

                        'section_id'          => [
                                'type'           => 'BIGINT',
                                'constraint'     => '20',
                        ],

                        'academic_year_instance_id'          => [
                                'type'           => 'BIGINT',
                                'constraint'     => '20',
                        ],

                        'enrolling_officer_id'          => [
                                'type'           => 'BIGINT',
                                'constraint'     => '20',
                                'comment'        => 'user id of the enrolling officers',
                        ],

                        'student_picture'          => [
                                'type'           => 'TEXT'
                        ],
                        
                        'date_enrolled'          => [
                                'type'           => 'DATE'
                        ],

                        'remarks'          => [
                                'type'           => 'TEXT'
                        ],

                        'is_balik_aral' => [
                                'type'           => 'TINYINT',
                                'constraint'     => '1'
                        ],

                        'is_transferee' => [
                                'type'           => 'TINYINT',
                                'constraint'     => '1'
                        ],

                        'is_cross_enrollee' => [
                                'type'           => 'TINYINT',
                                'constraint'     => '1'
                        ],

                        'is_fully_paid' => [
                                'type'           => 'TINYINT',
                                'constraint'     => '1'
                        ],

                        'is_medically_cleared' => [
                                'type'           => 'TINYINT',
                                'constraint'     => '1'
                        ],
                        
                        'is_finalalized' => [
                                'type'           => 'TINYINT',
                                'constraint'     => '1'
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
                $this->forge->createTable('enrollment_details');
        }

        public function down()
        {
                $this->forge->dropTable('enrollment_details');
        }
}