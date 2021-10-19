<?php


use App\Models\AwardingBody;
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

//Route::get('/', function () {
//    return view('welcome');
//});



Route::get('/', function () {
   $award = AwardingBody::whereId(1)->first()->exams();

    echo $award->first();
});

//Route::get('/register', 'AwardingBodyController@show'
//);

