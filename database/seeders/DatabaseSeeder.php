<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Task;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Task::insert([
            ['text' => 'Comprar leite'],
            ['text' => 'Comprar pão'],
            ['text' => 'Comprar café'],
            ['text' => 'Comprar chocolate'],
            ['text' => 'Comprar banana'],
            ['text' => 'Comprar maçã'],
            ['text' => 'Comprar uva'],
            ['text' => 'Comprar abacaxi'],
            ['text' => 'Comprar melancia'],
            ['text' => 'Comprar melão'],
        ]);
    }
}
