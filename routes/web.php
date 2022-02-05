<?php

use App\Events\LoginEvent;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use App\Models\User;
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
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/call/event',function(){
    $user=auth()->user();
    //dd($user);
    event(new LoginEvent($user));
})->name('call.event');

Route::get('/seed/database',function(){

    Artisan::call('migrate:fresh',['--seed'=>true]);

});

Route::get('/all/user',function(){

   // $users=User::where('id','!=',null)->delete();

   $users=User::query()->cursor()->count();

    return $users;
});