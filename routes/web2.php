<?php

use App\Http\Controllers\FoodController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return ('Hello World');

// });
//tanpa controller
// Route::get('/', function () {
//     return view ('food'); 
// });

//dengan controller
Route::get('/', [FoodController::class, ''] );

// Route::get('/kampus', function(){
//     return view ('kampus');
// });