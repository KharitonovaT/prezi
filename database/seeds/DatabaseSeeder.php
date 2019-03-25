<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
          'name' => 'admin',
          'email' => 'admin@gmail.com',
          'password' => bcrypt('admin123'),
      ]);
      DB::table('users')->insert([
        'name' => 'user',
        'email' => 'user@gmail.com',
        'password' => bcrypt('123456'),
    ]);
    }
}
