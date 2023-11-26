<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\TestimonialController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('Masterlayout');
// });
Route::get('/', [HomeController::class, 'Home']);

//Route::get('/Home', [HomeController::class, 'Home']);
Route::get('/AboutSection', [AboutController::class, 'AboutSection']);
Route::get('/Service', [ServiceController::class, 'Service']);
Route::get('/Portfolio', [PortfolioController::class, 'Portfolio']);
Route::get('/Testimonial', [TestimonialController::class, 'Testimonial']);
Route::get('/Blog', [BlogController::class, 'Blog']);
Route::get('/Skills', [SkillsController::class, 'Skills']);
Route::get('/Contact', [ContactController::class, 'Contact']);



