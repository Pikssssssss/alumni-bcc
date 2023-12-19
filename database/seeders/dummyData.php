<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class dummyData extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $usersData = [
            [


                'kontak' => 'p',
                'foto' => '1.jpg',
                'username' => 'Adminsirs',
                'nama' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' =>bcrypt('12345')
            ],


            ];


            foreach($usersData as $key => $val) {

                Admin::create($val);

            }
    }
}
