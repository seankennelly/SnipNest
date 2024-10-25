<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   */
  public function run(): void
  {
    // User::factory(5)->create();
    $user = User::factory()->create([
      'name' => 'Testly Snipes',
      'email' => 'test@test.com',
      'password' => '123456'
    ]);

    // User::factory()->create([
    //     'name' => 'Test User',
    //     'email' => 'test@example.com',
    // ]);

    Listing::factory(6)->create([
      'user_id' => $user->id
    ]);

    // Listing::create([
    //   'title' => 'Sorting an array',
    //   'tags' => 'JavaScript',
    //   'company' => 'NA',
    //   'location' => 'NA',
    //   'email' => 'NA',
    //   'website' => 'NA',
    //   'description' => 'JavaScript provides an inbuilt sort() method that can be used to sort the elements inside an Array object. The code snippet below provided an example to sort numbers in ascending order.'
    // ]);
  }
}
