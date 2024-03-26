<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class office extends Model
{
    use HasFactory;

    private static $greeting = "Hello, Welcome To my Office";

    private static $employee = [
        [
            'nick' => 'ZID',
            'name' => 'Zidan Zaky',
            'email' => 'zzidanirfan@gmail.com',
            'rank' => 'Administrator',
            'about' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque nisi accusantium autem repellat maxime provident
            doloribus ad sunt facere illo nam eligendi porro, quis vero? Adipisci sed ex ullam dignissimos!'
        ],
        [
            'nick' => 'NAB',
            'name' => 'Nabil Diandra',
            'email' => 'nabilcool@gmail.com',
            'rank' => 'Member',
            'about' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque nisi accusantium autem repellat maxime provident
            doloribus ad sunt facere illo nam eligendi porro, quis vero? Adipisci sed ex ullam dignissimos!'
        ],
        [
            'nick' => 'ANF',
            'name' => 'Adelia Farida',
            'email' => 'adelianf@student.telkomuniversity.ac.id',
            'rank' => 'Salesman',
            'about' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque nisi accusantium autem repellat maxime provident
        doloribus ad sunt facere illo nam eligendi porro, quis vero? Adipisci sed ex ullam dignissimos!'
        ]
    ];

    public static function showAll()
    {
        return collect(self::$employee);
    }

    public static function find($nick)
    {
        $bio = static::showAll();
        return $bio->firstWhere('nick', $nick);
    }

    public static function getGreeting()
    {


        return self::$greeting;
    }


}
