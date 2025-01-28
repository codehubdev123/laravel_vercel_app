<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/testget', function () {
    $data = [
        'id' => 1,
        'name' => 'ahmed',
        'email' => 'test@mail.com',
    ];
    return response()->json([
        'status' => true,
        'message' => 'Hello from get',
        'data' => $data,
    ]);
});

Route::post('/testpost', function () {
    return response()->json(['status' => true, 'message' => 'Data has been created']);
});
