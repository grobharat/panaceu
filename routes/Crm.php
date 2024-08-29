<?php


use App\Models\FollowUp;
use App\Modules\Crm\Controller\CustomerController;
use App\Modules\Crm\Controller\FollowupController;
use Illuminate\Support\Facades\Route;
use App\Modules\Crm\Controller\CrmController;
use App\Modules\Crm\Controller\CountryController;
use App\Modules\Crm\Controller\StateController;
use App\Modules\Crm\Controller\DistrictController;
use App\Modules\Crm\Controller\TehsilController;



Route::middleware(['role:admin'])->group(function () {
    // Route::get('/dashboard', function () {
    //     return 'Dashboard';
    // });
      
    // Route::get('/users', function () {
    //     return 'Users';
    // });

    Route::group(['prefix'=>'crm'], function(){ 
        Route::resource('/', CrmController::class,['names' => 'crm']);
        Route::resource('/dashboard', CrmController::class,['names' => 'crm']);
        Route::get('/country', [CountryController::class,'index']);
        Route::post('/country', [CountryController::class,'store']);
        Route::get('/state', [StateController::class,'index']);
        Route::post('/state', [StateController::class,'store']);
        Route::get('/district', [DistrictController::class,'index']);
        Route::post('/dictrict', [DistrictController::class,'store']);
        Route::get('/tehsil', [TehsilController::class,'index']);
        Route::post('/tehsil', [TehsilController::class,'store']);
        Route::get('/leads', [CustomerController::class,'index']);
        Route::post('/leads', [CustomerController::class,'store']);
        Route::get('/followups', [FollowupController::class,'index']);
        
    });
});

