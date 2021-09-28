<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <link href="{{ asset('css1/bootstrap.css') }}" rel="stylesheet">
</head>
<body>
<div class="container">
 	<br/>
 	 	<h2 class="text-center">edit categorie</h2>
 	<br/>
<form action="{{route('EditCategorie')}}" method="post" >

 	<input type="hidden" name="_token" value="{{ Session::token() }}">
  	<input type="hidden" name="id" value="{{ $categories->id }}">

 	<div class="form-group">
          <label>Nom</label>
          
 	 	<input class="form-control" type="text" name="nom" value="{{ $categories->nom }}" required>

		  
 	</div>



 	<a href="{{route('AfficheCategorie')}}" class="btn btn-default">Annuler</a>
<button type="submit" class="btn btn-warning pull-right">Modifier</button>
</form>
</body>

</html>
