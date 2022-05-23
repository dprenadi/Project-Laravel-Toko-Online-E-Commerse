<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AlamatController extends Controller
{
    public function index() {
        $user = Auth::user();
        return view('pages.alamat.index', [
            'user' => $user
        ]);
    }

    public function edit(User $user) {
        $user = Auth::user();
        return view('pages.alamat.edit', [
            'user' => $user
        ]);
    }

    public function update(Request $request, User $user, $id) {

        // $item = User::findOrFail($id);
        $rules = ([
            'address_one' => 'required|max:255',
            'address_two' => 'required|max:255',
            'provinces_id' => 'required',
            'city_id' => 'required',
            'zip_code' => 'required',
            'phone_number' => 'required'
        ]);

        $data = $request->validate($rules);

        $item = User::findOrFail($id);

        $item->update($data);

        return redirect('/alamat')->with('success', 'Registration Successfull!');
    }
}
