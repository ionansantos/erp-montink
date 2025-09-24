<?php

use Illuminate\Support\Facades\Route;
use Dedoc\Scramble\Scramble;

Route::get('/', function () {
    return view('welcome');
});



// para ignorar as rotas padrao 
// Scramble::registerUiRoute('docs/api');   
// Scramble::registerJsonSpecificationRoute('docs/api.json');

// Route::domain('docs.example.com')->group(function () {
//     Scramble::registerUiRoute('api');
//     Scramble::registerJsonSpecificationRoute('api.json');
// });