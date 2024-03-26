<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\office;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */

    // contoh seeder
    public function run(): void
    {
        office::create([
            'nick' => 'ANF',
            'name' => 'Adelia Farida',
            'email' => 'adelianf@student.telkomuniversity.ac.id',
            'rank' => 'Salesman',
            'about' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque nisi accusantium autem repellat maxime provident
        doloribus ad sunt facere illo nam eligendi porro, quis vero? Adipisci sed ex ullam dignissimos!'

        ]);

        office::create([
            'nick' => 'NAB',
            'name' => 'Nabil Diandra',
            'email' => 'nabilcool@gmail.com',
            'rank' => 'Member',
            'about' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque nisi accusantium autem repellat maxime provident
            doloribus ad sunt facere illo nam eligendi porro, quis vero? Adipisci sed ex ullam dignissimos!'

        ]);

        office::create([
            'nick' => 'ZID',
            'name' => 'Zidan Zaky',
            'email' => 'zzidanirfan@gmail.com',
            'rank' => 'Administrator',
            'about' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque nisi accusantium autem repellat maxime provident
            doloribus ad sunt facere illo nam eligendi porro, quis vero? Adipisci sed ex ullam dignissimos!'

        ]);

    }

    // public function run(): void
    // {
    //  office::factory(10)->create();
    // }
}
