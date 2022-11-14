@extends('brief.layoute')
@section('content')

<style>
    button{
        width: 80px;
    }
    .form-group{
    margin-left:50px;
    }
    body{
        background: rgb(2,0,36);
background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 35%, rgba(0,212,255,1) 100%);
    }
    .form-group{
        color: white;
    }
</style>
    <div class="container">
        <center>
            <h1 class="mt-4" style="color:white">Modifier Tache </h1>
        </center>

        <form action="{{ route('tache.update',$tache->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-row" style="margin-top:15rem;">
                <div class="form-group col-md-5">
                    <h4> Nom de la Tache :</h4>
                 <input type="text" class="form-control"  value="{{$tache->name}}" name="name" >
                </div>
                <div class="form-group col-md-5">
                  <h4>Debut de la tache :</h4><input type="datetime-local" class="form-control" value="{{$tache->startDate}}" name="startDate" >
                </div>
                <div class="form-group col-md-5">

                  <h4>Fin de la tache</h4>
                  <input type="datetime-local" class="form-control" value="{{$tache->endDate}}" name="endDate" >
                </div>
                <div class="form-group col-md-5">
                   <h4>Description:</h4> <input type="longText" class="form-control" value="{{$tache->description}}" name="description" >
                </div>
              </div>

              <button type="submit" class="btn btn-warning text-white fs-4" style="margin-top:20rem;margin-left:-50rem">Editer</button>

        </form>



