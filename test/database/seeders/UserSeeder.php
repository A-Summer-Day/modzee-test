<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\User;
use App\Image;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = file_get_contents(base_path('storage/json/landscapes.json'));

		$data = json_decode($json, true);
		
		
		$new_user = User::create([
			'name' => $data['name'],
			'phone' => $data['phone'],
			'email' => $data['email'],
			'bio' => $data['bio'],
			'profile_picture' => $data['profile_picture'],
		]);
		
		foreach($data['album'] as $image) {
			$new_image = Image::create([
				'title' => $image['title'],
				'description' => $image['description'],
				'img' => $image['img'],
				'date' => $image['date'],
				'featured' => $image['featured'],
			]);
			
			$new_user->images()->save($new_image);
		}
    }
}
