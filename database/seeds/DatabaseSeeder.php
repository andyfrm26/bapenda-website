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
            'name' => 'Admin',
            'email' => 'bapenda@jemberkab.go.id',
            'password' => Hash::make('!l3h*YL#3MI7i=I*rAte'),
        ]);
    }
}
