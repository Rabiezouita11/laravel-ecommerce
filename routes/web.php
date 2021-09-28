<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/





Route::get('/admin2', function () {
    return view('admin2');
})->name ('admin2');
Route::get('/jeux', function () {
    return view('jeux');
})->name ('jeux');



Route::get('/merci', [

    'uses' => 'OrdreController@merci',
    'as'=>'merci'


    ]);
Route::get('/search','ProduitController@search')->name('produits.search');
Route::get('/searcha','ProduitController@searcha')->name('produits.searcha');

route::get('/index','CategorieController@index')->name('index');
route::get('/about','CategorieController@about')->name('about');
route::get('/contact','ContactController@index')->name('contact');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// categories admin



    Route::GET('/AfficheAjoutCategorie',[
        'uses' => 'CategorieController@AfficheAjoutCategorie',
        'as' => 'AfficheAjoutCategorie'
]);



    Route::POST('/AjoutCategorie',[
        'uses' => 'CategorieController@AjoutCategorie',
        'as' => 'AjoutCategorie'
]);


Route::GET('/AfficheEditCategorie/{id}',[
    'uses' => 'CategorieController@AfficheEditCategorie',
    'as' => 'AfficheEditCategorie'
]);

Route::POST('/EditCategorie',[
    'uses' => 'CategorieController@EditCategorie',
    'as' => 'EditCategorie'
]);



Route::GET('/AfficheDeleteCategorie/{id}',[
    'uses' => 'CategorieController@AfficheDeleteCategorie',
    'as' => 'AfficheDeleteCategorie'
]);

Route::POST('/DeleteCategorie',[
    'uses' => 'CategorieController@Deletecategorie',
    'as' => 'DeleteCategorie'
]);

// contact admin



    Route::POST('/AjoutContact',[
        'uses' => 'ContactController@AjoutContact',
        'as' => 'AjoutContact'
]);

Route::GET('/AfficheDeleteContact/{id}',[
    'uses' => 'ContactController@AfficheDeleteContact',
    'as' => 'AfficheDeleteContact'
]);

Route::POST('/DeleteContact',[
    'uses' => 'ContactController@DeleteContact',
    'as' => 'DeleteContact'
]);
 // ajout ordre

 Route::POST('/Ajoutordre',[
    'uses' => 'OrdreController@Ajoutordre',
    'as' => 'Ajoutordre'
]);

// historique client
Route::GET('/Affichehistorique_{id}',[
    'uses' => 'OrdreController@Affichehistorique',
    'as' => 'Affichehistorique'
]);


// livreur admin

    Route::GET('/AfficheAjoutLivreur',[
        'uses' => 'LivreurController@AfficheAjoutLivreur' ,
        'as' => 'AfficheAjoutLivreur'
]);



    Route::POST('/AjoutLivreur',[
        'uses' => 'LivreurController@AjoutLivreur',
        'as' => 'AjoutLivreur'
]);
Route::GET('/AfficheEditLivreur/{id}',[
    'uses' => 'LivreurController@AfficheEditLivreur',
    'as' => 'AfficheEditLivreur'
]);

Route::POST('/EditLivreur',[
    'uses' => 'LivreurController@EditLivreur',
    'as' => 'EditLivreur'
]);
Route::GET('/AfficheDeleteLivreur/{id}',[
    'uses' => 'LivreurController@AfficheDeleteLivreur',
    'as' => 'AfficheDeleteLivreur'
]);

Route::POST('/DeleteLivreur',[
    'uses' => 'LivreurController@DeleteLivreur',
    'as' => 'DeleteLivreur'
]);



// produit admin

Route::get('/AfficheProduit', [

    'uses' => 'ProduitController@AfficheProduit',
    'as'=>'AfficheProduit'


    ]);


    Route::GET('/AfficheAjoutProduit',[
        'uses' => 'ProduitController@AfficheAjoutProduit',
        'as' => 'AfficheAjoutProduit'
]);



    Route::POST('/AjoutProduit',[
        'uses' => 'ProduitController@AjoutProduit',
        'as' => 'AjoutProduit'
]);


Route::GET('/AfficheEditProduit/{id}',[
    'uses' => 'ProduitController@AfficheEditProduit',
    'as' => 'AfficheEditProduit'
]);

Route::POST('/EditProduit',[
    'uses' => 'ProduitController@EditProduit',
    'as' => 'EditProduit'
]);



Route::GET('/AfficheDeleteProduit/{id}',[
    'uses' => 'ProduitController@AfficheDeleteProduit',
    'as' => 'AfficheDeleteProduit'
]);

Route::POST('/DeleteProduit',[
    'uses' => 'ProduitController@DeleteProduit',
    'as' => 'DeleteProduit'
    ]);


// admin
Route::namespace('Admin')->group(function()  {

    Route::get('/admin/login','Auth\LoginController@showLoginForm')->name('admin.login');

    Route::post('/admin/login','Auth\LoginController@Login');
Route:: get ('/admin/home','AdminController@index')->name('admin2');
Route:: get ('/AfficheCategorie','AdminController@index1')->name('AfficheCategorie');
Route:: get ('/AfficheProduit','AdminController@index2')->name('AfficheProduit');
Route:: get ('/AfficheClient','AdminController@index3')->name('AfficheClient');
Route:: get ('/Afficheordre','AdminController@index4')->name('Afficheordre');
Route:: get ('/AfficheLivreur','AdminController@index5')->name('AfficheLivreur');
Route:: get ('/AfficheContact','AdminController@index6')->name('AfficheContact');
route::get('/AffichStat','AdminController@index7')->name('AfficheStat');




});


Route::get('/categorie_{id}', 'CategorieController@affiche')->name('affcat');



Route::get('/produit_{id}', 'ProduitController@affiche')->name('affprod');



// cart route
Route::post('/panier/ajouter','CartController@store')->name('cart.store');

Route::patch('/panier/{rowId}', 'CartController@update')->name('cart.update');
Route::get('/panier','CartController@index')->name('cart.index');
Route::get('/checkout','CheckoutController@index')->name('checkout.index')->middleware('auth');
Route::delete('/panier/{rowId}', 'CartController@destroy')->name('cart.destroy');
route::get('/logout','LogoutController@index');

//ordre

Route::GET('/Afficheordre1/{id}',[
    'uses' => 'OrdreController@Afficheordre1',
    'as' => 'Afficheordre1'
]);
Route::POST('/Ajoutinfo',[
    'uses' => 'OrdreController@Ajoutinfo',
    'as' => 'Ajoutinfo'
]);



// client admin





    Route::GET('/AfficheAjoutClient',[
        'uses' => 'ClientController@AfficheAjoutClient',
        'as' => 'AfficheAjoutClient'
]);



    Route::POST('/AjoutClient',[
        'uses' => 'ClientController@AjoutClient',
        'as' => 'AjoutClient'
]);


Route::GET('/AfficheEditClient/{id}',[
    'uses' => 'ClientController@AfficheEditClient',
    'as' => 'AfficheEditClient'
]);

Route::POST('/EditClient',[
    'uses' => 'ClientController@EditClient',
    'as' => 'EditClient'
]);


Route::GET('/AfficheDeleteClient/{id}',[
    'uses' => 'ClientController@AfficheDeleteClient',
    'as' => 'AfficheDeleteClient'
]);
Route::POST('/DeleteClient',[
    'uses' => 'ClientController@DeleteClient',
    'as' => 'DeleteClient'
]);


Route::POST('/DeleteCategorie',[
    'uses' => 'CategorieController@Deletecategorie',
    'as' => 'DeleteCategorie'
]);









Route::get('/password','PasswordController@change');


Route::post('/update-password','PasswordController@update_password')->name('update_password');	
