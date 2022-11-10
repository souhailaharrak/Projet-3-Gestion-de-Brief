@extends('brief.layoute')
@section('content')
<div class="container">
<form action="{{route('promotion.store')}}" method="POST">
    @csrf
    <h1 class="position-absolute top-0 start-50 translate-middle-x mt-3">Ajouter Promotion</h1>
    <div class="mb-3" style="padding-top: 10%">
      <label for="nam" class="form-label">Name Promotion</label>
      <input type="text" name="name" class="form-control" placeholder="Name..."><br><br>
      <input type="hidden" name="id" class="form-control" placeholder="Name..."><br><br>

        {{-- <button type="button" class="btn btn-info" id="add">
            Ajouter appartement
        </button>
        <div class="row row-cols-3 mb-2" id="appar">

        </div> --}}
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  </div>
  @endsection
  {{-- @section('script')
  <script>
    $(document).ready(function(){
        $("#add").on("click",function(){
            var out=" ";
            // out += '<div class="row row-cols-3 mb-2">';
                out += '<div class="col mb-2">';
                    out += '<input type="text" name="prenom[]" class="form-control form-control-sm" placeholder="Prénom">';
                out+='</div>';
                out += '<div class="col">';
                    out += '<input type="text" name="nom[]" class="form-control form-control-sm" placeholder="nom">';
                out+='</div>';
                out += '<div class="col">';
                    out += '<input type="email" name="email[]" class="form-control form-control-sm" placeholder="E-mail">';
                out+='</div>';
            // out+='</div>';
            $("#appar").append(out);
        })
    })
  </script> --}}

  {{-- @endsection --}}
