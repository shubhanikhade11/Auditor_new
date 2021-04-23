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

<h2>List of people in Layer</h2>

<table>
  <tr>
    <th>Name</th>
    <th>email</th>
    <th>mobile</th>
    <th>View Report</th>
  </tr>
  @foreach ($result as $user )
  <tr>
    <td>{{$user['Name']}}</td>
    <td>{{$user['email']}}</td>
    <td>{{$user['mobile']}}</td>
    <td> <button><a href="reports"> View</a></button> </td>
  </tr>

  @endforeach
</table>


</body>
</html>