<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::resource('posts',PostController::class);

Route::get('/link',function(){
Artisan::call('storage:link');

});