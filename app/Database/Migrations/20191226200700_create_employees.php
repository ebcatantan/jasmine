<?php namespace App\Database\Migrations;

class CreateEmployees extends \CodeIgniter\Database\Migration {

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
                                'constraint'     => '20'
                        ],

                        'user_id'          => [
                                'type'           => 'BIGINT',
                                'constraint'     => '20',
                        ],

                        'employee_no'          => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '30',
                        ],

                        'employee_image'          => [
                                'type'           => 'TEXT'
                        ],

                        'title_prefix'          => [
                                'type'           => 'VARCHAR',
                                'constraint'        => '255',
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

                        'title_suffix'          => [
                                'type'           => 'VARCHAR',
                                'constraint'        => '50',
                        ],

                        'address'          => [
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

                        'date_employed'          => [
                                'type'           => 'DATE'
                        ],

                        'employment_status' => [
                                'type'           => 'TINYINT',
                                'constraint'     => '1'
                        ],

                        'is_faculty' => [
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
                $this->forge->createTable('employees');
        }

        public function down()
        {
                $this->forge->dropTable('employees');
        }
}