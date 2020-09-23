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
	<h1 align="center">User List</h1>
	<a href="{{route('admin.index')}}">Back to List</a> <br><br>
	<table border="2">
				<tr>
				<th>ID</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Email</th>
				<th>Type</th>
				<th>Action</th>
				</tr>
				 @foreach($Users as $acc)
				<tr>
				<td>{{$acc['id']}}</td>
				<td>{{$acc['firstname']}}</td>
				<td>{{$acc['lastname']}}</td>
				<td>{{$acc['email']}}</td>
				<td>{{$acc['type']}}</td>
				<td>	
					<a class="button2" href="{{route('admin.userdelete', $acc['id'])}}">Delete</a>
				</td>
			</tr>
			@endforeach
			</table>
</body>
</html>