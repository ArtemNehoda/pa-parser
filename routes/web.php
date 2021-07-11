<?php

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

Route::get('/', 'App\Http\Controllers\HomeController@show')->name('home.show');
Route::get('/brackets', 'App\Http\Controllers\ParserController@showBracketsParser')->name('parser.brackets.show');
Route::post('/brackets', 'App\Http\Controllers\ParserController@parseBrackets')->name('parser.brackets.parse');
Route::get('/pairs-en', 'App\Http\Controllers\ParserController@showPairsEnParser')->name('parser.pairs_en.show');
Route::post('/pairs-en', 'App\Http\Controllers\ParserController@parsePairsEn')->name('parser.pairs_en.parse');
// Route::get('/parser-results/download/{token}', 'App\Http\Controllers\ParserController@showResult')->name('parser.results.download');
Route::get('/parser-results/{token}', 'App\Http\Controllers\ParserController@showResult')->name('parser.results.show');
