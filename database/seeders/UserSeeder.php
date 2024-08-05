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
        for ($i = 0; $i < 30; $i++) {
            $user = User::create([
                'email' => fake()->email(),
                'password' => fake()->password(),
            ]);

            UserDetail::create([
                'user_id' => $user->id,
                'name' => fake()->name(),
                'date-of-birth' => fake()->dateTime(),
                'address' => fake()->address(),
                'phone' => fake()->phoneNumber(),
            ]);
        }
    }
}
