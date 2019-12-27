<?php namespace App\Database\Migrations;

class CreateAcademicYearInstances extends \CodeIgniter\Database\Migration {

        public function up()
        {
                $this->forge->addField([
                        'id'          => [
                                'type'           => 'BIGINT',
                                'constraint'     => '20',
                                'unsigned'       => TRUE,
                                'auto_increment' => TRUE
                        ],
                        'academic_year_id'       => [
                                'type'           => 'BIGINT',
                        ],

                        'semester_id'       => [
                                'type'           => 'BIGINT',
                        ],

                        'semester_start_date'       => [
                                'type'           => 'DATE',
                        ],

                        'enrollment_start_date' => [
                                'type'           => 'DATE',
                        ],

                        'enrollment_end_date' => [
                                'type'           => 'DATE',
                        ],

                        'is_block_enrollment' => [
                                'type'           => 'DATE',
                        ],

                        'remarks' => [
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
                $this->forge->createTable('academic_year_instances');
        }

        public function down()
        {
                $this->forge->dropTable('academic_year_instances');
        }
}