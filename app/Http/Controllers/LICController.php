<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response as Res;
use Illuminate\Support\Facades\Response;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;

class LICController extends Controller
{
    public function index(){return view('live.index');}
    public function about_us(){return view('live.pages.about-us');}
    public function leadership(){return view('live.pages.leadership');}
    public function why_us(){return view('live.pages.why-us');}
    public function career(){return view('live.pages.career');}
    /* Tests */
    public function mri_test(){return view('live.pages.tests.mri-test');}
    public function ctscan_test(){return view('live.pages.tests.ctscan-test');}
    public function ultrasound_test(){return view('live.pages.tests.ultrasound-test');}

    public function request_lab_visit(){return view('live.pages.request-lab-visit');}
    public function request_home_visit(){return view('live.pages.request-home-visit');}
    public function refer_a_patient(){return view('live.pages.refer-a-patient');}
    public function contact(){return view('live.pages.contact-us');}
}
