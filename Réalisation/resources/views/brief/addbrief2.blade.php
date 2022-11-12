@extends('brief.layoute')
@section('content')

<style></style>

<div style="margin: auto;
width: 50%;
border: 3px solid green;
padding: 10px;">
<h1 style="text-align: center;color:blueviolet">Assigner Brief</h1>
<form action="{{route("brief.ajouterbriefpromotion",['id'=>$promotion])}}" method="post">
    @csrf
    <h4>Nom du Brief</h4> <input  name="name" type="text"  class="form-control w-75" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1"><br><br>
    <h4>Date/heure de livraison :</h4> <input name="livraisonDate" class="form-control w-75" type="datetime-local" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1"><br><br>
   <h4> Date/heure de récupération :</h4> <input name="recuperationDate" class="form-control w-75" type="datetime-local" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1"><br><br>
     <button class="btn btn-info fs-5">ajouter Brief</button><br><br>
</form>


<a href="{{route("brief.index")}}"><button class="btn btn-dark fs-5"> return</button></a>
</div>


@endsection