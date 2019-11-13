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
            'description' => 'desc aja'
        ]);
        $user = App\User::create([
            'name' => 'aldi',
            'email' => 'aldi@aldi.aldi',
            'phone'=> '0123',
            'password' => bcrypt('123123123'),
            'role' => 0,
            'organizer_id' => $default->id,
            'accepted' => 1,
            'admin' => 1
        ]);

        App\User::create([
            'name' => 'anjar',
            'email' => 'anjar@anjar.anjar',
            'phone'=> '0123',
            'password' => bcrypt('123123123'),
            'role' => 0,
            'organizer_id' => $default->id
        ]);

        App\User::create([
            'name' => 'admin',
            'email' => 'admin@admin.admin',
            'phone'=> '0123',
            'password' => bcrypt('123123123'),
            'role' => 1
        ]);

        App\User::create([
            'name' => 'apid',
            'email' => 'apid@apid.apid',
            'phone'=> '0123',
            'password' => bcrypt('123123123'),
            'role' => 0,
            'organizer_id' => $default->id,
            'accepted' => 1
        ]);

    }
}
