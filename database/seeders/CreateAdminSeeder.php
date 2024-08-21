<?php

namespace Database\Seeders;

use App\Models\UserAdmin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class CreateAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UserAdmin::query()->create([
            'name' => 'admin',
            'username' => 'admin',
            'email' => 'admin@hangkenh.vn',
            'password' => Hash::make('admin@123')
        ]);
    }
}
