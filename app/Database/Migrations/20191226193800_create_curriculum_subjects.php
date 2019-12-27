<?php namespace App\Database\Migrations;

class CreateCurriculumSubjects extends \CodeIgniter\Database\Migration {

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

                        'semester_id'          => [
                                'type'           => 'BIGINT',
                                'constraint'     => '20'
                        ],

                        'subject_id'          => [
                                'type'           => 'BIGINT',
                                'constraint'     => '20'
                        ],
                        
                        'year_level'          => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '255'
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
                $this->forge->createTable('curriculum_subjects');
        }

        public function down()
        {
                $this->forge->dropTable('curriculum_subjects');
        }
}