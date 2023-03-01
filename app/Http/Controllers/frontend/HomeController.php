<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

use App\Models\home;
use App\Models\Brand;
use App\Models\CategoryGroup;
use App\Models\ServiceSetting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        try {
            $brands = Brand::publish()->get();
            $service_settings = ServiceSetting::active()->publish()->get();
            $categorygroup = CategoryGroup::publish()->get();
            return view('frontend.home', compact('brands', 'categorygroup', 'service_settings'));
        } catch (\Exception $ex) {
            return response()->json([
                'message' => 'Something Went Wrong HomeController.index',
                'error' => $ex->getMessage()
            ], 400);
        }
    }


    public function aboutus()
    {
        try {
            return view('frontend.aboutus');
        } catch (\Exception $ex) {
            return response()->json([
                'message' => 'Something Went Wrong HomeController.aboutus',
                'error' => $ex->getMessage()
            ], 400);
        }
    }

    public function contactus()
    {
        try {
            return view('frontend.contactus');
        } catch (\Exception $ex) {
            return response()->json([
                'message' => 'Something Went Wrong HomeController.contactus',
                'error' => $ex->getMessage()
            ], 400);
        }
    }
}
