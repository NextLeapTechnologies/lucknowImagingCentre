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

Route::post('/request-home-visit', 'LICController@requestHomeVisit')->name('request-home-visit');

Route::get('/', [LICController::class, 'index'])->name('live.index');
Route::get('/about-us', [LICController::class, 'about_us'])->name('live.pages.about-us');
Route::get('/leadership', [LICController::class, 'leadership'])->name('live.pages.leadership');
Route::get('/why-us', [LICController::class, 'why_us'])->name('live.pages.why-us');
Route::get('/career', [LICController::class, 'career'])->name('live.pages.career');

/* Packages Route */
Route::get('/all-packages', [LICController::class, 'all_packages'])->name('live.pages.all-packages');
Route::get('/diabetic-package', [LICController::class, 'diabetic_package'])->name('live.pages.packages.diabetic-package');
Route::get('/hypertension-package', [LICController::class, 'hypertension_package'])->name('live.pages.packages.hypertension-package');
Route::get('/anemia-package', [LICController::class, 'anemia_package'])->name('live.pages.packages.anemia-package');
Route::get('/fatty-liver-package', [LICController::class, 'fatty_liver_package'])->name('live.pages.packages.fatty-liver-package');
Route::get('/kidney-panel-package', [LICController::class, 'kidney_panel_package'])->name('live.pages.packages.kidney-panel-package');
Route::get('/liver-panel-package', [LICController::class, 'liver_panel_package'])->name('live.pages.packages.liver-panel-package');
Route::get('/osteoporotic-bone-profile-package', [LICController::class, 'osteoporotic_bone_profile_package'])->name('live.pages.packages.osteoporotic-bone-profile-package');
Route::get('/para-thyroid-package', [LICController::class, 'para_thyroid_package'])->name('live.pages.packages.para-thyroid-package');
Route::get('/post-menopausal-package', [LICController::class, 'post_menopausal_package'])->name('live.pages.packages.post-menopausal-package');
Route::get('/thyroid-package', [LICController::class, 'thyroid_package'])->name('live.pages.packages.thyroid-package');

/* Tests Routes */
Route::get('/mri-test', [LICController::class, 'mri_test'])->name('live.pages.tests.mri-test');
Route::get('/ctscan-test', [LICController::class, 'ctscan_test'])->name('live.pages.tests.ctscan-test');
Route::get('/ultrasound-test', [LICController::class, 'ultrasound_test'])->name('live.pages.tests.ultrasound-test');
Route::get('/xrays', [LICController::class, 'xrays'])->name('live.pages.tests.xrays');
Route::get('/intervention-radiology-test', [LICController::class, 'intervention_radiology_test'])->name('live.pages.tests.intervention-radiology-test');
Route::get('/pathology', [LICController::class, 'pathology_test'])->name('live.pages.tests.pathology-test');
Route::get('/echo', [LICController::class, 'echo_test'])->name('live.pages.tests.echo-test');
Route::get('/ecg', [LICController::class, 'ecg_test'])->name('live.pages.tests.ecg-test');

/* Blog Routes */
Route::get('/blogs', [LICController::class, 'blogs'])->name('live.pages.blog.blogs');

/* Legal Routes */
Route::get('/patient-privacy-policy', [LICController::class, 'patient_privacy_policy'])->name('live.pages.legal.patient-privacy-policy');
Route::get('/terms-conditions', [LICController::class, 'terms_conditions'])->name('live.pages.legal.terms-conditions');
Route::get('/payment-terms-conditions', [LICController::class, 'payment_terms_conditions'])->name('live.pages.legal.payment-terms-conditions');
Route::get('/refund-policy', [LICController::class, 'refund_policy'])->name('live.pages.legal.refund-policy');
Route::get('/cancellation-policy', [LICController::class, 'cancellation_policy'])->name('live.pages.legal.cancellation-policy');
Route::get('/website-privacy-policy', [LICController::class, 'website_privacy_policy'])->name('live.pages.legal.website-privacy-policy');
Route::get('/non-discrimination-policy', [LICController::class, 'non_discrimination_policy'])->name('live.pages.legal.non-discrimination-policy');
Route::get('/report-a-vulnerability', [LICController::class, 'report_a_vulnerability'])->name('live.pages.legal.report-a-vulnerability');
/* Form Routes */
Route::get('/request-lab-visit', [LICController::class, 'request_lab_visit'])->name('live.pages.request-lab-visit');
Route::get('/request-home-visit', [LICController::class, 'request_home_visit'])->name('live.pages.request-home-visit');
Route::get('/refer-a-patient', [LICController::class, 'refer_a_patient'])->name('live.pages.refer-a-patient');
Route::get('/contact-us', [LICController::class, 'contact'])->name('live.pages.contact-us');

/* Other Routes */
Route::get('/insurance', [LICController::class, 'insurance'])->name('live.pages.insurance');
Route::get('/accreditation', [LICController::class, 'accreditation'])->name('live.pages.accreditation');