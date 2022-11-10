@include('brief.layoute')

 <a class="btn btn-primary btn-lg" href="{{route('assignertous',['promo'=>$promotion,'brief'=>$brf])}}">assigner tous</a>
  @foreach ($apprenant as $iteme)

  <table class="table w-75">
<tbody>
<tr>
    <td>
        <h4>{{$iteme->prenom}}</h4>
    </td>
    <td>

    <form action="{{route('assigner.store')}}" method="POST">
        @csrf
       <input type="hidden" value="{{$iteme->id}}" name="apprenant_id">
       <input type="hidden" value="{{$brf}}" name="briefs_id">

       <button id="assignbtn" onclick="assigner()" class="btn btn-primary btn-lg" >+</button>

</form>
    </td>
    <td>

            <form action="{{route('assigner.destroy',$iteme->id)}}" method="POST">
                @csrf
                @method('DELETE')
               <input type="hidden" value="{{$iteme->id}}" name="apprenant_id">
               <input type="hidden" value="{{$brf}}" name="briefs_id">

                <button  id="delbtn" onclick="suprimer()" class="btn btn-danger btn-lg" >-</button>
        </form>
        </td>

</table>


 @endforeach
 <a href="{{route('brief.index')}}" ><button class="btn btn-outline-success fs-3 ms-5">return</button></a>



</tbody>


</table>
<script>
    function suprimer(){
        document.QuerySelector('#delbtn').disabled=true;
        document.QuerySelector('#assignbtn').disabled=false;
    }
    function assigner(){
    document.QuerySelector('#delbtn').disabled=false;
        document.QuerySelector('#assignbtn').disabled=true;
    }


</script>