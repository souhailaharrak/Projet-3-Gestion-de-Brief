@extends('brief.layoute')
@section('content')

<form  action="{{route('tache.store')}}" method="POST" >
    @csrf
    <div class="form-row">
      <div class="form-group col-md-2">
        Nom du tache :<input type="text" class="form-control" name="name" >
      </div>
      <div class="form-group col-md-2">
        Début de la tache:<input type="datetime-local" class="form-control"  name="startDate" >
      </div>
      <div class="form-group col-md-2">
        Fin de la tache:<input type="datetime-local" class="form-control" name="endDate" >
      </div>
      <div class="form-group col-md-2">
       Description:<input type="longText" class="form-control" name="description" >
      </div>
      <input type="hidden" value="{{$brief->id}}" name="brief_id">

    </div>

    <button type="submit" class="btn btn-primary">Ajouter</button>
  </form>
  @endsection