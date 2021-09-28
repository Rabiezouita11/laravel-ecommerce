<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ClientController extends Controller
{
    public function AfficheClient()
    {
    $users=\App\User::paginate(4);
    return view('client.AfficheClient',compact('users'));
    }
    public function AfficheAjoutClient()
    {
         return view('client.AfficheAjoutClient');
    }



    public function AjoutClient(Request $request)
    {
        $this->validate($request, [

            'name' => 'alpha|nullable|max:100000',
            'email' => 'email|nullable|max:100000',
            'password' => 'string|nullable|min:8',

            ]);
       $users = new \App\User();
         $users->name=$request['name'];
         $users->email=$request['email'];
         $users->password=Hash::make($request['password']);
  
         $users->save();

         $users=\App\User::all();
         return redirect()->route('AfficheClient',compact('users'))->with('success',' le client a bien été ajouté');
       }


       public function AfficheEditClient(Request $request)
       {
            $id=$request['id'];
            $users=\App\User::find($id);
            return view('client.AfficheEditClient',compact('users'));
       }

       public function EditClient(Request $request)
       {
            $id=$request['id'];
            $users=\App\User::find($id);
            $users->name=$request['name'];
            $users->email=$request['email'];
            
          $users->password=Hash::make($request['password']);
          $users->update();
            return redirect()->route('AfficheClient',compact('users'))->with('vert','la client a bien été modifier'); 
} 



  public function AfficheDeleteClient(Request $request)
  {
       $id=$request['id'];
       $users=\App\User::find($id);
       return view('client.AfficheDeleteClient',compact('users'));
  }

  public function DeleteClient(Request $request)
  {
       $id=$request['id'];
       $users=\App\User::find($id);

       $users->delete();

       $users=\App\User::all();
       return redirect()->route('AfficheClient',compact('users'))->with('xxx','la client a bien été supprimer');
  }
}
