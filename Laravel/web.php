<?php 
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/users', function () {
    $users = User::all();

    return view('users', compact('users'));
});