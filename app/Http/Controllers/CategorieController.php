<?php

namespace App\Http\Controllers;
use App\Produit;
use App\categorie;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\cart;
use Illuminate\Support\Facades\Validator;

class CategorieController extends Controller
{

    public function index() {

        $produits = Produit::orderBy('nomproduit')->paginate(9);
        $categories = Categorie::all();

return view('index')->with('categories',$categories)->with('produits',$produits);









        }
public function about(){
    $categories = Categorie::all();
return view('about')->with('categories',$categories);

}



        public function affiche($id){

            $categories = Categorie::all();

            return view('computeracc')->with('cat', categorie::find($id))->with('categories',$categories);





        }


    public function AfficheCategorie()
    {
    $categories=\App\Categorie::all();
    return view('categorie.AfficheCategorie',compact('categories'));
    }


    public function AfficheAjoutCategorie()
    {
         return view('categorie.AfficheAjoutCategorie');
    }

public function AjoutCategorie(Request $request)
	 	{  $this->validate($request, [

            'cin' => 'integer|required|digits:8',
            ]);


            $categories = new \App\Categorie();
	 	 	$categories->nom=$request['nom'];

	 	 	$categories->save();

	 	 	$categories=\App\Categorie::all();
              return redirect()->route('AfficheCategorie',compact('categories'))->with('success','la categorie a bien été ajouté');
            }





         public function AfficheEditCategorie(Request $request)
         {

              $id=$request['id'];
              $categories=\App\Categorie::find($id);
              return view('categorie.AfficheEditCategorie',compact('categories'));
         }

         public function EditCategorie(Request $request)
         {
             
              $id=$request['id'];
              $categories=\App\Categorie::find($id);
              $categories->nom=$request['nom'];


              $categories->update();

              $test = new \App\Test();
              $test->nom=$request['aa'];
              $test->save();
              return redirect()->route('AfficheCategorie',compact('categories'))->with('vert','la categorie a bien été modifier');

    }

    public function AfficheDeleteCategorie(Request $request)
    {
         $id=$request['id'];
         $categories=\App\Categorie::find($id);
         return view('categorie.AfficheDeleteCategorie',compact('categories'));
    }

    public function DeleteCategorie(Request $request)
    {
         $id=$request['id'];
         $categories=\App\Categorie::find($id);

         $categories->delete();

         $categories=\App\Categorie::all();
         return redirect()->route('AfficheCategorie',compact('categories'))->with('xxx','la categorie a bien été supprimer');
    }




}
