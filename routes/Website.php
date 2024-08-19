<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Website\Controller\WebsiteController;
use App\Modules\Blog\Controller\BlogController;

Route::resource('/', WebsiteController::class);
Route::get('/about', [WebsiteController::class,'about']);
Route::get('/vision', [WebsiteController::class,'vision']);
Route::get('/story', [WebsiteController::class,'story']);
Route::get('/team', [WebsiteController::class,'team']);
Route::get('/news-and-updates', [WebsiteController::class,'news']);
Route::get('/documents', [WebsiteController::class,'documents']);
Route::get('/projects', [WebsiteController::class,'projects']);
Route::get('/services', [WebsiteController::class,'services']);
Route::get('/careers', [WebsiteController::class,'careers']);
Route::get('/contact', [WebsiteController::class,'contact']);


Route::get('/solutions-cbg', [WebsiteController::class,'solutions_cbg']);
Route::get('/solutions-cbg-epc', [WebsiteController::class,'solutions_cbg_epc']);
Route::get('/solutions-cbg-consultancy', [WebsiteController::class,'solutions_cbg_consultancy']);
Route::get('/solutions-cbg-usage', [WebsiteController::class,'solutions_cbg_usage']);


//--------------Blog----------
Route::get('/blog', [BlogController::class,'blog']);
