<?php

use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;

Route::get('/', function () {
    return view('welcome');
});

Route::get('check-queue', function () {
    Mail::to('chikodi543@gmail.com')->send(new TestMail());

    return 'working';
});
