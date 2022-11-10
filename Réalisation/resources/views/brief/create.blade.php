@extends('brief.layoute')
@section('content')

<style></style>

<form action="{{route("brief.store")}}" method="post">
    @csrf
     Nom du Brief<input name="name" type="text">
     Date/heure de livraison :<input name="livraisonDate" type="datetime-local">
     Date/heure de récupération :<input name="recuperationDate" type="datetime-local">
    <button>ajouter Brief</button>
</form>


<a href="{{route("brief.index")}}"><button>return</button></a>



@endsection