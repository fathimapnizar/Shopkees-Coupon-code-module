<?php

namespace App\Http\Controllers;
use App\Models\Condition;
use App\Models\Coupons;
use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ConditionController extends Controller
{
    public function index(Request $request)
    {
        $conditions = Condition::pluck('id', 'value');
        // $lol = Condition::all;
        
        // dd($conditions);
        // return view('welcome', ['condition' => $conditions]);

         $categories = Categories::pluck('id','name','status');
        // return view('welcome', ['cat' => $categories]);

        return view('welcome')->with('condition', $conditions)->with('cat', $categories);

    }

    public function storeCoupon(){

        // $couponCode = Coupons::pluck('code');
        // $len = count($couponCode);
        //dd($couponCode[0]);
        
        $coupon = new Coupons();
// dd(request('name'));
        $coupon->name = request('name');
        $coupon->code = request('coupon-code');
        $coupon->applied_on = request('cart-percentage');
        $coupon->amount_or_percentage = request('amount-percentage');
        $coupon->amount_limit = request('amount-limit');
        $coupon->cart_total = request('cart-total');
        $coupon->condition = request('condition');
        $coupon->value = request('value');
        $coupon->cat = request('cat');
        $coupon->in_or_not_in = request('in');

        $coupon->save();
        return redirect()->back()->with('message', 'COUPON ADDED SUCCESSFULLY!');
    }
}
