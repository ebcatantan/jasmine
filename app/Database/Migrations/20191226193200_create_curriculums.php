<?php namespace App\Database\Migrations;

class CreateCurriculums extends \CodeIgniter\Database\Migration {

        public function up()
        {
                $this->forge->addField([
                        'id'          => [
                                'type'           => 'BIGINT',
                                'constraint'     => '20',
                                'unsigned'       => TRUE,
                                'auto_increment' => TRUE
                        ],

                        'academic_year_id'          => [
                                'type'           => 'BIGINT',
                                'constraint'     => '20',
                                'comment'        => 'academic year when this curriculum was used',
                        ],

                        'course_id'          => [
                                'type'           => 'BIGINT',
                                'constraint'     => '20'
                        ],

                        'curriculum_code'       => [
                                'type'           => 'VARCHAR',
                                'constraint'    => '10'
                        ],
                        
                        'title'       => [
                                'type'           => 'VARCHAR',
                                'constraint'    => '255'
                        ],
                        
                        'is_finalized'       => [
                                'type'           => 'TINYINT',
                                'constraint'    => '1'
                        ],
                        
                        'is_active_curriculum'       => [
                                'type'           => 'TINYINT',
                                'constraint'    => '1'
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
                $this->forge->createTable('curriculums');
        }

        public function down()
        {
                $this->forge->dropTable('curriculums');
        }
}