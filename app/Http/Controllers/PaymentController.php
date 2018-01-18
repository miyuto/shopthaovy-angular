<?php

namespace App\Http\Controllers;

use App\Customers;
use App\Discounts;
use App\TransportFees;
use App\User;
use Cart;
use Illuminate\Http\Request;
use Auth;
use Mockery\Exception;

class PaymentController extends Controller
{
    public function getPayment(Request $request)
    {
        $cart = Cart::content();
        $total = Cart::total(0,'.',',');
        $transportFee = TransportFees::all();
        if (Auth::check()) {
            $customer = Customers::where('user_id',Auth::user()->id)->first();
        }
//        $shipType = isset($request->select_type_ship) ? $request->select_type_ship : 'no-ship';
//        $transportFeePrice = 0;
//        if($shipType == 'no-ship') {
//
//        }
//        if($request->ajax()) {
//            return response()->json(['shipType' => $shipType], 200);
//        }
        return view('pages.payment',compact('cart','total','customer','transportFee'));
    }
    public function postPayment(Request $request)
    {
        $this->validate($request,
            [
                'full_name'=>'required',
                'tel'=>'required|numeric|min:10',
                'address1'=>'required',
                'address2'=>'required',
            ],
            [
                'full_name.required'=>'Vui lòn`g nhập tên',
                'tel.required'=>'Vui lòng nhập số điện thoại',
                'tel.numeric'=>':attribute không đúng định dạng',
                'tel.min'=>':attribute không được nhỏ hơn :min ký tự',
//                'tel.max'=>':attribute không được lớn hơn :max ký tự',
                'address1.required'=>'Vui lòng nhập địa chỉ 1',
                'address2.required'=>'Vui lòng nhập địa chỉ 2',
            ]
            ,
            [
                'email'=>'Email',
                'password'=>'Mật khẩu',
                'tel'=>'Số điện thoại',
                'address1'=>'Địa chỉ 1',
                'address2'=>'Địa chỉ 2',
            ]
        );
        $result = $request->all();
        $fullName = $result['full_name'];
        $tel = $result['tel'];
        $address1 = $result['address1'];
        $address2 = $result['address2'];
        $description = $result['description'];

        try {
            if (Auth::check()) {
                $customer = User::find(Auth::user()->id)->customer;
                if($customer) {

                }
                $customer->user_id = Auth::user()->id;
                $customer->full_name = $fullName;
                $customer->phone = $tel;
                $customer->address1 = $address1;
                $customer->address2 = $address2;
                $customer->save();
            }
        }catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function useDiscount(Request $request)
    {
        $result = $request->all();
        $discount_code = $result['discount-ratio'];
        $discount = Discounts::where('discount_name',$discount_code)->get()->first();
        if($discount) {
            $ratio = $discount->discount_ratio;
            return redirect()->back()->with('ratio',$ratio);
        }
        else {
            return redirect()->back()->with('not_discount','Mã giảm giá không tồn tại');
        }
    }
}
