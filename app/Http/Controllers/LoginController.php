<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;
use Validator;

class LoginController extends Controller
{
    public function  show()
    {
        return view('pages.login');
    }
    public function login(Request $request)
    {
        $this->validate($request,
            [
                'email'=>'required|email',
                'password'=>'required|min:6|max:12'
            ],
            [
                'email.required'=>'Vui lòng nhập Email',
                'password.required'=>'Vui lòng nhập Password',
                'password.min'=>':attribute Không được nhỏ hơn :min ký tự',
                'password.max'=>':attribute Không được lớn hơn :max ký tự',
                'email.email'=>':attribute Không đúng định dạng',
            ]
            ,
            [
                'email'=>'Email',
                'password'=>'Mật khẩu'
            ]
        );
        $current_account = array('email'=>$request->email,'password'=>$request->password);
        if(Auth::attempt($current_account)){
//            return redirect()->route('index');
            return redirect()->intended('/');
        }
        else{
            return redirect()->back()->with(['flag'=>'danger','message'=>'Đăng nhập thất bại']);
        }
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->clear();
        return redirect()->back();
    }
    public function resetPassword(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'email' => 'required|email'
        ])->validate();
        if($validator && $validator->fails()) {
            return response()>withErrors($validator)
                ->json(['error' => 'Không tồn tại Email này.'], 422);

        }
        $email =  $request->only('email');
        $response = $this->broker()->sendResetLink(['email' => $email]);
        switch ($response) {
            case Password::RESET_LINK_SENT:
                if ($request->wantsJson()) {
                    return response()->json(['success' => 'Chúng tôi đã gửi mật khẩu mới vào hòm thư của bạn. Hãy kiểm tra lại.'], 200);
                }
                return $this->sendResetLinkResponse($response);
                break;
            case Password::INVALID_USER:
                if ($request->wantsJson()) {
                    return response()->json(['error' => 'Không tồn tại Email này.'], 422);
                }

                break;
            default:
                if ($request->wantsJson()) {
                    return response()->json(['error' => 'Không tồn tại Email này.'], 401);
                }

                return $this->sendResetLinkFailedResponse($request, $response);
                break;
        }
    }
    public function broker()
    {
        return Password::broker('users');
    }
}
