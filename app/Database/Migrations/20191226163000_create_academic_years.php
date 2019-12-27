<?php namespace App\Database\Migrations;

class CreateAcademicYears extends \CodeIgniter\Database\Migration {

        public function up()
        {
                $this->forge->addField([
                        'id'          => [
                                'type'           => 'BIGINT',
                                'constraint'     => '20',
                                'unsigned'       => TRUE,
                                'auto_increment' => TRUE
                        ],
                        'ay_start_year'       => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '4',
                        ],
                        'ay_end_year'       => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '4',
                        ],
                        'function_id'       => [
                                'type'           => 'BIGINT',
                                'constraint'     => '20',
                        ],
                        'description' => [
                                'type'           => 'TEXT',
                                'null'           => TRUE,
                        ],

                        'is_accepting_examinee' => [
                                'type'           => 'TINYINT',
                                'constraint'     => '1',
                                'default'        => 0
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
                $this->forge->createTable('academic_years');
        }

        public function down()
        {
                $this->forge->dropTable('academic_years');
        }
}