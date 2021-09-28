<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <link href="{{ asset('css1/bootstrap.css') }}" rel="stylesheet">
</head>
<body>
<div class="container">
 	<br/>
 	 	<h2 class="text-center">edit Livreur</h2>
 	<br/>
<form action="{{route('EditLivreur')}}" method="post" >

 	<input type="hidden" name="_token" value="{{ Session::token() }}">
  	<input type="hidden" name="id" value="{{ $livreurs->id }}">

 	<div class="form-group">
 	 	<label>Nom</label>
        <input class="form-control" type="text" name="nom" value="{{ $livreurs->nom }}" required>
        <label>Numero</label>
        <input class="form-control" type="integer" name="numero" value="{{ $livreurs->numero }}" required>
        <label>Adresse</label>
 	 	<input class="form-control" type="string" name="adresse" value="{{ $livreurs->adresse}}" required>
 	</div>



 	<a href="{{route('AfficheLivreur')}}" class="btn btn-default">Annuler</a>
<button type="submit" class="btn btn-warning pull-right">Modifier</button>
</form>
</body>

</html>
