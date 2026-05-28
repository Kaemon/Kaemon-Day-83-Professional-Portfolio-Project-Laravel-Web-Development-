<?php

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/contact', function (Request $request) {
    $data = $request->validate([
        'name'    => 'required|string|max:100',
        'email'   => 'required|email|max:100',
        'message' => 'required|string|max:2000',
    ]);

    Mail::raw(
        "Name: {$data['name']}\nEmail: {$data['email']}\n\n{$data['message']}",
        function ($mail) use ($data) {
            $mail->to('kaemonng1017@gmail.com')
                 ->subject("Portfolio Contact from {$data['name']}")
                 ->replyTo($data['email'], $data['name']);
        }
    );

    return response()->json(['success' => true]);
});
