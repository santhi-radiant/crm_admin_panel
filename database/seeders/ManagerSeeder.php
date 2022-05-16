<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;


class ManagerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user= User::create([
            'name'=>'manager',
            'email'=>'manager@radiantcloud.co',

            'email_verified_at'=>now(),

            'password'=>Hash::make('manager@123'),
        ]);
        $user->assignRole('Manager');
    }
}
