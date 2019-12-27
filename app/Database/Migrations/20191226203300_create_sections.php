<?php namespace App\Database\Migrations;

class CreateSections extends \CodeIgniter\Database\Migration {

        public function up()
        {
                $this->forge->addField([
                        'id'          => [
                                'type'           => 'BIGINT',
                                'constraint'     => '20',
                                'unsigned'       => TRUE,
                                'auto_increment' => TRUE
                        ],

                        'curriculum_id'          => [
                                'type'           => 'BIGINT',
                                'constraint'     => '20'
                        ],

                        'course_id'          => [
                                'type'           => 'BIGINT',
                                'constraint'     => '20',
                        ],

                        'academic_year_instance_id'          => [
                                'type'           => 'BIGINT',
                                'constraint'     => '20',
                        ],

                        'section_code'          => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '20',
                        ],

                        'section_name'          => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '20',
                        ],

                        'shift'          => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '20',
                        ],

                        'max_no_student'          => [
                                'type'           => 'SMALLINT',
                                'constraint'     => '6',
                        ],


                        'section_status' => [
                                'type'           => 'CHAR',
                                'constraint'     => '1',
                                'default'        => 'o'
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
                $this->forge->createTable('sections');
        }

        public function down()
        {
                $this->forge->dropTable('sections');
        }
}