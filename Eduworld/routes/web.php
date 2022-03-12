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

/*Route::get('/', function () {
    return view('welcome');
});*/

//Route::get('/', 'HomeController@index');

Route::get('/home', 'HomeController@redirects')->middleware('auth','verified');
Route::get('/', 'HomeController@index');

Route::get('/view_profile', 'HomeController@ViewProfile');
Route::post('/uploadphoto', 'HomeController@UploadPhoto');
Route::get('/viewphoto', 'HomeController@ViewPhoto');

Route::get('/view_student', 'HomeController@View_Student');
Route::post('/add_student', 'HomeController@Add_Student');
Route::get('/student_profile', 'HomeController@Show_Student');

Route::get('/courses', 'HomeController@All_Courses');
Route::get('/payment', 'HomeController@All_Payment');
Route::get('/get_payment', 'HomeController@payment_table');
Route::post('/givepayment', 'HomeController@Upload_Payment');
Route::get('/slip', 'HomeController@View_Recipt');
Route::get('/view_payslip/{id}', 'HomeController@View_PaySlip');
Route::get('/Update_Payment/{id}', 'HomeController@Update_Payment');
Route::post('/edit_payment/{id}', 'HomeController@Edit_Payment');
Route::get('/Delete_Payment/{id}', 'HomeController@Delete_Payment');

Route::get('/download_pdf', 'HomeController@download_pdf');


Route::get('/get_chart', 'HomeController@Chart');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
