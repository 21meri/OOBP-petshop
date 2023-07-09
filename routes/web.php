<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\WorkerController;
use App\Http\Controllers\AdoptionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::middleware([
    'auth:sanctum',
    'verified'
])->get('/', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::middleware([
        'auth:sanctum',
        'verified'])->get('cats',[CatController::class,'index'])->name('cats');

        Route::middleware([
            'auth:sanctum',
            'verified'])->get('add_cat',[CatController::class,'create'])->name('add_cat');

            Route::middleware([
                'auth:sanctum',
                'verified'])->post('store_cat',[CatController::class,'store'])->name('store_cat');
        
    

    
           
        
Route::middleware(['auth:sanctum', 'verified'])->post('delete_cat', [CatController::class, 'delete'])->name('delete_cat');
Route::middleware(['auth:sanctum', 'verified'])->post('edit_cat', [CatController::class, 'edit'])->name('edit_cat');    
Route::middleware(['auth:sanctum', 'verified'])->post('update_cat', [CatController::class, 'update'])->name('update_cat');  

Route::middleware([
    'auth:sanctum',
    'verified'])->post('file_add',[CatController::class,'file_add'])->name('file_add');


    Route::middleware([
        'auth:sanctum',
        'verified'])->post('process',[CatController::class,'process'])->name('process');
    
    


        Route::middleware([
            'auth:sanctum',
            'verified'])->get('brands',[BrandController::class,'index'])->name('brands');

            Route::middleware([
                'auth:sanctum',
                'verified'])->get('workers',[WorkerController::class,'index'])->name('workers');

                
            Route::middleware([
                'auth:sanctum',
                'verified'])->get('adoptions',[AdoptionController::class,'index'])->name('adoptions');
    