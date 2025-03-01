<?php

use App\Http\Controllers\DetailsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/form', function () {
    return view('pdf.template');
});


Route::post('/print',[DetailsController::class,'print'])->name('print');
Route::get('/download',[DetailsController::class,'download'])->name('download');