<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <link href="{{ asset('css1/bootstrap.css') }}" rel="stylesheet">
</head>
<body>
<div class="container">
 	<br/>
 	 	<h2 class="text-center">Ajout information</h2>
 	<br/>
<form action="{{route('Ajoutinfo')}}"  method="post" >

 	<input type="hidden" name="_token" value="{{ Session::token() }}">
  	<input type="hidden" name="id" value="{{ $ordres->id }}">

 	<div class="form-group">
     <label>Id</label>
     <input class="form-control" type="text" name="id" value="{{ $ordres->id }}" readonly>
     <label>nom client</label>
     <input class="form-control" type="text" name="user_id" value="{{$ordres->user_id}}" readonly>
     <label>Nom Produit</label>
     <input class="form-control" type="text" name="produit" value="{{ $ordres->produit }}" readonly>
     <label>type de paiment</label>
     <input class="form-control" type="text" name="typedepaiment" value="{{ $ordres->typedepaiment }}" readonly>
        <label>Livreur</label>

        <select name="livreur" id="livreur" class="form-control">
@foreach($livreurs as $livreur)
<option value="{{$livreur->nom}}" >{{$livreur->nom}}</option>
@endforeach
<option value="{{$livreur->livreur}}" ></option>

</select>

<label>confirmation</label>
    <select name="confirmation" id="confirmation" class="form-control">
<option value="valider "> valider </option>
<option value="Refuser "> Refuser </option>
</select>



 	<a href="{{route('Afficheordre')}}" class="btn btn-default">Annuler</a>
<button type="submit" class="btn btn-warning pull-right">Modifier</button>
</form>
</body>

</html>
