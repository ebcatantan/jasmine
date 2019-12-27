<?php namespace App\Database\Migrations;

class CreateDepartments extends \CodeIgniter\Database\Migration {

        public function up()
        {
                $this->forge->addField([
                        'id'          => [
                                'type'           => 'BIGINT',
                                'constraint'     => '20',
                                'unsigned'       => TRUE,
                                'auto_increment' => TRUE
                        ],

                        'college_id'          => [
                                'type'           => 'BIGINT',
                                'constraint'     => '20'
                        ],

                        'department_head_id'          => [
                                'type'           => 'BIGINT',
                                'constraint'     => '20',
                                'comment'        => 'user id of the department head',
                        ],

                        'department_code'          => [
                                'type'           => 'VARCHAR',
                                'constraint'        => '20',
                        ],

                        'department_name'          => [
                                'type'           => 'VARCHAR',
                                'constraint'        => '255',
                        ],

                        'description'          => [
                                'type'           => 'TEXT'
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
                $this->forge->createTable('departments');
        }

        public function down()
        {
                $this->forge->dropTable('departments');
        }
}