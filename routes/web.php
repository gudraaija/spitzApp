<?php

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
    return view('welcome');
});

Auth::routes();

Route::post('/Training/storeTraining', 'TrainingController@storeTraining')->name('Training.storeTraining');

Route::resource('Pet', 'PetController');
Route::resource('Training', 'TrainingController');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/pets', 'PetController@index')->name('pets');
Route::get('/pets/add', 'PetController@add')->name('addpet');
Route::get('/about', 'HomeController@about')->name('about');

Route::get('/trainer/{any?}/editDescription', ['uses' => 'TrainingController@editDescription', 'as' => 'editDescription']);
Route::post('/trainer/updateDescription', ['uses' => 'TrainingController@updateDescription', 'as' => 'updateDescription']);

Route::get('/trainings/addTraining', 'TrainingController@addTraining')->name('addTraining');
Route::get('/trainings', 'TrainingController@index')->name('trainings');
