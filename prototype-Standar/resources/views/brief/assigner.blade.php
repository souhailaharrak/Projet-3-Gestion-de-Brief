@include('brief.layoute')


 {{-- @foreach($ApprenantAssinger->apprent as $item)


 <table class="table">
    <tbody>
    <tr>
        <td>
            <h4>{{$item->prenom}}</h4>
        </td>

    </tr>
    </table>


 @endforeach --}}


  @foreach ($apprenant as $iteme)

  <table class="table">
<tbody>
<tr>
    <td>
        <h4>{{$iteme->prenom}}</h4>
    </td>
    <td>

    <form action="{{route('assigner.store')}}" method="POST">
        @csrf
       <input type="hidden" value="{{$iteme->id}}" name="apprenant_id">
       <input type="hidden" value="{{$id}}" name="briefs_id">

       <button class="btn btn-primary btn-lg">+</button>

</form>
    </td>
    <td>
        <h1></h1>
            <form action="{{route('assigner.destroy',$iteme->id)}}" method="POST">
                @csrf
                @method('DELETE')
               <input type="hidden" value="{{$iteme->id}}" name="apprenant_id">
               <input type="hidden" value="{{$id}}" name="briefs_id">

                <button class="btn btn-danger btn-lg">-</button>
        </form>
        </td>
</tr>
</table>



 @endforeach