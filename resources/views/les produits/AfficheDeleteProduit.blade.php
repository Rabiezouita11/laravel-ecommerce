<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <link href="{{ asset('css1/bootstrap.css') }}" rel="stylesheet">
</head>
<body>

<div class="container">
 	<br/>
 	 	<h2 class="text-center">Suppression de produit</h2>
 	<br/>

 	<div class="row">
 	 	<div class="col-md-4 col-md-offset-4">
 	 	 	<table class="table table-hover">
                <tr><th>ID</th><td>{{ $produits->id }}</td></tr>
                <tr><th>Categorie</th><td> {{$produits->categorie->nom}}</td></tr>
                    <tr><th>Nom Produit</th><td>{{ $produits->nomproduit }}</td></tr>
                    <tr><th>Prix</th><td>{{ $produits->prix }}</td></tr>
                    <tr><th>Image </th><td>{{ $produits->image }}</td></tr>
                    <tr><th>Quantite</th><td>{{ $produits->quantite }}</td></tr>
                    <tr><th>Description</th><td>{{ $produits->description}}</td></tr>
 	 	 	</table>
 	 	 	<form action="{{route('DeleteProduit')}}" method="post" onsubmit="return confirm('Etes-vous sur ?');">

 	 	 	 	<input type="hidden" name="_token" value="{{ Session::token() }}">
 	 	 	  	<input type="hidden" name="id" value="{{ $produits->id }}">


 	 	 	 	<a href="{{route('AfficheProduit')}}" class="btn btn-default">Annuler</a>
 	 	 	 	<button type="submit" class="btn btn-danger pull-right">Supprimer</button>

 	 	 	</form>
 	 	</div>
 	</div>
</body>

</html>
