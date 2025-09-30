<?php

use Illuminate\Support\Facades\Route;
use App\Models\Task;

Route::get('/', function () {
    return view('welcome');
});

// Como é um início com testes de apenas testes de APIs vamos fazer o básico
Route::get('/somar/{a}/{b}', function ($a, $b) {
    return $a + $b;
});

Route::get('/info', function () {
    $data = [
        'name' => 'Fulano da Silva',
        'age' => 20,
        'email' => 'fulano@email.com',
    ];

    return response()->json($data, 200);
});

Route::get('/tasks', function () {
    return  Task::where('id', '>', 2)->paginate(5);
});