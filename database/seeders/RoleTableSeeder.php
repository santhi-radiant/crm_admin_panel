<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Admin Role
        //Role::create(['name' => 'Manager']);
        //Role::create(['name' => 'User']);
        $role=new Role;
        $role->name="Admin";
        $role->save();
        echo 'Admin role created';
        $permissions=Permission::get();
        foreach($permissions as $permission)
        {
            $role->givePermissionTo($permission->name);
            echo 'admin permissions added';
        }

        //Manager Role

        $role=new Role;
        $role->name="Manager";
        $role->save();
        echo 'Manager role created';
        $permissions=Permission::where('name','!=','Delete')->get();
        foreach($permissions as $permission)
        {
            $role->givePermissionTo($permission->name);
            echo 'manager permissions added';
        }
         //User Role

         $role=new Role;
         $role->name="User";
         $role->save();
         echo 'User role created';
         $permissions=Permission::where('name','=','List')->get();
         foreach($permissions as $permission)
         {
             $role->givePermissionTo($permission->name);
             echo 'User permissions added';
         }

    }
}
