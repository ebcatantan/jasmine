<?php namespace App\Database\Migrations;

class CreateRooms extends \CodeIgniter\Database\Migration {

        public function up()
        {
                $this->forge->addField([
                        'id'          => [
                                'type'           => 'BIGINT',
                                'constraint'     => '20',
                                'unsigned'       => TRUE,
                                'auto_increment' => TRUE
                        ],

                        'building_id'          => [
                                'type'           => 'BIGINT',
                                'constraint'     => '20'
                        ],

                        'room_code'          => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '30'
                        ],

                        'room_name'          => [
                                'type'           => 'TEXT'
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
                $this->forge->createTable('rooms');
        }

        public function down()
        {
                $this->forge->dropTable('rooms');
        }
}