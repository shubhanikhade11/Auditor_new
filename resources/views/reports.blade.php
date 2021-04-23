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