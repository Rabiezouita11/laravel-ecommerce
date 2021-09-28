<?php

namespace App\Http\Controllers;
use App\Ordre;
use App\categorie;
use App\Produit;
use App\Livreur;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Gloudemans\Shoppingcart\Facades\cart;
class OrdreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function merci()
    {

        $categories = Categorie::all();

        $ordres=\App\Ordre::all();

        return view('merci',compact('ordres'),compact('categories'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $rowId)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function Afficheordre()
    {
        $livreurs=\App\Livreur::all();
        $ordres=\App\Ordre::all();
    return view('ordre.Afficheordre',compact('ordres'),compact('livreurs'));
    }



    public function Affichehistorique(Request $request)
    {        $categories = Categorie::all();

         $id=$request['id'];
         $ordres=\App\Ordre::find($id);
         return view('Affichehistorique',compact('ordres'),compact('categories'));
    }

//get validate
    public function Afficheordre1(Request $request)
    {
        $livreurs=\App\Livreur::all();

         $id=$request['id'];
         $ordres=\App\Ordre::find($id);

         return view('ordre.Afficheordre1',compact('ordres'),compact('livreurs'));
    }

    public function Ajoutinfo(Request $request)
    { $id=$request['id'];
        $ordres=\App\Ordre::find($id);
        $ordres->produit=$request['produit'];
        $ordres->user_id=$request['user_id'];
        $ordres->typedepaiment=$request['typedepaiment'];

        $ordres->livreur=$request['livreur'];
 $ordres->confirmation=$request['confirmation'];
        $ordres->update();
        $ordres=\App\Ordre::all();
        return redirect()->route('Afficheordre')->with('bbb','enregistrement succes');

      }



    public function Ajoutordre(Request $request)
    {
        if ($this->noLongerStock()) {
return redirect()->route('index')->with('azer','Un produit de votre panier ne se trouve plus en stock');

        }
        $this->validate($request, [

            'adresse' => 'string|nullable|max:255',
            ]);
       $ordres = new \App\Ordre();
       $ordres->user_id=$request['user_id'];
       $ordres->produit=$request['produit'];
       $ordres->prixtotal=$request['prixtotal'];
       $ordres->adresse=$request['adresse'];
       $ordres->numero=$request['numero'];
       $ordres->typedepaiment=$request['typedepaiment'];







         $ordres->save();
         $this->updateStock();
         Cart::destroy();
         $ordres=\App\Ordre::all();
         return redirect()->route('merci',compact('ordres'));
    }

    private function updateStock()
    {
        foreach (Cart::content() as $item) {
            $produit = Produit::find($item->model->id);
            $produit->update(['stock' => $produit->stock - $item->qty]);
        }
   }

   private function noLongerStock()
   {
       foreach (Cart::content() as $item) {
           $produit = Produit::find($item->model->id);

           if ($item->qty > $produit->stock) {
               return true;
           }
       }
       return false;
   }

}
