<?php namespace App\Database\Migrations;

class CreateStudents extends \CodeIgniter\Database\Migration {

        public function up()
        {
                $this->forge->addField([
                        'id'          => [
                                'type'           => 'BIGINT',
                                'constraint'     => '20',
                                'unsigned'       => TRUE,
                                'auto_increment' => TRUE
                        ],

                        'academic_year_instance_id'          => [
                                'type'           => 'BIGINT',
                                'constraint'     => '20',
                                'comment'       => 'academic year when this student started attending in this school'
                        ],

                        'student_examinee_id'          => [
                                'type'           => 'BIGINT',
                                'constraint'     => '20',
                        ],

                        'user_id'          => [
                                'type'           => 'BIGINT',
                                'constraint'     => '20',
                        ],

                        'profiller_id'          => [
                                'type'           => 'BIGINT',
                                'constraint'     => '20',
                                'comment'       => 'user id of the profiler'
                        ],

                        'student_no'          => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '30',
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

                        'year_profiled'          => [
                                'type'           => 'DATE'
                        ],

                        'father_name' => [
                                'type'           => 'TEXT',
                        ],

                        'father_occupation' => [
                                'type'           => 'TEXT',
                        ],

                        'mother_name' => [
                                'type'           => 'TEXT',
                        ],
                        
                        'mother_occupation' => [
                                'type'           => 'TEXT',
                        ],

                        'guadian' => [
                                'type'           => 'TEXT',
                        ],

                        'relation_guardian' => [
                                'type'           => 'TEXT',
                        ],

                        'guardian_contact_no'          => [
                                'type'           => 'VARCHAR',
                                'constraint'        => '20',
                        ],

                        'voter_id'          => [
                                'type'           => 'VARCHAR',
                                'constraint'        => '100',
                        ],

                        'person_to_notify'          => [
                                'type'           => 'TEXT',
                                'constraint'        => '100',
                        ],


                        'emergency_no'          => [
                                'type'           => 'VARCHAR',
                                'constraint'        => '20',
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
                $this->forge->createTable('students');
        }

        public function down()
        {
                $this->forge->dropTable('students');
        }
}