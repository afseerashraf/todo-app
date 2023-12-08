<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class Usertableseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::create([
            'user_name' => 'afseer',
            'password' => '12345',
        ]);
        User::create([
            'user_name' => 'nafiya',
            'password' => '1234',
        ]);
    }
}
