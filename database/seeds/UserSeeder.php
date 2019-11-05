<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // $faker = Faker\Factory::create('id_ID');
        // for($i=0;$i<20;$i++) {
        //     App\User::create([
        //         'name' => $faker->name,
        //         'email' => $faker->email,
        //         'password' => bcrypt('123123'),
        //         'role' => $faker->numberBetween(0,2)
        //     ]);
        // }
        $default = App\Organizer::create([
            'name' => 'DEFAULT',
            'picture' => 'ceritanya gambar',
            'desc' => 'desc aja'
        ]);
        $user = App\User::create([
            'name' => 'aldi',
            'email' => 'aldi@aldi.aldi',
            'password' => bcrypt('123123'),
            'role' => 0,
            'organizer_id' => 1,
            'accepted' => 1,
            'admin' => 1
        ]);

        App\User::create([
            'name' => 'anjar',
            'email' => 'anjar@anjar.anjar',
            'password' => bcrypt('123123'),
            'role' => 0,
            'organizer_id' => 1
        ]);

        App\User::create([
            'name' => 'admin',
            'email' => 'admin@admin.admin',
            'password' => bcrypt('123123'),
            'role' => 1
        ]);

        App\User::create([
            'name' => 'apid',
            'email' => 'apid@apid.apid',
            'password' => bcrypt('123123'),
            'role' => 0,
            'organizer_id' => 1,
            'accept' => 1
        ]);

    }
}
