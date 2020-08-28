<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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


Route::get('/show', function() {
    $messages = App\Message::all();

    return view('show', ['messages' => $messages]);
});


Route::get('/send', function() {
    return view('send');
});


Route::post('/send', function(Request $request) {

    $message = new App\Message();

    $sender = $request->input('sender');
    if (!is_null($sender)) {
        $message->sender = $sender;
    }
    else {
        return back()->withInput();
    }

    $text = $request->input('message');
    if(!is_null($text)) {
        $message->message = $text;
    } else {
        return back()->withInput();
    }

    $message->save();

    return back()->withInput();
})->name('send');
