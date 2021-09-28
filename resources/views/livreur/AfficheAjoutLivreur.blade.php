<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <link href="{{ asset('css1/bootstrap.css') }}" rel="stylesheet">
</head>
<body>
<div class="container">
<h2 class="text-center">Ajout Livreur</h2>
<form action="{{route('AjoutLivreur')}}" method="post" >
 <input type="hidden" name="_token" value="{{ Session::token() }}">
 <div class="form-group">
          <label>Nom</label>
          <div>@if ($errors->has('nom'))
            <strong style="color: red;">{{ $errors->first('nom') }}</strong>
            @endif</div>
          <input class="form-control" type="text" name="nom" required>
          <label>Numero</label>
          
          <input class="form-control" type="numero" name="numero"  pattern="[0-7]{8}"
           required>
          <label>Adresse</label>
          <div>@if ($errors->has('adresse'))
            <strong style="color: red;">{{ $errors->first('adresse') }}</strong>
            @endif</div>
	  	<input class="form-control" type="text" name="adresse" required>
 </div>

 <a href="{{route('AfficheLivreur')}}" class="btn btn-default">Annuler</a>
 <button  type="submit" class="btn btn-success pull-right">Ajouter</button>
</form></body>
</html>

