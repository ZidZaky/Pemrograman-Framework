<?php

use App\Http\Controllers\officeController;
use App\Models\office;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index', ['greeting' => office::getGreeting()]);
});

Route::get('/aboutus', function () {
    return view('aboutus', ['greeting' => office::getGreeting()]);
});

Route::get('/portofolio', function () {
    return view('portofolio');
});

Route::get('/profile/bio/{nick}', [officeController::class, 'showBio']);

Route::get('/dashboard', function () {
    return view(
        'dashboard'
    );
});

// Route::get('/profile', function () {
//     return view(
//         'profile',
//         ['nama' => 'Zidan Irfan  Zaky',
//         'nim' => '1201220003',
//         'kelas' => 'SE-05-01',
//         'asal' => 'Sidoarjo',
//         'greeting' => office::getGreeting()
//         ]
//     );
// });

Route::get('/profile', [officeController::class, 'index']);
