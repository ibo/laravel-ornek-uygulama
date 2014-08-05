<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// HomeController Sınıfında Tanımlı index metodu çalıştırılır.
Route::get('/', array('as' => 'homePage', 'uses' => 'HomeController@index'));

// UserController Sınıfında Tanımlı signUpForm metodu çalıştırılır.
Route::get('/uye-ol', array('as' => 'signUpForm', 'uses' => 'UserController@signUpForm'));

// UserController Sınıfında Tanımlı signUp metodu çalıştırılır. (Sadece POST Metoduyla, CSRF korumasıyla Çalışır)
Route::post('/uye-ol', array('as' => 'signUp', 'uses' => 'UserController@signUp', 'before' => 'csrf'));

// UserController Sınıfında Tanımlı signInForm metodu çalıştırılır.
Route::get('/giris', array('as' => 'signInForm', 'uses' => 'UserController@signInForm'));

// UserController Sınıfında Tanımlı signIn metodu çalıştırılır. (Sadece POST Metoduyla, CSRF korumasıyla Çalışır)
Route::post('/giris', array('as' => 'signIn', 'uses' => 'UserController@signIn', 'before' => 'csrf'));

// UserController Sınıfında Tanımlı logout metodu çalıştırılır.
Route::get('/cikis', array('as' => 'logout', 'uses' => 'UserController@logout'));

// QuestionsController Sınıfında Tanımlı index metodu çalıştırılır.
Route::get('/sorular', array('as' => 'allQuestions', 'uses' => 'QuestionsController@index'));

// QuestionsController Sınıfında Tanımlı detail metodu çalıştırılır.
Route::get('/soru/{id}', array('as' => 'getQuestion', 'uses' => 'QuestionsController@detail'));

// QuestionsController Sınıfında Tanımlı newQuestionForm metodu çalıştırılır.
Route::get('/soru-sor', array('as' => 'newQuestionForm', 'uses' => 'QuestionsController@newQuestionForm', 'before' => 'auth'));

// QuestionsController Sınıfında Tanımlı newQuestion metodu çalıştırılır. (Sadece POST Metoduyla, AUTH korumasıyla Çalışır)
Route::post('/soru-sor', array('as' => 'newQuestion', 'uses' => 'QuestionsController@newQuestion', 'before' => 'auth'));

// CommentsController Sınıfında Tanımlı newComment metodu çalıştırılır. (Sadece POST Metoduyla, AUTH korumasıyla Çalışır)
Route::post('/yorum-ekle', array('as' => 'newComment', 'uses' => 'CommentsController@newComment', 'before' => 'auth'));