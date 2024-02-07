<?php

namespace Database\Seeders;

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
      \App\Models\User::factory(5)->create();

      Listing::factory(10)->create();
      // Listing::create([
      //    'title' => 'Laravel Senior Developer',
      //    'tags' => 'laravel, javascript',
      //    'company' => 'Acme Corp',
      //    'location' => 'Boston MA',
      //    'email' => 'example@mail.com',
      //    'website' => 'www.acme.com',
      //    'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum praesentium sed      
      //    dolore reprehenderit maiores unde excepturi quas, incidunt dignissimos illo quasi nisi necessitatibus iure aut itaque a vel inventore ut doloribus atque repudiandae reiciendis nostrum! Sed fuga ut cum ullam.'
      // ]);

      //    Listing::create([
      //    'title' => 'Full Stack Web Developer',
      //    'tags' => 'laravel, javascript',
      //    'company' => 'Stark Corp',
      //    'location' => 'Pittsburg PL',
      //    'email' => 'sample@mail.com',
      //    'website' => 'www.stark.com',
      //    'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum praesentium sed dolore reprehenderit maiores unde excepturi quas, incidunt dignissimos illo quasi nisi necessitatibus iure aut itaque a vel inventore ut doloribus atque repudiandae reiciendis nostrum! Sed fuga ut cum ullam.'
      // ]);
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
