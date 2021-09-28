<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Ordre;
use App\Contact;
use App\Livreur;
use App\Produit;
use App\categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
{

    return view('admin2');




}
public function index1()
{
    $categories = Categorie::all();
    return view('categorie.AfficheCategorie')->with('categories',$categories);




}

public function index2()
{
    $produits = Produit::paginate(4);
    return view('les produits.AfficheProduit')->with('produits',$produits);




}
public function index3()
{
    $users = User::paginate(4);
    return view('client.AfficheClient')->with('users',$users);




}
public function index4()
{
    $ordres = Ordre::paginate(4);
    return view('ordre.Afficheordre')->with('ordres',$ordres);




}
public function index5()
{
    $livreurs = Livreur::paginate(4);
    return view('livreur.AfficheLivreur')->with('livreurs',$livreurs);




}
public function index6()
{
    $contacts = Contact::paginate(4);
    return view('contact.AfficheContact')->with('contacts',$contacts);




}
public function index7()
{
$users = DB::table('users')->count();
$categories = DB::table('categories')->count();
$ordres = DB::table('ordres')->count();
$contacts = DB::table('contacts')->count();
$livreurs = DB::table('livreurs')->count();
$produits = DB::table('produits')->count();
        return view('statistique.AfficheStat',compact('users','categories','ordres','contacts','livreurs','produits' ));





}

}

