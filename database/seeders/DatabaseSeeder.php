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

    User::factory()->create([
        'name' => 'Adam Test',
        'email' => 'test@example.com',
        'password' => '123456'
    ]);

    Listing::factory(6)->create([
      'user_id' => $user->id
    ]);
  }
}
