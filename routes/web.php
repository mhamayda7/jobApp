<?php

use App\Events\Sms;
use App\Http\Controllers\EmailController;
use App\Jobs\SendEmail;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

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
    // $test = new SendEmail();
    // $test->handle();

    // SendEmail::dispatch('Oday');
    // dispatch(function () {
    //     Mail::send('email', ['mes' => 'Oday'], function ($message) {
    //         $message->from('m.hamaida7@gmail.com', 'John Doe');
    //         $message->to('m.hamaida7@gmail.com', 'Oday Alqarra');
    //      });
    // })->afterResponse();
    // event(new Sms('hello world'));
    session(["age" => "25"]);
    Session::put(['name' => "ahmad"]);
    Log::warning("User log in");
    Log::error("Error from web");
    return view('welcome');
});

Route::get('/event', function () {
    // event(new Sms('hello world'));
    // return session("age");
    return Session::all();
    return view('welcome');
});
Route::get('email', [EmailController::class , 'index']);

