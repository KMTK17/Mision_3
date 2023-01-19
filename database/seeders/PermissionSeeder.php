<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionSedder extends Seeder
{


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $admin = Role::Create([
            'name' => 'admin'
        ]);

        $trainer = Role::create([
            'name' => 'trainer'
        ]);

        Permission::Create([
            'name' => 'list sports'
        ]);
        Permission::Create([
            'name' => 'create sports'
        ]);
        Permission::Create([
            'name' => 'update sports'
        ]);
        Permission::Create([
            'name' => 'delete sports'
        ]);
    }
}