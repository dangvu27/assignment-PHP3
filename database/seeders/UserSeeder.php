<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [ 'user', 'admin'];
        foreach ($data as $key) {
            Role::create(['name' => $key]);
        }

        for ($i = 0; $i < 10; $i++) {
            User::create([
                'email' => fake()->email(),
                'password' => fake()->password(),
            ]);

            UserDetail::create([
                'user_id' => $i+1,
                'name' => fake()->name(),
                'date-of-birth' => fake()->dateTime(),
                'address' => fake()->address(),
                'phone' => fake()->phoneNumber(),
            ]);
        }



    }
}
