<?php

namespace App\Http\Controllers;

use App\Models\Usability;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsabilityController extends Controller
{
    public function index()
    {
        return view('pages.usability');
    }

    public function store(Request $request)
    {
        // $validatedData = $request->validate([
        //     'name' => 'required',
        //     'q1' => request()->q1
        // ]);

        // $validatedData['users_id'] = auth()->user()->id;

        // Usability::create($validatedData);

        Usability::create([
            'users_id' => Auth::user()->id,
            // 'name' => Auth::user()->name,
            'q1' => request()->q1,
            'q2' => request()->q2,
            'q3' => request()->q3,
            'q4' => request()->q4,
            'q5' => request()->q5,
            'q6' => request()->q6,
            'q7' => request()->q7,
            'q8' => request()->q8,
            'q9' => request()->q9,
            'q10' => request()->q10,
        ]);

        return back();
    }

    public function admin()
    {
        return view('pages.usability-admin', [
            'usability' => Usability::paginate(30),
        ]);
    }

}
