@extends('brief.layoute')
@section('content')

<style>
        body {
            background: rgb(2, 0, 36);
            background: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(9, 9, 121, 1) 35%, rgba(0, 212, 255, 1) 100%);
        }
        .form-row{
            color: white;
            margin-top: 10rem;
            margin-left: 25rem;
        }
      h2{
        color: white
      }
      .tn{
        float: left;
        margin-top: 10rem;
        width: 10rem;
        color: black;
        height: 4rem;
        margin-left:-40rem;
        background-color:#c9ff6b;
      border: 0;
        font-weight: 700;
      }
      .btn{

        float: left;
        margin-top: 10rem;
        width: 10rem;
        height: 4rem;
        margin-left:-25rem;
        background-color:;
      border: 0;
        font-weight: 700;
      }
</style>


<form  action="{{route('tache.store')}}" method="POST" >
    @csrf
     <center>
            <h2 class="mt-4">Ajouter Tache</h2>
        </center>
    <div class="form-row">

      <div class="form-group col-md-4">
         <h4>Nom du tache : </h4><input type="text" class="form-control" name="name" >
      </div>
      <div class="form-group col-md-4 ms-5">
        <h4>  Début de la tache:</h4><input type="datetime-local" class="form-control"  name="startDate" >
      </div>


      <div class="form-group col-md-4">
      <h4>   Fin de la tache:</h4><input type="datetime-local" class="form-control" name="endDate" >
      </div>
      <div class="form-group col-md-4 ms-5">
        <h4>Description: </h4>   <input type="longText" class="form-control" name="description" >
      </div>
      <input type="hidden" value="{{$brief->id}}" name="brief_id">
 <button type="submit" class="tn">Ajouter</button>
    </div>

    <a href="{{ route('brief.edit',$brief->id) }}" class="btn btn-success fs-3">return</a>
  </form>

  @endsection