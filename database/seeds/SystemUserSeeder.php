<?php

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\User;

class SystemUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->delete();
        /**
         * Real data
         */

        $admin = new User();
        $admin->firstName = 'Mohamed';
        $admin->lastName = 'Abed';
        $admin->profileTitle = '';
        $admin->gender = 'Male';
        $admin->dateOfBirth =  '1990-01-01';
        $admin->type = 'Admin';
        $admin->status = 1;
        $admin->email = 'system@lms.net';
        $admin->password = bcrypt('system@lms.net');
        $admin->save();

    }
}