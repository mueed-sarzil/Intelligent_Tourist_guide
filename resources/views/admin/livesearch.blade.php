<!DOCTYPE html>
<html>


<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style> 
input[type=text] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 1px solid #555;
  outline: none;
}

input[type=text]:focus {
  background-color: lightblue;
}
</style>
</head>
<body>
  <div class="imgcontainer" align="center">
    <img src="/images/logo2.jpg" height="250" width="300" alt="Avatar" class="avatar">
  </div>
  
  <a href="{{route('admin.index')}}">Back To List</a>
  <div align="center">
<label>Comment Box:<input type="text" id="search" name="comment"></label><br>
</div>
<div class="table-responsive">
     <h3 align="center">Total Data : <span id="total_records"></span></h3>
     <table class="table table-striped table-bordered">
      <thead>
       <tr>
        <th>Comment</th>
       </tr>
      </thead>
      <tbody>

      </tbody>
<script>
$(document).ready(function(){

 fetch_customer_data();

 function fetch_customer_data(query = '')
 {
  $.ajax({
   url:"{{ route('livesearch.action') }}",
   method:'GET',
   data:{query:query},
   dataType:'json',
   success:function(data)
   {
    $('tbody').html(data.table_data);
    $('#total_records').text(data.total_data);
   }
  })
 }

 $(document).on('keyup', '#search', function(){
  var query = $(this).val();
  fetch_customer_data(query);
 });
});
</script>
</body>
</html>