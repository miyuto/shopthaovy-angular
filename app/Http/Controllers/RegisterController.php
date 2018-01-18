<?php

namespace App\Http\Controllers;

use App\Customers;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function show()
    {
        return view('pages.register');
    }
    public function register(Request $request)
    {
        $this->validate($request,
            [
                'email'=>'required|email',
                'password'=>'required|min:6|max:12',
                're_password'=>'required|same:password'
            ],
            [
                'email.required'=>'Vui lòng nhập Email',
                'password.required'=>'Vui lòng nhập Password',
                'password.min'=>':attribute Không được nhỏ hơn :min ký tự',
                'password.max'=>':attribute Không được lớn hơn :max ký tự',
                'email.email'=>':attribute Không đúng định dạng',
                're_password.required'=>'Vui lòng nhập lại Password',
                're_password.same'=>'Mật khẩu không giống nhau',
            ]
            ,
            [
                'email'=>'Email',
                'password'=>'Mật khẩu'
            ]
        );

        $input = $request->all();
        //lưu thông tin đăng nhập
        $user = new User();
        $user->name = $input['account_name'];
        $user->email = $input['email'];
        $user->password = Hash::make($input['password']);
        $user->authority = 2;
        $user->save();

        // lưu thông tin thanh toán và ship
        $customer = new Customers();
        $customer->user_id = $user->id;
        $customer->full_name = $input['full_name'];
        $customer->sex = $input['sex'];

        $now = Carbon::now();
        $format = 'Y/m/d';
        $date = Carbon::createFromFormat('m/d/Y',$input['date'] )->format($format);
        $customer->birthday = $date;
        $customer->phone = $input['phone'];
        $customer->address = $input['address'];
        $customer->city = $input['city'];
        $customer->district = $input['district'];
        $customer->save();
        return redirect()->back()->with('success','Tạo tài khoản thành công');
    }
}
