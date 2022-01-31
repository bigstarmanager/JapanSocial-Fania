<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;

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

Route::get('/', [PagesController::class, 'index']);
Route::get('/main_page', [PagesController::class, 'main_page'])->name('main_page');
Route::get('/sitemap_page', [PagesController::class, 'sitemap_page'])->name('sitemap_page');
Route::get('/about_page', [PagesController::class, 'about_page'])->name('about_page');

Route::resource('/blog', PostsController::class);

Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/search', [PostsController::class, 'search'])->name('search');


// userpage
Route::get('/user_profile', [PagesController::class, 'user_profile'])->name('user_profile');
Route::get('/participating_club', [PagesController::class, 'participating_club'])->name('participating_club');
Route::get('/participating_club__free', [PagesController::class, 'participating_club__free'])->name('participating_club__free');
Route::get('/creator_info', [PagesController::class, 'creator_info'])->name('creator_info');
Route::get('/account_setting', [PagesController::class, 'account_setting'])->name('account_setting');
Route::get('/profile_edit', [PagesController::class, 'profile_edit'])->name('profile_edit');
Route::get('/invite_friend', [PagesController::class, 'invite_friend'])->name('invite_friend');
Route::get('/coin_charge', [PagesController::class, 'coin_charge'])->name('coin_charge');
Route::get('/what_register', [PagesController::class, 'what_register'])->name('what_register');
Route::get('/user_coin_balance', [PagesController::class, 'user_coin_balance'])->name('user_coin_balance');
Route::get('/user_coin_history', [PagesController::class, 'user_coin_history'])->name('user_coin_history');
