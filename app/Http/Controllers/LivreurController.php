<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LivreurController extends Controller
{


    public function AfficheAjoutLivreur()
    {
         return view('livreur.AfficheAjoutLivreur');
    }

public function AjoutLivreur(Request $request)
	 	{$this->validate($request, [

            'nom' => 'alpha|nullable|max:100000',

            
            'adresse' => 'string|nullable|max:100000',

            ]);
            $livreurs = new \App\Livreur();
	 	 	$livreurs->nom=$request['nom'];
            $livreurs->numero=$request['numero'];
            $livreurs->adresse=$request['adresse'];
	 	 	$livreurs->save();

	 	 	$livreurs=\App\Livreur::all();

              return redirect()->route('AfficheLivreur',compact('livreurs'))->with('success','le livreur a bien été ajouté');
	 	}



         public function AfficheEditLivreur(Request $request)
         {
              $id=$request['id'];
              $livreurs=\App\Livreur::find($id);
              return view('livreur.AfficheEditLivreur',compact('livreurs'));
         }

         public function EditLivreur(Request $request)
         {
              $id=$request['id'];
              $livreurs=\App\Livreur::find($id);
              $livreurs->nom=$request['nom'];
              $livreurs->numero=$request['numero'];
              $livreurs->adresse=$request['adresse'];



              $livreurs->update();

              $livreurs=\App\Livreur::all();

              return redirect()->route('AfficheLivreur',compact('livreurs'))->with('vert','le livreur a bien été modifié');

    }


    public function AfficheDeleteLivreur(Request $request)
    {
         $id=$request['id'];
         $livreurs=\App\Livreur::find($id);
         return view('livreur.AfficheDeleteLivreur',compact('livreurs'));
    }

    public function DeleteLivreur(Request $request)
    {
         $id=$request['id'];
         $livreurs=\App\Livreur::find($id);

         $livreurs->delete();

         $livreurs=\App\Livreur::all();

             return redirect()->route('AfficheLivreur',compact('livreurs'))->with('xxx','le livreur a bien été supprimé');

    }


}
