<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div>
  <h2>Let AJAX change this text</h2>
  <button type="button" id="sel_user">Change Content</button>
</div>
<div>
  <p id="suname"></p>
</div>
</body>
<script type='text/javascript'>
  $(document).ready(function(){
    
 
   $('#sel_user').change(function(){
    alert("results");
    
    var username = $(this).val();
    $.ajax({
     url:'<?=base_url()?>AdminController/aaa',
     method: 'post',
     data: {},
     dataType: 'json',
     success: function(response){
       var len = response.length;
       $('#suname').text('');
       if(len > 0){
         // Read values
         var uname = response[0].username;
 
         $('#suname').text(uname);
 
       }
 
     }
   });
  });
 });
 </script>

</html>