<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Services\LoginService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    protected $loginService;

    public function __construct(LoginService $loginService)
    {
        $this->loginService = $loginService;
    }

    function showFormLogin()
    {
        return view('auth.login');
    }

    function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email:filter',
            'password' => 'required',
            'captcha' => 'required|captcha'
        ]);

        if ($this->loginService->checkLogin($request)) {
            toastr()->success("Đăng nhập thành công !!");
            return redirect()->route('home.index');

        }
        else{
            return view('auth.fail');
        }

    }

    public function showFormRegister()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|min:6',
            'captcha' => 'required|captcha'

        ]);
        $data = $request->only('name', 'email', 'password');
        $data['password'] = Hash::make($request->password);
        $user = User::query()->create($data);
        $user->save();
        toastr()->success('Đăng ký thành công  !!');


        return redirect()->route('login');
//        return view('auth.login');
    }


    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        toastr()->success('Tạm biệt bạn');
        return redirect()->route('auth.login');
    }


    public function showFormChangePassword()
    {
        return view('change-password');
    }


    public function changePassword(Request $request)
    {
        $user = Auth::user();
        $currentPassword = $user->password;
        $request->validate([
            'currentPassword' => 'required',
            'newPassword' => 'required|min:3',
            'confirmPassword' => 'required|same:newPassword',

        ]);
        if (!Hash::check($request->currentPassword, $currentPassword)) {
            return redirect()->back()->withErrors(['currentPassword' => 'Sai Password hiện tại ']);
        }
        $user->password = Hash::make($request->newPassword);
        $user->save();
        toastr()->success('Đổi mật khẩu thành công');
        return redirect()->route('auth.login');


    }
    public function refreshCaptcha()
    {
        return response()->json(['captcha'=> captcha_img()]);
    }
}
