<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;




Route::middleware()->group(function(){
    
Route::get('/dashboard', [ProjectController::class,'index']);

Route::get('logout',[ProjectController::class,'logout']);

Route::get('/add_project', [ProjectController::class,'addproject']);

Route::get('/my-plan', [ProjectController::class,'myplan']);
Route::get('/report', [ProjectController::class,'report']);

Route::get('/tester_report', [ProjectController::class,'testerreport']);

});

// Route::get('/posts',[ProjectController::class],'getPost');
Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('pages/index');
// })

require __DIR__.'/auth.php';
