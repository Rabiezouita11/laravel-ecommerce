<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <link href="{{ asset('css1/bootstrap.css') }}" rel="stylesheet">
</head>
<body>

<div class="container">
 	<br/>
 	 	<h2 class="text-center">Suppression de client</h2>
 	<br/>

 	<div class="row">
 	 	<div class="col-md-4 col-md-offset-4">
 	 	 	<table class="table table-hover">
                <tr><th>ID</th><td>{{ $users->id }}</td></tr>
                <tr><th>Nom de client</th><td> {{$users->name}}</td></tr>
                    <tr><th>Email</th><td>{{ $users->email }}</td></tr>
                    <tr><th>Mot de passe</th><td>{{ $users->password }}</td></tr>

 	 	 	</table>
 	 	 	<form action="{{route('DeleteClient')}}" method="post" onsubmit="return confirm('Etes-vous sur ?');">

 	 	 	 	<input type="hidden" name="_token" value="{{ Session::token() }}">
 	 	 	  	<input type="hidden" name="id" value="{{ $users->id }}">


 	 	 	 	<a href="{{route('AfficheClient')}}" class="btn btn-default">Annuler</a>
 	 	 	 	<button type="submit" class="btn btn-danger pull-right">Supprimer</button>

 	 	 	</form>
 	 	</div>
 	</div>
</body>

</html>
