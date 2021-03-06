<?php

namespace App\Http\Controllers\Adminauth;

use App\Admin;
use App\Http\Controllers\Controller;
use App\Mail\verifyAdminEmail;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = 'admin/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:admin');
    }

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
        return view('admin.register');
    }

    public function verifyAdminEmailFirst()
    {
        return view('email.verifyAdminEmailFirst');
    }

    public function sendAdminEmailDone($email, $verifyAdminToken)
    {
        $admin = Admin::where(['email' => $email, 'verifyToken' => $verifyAdminToken])->first();

        if ($admin) {
            return Admin::where(['email' => $email, 'verifyToken' => $verifyAdminToken])->update(['status' => 1, 'verifyToken' => NULL]);
        } else {
            return 'Admin not found';
        }

        return $admin;
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));

//        $this->guard()->login($user);

        return redirect(route('verifyAdminEmailFirst'));

        return $this->registered($request, $user)
            ?: redirect($this->redirectPath());
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $admin = Admin::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'verifyToken'=> Str::random(40),
        ]);

        $thisAdmin = Admin::findOrFail($admin->id);
        $this->sendAdminEmail($thisAdmin);

        return $admin;
    }

    public function sendAdminEmail($thisAdmin)
    {
        Mail::to($thisAdmin['email'])->send(new verifyAdminEmail($thisAdmin));
    }


    /**
     * Get the guard to be used during registration.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard('admin');
    }

}
