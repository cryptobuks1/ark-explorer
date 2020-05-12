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


/*
 * Show blocks on home page.
 */
Route::get('/', function () {
    return view('blocks', ['page' => 1]);
});

/*
 * Blocks page. Read page count from url
 */
Route::get('/blocks/{page}', function ($page) {
    return view('blocks', ['page' => $page]);
});

