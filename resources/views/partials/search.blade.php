<div class="col-10 agileits_search">
    <form action="{{ route('produits.search')}}" class="d-flex mr-3">

        <input type="text" name="q" class="form-control" placeholder="Search" value ="{{ request()->q ??''}}" >

    <button type="submit" class="btn my-2 my-sm-0"><i class="fa fa-search" aria-hidden="true"></i></button>








    </form>
    </div>
