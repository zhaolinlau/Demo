<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 */
	public function run(): void
	{
		$users = [
			[
				'name' => 'admin',
				'email' => 'admin@gmail.com',
				'email_verified_at' => '2024-03-21 17:07:11',
				'password' => bcrypt('qweasdzxc'),
				'role' => 'admin'
			],
			[
				'name' => 'user',
				'email' => 'user@gmail.com',
				'email_verified_at' => '2024-03-21 17:07:11',
				'password' => bcrypt('qweasdzxc')
			]
		];

		foreach ($users as $user) {
			User::create($user);
		}
	}
}
