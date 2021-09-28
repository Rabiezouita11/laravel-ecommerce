<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <link href="{{ asset('css1/bootstrap.css') }}" rel="stylesheet">
</head>
<body>

<div class="container">
 	<br/>
 	 	<h2 class="text-center">Suppression de Livreur</h2>
 	<br/>

 	<div class="row">
 	 	<div class="col-md-4 col-md-offset-4">
 	 	 	<table class="table table-hover">
                    <tr><th>ID</th><td>{{ $livreurs->id }}</td></tr>
                    <tr><th>Nom</th><td>{{ $livreurs->nom }}</td></tr>
                    <tr><th>Numero</th><td>{{ $livreurs->numero}}</td></tr>
                    <tr><th>Adresse</th><td>{{ $livreurs->adresse }}</td></tr>

 	 	 	</table>
 	 	 	<form action="{{route('DeleteLivreur')}}" method="post" onsubmit="return confirm('Etes-vous sur ?');" >

 	 	 	 	<input type="hidden" name="_token" value="{{ Session::token() }}">
 	 	 	  	<input type="hidden" name="id" value="{{ $livreurs->id }}">


 	 	 	 	<a href="{{route('AfficheLivreur')}}" class="btn btn-default">Annuler</a>
 	 	 	 	<button type="submit" class="btn btn-danger pull-right">Supprimer</button>

 	 	 	</form>
 	 	</div>
 	</div>
</body>

</html>
