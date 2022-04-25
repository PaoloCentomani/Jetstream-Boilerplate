<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * The administrators to be seeded.
     *
     * @var array
     */
    protected $administrators = [
        ['first_name' => 'Paolo', 'last_name' => 'Centomani', 'email' => 'paolo.centomani@example.com'],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->administrators as $user) {
            User::factory()->administrator()->create($user);
        }

        User::factory()->count(50)->user()->create();
    }
}
