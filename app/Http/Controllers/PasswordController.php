<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PasswordController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    } 
    public function change()
    {

return view ('password.index');



    }


    public function update_password(Request $request){
        $request->validate([
        'old_password'=>'required',
        'new_password'=>'required',
        'confirm_password'=>'required|same:new_password'
        ]);

        $current_user=auth()->user();

        if(Hash::check($request->old_password,$current_user->password)){

            $current_user->update([
                'password'=>bcrypt($request->new_password)
            ]);

            return redirect()->back()->with('success','Password successfully updated.');

        }else{
            return redirect()->back()->with('error','Old password does not matched.');
        }



    }



}
