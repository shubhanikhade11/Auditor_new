<!DOCTYPE html>
<html>

<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>

<body>

<h2>Layer:Layer 1</h2>

<h2>Machine Name:{{$result['machinname']}}</h2>
<h2>Date:{{$result['date']}}</h2>


<table>
<tr>
  <th>Question</th>
  <th>Status</th>
</tr>

@if ($People!=null)
<tr>
@foreach($People as $user)
<th>{{$user["question"]}} </th>
@if($user["isOkSelected"]==FALSE)
<th>Not OK</th>
@else
<th>Ok</th>
@endif
</tr>
@endforeach
@endif



@if ($HSE!=null)
<tr>
@foreach($HSE as $user)
<th>{{$user["question"]}} </th>
@if($user["isOkSelected"]==FALSE)
<th>Not OK</th>
@else
<th>Ok</th>
@endif
</tr>
@endforeach
@endif

@if ($ProcessConfor!=null)
<tr>
@foreach($ProcessConfor as $user)
<th>{{$user["question"]}} </th>
@if($user["isOkSelected"]==FALSE)
<th>Not OK</th>
@else
<th>Ok</th>
@endif
</tr>
@endforeach
@endif

@if ($ProductCon!=null)
<tr>
@foreach($ProductCon as $user)
<th>{{$user["question"]}} </th>
@if($user["isOkSelected"]==FALSE)
<th>Not OK</th>
@else
<th>Ok</th>
@endif
</tr>
@endforeach
@endif


@if ($Traceability!=null)
<tr>
@foreach($Traceability as $user)
<th>{{$user["question"]}} </th>
@if($user["isOkSelected"]==FALSE)
<th>Not OK</th>
@else
<th>Ok</th>
@endif
</tr>
@endforeach
@endif


@if ($S5!=null)
<tr>
@foreach($S5 as $user)
<th>{{$user["question"]}} </th>
@if($user["isOkSelected"]==FALSE)
<th>Not OK</th>
@else
<th>Ok</th>
@endif
</tr>
@endforeach
@endif

</table>


</body>
</html>

<tr> <td>{{$user['Name']}}</td> <td>{{$user['email']}}</td><td> {{$user['mobile']}}</td>
    <td><form method="POST" action="{{route('report.display')}}">
                                            @csrf
                                            <input type="hidden" name="name" value="{{$user['Name']}}" required="">
                                            <input type="submit" name="submit" style="margin-right:25%;" value="View">
                                          </form></td>
                                        <td><form method="POST" action="#">
                                            @csrf
                                            <input type="hidden" name="name" value="{{$user['Name']}}" required="">
                                            <input type="submit" name="submit" style="margin-right:25%;" value="Edit">
                                        </form></td>
                                        <td><form method="POST" action="{{ route('verify.user') }}">
                                            @csrf
                                            <input type="hidden" name="name" value="{{$user['Name']}}" required="">
                                            <input type="submit" name="submit" style="margin-right:25%;" value="Verify">
                                          </form></td>
                                          <td>
        <form method="POST" action="{{ route('delete.user') }}">
                                            @csrf
                                            <input type="hidden" name="name" value="{{$user['Name']}}" required="">
                                            <input type="submit" name="submit" style="margin-right:25%;" value="Delete">
                                          </form></td>

</tr>