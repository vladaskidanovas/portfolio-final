<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Mail\ContactForm;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
|
    ██████              ██████
  ██░░░░░░██████████████░░░░░░██
  ██░░░░░░░░░░░░░░░░░░░░░░░░░░██
    ████░░░░░░░░░░░░░░░░░░████
    ██░░████░░░░░░░░░░████░░██
  ██░░░░████░░░░░░░░░░████░░░░██
  ██░░░░░░░░██████████░░░░░░░░██
  ██░░░░░░██░░░░░░░░░░██░░░░░░██
  ██░░░░░░██░░██░░██░░██░░░░░░██
  ██░░░░░░██░░░░░░░░░░██░░░░░░██
    ██░░░░░░██████████░░░░░░██
    ██░░░░░░░░░░░░░░░░░░░░░░██
      ██░░██░░░░░░░░░░██░░██
      ██░░░░██████████░░░░██
      ██░░░░██      ██░░░░██
      ████████      ████████
*/


Route::get('/', function () {
    return view('pages.welcome');
})->name("welcome");

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/portfolio', function () {
    return view('pages.portfolio');
})->name('portfolio');

Route::get('/blog', function () {
    return view('pages.blog');
})->name('blog');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');

Route::post('/send_message', [ContactController::class, 'send_message']);
