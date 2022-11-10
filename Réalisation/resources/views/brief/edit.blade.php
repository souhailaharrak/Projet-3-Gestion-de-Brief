@extends('brief.layoute')
@section('content')

<style>
    button{
        width: 80px;
    }
</style>
    <div class="container">
        <center>
            <h2 class="mt-4">Modifier </h2>
        </center>

        <form action="{{ route('brief.update',$brief->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-row">
                <div class="form-group col-md-4">
                    <h5> Nom du brief :</h5>
                 <input type="text" class="form-control"  value="{{$brief->name}}" name="name" >
                </div>
                <div class="form-group col-md-4">
                  <h5>Date/heure de livraison :</h5><input type="datetime-local" class="form-control" value="{{$brief->livraisonDate}}" name="livraisonDate" >
                </div>
                <div class="form-group col-md-4">

                  <h5>Date/heure de récupération</h5>
                  <input type="datetime-local" class="form-control" value="{{$brief->recuperationDate}}" name="recuperation" >
                </div>
              </div>

              <button type="submit" class="btn btn-warning text-white fs-4">Editer</button>

        </form>

        {{-- <form action="{{ route('tache.store') }}" method="post" >
            @csrf
            <input type="hidden" value="{{$brief->id}}" name="brief_id">
            </form> --}}
            <table class="table">
                <thead class="thead-dark" style="background-color:rgb(148, 186, 195) ;color:azure">
                  <tr>

                        <th scope="col">id</th>
                        <th scope="col">Nom de tache</th>
                        <th scope="col">Debut du tache</th>
                        <th scope="col">Fin du tache</th>
                        <th scope="col">Action</th>

                  </tr>
                </thead>
                <tbody>
                    @foreach($tache as $item)
                  <tr>
                    <th scope="row">{{$item->id}}</th>
                    <td>{{$item->name}}</td>
                    <td>{{$item->startDate}}</td>
                    <td>{{$item->endDate}}</td>
                    <td>
                        <form action="{{route('tache.edit',$item->id)}}">
                            <button type="submit" class="btn btn-success">Edit</button>

                        </form>
                        </td>
                        <td>
                        <form action="{{route('tache.destroy',$item->id)}}" method="POST">
                            @method("DELETE")
                            @csrf
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                       </td>
                  </tr>
                  @endforeach
                </tbody>

            </table>

<a href="{{route("brief.index")}}"><button>return</button></a>
<a href="{{ route('add-tache',$brief->id)}}" class="btn btn-primary">Ajouter</a>