<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'f_name' => ['required', 'string', 'max:190'],
            'l_name' => ['required', 'string', 'max:190'],
            'email' => ['required', 'string', 'email', 'max:190', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'country' => ['required', 'string', 'max:15'],
            'state' => ['required', 'string', 'max:15' ],
            'zipcode' => ['required', 'numeric', 'min:6'],
            'city' => ['required', 'string', 'max:20' ],
            'phone_no' => ['required', 'numeric', 'min:12'],
            'address' => ['required', 'string', 'max:190'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $access_token = str_random(42);
        // dd($access_token);
        $user = new User();
        $user->f_name=$data['f_name'];
        $user->l_name=$data['l_name'];
        $user->email=$data['email'];
        $user->password=Hash::make($data['password']);     
        $user->country=$data['country'];
        $user->state=$data['state'];
        $user->zipcode=$data['zipcode'];
        $user->city=$data['city'];
        $user->phone_no=$data['phone_no'];
        $user->address=$data['address'];
        $user->access_token = $access_token;
        $user->save();
    }
}
