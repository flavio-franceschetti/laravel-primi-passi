<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $title = 'All Films';

    $films = [
        [
            "titolo" => "Inception",
            "poster" => "/Users/flavio/Desktop/booleanes/LARAVEL/laravel-primi-passi/public/img/inception.jpg",
            "cast" => ["Leonardo DiCaprio", "Joseph Gordon-Levitt", "Ellen Page"]
        ],
        [
            "titolo" => "The Matrix",
            "poster" => "/public/img/matrix.jpg",
            "cast" => ["Keanu Reeves", "Laurence Fishburne", "Carrie-Anne Moss"]
        ],
        [
            "titolo" => "Interstellar",
            "poster" => "/Users/flavio/Desktop/booleanes/LARAVEL/laravel-primi-passi/public/img/interstellar.jpg",
            "cast" => ["Matthew McConaughey", "Anne Hathaway", "Jessica Chastain"]
        ]
    ];

    // $films = [];

    // dump($films);

    return view('home', compact('title', 'films'));
});
