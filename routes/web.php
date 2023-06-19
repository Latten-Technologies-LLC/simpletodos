<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// DB
use Illuminate\Support\Facades\DB;

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
    return view('index');
})->name('index');

Route::get('/about', function () {
    return view('about');
})->name('about');

// Terms of service
Route::get('/terms', function () {
    return view('terms');
})->name('terms');

// Privacy policy
Route::get('/privacy', function () {
    return view('privacy');
})->name('privacy');

Route::post('/store', function(){
    // Update "Todo" from the request
    $id = ""; // This will be the specific id. User ID? or Users IP
    if(Auth::check()){
        $id = Auth::id();
    }else{
        $id = request()->ip();
    }

    // Check to see if a todo exists for the user
    $todo = DB::table('todo')->where('user_id', $id)->first();

    // If the todo does not exist, create it
    if(!$todo){
        DB::table('todo')->insert([
            'user_id' => $id,
            'title' => 'Todo',
            'description' => request()->todo
        ]);
        return;
    }

    // Update the "Todo" from the request using query builder
    DB::table('todo')->where('user_id', $id)->update([
        'description' => request()->todo
    ]);

    return;
    
})->name('store');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
