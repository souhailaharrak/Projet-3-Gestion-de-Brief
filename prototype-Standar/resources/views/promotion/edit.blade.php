@extends('promotion.layoute')
@section('content')
    <div class="container">
        <center>
            <h2 class="mt-4 ">Modifier</h2>
        </center>
        <a href="{{ route('promotion.index') }}">
            <h5 style="margin-top:65px">Back</h5>
        </a>
        <form action="{{ route('promotion.update',$promotion)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3" style="padding-top: 10%">
                <label for="nam" class="form-label">Name Promotion</label>
                <input type="text" name="name" value="{{ $promotion->name }}" class="form-control"
                    placeholder="Name..."><br><br>



                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('promotion.show', $promotion->id) }}" class="btn btn-warning">Show</a>
                <button type="button" class="btn btn-info" id="add">
                    Ajouter appartement
                </button>
                <div class="row row-cols-3 mb-2" id="appar">

                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
        <div class="container">
            @if ($message = Session::get('success'))
                <div class="alert alert-primary" role="alert">
                    {{ $message }}
                </div>
            @endif
        </div>

@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $("#add").on("click", function() {
                var out = " ";
                // out += '<div class="row row-cols-3 mb-2">';
                out += '<div class="col mb-2">';
                out +='<input type="text" name="prenom[]" class="form-control form-control-sm" placeholder="Prénom">';
                out += '</div>';
                out += '<div class="col">';
                out +='<input type="text" name="nom[]" class="form-control form-control-sm" placeholder="nom">';
                out += '</div>';
                out += '<div class="col">';
                out +='<input type="email" name="email[]" class="form-control form-control-sm" placeholder="E-mail">';
                out += '</div>';
                // out+='</div>';
                $("#appar").append(out);
            })
        })
    </script>
    
@endsection
