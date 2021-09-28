<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <link href="{{ asset('css1/bootstrap.css') }}" rel="stylesheet">
</head>
<body>

<div class="container">
 	<br/>
 	 	<h2 class="text-center">Suppression de categorie</h2>
 	<br/>

 	<div class="row">
 	 	<div class="col-md-4 col-md-offset-4">
 	 	 	<table class="table table-hover">
 	 	 	 	<tr><th>ID</th><td>{{ $categories->id }}</td></tr>
 	 	 	 	<tr><th>Nom</th><td>{{ $categories->nom }}</td></tr>

 	 	 	</table>
 	 	 	<form action="{{route('DeleteCategorie')}}" method="post"  onsubmit="return confirm('Etes-vous sur ?');" >

 	 	 	 	<input type="hidden" name="_token" value="{{ Session::token() }}">
 	 	 	  	<input type="hidden" name="id" value="{{ $categories->id }}">


 	 	 	 	<a href="{{route('AfficheCategorie')}}" class="btn btn-default">Annuler</a>
 	 	 	 	<button type="submit" class="btn btn-danger pull-right">Supprimer</button>

 	 	 	</form>
 	 	</div>
 	</div>
</body>

</html>
