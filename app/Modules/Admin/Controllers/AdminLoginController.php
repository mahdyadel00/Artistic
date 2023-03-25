<?php

namespace App\Modules\Admin\Controllers;

use App\Bll\Lang;
use App\Bll\Utility;
use App\Http\Controllers\Controller;
use App\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AdminLoginController extends Controller
{
    public function __construct()
    {
//		$this->middleware('guest')->except('logout');
        $this->middleware('guest:admin')->except('logout');
    }
    public function login()
    {
        $settings = Setting::
        Join('settings_data', 'settings.id', 'settings_data.setting_id')
            ->select(
                'settings.*',
                'settings_data.name',
                'settings_data.description',
                'settings_data.keywords'
            )
            ->where('settings_data.lang_id', Lang::getSelectedLangId())->first();

        return view('admin.login', ['settings' => $settings]);
    }

    public function doLogin(Request $request)
    {

        $this->validate($request, [
            'email' => 'required|email|exists:users',
            'password' => 'required|min:6',
        ]);
        $remember_me = request('remember_me') == 1 ? true : false;

        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
            return redirect()->to(route('admin.home'));
        }else {
            return redirect(route('admin.login'))
                ->withInput($request->only('email', 'remember'))
                ->withErrors([_i('Data Error !')]);
        }

    }

    public function logout() {
        auth()->logout();
        return redirect('/admin/login');
    }
}
