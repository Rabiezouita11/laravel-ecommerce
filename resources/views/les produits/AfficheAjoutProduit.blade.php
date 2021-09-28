<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <link href="{{ asset('css1/bootstrap.css') }}" rel="stylesheet">
</head>
<body>
<div class="container">
<h2 class="text-center">Ajout Produit</h2>
<form action="{{route('AjoutProduit')}}" method="post"  enctype="multipart/form-data"  >
 <input type="hidden" name="_token" value="{{ Session::token() }}">
 <div class="form-group">
	  	<label>Categorie</label>
          <select name="cat" id="cat" class="form-control">

            @foreach($categories as $cat)

        <option value="{{$cat->id}}">  {{ $cat->nom }}</option>
        @endforeach

        </select>

          <label>Nom Produit</label>
          <div>@if ($errors->has('nomproduit'))
          <strong style="color: red;">{{ $errors->first('nomproduit') }}</strong>
          @endif</div>
          <input class="form-control" type="text" name="nomproduit" required>
          <label>Prix</label>
          <div>@if ($errors->has('prix'))
<strong style="color: red;">{{ $errors->first('prix') }}</strong>
@endif</div>
          <input class="form-control" type="text" name="prix" required>
          <label>image</label>
          <input type="file"  name="image" class="form-control">
          <label>stock</label>
          <div>@if ($errors->has('stock'))
            <strong style="color: red;">{{ $errors->first('stock') }}</strong>
            @endif</div>
          <input class="form-control" type="text" name="stock" required>
          <label>Description</label>
          <div>@if ($errors->has('description'))
            <strong style="color: red;">{{ $errors->first('description') }}</strong>
            @endif</div>
	  	<input class="form-control" type="text" name="description" required>
 </div>

 <a href="{{route('AfficheProduit')}}" class="btn btn-default">Annuler</a>
 <button  type="submit" class="btn btn-success pull-right">Ajouter</button>
</form></body>
</html>

