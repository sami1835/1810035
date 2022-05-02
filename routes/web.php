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

// Front end page shown 
Route::get('/', function () {
    return view('pages.index');
});

Route::get('About us', 'PageController@about')->name('about_page');
Route::get('Gallery', 'PageController@gallery')->name('gallery_page');
Route::get('Our/Doctor', 'PageController@our_doctor1')->name('our_doctor1_page');
Route::get('Our/Doctor2', 'PageController@our_doctor2')->name('our_doctor2_page');
Route::get('Our/Doctor3', 'PageController@our_doctor3')->name('our_doctor3_page');
Route::get('Our/Doctor4', 'PageController@our_doctor4')->name('our_doctor4_page');
Route::get('Our/Doctor5', 'PageController@our_doctor5')->name('our_doctor5_page');

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

//.............................................For Admin..................................................//
// Admin Login 
Route::get('admin/home', 'AdminController@index');
Route::get('admin', 'Admin\LoginController@showLoginForm')->name('login.admin');
Route::post('admin', 'Admin\LoginController@login');

// Admin Profile 
Route::get('admin/profile', 'AdminProfileController@adminprofile')->name('admin.profile');

//..........................................User Profile..................................................//

// User profile 
Route::get('user/profile', 'UserProfileController@userprofile')->name('user.profile');

// User profile edit and update 
Route::get('user/profile/edit{id}', 'UserProfileController@userprofileedit');
Route::post('user/profile/update{id}', 'UserProfileController@userprofileupdate');

// Change password 
Route::get('change/password', 'UserProfileController@changepass')->name('password');
Route::post('update/password', 'UserProfileController@updatepass')->name('up.pass');



//.....................................Doctor Create, Insert, Update, Delete.............................//

// Ajax Controller 
Route::get('/doctor', 'AdminController@indexajax')->name('doctor/home');

// Read
Route::get('/teacher/all', 'AdminController@allData');

// Insert
Route::post('/teacher/add/', 'AdminController@insertData');

// Edit and update data 
Route::get('/teacher/edit{id}', 'AdminController@editData');
Route::post('/teacher/update/{id}', 'AdminController@updateData');

// Delete Data 
Route::get('/teacher/delete{id}', 'AdminController@deleteData');

//...........................................User serial part................................................//
// For showing all doctor 
Route::get('all/doctors/', 'DoctorController@ualldocs');

// Doctor route
Route::get('all/doctor', 'DoctorController@alldoctor')->name('alldoc');

// give serial 
Route::get('serial/doctor{id}', 'DoctorController@serialdoc');

Route::post('all/doctor', 'DoctorController@serial')->name('serialdoc');

//............................................Search Doctor.................................................//
Route::get('/search', 'DoctorController@search')->name('searchdata');


//............................................Patient serial list...........................................//
 
// Doctor Category
Route::get('/serial/list', 'AdminController@allcat')->name('categorry');

// Delete Doctor Category 
Route::get('category/delete{id}', 'AdminController@deletecat');

// multiple delete 
Route::post('/del', 'AdminController@del')->name('muldel');


//......................................Feedback or Complain (User Part)...................................//

//View
Route::get('feedback/complain', 'FeedbackController@feedback')->name('feedback_complain');
// For Submission 
Route::post('complain/feedback', 'FeedbackController@feedback_submit')->name('fc_form');


//......................................Feedback or Complain (Admin Part)...................................//

// View 
Route::get('/complain/feedback', 'AdminController@allcatt')->name('admin_fc');

// Delete single data 
Route::get('fc/delete{id}', 'AdminController@deletecatt');

// Delete Multiple data 
Route::post('/dell', 'AdminController@dell')->name('muldell');




