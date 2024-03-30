<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      $user =  User::factory()->create([
            'email'=>'admin@gamil.com',
            'password'=>'password',
        ]);

        $user->admin()->create();
    }
}
