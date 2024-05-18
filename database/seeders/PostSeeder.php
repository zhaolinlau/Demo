<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 */
	public function run(): void
	{
		$posts = [
			[
				'user_id' => 1,
				'title' => 'this is sdw....',
				'content' => 'hahahahahahhahahhahah',
			],
			[
				'user_id' => 2,
				'title' => 'aaaaaaaaaaaaa',
				'content' => 'ssssssssssssssssssss',
			],
		];

		foreach ($posts as $post) {
			Post::create($post);
		}
	}
}
