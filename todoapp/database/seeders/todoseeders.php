<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Todo;

class todoseeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Todo::create([
            'task' => 'goto school',
            'date' => '2023-11-22',
            'time' => '11:30',
        ]);
        Todo::create([
            'task' => 'goto shoping',
            'date' => '2023-11-23',
            'time' => '11:30',
        ]);

    }
}
