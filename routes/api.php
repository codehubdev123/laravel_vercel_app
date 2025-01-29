<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::get('/products', function () {
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

Route::post('/products', function () {
    return response()->json(['status' => true, 'message' => 'Data has been created']);
});
