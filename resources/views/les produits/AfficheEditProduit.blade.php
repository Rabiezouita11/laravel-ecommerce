<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <link href="{{ asset('css1/bootstrap.css') }}" rel="stylesheet">
</head>
<body>
<div class="container">
 	<br/>
 	 	<h2 class="text-center">edit Produit</h2>
 	<br/>
<form action="{{route('EditProduit')}}" method="post" enctype="multipart/form-data" >

 	<input type="hidden" name="_token" value="{{ Session::token() }}">
  	<input type="hidden" name="id" value="{{ $produits->id }}">

 	<div class="form-group">
        <label>Categorie</label>
        <select name="cat" id="cat" class="form-control">

          @foreach($categories  as $cat)


      <option value="{{$cat->id}}"  @if ($cat->id== $produits->categorie_id) selected  @endif>  {{ $cat->nom }}</option>
      @endforeach

      </select>
        <label>Nom Produit</label>
     <input class="form-control" type="text" name="nomproduit" value="{{ $produits->nomproduit }}" required>
     <label>Prix</label>
     <input class="form-control" type="text" name="prix" value="{{ $produits->prix }}" required>

     <td><img src="{{asset('storage/'.$produits->image)}}" alt=" " class="img-fluid"  width="500px" height="500px"></td>

     <div class="form-group d-flex flex-column" >
        <input type="hidden" name="photo" value="{{$produits->image}}" class="form-control">
            <label>photo</label>
                <input type="file" name="newphoto" class="form-control">


</div>
        <label>stock</label>
        <input class="form-control" type="text" name="stock" value="{{ $produits->stock }}" required>
        <label>Description</label>
        <input class="form-control" type="text" name="description" value="{{ $produits->description }}" required>
    </div>





 	<a href="{{route('AfficheProduit')}}" class="btn btn-default">Annuler</a>
<button type="submit" class="btn btn-warning pull-right">Modifier</button>
</form>
</body>

</html>
