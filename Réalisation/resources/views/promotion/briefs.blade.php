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
            <th class="text-white h4" colspan="2">Action</th>

                </tr>

            </thead>
            <tbody>

                @foreach ($briefs as $item )
                <tr>
                    <td>{{$item->id}} </td>
                    <td>{{$item->name}} </td>

                    <td>
                        <a href="{{route('assignerbrief',['id1'=>$promotion,'id2'=>$item->id])}}"><button  id="assignbtn"  onclick="supprimer()"class="btn btn-success h1 w-75"class="rounded-3">assigner</button></a>
                        </td>
                    <td>
                        <form action="{{route('brief.destroy',$item->id)}}" method="POST">
                            @method("DELETE")
                            @csrf
                            <button  id="delbtn" class="btn btn-danger" class="rounded-3">delete</button>
                        </form>
                    </td>


                </tr>
                @endforeach
            </tbody>

        </table>
  <a href="{{ route('brief.addpromobrief',['id'=>$promotion]) }}" class="btn btn-outline-primary fs-3" >add Brief</a>

        @endsection
