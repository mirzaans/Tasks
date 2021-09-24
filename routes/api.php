<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\http\Controllers\ProjectController;


Route::middleware()->group(function(){
Route::get('/authors',[ProjectController::class,'authors_list']);
Route::get('/authors/{author}',[ProjectController::class,'author_show']);

Route::get('/books',[ProjectController::class,'book_list']);
Route::get('/books/{id}',[ProjectController::class,'book_detail']);

});
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
 