<?php

namespace Database\Seeders;

use App\Models\UserAdmin;
use App\Models\UserRole;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreateUserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
//        UserRole::query()->truncate();
        UserRole::query()->insert([
            [
                'name' => 'SuperAdmin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Marketing',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Content',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
        $admin = UserAdmin::find(1);
        $admin->role_id = 1;
        $admin->save();
    }
}
