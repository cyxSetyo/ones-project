<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\hash;
use App\Models\User;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //view
        return view('layouts.login',[
            'title' => 'Login',
        ]);
    }

    /**
     * Show the form for Register a new User.
     */
    public function register()
    {
        //Register
        return view('layouts.register',[
            'title' => 'Register',
        ]);

    }

    public function postRegister(Request $request)
    {
        //RegisterPost
        //dd($request->all());
        $validate = $request->validate([
            'username' => 'required|min:3|max:12',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|confirmed|min:3|max:20',
        ]);
    
        $validate['password'] = bcrypt($validate['$password']);
        User::create($validate);
        $request->session()->flash('success', 'Registration Success, Please Login First!');
        return redirect('/login');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //login
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required']
        ]);

        if (Auth::attempt($credentials)){
            $request->session()->regenerate();

            return redirect()->intended('/');
        }

        return back()->withErrors([
            'email' => 'Your Email Not Alredy'
        ])->onlyInput('email');

        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
