<!DOCTYPE html>
<html>
<head>
	<title>Destination|Intelligent Tourist Guide</title>
</head>
<body>
	<div class="imgcontainer" align="center">
    <img src="/images/logo2.jpg" height="250" width="300" alt="Avatar" class="avatar">
  </div>
	@foreach($destinations as $acc)
  
	<div>
		<h1 style="color:blue" align="center">
		<i>{{$acc['name']}}</i>
	  </h1>
	  <p>
	  	{{$acc['details']}}
   
	  </p>
	</div>
	@endforeach

</body>
</html>