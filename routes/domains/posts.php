<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Domain\Posts\Controllers\PostController;

Route::prefix(basename(__FILE__, '.php'))->group(function (){


    // Routes
    Route::controller(PostController::class)->group(function (){
        Route::get('', 'index');
        Route::get('{post}', 'show');
    });



});


