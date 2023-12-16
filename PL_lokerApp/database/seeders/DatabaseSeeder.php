<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'nis' => '111111111111',
            'address' => 'Tasikmalaya',
            'angkatan' => '-',
            'noHp' => '081223333555',
            'email' => 'admin@localhost.com',
            'role' => 'admin',
            'password' =>bcrypt('admin') ,
            
        ]);
     
    }
}
