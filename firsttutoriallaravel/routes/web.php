<?php

use App\Http\Controllers\testlab;
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

route::get('/testlab', [testlab::class, 'index']);

Route::get('/', function () {
    return view('welcome   nnn sssss');
});