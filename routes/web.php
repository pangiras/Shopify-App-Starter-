<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\SettingController;    
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/login', function () {
    if (Auth::user()) {
        return redirect()->route('home');
    }
    return view('login');
})->name('login');

Route::middleware(['auth.shopify'])->group(function () {
    Route::get('/', function () {
        return view('dashboard');
    })->name('home');
    Route::view('/orders','orders');
    Route::view('/customers','customers');
    Route::view('/settings','settings');
    Route::post('configureTheme',[SettingController::class,'configureTheme']);

    Route::get('/test', function(){

        $shop = Auth::user();
        $shopApi = $shop->api()->rest('GET', '/admin/shop.json')['body']['shop'];
        return json_encode($shopApi);

    });

    // Other routes that need the shop user
});


