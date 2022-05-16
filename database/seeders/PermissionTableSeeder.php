<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            Permission::create(['name' => 'Create']);
            Permission::create(['name' => 'List']);
            Permission::create(['name' => 'Edit']);
            Permission::create(['name' => 'Delete']);

    }
}
