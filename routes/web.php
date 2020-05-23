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

Route::prefix('/job')->group(function () {
    Route::get('/','JobController@listjobs')->name('job.list');
    Route::get('/{id}','JobController@getjob')->name('job.details');
    Route::post('/{id}/apply','JobController@apply')->middleware(['auth','verified','candidate'])->name('job.apply');
    Route::post('/{id}/unapply','JobController@unapply')->middleware(['auth','verified','candidate'])->name('job.unapply');
    Route::post('/{id}/fav','JobController@favjob')->middleware(['auth','verified','candidate'])->name('job.fav');
    Route::get('/{id}/download','JobController@download')->name('job.download');
});

Route::prefix('/candidate')->group(function(){
   Route::get('/','CandidateController@listcandidates')->name('candidate.list');
   Route::get('/dashboard','CandidateController@dashboard')->middleware(['auth','verified','candidate'])->name('candidate.dashboard');
});

Route::prefix('/employer')->group(function(){
    Route::get('/','EmployerController@listcandidates')->name('employer.list');
    Route::get('/dashboard','EmployerController@dashboard')->middleware(['auth','verified','employer'])->name('employer.dashboard');
});
