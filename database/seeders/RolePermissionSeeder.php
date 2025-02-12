<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // membuat beberapa role
        // membuat default user untuk super admin

        $ownerRole = Role::create(['name' => 'owner']);

        $studentRole = Role::create(['name' => 'student']);

        $teacherRole = Role::create(['name' => 'teacher']);

        // akun super admin untuk mengelola data awal
        // data kategori, kelas, dsb
        $userOwner = User::create([
            'name' => 'Sadrach Harmasantyo',
            'occupation' => 'Educator',
            'avatar' => 'images/default-avatar.png',
            'email' => 'sadrach@owner.com',
            'password' => bcrypt('rahasia'),
        ]);

        $userOwner->assignRole($ownerRole);
    }
}
