<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        User::create([
           'name' => 'Administrator',
           'role_id' => 1,
           'email' => 'admin@admin.com',
           'password' => bcrypt('123123123'),
            'phone' => '0781245896',
            'avatar' => '',
            'status' => 1,
            'email_verified_at' => now(),
        ]);

        factory(User::class, 20)->create();
    }
}
