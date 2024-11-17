<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about.index', ["name" => "Himanshu"]);
});

Route::get('/teas', function () {
    $teas = getTeas(); // Use a helper function for tea data
    return view('teas.index', compact('teas'));
});

Route::get('/teas/{id}', function ($id) {
    $teas = getTeas();
    $tea = collect($teas)->firstWhere('id', $id); // Use collection for safety
    if (!$tea) {
        abort(404); // Handle invalid tea ID
    }
    return view('teas.teadetail', compact('tea'));
});

// Define the teas in a separate function
if (!function_exists('getTeas')) {
    function getTeas()
    {
        return [
            ["name" => "Masala Tea", "price" => 100, "id" => 1],
            ["name" => "Ginger Tea", "price" => 150, "id" => 2],
            ["name" => "Assam Tea", "price" => 200, "id" => 3],
            ["name" => "Black Tea", "price" => 250, "id" => 4],
        ];
    }
}
