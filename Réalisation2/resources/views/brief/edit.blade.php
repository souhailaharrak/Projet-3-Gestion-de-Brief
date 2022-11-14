@extends('brief.layoute')
@section('content')

    <style>
        button {
            width: 80px;

        }

        .form-row {

            margin-top: 10rem
        }

        .form-group {
            color: white;
            font-weight: 700
        }

        table {
            margin-top: 10rem;

        }

        tbody {
            color: white
        }

        .container {

            color: white
        }

        body {
            background: rgb(2, 0, 36);
            background: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(9, 9, 121, 1) 35%, rgba(0, 212, 255, 1) 100%);
        }
    </style>
    <div class="container">
        <center>
            <h2 class="mt-4">Modifier Brief </h2>
        </center>

        <form action="{{ route('brief.update', $brief->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-row">
                <div class="form-group col-md-4">
                    <h4> Nom du brief :</h4>
                    <input type="text" class="form-control" value="{{ $brief->name }}" name="name">
                </div>
                <div class="form-group col-md-4">
                    <h4>Date/heure de livraison :</h4><input type="datetime-local" class="form-control"
                        value="{{ $brief->livraisonDate }}" name="livraisonDate">
                </div>
                <div class="form-group col-md-4">

                    <h4>Date/heure de récupération</h5>
                        <input type="datetime-local" class="form-control" value="{{ $brief->recuperationDate }}"
                            name="recuperation">
                </div>
            </div>

            <button type="submit" class="btn btn-warning text-white fs-4 ms-4">Editer</button>

        </form>


        <table class="table">
            <thead class="thead-darK" style="background-color:rgb(148, 186, 195) ;color:azure;">
                <tr>


                    <th scope="col">Nom de tache</th>
                    <th scope="col">Debut du tache</th>
                    <th scope="col">Fin du tache</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>
                    <th></th>

                </tr>
            </thead>
            <tbody>
                @foreach ($taches as $item)
                    <tr>

                        <td>{{ $item->name }}</td>
                        <td>{{ $item->startDate }}</td>
                        <td>{{ $item->endDate }}</td>
                        <td>{{ $item->description }}</td>
                        <td>
                            <form action="{{ route('tache.edit', $item->id) }}">
                                <button type="submit" class="btn btn-success">Edit</button>

                            </form>
                        </td>
                        <td>
                            <form action="{{ route('tache.destroy', $item->id) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger" >Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>

        <a href="{{ route('brief.index') }}" class="btn btn-success fs-3">return</a>
        <a href="{{ route('add-tache', $brief->id) }}" class="btn btn-primary fs-3">Ajouter</a>
