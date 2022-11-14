

@extends('promotion.layoute')

@section('content')

<div>
    <center>
        <h1 class="mt-5">LES APPRENTS</h1>
    </center>

    <div class="input-group col-12">
        <div class="form-outline col-6 mt-5 ms-5" >
            <input type="search" id="searchE" name="search" class="form-control"   placeholder="search"/>

          </div>
          <button type="button" class="btn btn-primary mt-5">
            <i class="fa-sharp fa-solid fa-magnifying-glass"></i>
          </button>
       </div>

</div>
    {{-- <div style="width: 10rem;margine-top:-50px">


        <a href="{{ route('promotion.create') }}" class="btn btn-primary  mt-4 ms-5">Create</a>
    </div> --}}
    <div class="container">
        @if ($message = Session::get('success'))
            <div class="alert alert-primary" role="alert">
                {{ $message }}
            </div>
        @endif
    </div>
    <div class="container mt-5">

        <table class="table" >
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">nom</th>
                    <th scope="col" style="width: 400px">Action</th>
                </tr>
            </thead>
            <tbody id="result">
                @php

                    $i = 1;
                @endphp

                @foreach ($apprent as $item)
                    <tr>
                        <th>{{ $i++ }}</th>

                        <th>{{ $item->nom }}</th>

                        <td>

                            <div class="row">

                                <div class="col">
                                    <a class="btn btn-success" href="{{ route('apprents.edit', $item->id) }}">Edit</a>

                                </div>
                                <div class="col">
                                    <form action="{{ route('apprent.destroy', $item->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="sumbit" class="btn btn-danger">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach

            </tbody>

        </table>

        <script src="https://code.jquey.com/jquery-3.6.1.min.js"></script>


         <script type="text/javascript">

$(document).ready(function() {
    $('#searchE').keyup(function() {
        var input = $(this).val();
        // alert(input);

            $.ajax({
                method: "GET",
                url: "../searche",
                data: {
                    'key': input
                },
                success: function(data) {
                    $('#result').html(data);
                }
            });

    });
});

        </script>

        {{ $apprent->links() }}
    </div>


@endsection
