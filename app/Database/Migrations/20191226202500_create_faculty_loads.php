<?php namespace App\Database\Migrations;

class CreateFacultyLoads extends \CodeIgniter\Database\Migration {

        public function up()
        {
                $this->forge->addField([
                        'id'          => [
                                'type'           => 'BIGINT',
                                'constraint'     => '20',
                                'unsigned'       => TRUE,
                                'auto_increment' => TRUE
                        ],

                        'employee_id'          => [
                                'type'           => 'BIGINT',
                                'constraint'     => '20'
                        ],

                        'subject_offerring_id'          => [
                                'type'           => 'BIGINT',
                                'constraint'     => '20',
                        ],

                        'is_grade_submitted'          => [
                                'type'           => 'TINYINT',
                                'constraint'     => '1',
                        ],

                        'grade_save_at'          => [
                                'type'           => 'DATE'
                        ],

                        'grade_submitted_at'          => [
                                'type'           => 'DATE'
                        ],

                        'grade_updated_at'          => [
                                'type'           => 'DATE'
                        ],

                        'is_grade_finalized' => [
                                'type'           => 'TINYINT',
                                'constraint'     => '1'
                        ],

                        'date_grade_finalized'          => [
                                'type'           => 'DATETIME'
                        ],

                        'is_added_subject' => [
                                'type'           => 'TINYINT',
                                'constraint'     => '1'
                        ],

                        'date_subject_added' => [
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
                $this->forge->createTable('faculty_loads');
        }

        public function down()
        {
                $this->forge->dropTable('faculty_loads');
        }
}