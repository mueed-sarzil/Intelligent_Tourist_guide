<!DOCTYPE html>
<html>
<head>
	<title>User List</title>
	<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: gray;
  color: white;
}

body {
  background-color: lightblue;
}
.button2 {
  background-color: red;
  border: none;
  color: white;
  padding: 15px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 12px;
}
</style>
</head>
<body>
  <div class="imgcontainer" align="center">
    <img src="/images/logo2.jpg" height="250" width="300" alt="Avatar" class="avatar">
  </div>
	<h1 align="center">Ticket List</h1>
	<a href="{{route('admin.index')}}">Back to List</a> <br><br>
	<table border="2">
				<tr>
				<th>ID</th>
				<th>from</th>
				<th>Where</th>
        <th>Date</th>
				<th>Person</th>
        <th>Name</th>
				<th>Email</th>
        <th>Phone</th>
        <th>Ticketno</th>
        <th>Cost</th>
				<th>Action</th>
				</tr>
				 @foreach($Users as $acc)
				<tr>
				<td>{{$acc['id']}}</td>
				<td>{{$acc['fromm']}}</td>
				<td>{{$acc['wheree']}}</td>
				<td>{{$acc['cdate']}}</td>
				<td>{{$acc['travellers']}}</td>
        <td>{{$acc['name']}}</td>
        <td>{{$acc['email']}}</td>
        <td>{{$acc['phone']}}</td>
        <td>{{$acc['ticketno']}}</td>
        <td>{{$acc['cost']}}</td>
				<td>
					<a class="button2" href="{{route('admin.tdelete', $acc['id'])}}">Delete</a>
				</td>
			</tr>
			@endforeach
			</table>
</body>
</html>
