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

    /* Packages */
    public function all_packages(){return view('live.pages.all-packages');}
    public function hypertension_package(){return view('live.pages.packages.hypertension-package');}
    public function diabetic_package(){return view('live.pages.packages.diabetic-package');}
    public function anemia_package(){return view('live.pages.packages.anemia-package');}
    public function fatty_liver_package(){return view('live.pages.packages.fatty-liver-package');}
    public function kidney_panel_package(){return view('live.pages.packages.kidney-panel-package');}
    public function liver_panel_package(){return view('live.pages.packages.liver-panel-package');}
    public function osteoporotic_bone_profile_package(){return view('live.pages.packages.osteoporotic-bone-profile-package');}
    public function para_thyroid_package(){return view('live.pages.packages.para-thyroid-package');}
    public function post_menopausal_package(){return view('live.pages.packages.post-menopausal-package');}
    public function thyroid_package(){return view('live.pages.packages.thyroid-package');}
    /* Tests */
    public function mri_test(){return view('live.pages.tests.mri-test');}
    public function ctscan_test(){return view('live.pages.tests.ctscan-test');}
    public function ultrasound_test(){return view('live.pages.tests.ultrasound-test');}

    public function request_lab_visit(){return view('live.pages.request-lab-visit');}
    public function request_home_visit(){return view('live.pages.request-home-visit');}
    public function refer_a_patient(){return view('live.pages.refer-a-patient');}
    public function contact(){return view('live.pages.contact-us');}
}
