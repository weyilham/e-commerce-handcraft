<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // Permission::create([
        //     'name' => 'Tambah Data',
        // ]);

        Role::create([
            'name' => 'Admin',
        ]);

        Role::create([
            'name' => 'Customer',
        ]);

        // $roleAdmin = Role::findByName('Admin');
        // $roleAdmin->givePermissionTo('Tambah Data');
    }
}
