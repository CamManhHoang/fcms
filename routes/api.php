<?php

use App\Events\MessagePosted;

Route::group(['middleware' => 'guest'], function () {
    Route::post('/register', 'Auth\RegisterController@create');
    Route::post('/login', 'Auth\LoginController@login');
});

Route::group(['middleware' => 'auth:api'], function () {
    Route::get('/user', [
        'uses' => 'Auth\LoginController@index',
    ]);
    Route::get('/logout', function (){
        Auth::logout();
    });
    Route::resource('contacts', 'ContactController');

    Route::get('/messages', function () {
        return App\Models\Message::with('user')->get();
    });

    Route::post('/messages', function () {
        $user = Auth::user();
        $message = $user->messages()->create([
            'message' => request()->get('message')
        ]);

        broadcast(new MessagePosted($message, $user))->toOthers();

        return ['status' => 'OK'];
    });
});
