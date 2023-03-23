<?php

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
    // List videos in a given chanel, return an array of PHP objects
    $videoList = Youtube::listChannelVideos(env('YOUTUBE_CHANNEL_CODE'), 4);

    return view('welcome', [
        'videos' => $videoList,   
    ]);
});
