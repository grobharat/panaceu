<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Website\Controller\WebsiteController;

Route::resource('/', WebsiteController::class);
Route::get('/about', [WebsiteController::class,'about']);
Route::get('/vision', [WebsiteController::class,'vision']);
Route::get('/story', [WebsiteController::class,'story']);
Route::get('/team', [WebsiteController::class,'team']);
Route::get('/news-and-updates', [WebsiteController::class,'news']);
Route::get('/projects', [WebsiteController::class,'projects']);
Route::get('/services', [WebsiteController::class,'services']);
Route::get('/careers', [WebsiteController::class,'careers']);
