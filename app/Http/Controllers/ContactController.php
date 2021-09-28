<?php

namespace App\Http\Controllers;
use App\categorie;
use Illuminate\Http\Request;

class ContactController extends Controller
{
public function index(){



    $categories = Categorie::take(100000)->get();
    return view('contact')->with('categories',$categories);
}





    public function AjoutContact(Request $request)
    {
        $this->validate($request, [

            'nom' => 'alpha|nullable|max:255',
            'email' => 'email|nullable|max:255',
            'message' => 'string|nullable|max:255',

            ]);
        $categories = Categorie::take(100000)->get();
       $contacts = new \App\Contact();
         $contacts->nom=$request['nom'];
         $contacts->email=$request['email'];
         $contacts->numero=$request['numero'];
         $contacts->message=$request['message'];
         $contacts->save();

         $contacts=\App\Contact::all();
         return redirect()->route('contact',compact('categories'))->with('azer','le message a été bien envoyé');
    }

    public function AfficheDeleteContact(Request $request)
    {
         $id=$request['id'];
         $contacts=\App\Contact::find($id);
         return view('contact.AfficheDeleteContact',compact('contacts'));
    }

    public function DeleteContact(Request $request)
    {
         $id=$request['id'];
         $contacts=\App\Contact::find($id);

         $contacts->delete();

         $contacts=\App\Contact::all();

             return redirect()->route('AfficheContact',compact('contacts'))->with('ttt','le message a été bien supprimé');
    }



}
