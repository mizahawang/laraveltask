<?php

namespace Database\Seeders;

use App\Models\Users;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       

        \App\Models\User::factory()->count(10)->create()->each(function ($user) {
            $user->profile()->create([
                'user_id' => $user->id
            ]);
        });

        //\App\Models\Article::factory()->count(30)->create()

        //factory(App\Models\Article::class, 30)->create();

        //\App\Models\Users::factory(10)->create();

    }
}
