<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TasksSeeder extends Seeder
{
    public function run()
    {
        $this->db->table('users')->insert([
            'username' => 'demo',
            'full_name' => 'Demo User',
            'email' => 'demo@example.com',
            'password' => password_hash('password123', PASSWORD_DEFAULT),
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        $this->db->table('tasks')->insertBatch([
            ['title' => 'Review project requirements', 'description' => 'Read the assessment instructions.', 'task_date' => date('Y-m-d'), 'status' => 'Pending'],
            ['title' => 'Test login and logout', 'description' => 'Verify the authentication workflow.', 'task_date' => date('Y-m-d', strtotime('+1 day')), 'status' => 'In Progress'],
            ['title' => 'Prepare submission links', 'description' => 'Check GitHub and the hosted application.', 'task_date' => date('Y-m-d', strtotime('+2 days')), 'status' => 'Pending'],
        ]);
    }
}
