<?php

namespace Database\Seeders;

use App\Models\LoginCredential;
use App\Models\OfficialRole;
use App\Models\Official;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ImportantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $entry = OfficialRole::where('name', 'Super Admin')->first();

        if(!$entry)
        {
            OfficialRole::insert([
                'id' => 1,
                'name' => 'Super Admin',
                'description' => 'Super Admin has all access to do.',
                'created_at' => '2023-08-06 15:50:06',
                'updated_at' => '2023-08-06 15:50:06',
            ]);
        }

        $entry = Official::where('name', 'Developer')->first();

        if(!$entry)
        {
            Official::insert([
                'id' => 0,
                'name' => 'Developer',
                'image' => NULL,
                'role_id' => 1,
                'gender' => 'Other',
                'personal_phone' => '01840208832',
                'working_phone' => NULL,
                'emergency_phone' => '01633394589',
                'emergency_relationship' => 'Someone Special',
                'present_address' => 'Road 6, Sector 9, Uttara, Dhaka-1230',
                'permanent_address' => '1',
                'nationality_certificate' => 'Birth Certificate',
                'nationality_number' => '45616516584',
                'salary' => 150000,
                'manager' => NULL,
                'date_of_birth' => '1997-06-05',
                'personal_email' => 'salmajahansahara@gmail.com',
                'working_email' => 'dev@tjr.com',
                'status' => NULL,
                'department' => 'Manager',
                'approved_by' => 1,
                'joining_date' => '2023-08-04',
                'created_at' => '2023-08-06 15:51:16',
                'updated_at' => '2023-08-06 15:51:16',
                'deleted_at' => NULL,
                'ip_address' => NULL,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => NULL,
            ]);
        }

        $entry = Official::where('name', 'Admin')->first();

        if(!$entry)
        {
            Official::insert([
                'id' => 1,
                'name' => 'Admin',
                'image' => null,
                'role_id' => 1,
                'gender' => 'Other',
                'personal_phone' => '01633394589',
                'working_phone' => null,
                'emergency_phone' => '01678054659',
                'emergency_relationship' => 'Mother',
                'present_address' => '118/6 North Kafrul, Kafrul, Dhaka-1206',
                'permanent_address' => 'Kushtia',
                'nationality_certificate' => 'NID',
                'nationality_number' => '6463772118',
                'salary' => 50000,
                'manager' => null,
                'date_of_birth' => '1999-05-04',
                'personal_email' => 'tahmidmahbub168@gmail.com',
                'working_email' => 'admin@tjr.com',
                'status' => null,
                'department' => 'Manager',
                'approved_by' => 1,
                'joining_date' => '2023-08-04',
                'created_at' => '2023-08-06 15:45:54',
                'updated_at' => '2023-08-06 15:45:54',
                'deleted_at' => null,
                'ip_address' => null,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => null,
            ]);
        }


        $entry = LoginCredential::where('user_id', 0)->first();

        if(!$entry)
        {
            LoginCredential::insert([
                'id' => 0,
                'role' => 'official',
                'user_id' => 0,
                'email' => 'dev@tjr.com',
                'phone' => '01840208832',
                'username' => 'developer',
                'password' => '12345678',
                'verified' => 'yes',
                'status' => 'active',
                'created_at' => '2023-08-06 16:09:56',
                'updated_at' => '2023-08-06 16:09:56',
            ]);
        }


        $entry = LoginCredential::where('user_id', 1)->first();

        if(!$entry)
        {
            LoginCredential::insert([
                'id' => 1,
                'role' => 'official',
                'user_id' => 1,
                'email' => 'admin@tjr.com',
                'phone' => '01633394859',
                'username' => 'admin',
                'password' => '12345678',
                'verified' => 'yes',
                'status' => 'active',
                'created_at' => '2023-08-06 16:09:56',
                'updated_at' => '2023-08-06 16:09:56',
            ]);
        }
    }
}
