@extends('brief.layoute')

@section('content')
<style>
    thead,th{
        background-color: #6cc8ba;
    }
</style>
    {{-- <div style="width: 10rem;margine-top:-50px">

        <a href="{{ route('brief.create') }}" class="btn btn-primary  mt-4 ms-5">Create</a>
    </div> --}}

    <div class="container mt-5" class="shadow-lg p-3 mb-5 bg-body rounded">

        <table  class="table shadow-lg p-3 mb-5 bg-body rounded" >
            <thead >
                <tr>
                    <th class="text-white h4">id</th>
                <th class="text-white h4">Nom de brief</th>
            <th class="text-white h4">Date heure de livraison</th>
            <th class="text-white h4">Date heure derécupération</th>

            <th class="text-white h4" colspan="2">Action</th>

                </tr>

            </thead>
            <tbody>

                @foreach ($brief as $item )
                <tr>
                    <td>{{$item->id}} </td>
                    <td>{{$item->name}} </td>
                    <td>{{$item->livraisonDate}}</td>
                    {{-- <td>{{$item->description}}</td> --}}

                    <td>{{$item->recuperationDate}}</td>
                    <td>
                        <a href="{{route('brief.edit',$item->id)}}"><button class="btn btn-success w-75"class="rounded-3">Edit</button></a>
                        </td>
                    <td>
                        <form action="{{route('brief.destroy',$item->id)}}" method="POST">
                            @method("DELETE")
                            @csrf
                            <button  class="btn btn-danger h1 w-75" class="rounded-3">delete</button>
                        </form>
                    </td>



                </tr>
                @endforeach
            </tbody>

        </table>
  <a href="{{ route('brief.create') }}" class="btn btn-outline-primary fs-3" >add Brief</a>
        @endsection
