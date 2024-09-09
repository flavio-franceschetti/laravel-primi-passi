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
            "poster" => "/img/inception.jpg",
            "cast" => ["Leonardo DiCaprio", "Joseph Gordon-Levitt", "Ellen Page"]
        ],
        [
            "titolo" => "The Matrix",
            "poster" => "/img/matrix.jpg",
            "cast" => ["Keanu Reeves", "Laurence Fishburne", "Carrie-Anne Moss"]
        ],
        [
            "titolo" => "Interstellar",
            "poster" => "/img/interstellar.jpg",
            "cast" => ["Matthew McConaughey", "Anne Hathaway", "Jessica Chastain"]
        ]
    ];

    // $films = [];

    // dump($films);

    return view('home', compact('title', 'films'));
});
