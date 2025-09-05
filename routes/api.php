<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;

Route::get('/ping', function () {
    return response()->json(['status' => 'API is working!']);
});

Route::get('/users', function () {
    $users = User::all();
    return response()->json($users);
});
