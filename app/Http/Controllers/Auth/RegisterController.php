<?php

namespace App\Http\Controllers\Auth;

use DB;
use Mail;
use App\User;
use Validator;
use Illuminate\Http\Request;
use App\Mail\EmailVerification;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{

    public function register(Request $request)
    {
        if ($request->ajax()){
            return response($request->all());
        }

        DB::beginTransaction();
        try
        {
            $user = $this->create($request->all());

            $email = new EmailVerification(new User(['email_token' => $user->email_token, 'name' => $user->name]));

            Mail::to($user->email)->send($email);

            DB::commit();
            return back();
        }
        catch(Exception $e)
        {
            DB::rollback();
            return back();
        }

    }

    public function verify($token)
    {
        User::where('email_token',$token)->firstOrFail()->verified();
        return redirect('login');
    }

    use RegistersUsers;

    protected $redirectTo = '/create';

    public function __construct()
    {
        $this->middleware('guest');
    }


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
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'email_token' => str_random(10),
        ]);
    }
}
