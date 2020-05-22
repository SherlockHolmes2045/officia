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

Route::get('/', 'HomeController@index')->name('welcome');

Auth::routes(['verify' => true]);


Route::get('/auth/redirect/{provider}', 'SocialController@redirect');
Route::get('/callback/{provider}', 'SocialController@callback');
Route::get('/auth/finalise/{provider}','SocialController@showform')->middleware('guest')->name('auth.showform');
Route::get('/locale/{locale}',function($locale){
    session()->put('locale',$locale);
    return redirect()->back();
})->name('locale');
Route::post('/auth/finalise/','SocialController@finalise')->middleware('guest')->name('auth.finalise');

Route::get('/post-job','JobController@showform')->middleware(['auth','verified','employer'])->name('job.showform');
Route::post('/post-job','JobController@savejob')->middleware(['auth','verified','employer'])->name('job.savejob');
Route::get('/job/{id}','JobController@getjob')->name('job.details');
Route::post('/job/{id}/apply','JobController@apply')->middleware(['auth','verified','candidate'])->name('job.apply');
Route::post('/job/{id}/unapply','JobController@unapply')->middleware(['auth','verified','candidate'])->name('job.unapply');
Route::post('/job/{id}/fav','JobController@favejob')->middleware(['auth','verified','candidates'])->name('job.fav');
Route::post('/job/{id}/unfav','JobController@unfavejob')->middleware(['auth','verified','candidates'])->name('job.unfav');
