<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <link href="{{ asset('css1/bootstrap.css') }}" rel="stylesheet">
</head>
<body>
<div class="container">
<h2 class="text-center">Ajout categorie</h2>
<form action="{{route('AjoutCategorie')}}" method="post" >
 <input type="hidden" name="_token" value="{{ Session::token() }}">
 <div class="form-group">
          <label>Nom</label>
          <div>@if ($errors->has('nom'))
<strong style="color: red;">{{ $errors->first('nom') }}</strong>
@endif</div>
	  	<input class="form-control" type="text" name="nom" required>
 </div>

 <a href="{{route('AfficheCategorie')}}" class="btn btn-default">Annuler</a>
 <button type="submit" class="btn btn-success pull-right">Ajouter</button>
</form></body>
</html>

