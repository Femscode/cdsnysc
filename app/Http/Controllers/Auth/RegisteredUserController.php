<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Str;
use App\Http\Traits\ApiUser;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Http\Traits\CreateCategory;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;


class RegisteredUserController extends Controller
{



    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required'],
            'state' => ['required'],
            'lga' => ['required'],
            'statecode' => ['required'],
            'cdsgroup' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        if ($validator->fails()) {
            return redirect()->route('register') // Use the correct route name or URL
                ->withErrors($validator)
                ->withInput();
        }
      
        $data = $request->all();
        $uid = Str::uuid();
        // dd($request->all()); $uid = Str::uuid();

        $user = User::create([
            'name' => $data['name'],           
            'email' => $data['email'],
            'phone' => $data['phone'],
            'state' => $data['state'],
            'year' => $data['year'],
            'batch' => $data['batch'],
            'lga' => $data['lga'],
            'statecode' => $data['statecode'],
            'cdsgroup' => $data['cdsgroup'],
            'uuid' => $uid,
            'password' => Hash::make($data['password']),
            'user_type' => 'corp-member',
        ]);
       
        $user->save();


        event(new Registered($user));
        // $user->sendEmailVerificationNotification();
        Auth::login($user);
        return redirect('/dashboard');
        return $user;
    }
    public function registerSupervisor(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required'],
            'state' => ['required'],
            'lga' => ['required'],           
            'cdsgroup' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        if ($validator->fails()) {
            return redirect()->route('supervisor-registration') // Use the correct route name or URL
                ->withErrors($validator)
                ->withInput();
        }
      
        $data = $request->all();
        $uid = Str::uuid();
        // dd($request->all()); $uid = Str::uuid();

        $user = User::create([
            'name' => $data['name'],           
            'email' => $data['email'],
            'phone' => $data['phone'],
            'state' => $data['state'],
            'lga' => $data['lga'],
            'scdsgroup' => $data['cdsgroup'],
            'uuid' => $uid,
            'password' => Hash::make($data['password']),
            'user_type' => 'supervisor',
            'type' => 2,
        ]);
       
        $user->save();


        event(new Registered($user));
        // $user->sendEmailVerificationNotification();
        Auth::login($user);
        return redirect('/dashboard');
        return $user;
    }
}
