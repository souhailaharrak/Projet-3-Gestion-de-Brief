

@extends('promotion.layoute')

@section('content')
    <div>

        <div class="input-group col-12">
            <div class="form-outline col-6 mt-5 ms-5" >
                <input type="search" id="search" name="search" class="form-control"   placeholder="search"/>

              </div>
              <button type="button" class="btn btn-primary mt-5">
                <i class="fa-sharp fa-solid fa-magnifying-glass"></i> 
              </button>
           </div>

    </div>
    <div style="width: 10rem;margine-top:-50px">


        <a href="{{ route('promotion.create') }}" class="btn btn-primary  mt-4 ms-5">Create</a>
    </div>
    <div class="container">
        @if ($message = Session::get('success'))
            <div class="alert alert-success mt-5" role="alert">
                {{ $message }}
            </div>
        @endif
        @if ($message = Session::get('suc'))
            <div class="alert alert-primary" role="alert">
                {{ Session::get("suc")}}
            </div>
        @endif
    </div>
    <div class="container mt-5">

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">name</th>
                    <th scope="col" style="width: 400px">Action</th>
                </tr>
            </thead>
            <tbody id="results">
                @php

                    $i = 1;
                @endphp

                @foreach ($promotions as $item)
                    <tr>
                        <th>{{ $i++ }}</th>

                        <th>{{ $item->name }}</th>

                        <td>


                            <div class="row">

                                <div class="col">
                                    <a class="btn btn-success" href="{{ route('promotion.edit', $item->id) }}">Edit</a>
                                </div>
                                <div class="col">
                                    <form action="{{ route('promotion.destroy', $item->id) }}" method="POST">
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
    $('#search').keyup(function() {
        var input = $(this).val();
        // alert(input);

            $.ajax({
                url: "search",
                method: "GET",
                data: {
                    'key': input
                },
                success: function(data) {
                    $('#results').html(data);
                }
            });

    });
});

        </script>

        {{ $promotions->links() }}
    </div>


@endsection
