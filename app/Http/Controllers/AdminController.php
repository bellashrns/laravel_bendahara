<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function index ()
    {
        return view('admin.admin');
    }

    public function bendahara ()
    {
        return view('admin.bendahara');
    }

    public function user ()
    {
        return view('admin.users');
    }

    public function add_user (Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:8|max:20',
            'line' => 'required|unique:users',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:1024',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('images');
        }

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->birthdate = $request->birthdate;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->line = $request->line;
        $user->password = bcrypt($request->password);
        $user->image = $image;
        $user->save();

        return redirect('/dashboard');
    }
}
