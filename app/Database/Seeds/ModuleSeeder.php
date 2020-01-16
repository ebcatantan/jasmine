<?php namespace App\Database\Seeds;

class ModuleSeeder extends \CodeIgniter\Database\Seeder
{
        public $table = 'modules';

        public function run()
        {
                $data = [
                    [
                        'module_name' => 'user management',
                        'module_description' => 'user management',
                        'module_icon' => '<i class="fas fa-users-cog"></i>',
                        'order' => 1,
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'module_name' => 'Profiling',
                        'module_description' => 'Profiling',
                        'module_icon' => '<i class="fas fa-user-cog"></i>',
                        'order' => 6,
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ]
                ];
                $db      = \Config\Database::connect();
                $builder = $db->table($this->table);
                $builder->insertBatch($data);
        }
}
