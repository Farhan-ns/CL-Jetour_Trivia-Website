<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::where('email', 'admin@cyberlabs.co.id')->first();

        if (empty($admin)) {
            User::create([
                'email' => 'admin@cyberlabs.co.id',
                'name' => 'Super Admin',
                'password' => 'E5iu6Qzt',
            ]);
        }
    }
}
