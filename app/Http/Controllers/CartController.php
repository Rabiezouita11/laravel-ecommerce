<?php

namespace App\Http\Controllers;
use Gloudemans\Shoppingcart\Facades\cart;
use App\Produit;
use Illuminate\Http\Request;
use App\categorie;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
class CartController extends Controller
{



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Categorie::take(100000)->get();
        return view('cart.index')->with('categories',$categories);
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
        $duplicata = Cart::search(function ($cartItem, $rowId) use ($request) {
            return $cartItem->id == $request->produit_id;
        });




        if ($duplicata->isNotEmpty()) {
            return redirect()->route('index')->with('success', 'Le produit a déjà été ajouté.');
        }

$produit= Produit::find($request->produit_id);

        cart::add($produit->id,$produit->nomproduit,1,$produit->prix)
        ->associate('App\Produit');



        return redirect()->route('index')->with('success','le produit a bien été ajouté');
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
        $data = $request->json()->all();

        $validates = Validator::make($request->all(), [
            'qty' => 'numeric|required|between:1,5',
        ]);

        if ($validates->fails()) {
            Session::flash('error', 'La quantité doit est comprise entre 1 et 5.');
            return response()->json(['error' => 'Cart Quantity Has Not Been Updated']);
        }


        if ($data['qty']>$data['stock']) {

            return redirect()->route('contact')->with('success','Il n\'y a plus assez de stock');
        }



        Cart::update($rowId, $data['qty']);

        Session::flash('success', 'La quantité du produit est passée à ' . $data['qty'] . '.');
        return response()->json(['success' => 'Cart Quantity Has Been Updated']);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($rowId)
    {
        Cart::remove($rowId);

        return back()->with('success', 'Le produit a été supprimé.');
    }
}
