@extends('brief.layoute')
@section('content')
<style>
    thead,th{
        background-color: #6cc8ba;
    }
    body{
        background: rgb(2,0,36);
background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 35%, rgba(0,212,255,1) 100%);
    }
</style>
    {{-- <div style="width: 10rem;margine-top:-50px">

        <a href="{{ route('brief.create') }}" class="btn btn-primary  mt-4 ms-5">Create</a>
    </div> --}}

    <div class="container mt-5" class="shadow-lg p-3 mb-5 bg-body rounded">

        <table  class="table shadow-lg p-3 mb-5 bg-body rounded" >
            <thead >
                <tr>

                <th class="text-white h4">Nom de brief</th>
            <th class="text-white h4" colspan="2">Action</th>

                </tr>

            </thead>
            <tbody>

                @foreach ($briefs as $item )
                <tr>

                    <td>{{$item->name}} </td>

                    <td>
                        <a href="{{route('assignerbrief',['id1'=>$promotion,'id2'=>$item->briefs_id])}}"><button  id="assignbtn"  onclick="supprimer()"class="btn btn-success h1 w-75"class="rounded-3">assigner</button></a>
                        </td>

                    </td>


                </tr>
                @endforeach
            </tbody>

        </table>
  <a href="{{ route('brief.addpromobrief',['id'=>$promotion]) }}" class="btn btn-outline-primary fs-3" >add Brief</a>

        @endsection
