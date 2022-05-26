<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Coupons;

class CouponController extends Controller
{
    //
    public function register(Request $request)
    {

        $c = new Coupons();
        
// send response
        return response()->json([
            "status" => 1,
            "message" => "Coupon added succesfully"
        ]);
    }
}
