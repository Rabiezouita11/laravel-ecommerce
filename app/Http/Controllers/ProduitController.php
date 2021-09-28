<?php

namespace App\Http\Controllers;

use App\categorie;
use Illuminate\Http\Request;
use App\Produit;
use App\categories;
use Illuminate\Http\UploadFile;
class ProduitController extends Controller
{







    public function AfficheProduit()
    {
    $produits=\App\Produit::paginate(4);
    return view('les produits.AfficheProduit',compact('produits'));
    }
    public function AfficheAjoutProduit()
    {
         return view('les produits.AfficheAjoutProduit')->with('categories', categorie::all());
    }

    public function affiche($id){

        $categories = Categorie::all();
        $produits = Produit::find($id);

        $stock =$produits->stock === 0 ? 'Indisponible' : 'Disponible';

        return view('acc')->with('produit', Produit::find($id))->with('categories',$categories)->with('stock',$stock);



    }

public function AjoutProduit(Request $request)
	 	{
            $this->validate($request, [
                'nomproduit' => 'string|nullable|max:255',
                'prix' => 'integer|nullable|max:100000',
                'stock' => 'integer|nullable|max:100000',
                'description' => 'string|nullable|max:100000',
                ]);
            $produits = new \App\Produit();
              $produits->categorie_id = $request['cat'];
              $produits->nomproduit=$request['nomproduit'];
              $produits->prix=$request['prix'];
              //$produits->image=$request['image'];
              $produits->stock=$request['stock'];
              $produits->description=$request['description'];

              if($request->hasFile('image')){
                $produits->image=$request->image->store('images');
            }
	 	 	$produits->save();

	 	 	$produits=\App\Produit::all();
              return redirect()->route('AfficheProduit',compact('produits'))->with('success','le produit a bien été ajouté');
	 	}


         public function AfficheEditProduit(Request $request)
         {
              $id=$request['id'];
              $produits=\App\Produit::find($id);

              return view('les produits.AfficheEditProduit',compact('produits'))->with('categories', categorie::all());
         }

         public function EditProduit(Request $request)
         {

               $id=$request['id'];
              $produits=\App\Produit::find($id);

              $produits->categorie_id = $request['cat'];
              $produits->nomproduit=$request['nomproduit'];
              $produits->prix=$request['prix'];
              $produits->stock=$request['stock'];
              $produits->description=$request['description'];

              if($request->hasFile('newphoto')){
                $produits->image=$request->newphoto->store('images');
            }



              $produits->update();

              $produits=\App\Produit::all();
              return redirect()->route('AfficheProduit',compact('produits'))->with('vert','le produit a bien été modifié');

            }
















    public function AfficheDeleteProduit(Request $request)
    {
         $id=$request['id'];
         $produits=\App\Produit::find($id);
         return view('les produits.AfficheDeleteProduit',compact('produits'));
    }

    public function DeleteProduit(Request $request)
    {
         $id=$request['id'];
         $produits=\App\Produit::find($id);

         $produits->delete();

         $produits=\App\Produit::all();
         return redirect()->route('AfficheProduit',compact('produits'))->with('xxx','le produit a bien été supprimé');
    }


public function search(){


request()->validate([
 'q' => 'required|min:3'




]);



$q = request()->input('q');
$categories = Categorie::all();
$produits = Produit::where('nomproduit','like',"%$q%")
            ->orwhere('description','like',"%$q%")
            ->paginate(6);
            return view('produits.search')->with('produits',$produits)->with('categories',$categories);






}

public function searcha(){


    request()->validate([
        'a' => 'required|min:3'




       ]);



    $a = request()->input('a');

    $produits = Produit::where('nomproduit','like',"%$a%")
                ->orwhere('description','like',"%$a%")
                ->paginate(6);
                return view('produits.searcha')->with('produits',$produits);






    }


}
