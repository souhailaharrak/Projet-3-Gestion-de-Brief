@include('brief.layoute')


 @foreach ($ApprenantAssinger as $item)



 <table class="table">
    <tbody>
    <tr>
        <td>
            <h4>{{$item->prenom}}</h4>
        </td>
        <td>
            <form action="{{route('assigner.destroy',$item->id)}}" method="POST">
                @csrf
                @method('DELETE')
               <input type="hidden" value="{{$item->id}}" name="apprenant_id">
               <input type="hidden" value="{{$id}}" name="briefs_id">

                <button class="btn btn-danger btn-lg">-</button>
        </form>
        </td>
    </tr>
    </table>


 @endforeach

 <h1 style="color: rgb(53, 45, 45)"> Assigner les apprenant</h1>
  @foreach ($apprenant as $iteme)

  <table class="table">
<tbody>
<tr>
    <td>
        <h4>{{$iteme->Prenom}}</h4>
    </td>
    <td>

    <form action="{{route('assigner.store')}}" method="POST">
        @csrf
       <input type="hidden" value="{{$iteme->id}}" name="apprenant_id">
       <input type="hidden" value="{{$id}}" name="briefs_id">

       <button class="btn btn-primary btn-lg">+</button>
</form>
    </td>
</tr>
</table>



 @endforeach