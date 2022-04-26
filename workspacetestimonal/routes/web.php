<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\AdminLogoutController;
use App\Http\Controllers\Admin\AdminPasswordForgotController;
use App\Http\Controllers\Admin\AdminProfileController;
use App\Http\Controllers\Admin\PasswordResetController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Client\ClientController;
use App\Http\Controllers\Client\ClientProfileController;
use App\Http\Controllers\Front\FrontController;
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

// Admin registration for creating new admin
Route::get('/admin/register',[AdminController::class,'Adminregister'])->name('admin.register');
Route::post('/admin/register/store',[AdminController::class,'Save'])->name('admin.register.save');

Route::get('/dashboard',[AdminController::class,'index'])->name('admin.dashboard')->middleware('admin:admin');
Route::get('/profile',[AdminProfileController::class,'index'])->name('admin.profile')->middleware('admin:admin');
Route::post('/profile/edit',[AdminProfileController::class,'ProfileUpdate'])->name('admin.profile.edit');

// Admin Testimonial
Route::get('/admin/testimonial',[AdminController::class,'Admintestimonial'])->name('admin.testimonial');
Route::get('/testimonial/publish/{id}',[AdminController::class,'Publishtestimonial'])->name('admin.testimonial.publish');
Route::get('/testimonial/unpublish/{id}',[AdminController::class,'Unpublishtestimonial'])->name('admin.testimonial.unpublish');
Route::get('/admin/clients',[AdminController::class,'Allclients'])->name('admin.allclient');

Route::get('/login',[AdminLoginController::class,'index'])->name('admin.login');
Route::post('/login-submit',[AdminLoginController::class,'Login'])->name('admin.login-submit');
Route::get('/logout',[AdminLogoutController::class,'Logout'])->name('admin.logout');

// password reset options
Route::get('/resepass',[PasswordResetController::class,'index'])->name('reset.pass');
Route::post('/mailverify',[PasswordResetController::class,'MailCheck'])->name('check.mail.pass');
Route::get('/admin/reset-password/{token}/{email}', [PasswordResetController::class, 'ResetPassword'])->name('reset.password.blade');
Route::post('/admin/password/update', [PasswordResetController::class, 'PasswordUpdate'])->name('reset.password.update');

// author Reset Password
Route::get('/author/reset-password/{token}/{email}', [PasswordResetController::class, 'AuthorResetPassword'])->name('author.reset.password.blade');
Route::post('/author/reset-password/update', [PasswordResetController::class, 'AuthorPasswordUpdate'])->name('author.reset.password.update');


// profile route 

// User rgistration system 
Route::get('/client-dashboard',[ClientController::class,'index'])->name('client.dashboard')->middleware('author:author');
Route::get('/client/profile',[ClientProfileController::class,'index'])->name('client.profile')->middleware('author:author');
Route::post('/profileupdate',[ClientProfileController::class,'UpdateClientProfile'])->name('client.profile.update')->middleware('author:author');


//author testimonial 
 Route::get('/testimonial',[TestimonialController::class,'index'])->name('testimonial.index')->middleware('author:author');
 Route::get('/author/testimonial',[TestimonialController::class,'Authortestimonial'])->name('author.testimonial');
 Route::post('/testimonial/store',[TestimonialController::class,'store'])->name('testimonial.store');
 Route::get('/testimonial/edit/{id}',[TestimonialController::class,'Testimonialedit'])->name('testimonial.edit');
 Route::post('/testimonial/update/{id}',[TestimonialController::class,'TestimonialUpdate'])->name('testimonial.update');
 Route::get('/testimonial/delete/{id}',[TestimonialController::class,'TestimonialDelete'])->name('testimonial.delete');


//  Front end part
Route::get('/',[FrontController::class,'index']);
Route::get('/client/register',[FrontController::class,'Clientregister'])->name('client.register');
Route::post('/client/register/store',[FrontController::class,'Store'])->name('client.register.save');

