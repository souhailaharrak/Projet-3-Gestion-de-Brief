@extends('promotion.layoute')
@section('content')



<center>
    <h2 class="mt-4 ">Modifier les apprents</h2>
</center>
{{-- <a href="{{ route('promotion.index') }}">
    <h5 style="margin-top:65px">Back</h5>
</a> --}}
<form action="{{ route('apprent.update',$apprent->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3 col-8 ms-5" style="padding-top: 10%">
        <label for="nam" class="form-label">Name Apprent</label>
        <input type="text" name="nom" value="{{ $apprent->nom }}" class="form-control"
            placeholder="Name..."><br><br>
        <label for="nam" class="form-label">Name Apprent</label>
        <input type="text" name="prenom" value="{{ $apprent->prenom }}" class="form-control"
            placeholder="Prenom..."><br><br>
        <label for="nam" class="form-label">Name Apprent</label>
        <input type="text" name="email" value="{{ $apprent->email }}" class="form-control"
            placeholder="email..."><br><br>
    </div>
    <button type="submit" class="btn btn-primary ms-5">Editer</button>
</form>

@endsection