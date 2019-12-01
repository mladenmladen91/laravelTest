<?php

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory('App\User',1000)->create()->each(function ($user) {
        $user->notes()->create(['name'=> "testing only"]);
    });
    }
}
