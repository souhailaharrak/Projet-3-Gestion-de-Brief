@extends('promotion.layoute')

@section('content')
    <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><h1 class="text-warning">Solicode</h1></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item active position-absolute start-50 translate-middle">
                            <a class="nav-link active" aria-current="page" href="{{route("promotion.index")}}"><h3 style="color: wheat">Promotion</h3></a>
                        </li>

                        <li class="nav-item  active position-absolute  start-50">
                            <a class="nav-link active"  aria-disabled="true" href="{{route("brief.index")}}"  ><h3 style="color: wheat;margin-left:55px;margin-top:-25px">Brief</h3></a>
                        </li>
                    </ul>


                    <form class="d-flex w-25">

                        <input type="search" id="search" name="search" class="form-control " placeholder="search" />
                        <button class="btn btn-dark " type="submit"> <i
                                class="fa-sharp fa-solid fa-magnifying-glass"></i></button>
                    </form>

                </div>
            </div>
        </nav>
    </div>




    </div>
    <div style="width: 10rem;margine-top:-50px">


    </div>
    <div class="container">
        @if ($message = Session::get('success'))
            <div class="alert alert-success mt-5" role="alert">
                {{ $message }}
            </div>
        @endif
        @if ($message = Session::get('suc'))
            <div class="alert alert-primary" role="alert">
                {{ Session::get('suc') }}
            </div>
        @endif
    </div>
    <div class="container mt-5">

        <table class="table table table-dark table-striped">
            <thead>
                <tr>

                    <th scope="col">Name</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody id="results">
                @foreach ($promotions as $item)
                    <tr>


                        <th>{{ $item->name }}</th>

                        <td>


                            <div class="row">

                                <div class="col">
                                    <a class="btn btn-success w-50" href="{{ route('promotion.edit', $item->id) }}">Edit</a>
                                </div>
                                <div class="col">
                                    <form action="{{ route('promotion.destroy', $item->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="sumbit" class="btn btn-danger w-50">Delete</button>
                                    </form>

                                </div>
                                <div class="col">
                                    <a href="{{ route('promotion.briefs', $item->id) }}" class="btn btn-warning w-50"
                                        style="color:white">voir briefs</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach

            </tbody>

        </table>
        <a href="{{ route('promotion.create') }}" class="btn btn-primary  mt-4 ms-5 w-25 fs-5">Create</a>
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
