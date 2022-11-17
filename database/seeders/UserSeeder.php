<?php

namespace Database\Seeders;

use App\Models\Chat;
use App\Models\User;
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
        $chats = Chat::factory()->count(25)->create();
        for ($i = 1; $i <= 10; $i++) {
            User::factory()
                ->hasAttached($chats->shuffle()->take(5))
                ->create();
        }
    }
}
