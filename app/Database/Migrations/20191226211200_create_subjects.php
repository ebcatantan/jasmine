<?php namespace App\Database\Migrations;

class CreateSubjects extends \CodeIgniter\Database\Migration {

        public function up()
        {
                $this->forge->addField([
                        'id'          => [
                                'type'           => 'BIGINT',
                                'constraint'     => '20',
                                'unsigned'       => TRUE,
                                'auto_increment' => TRUE
                        ],

                        'department_id'          => [
                                'type'           => 'BIGINT',
                                'constraint'     => '20',
                        ],

                        'course_id'          => [
                                'type'           => 'BIGINT',
                                'constraint'     => '20',
                        ],

                        'subject_code'          => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '20',
                        ],

                        'subject_title'          => [
                                'type'           => 'TEXT',
                        ],

                        'description'          => [
                                'type'           => 'TEXT',
                        ],

                        'units'          => [
                                'type'           => 'TINYINT',
                                'constraint'     => '2',
                        ],

                        'lecture_hour'          => [
                                'type'           => 'DOUBLE',
                        ],

                        'lab_hour'          => [
                                'type'           => 'DOUBLE',
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
                $this->forge->createTable('subjects');
        }

        public function down()
        {
                $this->forge->dropTable('subjects');
        }
}