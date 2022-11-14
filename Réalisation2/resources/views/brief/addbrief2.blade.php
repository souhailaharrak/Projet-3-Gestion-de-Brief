@extends('brief.layoute')
@section('content')

<style>
      body{
        background: rgb(2,0,36);
background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 35%, rgba(0,212,255,1) 100%);
    }
.fst{
    margin-top:10rem
}
    h4{
        color: white;

    }
</style>

<div style="margin: auto;width: 50%;padding: 10px;">
<h1 style="text-align: center;color:white;margin-top:2rem">Assigner Brief</h1>
<form action="{{route("brief.ajouterbriefpromotion",['id'=>$promotion])}}" method="post">

    <div class="fst">
    @csrf
    <h4>Nom du Brief</h4> <input  name="name" type="text"  class="form-control w-75" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1"><br><br>
    <h4>Date/heure de livraison :</h4> <input name="livraisonDate" class="form-control w-75" type="datetime-local" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1"><br><br>
   <h4> Date/heure de récupération :</h4> <input name="recuperationDate" class="form-control w-75" type="datetime-local" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1"><br><br>

     <button class="btn btn-info fs-5">ajouter Brief</button><br><br>
    </div>
</form>


</div>


@endsection