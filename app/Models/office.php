<?php

namespace App\Models;

class office
{
    private static $greeting = "Hello, Welcome To my Office";

    private static $employee = [
        [
            'name' => 'Zidan Zaky',
            'email' => 'zzidanirfan@gmail.com',
            'rank' => 'Administrator',
            'nick' => 'ZID',
            'about' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque nisi accusantium autem repellat maxime provident
            doloribus ad sunt facere illo nam eligendi porro, quis vero? Adipisci sed ex ullam dignissimos!'
        ],
        [
            'name' => 'Nabil Diandra',
            'email' => 'nabilcool@gmail.com',
            'rank' => 'Member',
            'nick' => 'NAB',
            'about' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque nisi accusantium autem repellat maxime provident
            doloribus ad sunt facere illo nam eligendi porro, quis vero? Adipisci sed ex ullam dignissimos!'
        ],
        [
            'name' => 'Farhan Sangsoko Putro',
            'email' => 'farhans@gmail.com',
            'rank' => 'Analyst',
            'nick' => 'HAN',
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
