<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Province;
use App\Models\Regency;
use App\Models\District;
use App\Models\Village;

class RegisterController extends Controller
{
    public function index()
    {
        
        return view('auth.register', [
            // 'provinces' => Province::all(),
            // 'regencies' => Regency::all()
        ]);
    }

    public function store(Request $request) 
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            // 'roles' => 'nullable|string|in:ADMIN,USER',
            'email' => 'required',
            'password' => 'required|min:5|max:255'
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);

        // $request->session()->flash('success', 'Registration Successfull!');

        return redirect('/login');
    }

    public function success()
    {
        return view('auth.success');
    }

    public function check(Request $request)
    {
        return User::where('email', $request->email)->count() > 0 ? 'Unavailable' :"Available" ;
    }
}
