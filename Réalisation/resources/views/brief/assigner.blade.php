
@include('brief.layoute')

<h1 style=" margin: auto;width: 50%;margin-top:20px;margin-right:70px;color:blueviolet; font-weight: 900;">Assigner Les Brief</h1>
  @foreach ($apprenant as $iteme)

  <table class="table container mt-5" style="">
<tbody>
<tr>
    <td>
        <h3>{{$iteme->prenom}}</h3>
    </td>
    @if($model->verifier($iteme->id,$brf)==0)
    <td>

    <form action="{{route('assigner.store')}}" method="POST">
        @csrf
       <input type="hidden" value="{{$iteme->id}}" name="apprenant_id">
       <input type="hidden" value="{{$brf}}" name="briefs_id">

       <button id="assignbtn" onclick="assigner()" class="btn btn-primary btn-lg" >+</button>

    </form>

    </td>
    @else
    <td>

            <form action="{{route('assigner.destroy',$iteme->id)}}" method="POST">
                @csrf
                @method('DELETE')
               <input type="hidden" value="{{$iteme->id}}" name="apprenant_id">
               <input type="hidden" value="{{$brf}}" name="briefs_id">

                <button  class="btn btn-danger btn-lg" >-</button>
        </form>
        </td>
    @endif

</table>


 @endforeach
 <a href="{{route('brief.index')}}" ><button class="btn btn-outline-success fs-3 ms-5">return</button></a>
 <a class="btn btn-primary btn-lg  ms-5" href="{{route('assignertous',['promo'=>$promotion,'brief'=>$brf])}}">assigner tous</a>


</tbody>


</table>
{{-- <script>
    function suprimer(){
        document.QuerySelector('#delbtn').disabled=true;
        document.QuerySelector('#assignbtn').disabled=false;
    }
    function assigner(){
    document.QuerySelector('#delbtn').disabled=false;
        document.QuerySelector('#assignbtn').disabled=true;
    }


</script> --}}