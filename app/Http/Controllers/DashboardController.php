<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Bendahara;
use App\Models\Message;
// utk current datetime
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.dashboard');
    }

    public function bendahara()
    {
        $bendaharas = Bendahara::all();

        return view('dashboard.bendahara', [
            'bendaharas' => $bendaharas
        ]);
    }

    public function user()
    {
        $users = User::all();
        
        return view('dashboard.user', [
            'users' => $users
        ]);
    }

    public function evaluation()
    {
        $msgs = Message::all();
        
        return view('dashboard.evaluation', [
            'msgs' => $msgs
        ]);
    }

    
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function add_kas (Request $request)
    {
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:1024',
            'month' => 'required',
            'type' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('bukti_kas');
        }

        $currentDatetime = Carbon::now()->toDateTimeString();

        $kas = new Bendahara();
        $kas->image = $image;
        $kas->month = $request->month;
        $kas->type = $request->type;
        $kas->value = $request->value;
        $kas->notes = $request->notes;
        $kas->status = $request->status;
        $kas->name = auth()->user()->name;
        $kas->user_id = auth()->user()->id;
        $kas->date = $currentDatetime;
        $kas->name = auth()->user()->name;
        $kas->save();

        return redirect('/bendahara');
    }

    public function edit_kas (Request $request)
    {
        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('bukti_kas');
        }

        $id = $request->id;
        $kas = Bendahara::find($id);
        // $kas = Bendahara()->$id;
        $kas->image = $image;
        $kas->month = $request->month;
        $kas->type = $request->type;
        $kas->value = $request->value;
        $kas->notes = $request->notes;
        $kas->status = $request->status;
        $kas->update();

        return redirect('/bendahara');
    }

    public function add_evaluation (Request $request)
    {
        $request->validate([
            'receiver' => 'required',
            'message' => 'required',
        ]);

        $eval = new Message();
        $eval->sender = auth()->user()->id;
        $eval->receiver = $request->receiver;
        $eval->message = $request->message;
        $eval->save();

        return redirect('/evaluation');
    }

    public function update_password(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'password' => 'required|min:8|max:20|confirmed',
        ]);

        if(Hash::check($request->current_password, auth()->user()->password)){

            auth()->user()->update([
                'password' => bcrypt($request->password),
            ]);
            
            // serah mau redirect kemana
            return redirect('/dashboard')->with('message', "Your password has been changed");
        }

        throw ValidationException::withMessages([
            'current_password' => 'Your current password does not match with our record',
        ]);
    }
}