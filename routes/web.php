<?php

use App\Http\Controllers\SliderController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\CommitmentController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\ManagementController;
use App\Http\Controllers\QAController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return redirect(app()->getLocale());
});

Route::group([
    'prefix' => '{locale}',
    'where' => ['locale' => 'ar|en'],
    // 'middleware' => 'setlocale',
    'middleware' => ['setlocale', 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath','localeCookieRedirect'],
], function () {

    Route::get('/', function () {
        return view('welcome');
    })->name('welcome');
    Route::resource('slider', SliderController::class);


// Route::group(['prefix' => LaravelLocalization::setLocale()], function()
// {
// 	/** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
// 	Route::get('/', function()
// 	{
// 		return View::make('hello');
// 	});

// 	Route::get('test',function(){
// 		return View::make('test');
// 	});
// });

    // // Individual routes for SliderController
    // Route::get('slider', [SliderController::class, 'index'])->name('slider.index');
    // Route::get('slider/create', [SliderController::class, 'create'])->name('slider.create');
    // Route::post('slider', [SliderController::class, 'store'])->name('slider.store');

// Route::get('slider/{id}', [SliderController::class, 'show'])->name('slider.show');
// Route::get('slider/{id}/edit', [SliderController::class, 'edit'])->name('slider.edit');
// Route::put('slider/{id}', [SliderController::class, 'update'])->name('slider.update');
// Route::delete('slider/{id}', [SliderController::class, 'destroy'])->name('slider.destroy');

    // Route::resource('slider', SliderController::class);
    // Route::resource('aboutus', AboutUsController::class);
    // Route::resource('commitment', CommitmentController::class);
    // Route::resource('contactus', ContactUsController::class);
    // Route::resource('footer', FooterController::class);
    // Route::resource('management', ManagementController::class);
    // Route::resource('qa', QAController::class);
    // Route::resource('service', ServiceController::class);
    // Route::resource('user', UserController::class);
});
