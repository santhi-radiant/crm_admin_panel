<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $user= User::create([
            'name'=>'admin',
            'email'=>'admin@radiantcloud.co',
            'email_verified_at'=>now(),
            'password'=>Hash::make('admin@123'),
        ]);
        $user->assignRole('Admin');
    }
}
