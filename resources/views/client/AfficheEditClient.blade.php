<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <link href="{{ asset('css1/bootstrap.css') }}" rel="stylesheet">
</head>
<body>
<div class="container">
 	<br/>
 	 	<h2 class="text-center">Modifier client</h2>
 	<br/>
<form action="{{route('EditClient')}}" method="post" >

 	<input type="hidden" name="_token" value="{{ Session::token() }}">
  	<input type="hidden" name="id" value="{{ $users->id }}">

 	<div class="form-group">
 	 	<label>Nom</label>
 	 	<input class="form-control" type="text" name="name" value="{{ $users->name }}" required>
          <label>email</label>
 	 	<input class="form-control" type="text" name="email" value="{{ $users->email }}" required>
          <label>Mot de passe</label>
		
		
	 <input class="form-control" type="text" name="password" value="{{  $users->password2 }}" required>

	</div>



 	<a href="{{route('AfficheCategorie')}}" class="btn btn-default">Annuler</a>
<button type="submit" class="btn btn-warning pull-right">Modifier</button>
</form>
</body>

</html>
