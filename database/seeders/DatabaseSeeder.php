<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();

        Listing::factory(6)->create();

        // Listing::create([
        //     "title" => "Laravel Senior Dev eloper",
        //     "tags" => "laravel, javacsript",
        //     "company" => "Acme Corp",
        //     "location" => "Boston, MA",
        //     "email" => "email1@email.com",
        //     "website" => "https://www.acme.com",
        //     "description" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nobis esse eius, nulla sit, aliquid, accusantium iste odio magni voluptatum nisi dolorem ratione harum veniam magnam corporis obcaecati ab quam suscipit."
        // ]);

        // Listing::create([
        //     "title" => "2Laravel Senior Developer",
        //     "tags" => "2laravel, javacsript",
        //     "company" => "2Acme Corp",
        //     "location" => "2Boston, MA",
        //     "email" => "2email1@email.com",
        //     "website" => "2https://www.acme.com",
        //     "description" => "2Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nobis esse eius, nulla sit, aliquid, accusantium iste odio magni voluptatum nisi dolorem ratione harum veniam magnam corporis obcaecati ab quam suscipit."
        // ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
