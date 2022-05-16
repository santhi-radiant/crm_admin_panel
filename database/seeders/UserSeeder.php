<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user= User::create([
            'name'=>'santhi',
            'email'=>'santhi.g@radiantcloud.co',

            'email_verified_at'=>now(),

            'password'=>Hash::make('santhi@123'),
        ]);
        $user->assignRole('User');
    }
}
