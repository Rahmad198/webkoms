<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        \App\Models\Admin::insert([
            [
                'name' => 'Admin',
                'email' => 'admin@komstek.com',
                'password' => bcrypt('adminkomstek123'),
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ],
        ]);
    }
}
