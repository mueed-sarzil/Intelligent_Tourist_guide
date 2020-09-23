<!DOCTYPE html>
<html>
<head>
	<title>Admin Details</title>
	<style> 
input[type=text] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 3px solid #ccc;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  outline: none;
}

input[type=text]:focus {
  border: 3px solid #555;
}
input[type=submit] {
  background-color: red;
  border: none;
  color: white;
  padding: 12px 30px;
  text-decoration: none;
  margin: 4px 7px;
  cursor: pointer;
}
body {
  background-color: lightblue;
}
</style>
</head>
<body>
	<div class="imgcontainer" align="center">
    <img src="/images/logo2.jpg" height="250" width="300" alt="Avatar" class="avatar">
  </div>
	<h1 align="center">Admin Delete</h1>

	<a href="{{route('admin.index')}}">Back to List</a> |
	<a href="{{route('logout.index')}}">Logout</a> 

	<table align="center">
		<tr>
			<td>First Name:</td>
			<td>{{$acc['firstname']}}</td>
		</tr>
		<tr>
			<td>Last Name:</td>
			<td>{{$acc['lastname']}}</td>
		</tr>
		<tr>
			<td>Email:</td>
			<td>{{$acc['email']}}</td>
		</tr>
		<tr>
			<td>Type:</td>
			<td>{{$acc['type']}}</td>
		</tr>
		
	</table>
	<div align="center">
	<h2>Are you sure?</h2>
	<form method="post">
		{{ csrf_field() }}
		<input type="hidden" name="accId" value="{{$acc['id']}}">
		<input type="submit" name="confirm" value="Confirm">
	</form>
</div>
</body>
</html>