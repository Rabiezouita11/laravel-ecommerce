<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <link href="{{ asset('css1/bootstrap.css') }}" rel="stylesheet">
</head>
<body>
<div class="container">
<h2 class="text-center">Ajout client</h2>
<form action="{{route('AjoutClient')}}" method="post" >
 <input type="hidden" name="_token" value="{{ Session::token() }}">
 <div class="form-group">
          <label>Nom</label>
          <div>@if ($errors->has('name'))
            <strong style="color: red;">{{ $errors->first('name') }}</strong>
            @endif</div>
	  	<input class="form-control" type="text" name="name" required>
          <label>email</label>
          <div>@if ($errors->has('email'))
            <strong style="color: red;">{{ $errors->first('email') }}</strong>
            @endif</div>
	  	<input class="form-control" type="text" name="email" required>
          <label>mot de passe</label>
          <div>@if ($errors->has('password'))
            <strong style="color: red;">{{ $errors->first('password') }}</strong>
            @endif</div>
	  	<input class="form-control"  type="password" name="password" required>
 </div>

 <a href="{{route('AfficheClient')}}" class="btn btn-default">Annuler</a>
 <button type="submit" class="btn btn-success pull-right">Ajouter</button>
</form></body>
</html>

