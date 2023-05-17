<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LICController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[LICController::class,'index'])->name('live.index');
Route::get('/about-us',[LICController::class,'about_us'])->name('live.pages.about-us');
Route::get('/leadership',[LICController::class,'leadership'])->name('live.pages.leadership');
Route::get('/why-us',[LICController::class,'why_us'])->name('live.pages.why-us');
Route::get('/career',[LICController::class,'career'])->name('live.pages.career');

/* Tests Routes */
Route::get('/mri-test',[LICController::class,'mri_test'])->name('live.pages.tests.mri-test');
Route::get('/ctscan-test',[LICController::class,'ctscan_test'])->name('live.pages.tests.ctscan-test');
Route::get('/ultrasound-test',[LICController::class,'ultrasound_test'])->name('live.pages.tests.ultrasound-test');

Route::get('/request-lab-visit',[LICController::class,'request_lab_visit'])->name('live.pages.request-lab-visit');
Route::get('/request-home-visit',[LICController::class,'request_home_visit'])->name('live.pages.request-home-visit');
Route::get('/refer-a-patient',[LICController::class,'refer_a_patient'])->name('live.pages.refer-a-patient');
Route::get('/contact-us',[LICController::class,'contact'])->name('live.pages.contact-us');
