<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <link href="{{ asset('css1/bootstrap.css') }}" rel="stylesheet">
</head>
<body>

<div class="container">
 	<br/>
 	 	<h2 class="text-center">Suppression de contact</h2>
 	<br/>

 	<div class="row">
 	 	<div class="col-md-4 col-md-offset-4">
 	 	 	<table class="table table-hover">
 	 	 	 	<tr><th>ID</th><td>{{ $contacts->id }}</td></tr>
 	 	 	 	<tr><th>Nom</th><td>{{ $contacts->nom }}</td></tr>
                <tr><th>email</th><td>{{ $contacts->email }}</td></tr>
                <tr><th>Numero</th><td>{{ $contacts->numero }}</td></tr>
                <tr><th>Message</th><td>{{ $contacts->message }}</td></tr>
 	 	 	</table>
 	 	 	<form action="{{route('DeleteContact')}}" method="post" onsubmit="return confirm('Etes-vous sur ?');" >

 	 	 	 	<input type="hidden" name="_token" value="{{ Session::token() }}">
 	 	 	  	<input type="hidden" name="id" value="{{ $contacts->id }}">


 	 	 	 	<a href="{{route('AfficheContact')}}" class="btn btn-default">Annuler</a>
 	 	 	 	<button type="submit" class="btn btn-danger pull-right">Supprimer</button>

 	 	 	</form>
 	 	</div>
 	</div>
</body>

</html>
