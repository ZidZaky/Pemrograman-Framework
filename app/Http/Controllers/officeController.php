<?php

namespace App\Http\Controllers;

use App\Models\office;
use Illuminate\Http\Request;

class officeController extends Controller
{
    public static function index()
    {
        return view('/profile', [
            'greeting' => office::getGreeting(),
            'employee' => office::showAll()
        ]);
    }

    public static function showBio($nick)
    {
        $bio = office::find($nick);
        return view('bio', [
            'bio' => $bio,
            'greeting' => office::getGreeting()
        ]);
    }
}
