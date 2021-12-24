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
    <div class="container">
    
  <h2>Add new Coupon</h2>

  <h3 style="color:green"><?php if(isset($success)){echo $success;} ?></h3>

  <div class="row">
  
 
  <form action="" method="POST">
  
    <div class="form-group">
      
      <label for="code">Coupon Code   :</label>
      <input type="text" name="code" id="code">
      <label style="color:red"><?php if(isset($error)){echo $error;} ?></label>
      
    </div>
    <div class="form-group">
      <label for="ctype">Coupon Type   :</label>
      <input type="radio" name="ctype" value="flat" id="ctype">Flat Discount
      <input type="radio" name="ctype" value="percentage" id="ctype">% Basis
       </div>
    <div class="form-group">
      <label for="discount">Discount    :</label>
      <input type="text" name="discount" id="discount">
      <br><span>if type is flat, Enter amount, Else Enter 0 to 100% </span>
    </div>
    <div class="form-group">
      <label for="count">Number of use/ users   :</label>
      <input type="text" name="count" id="count">
    </div>
    <div class="form-group">
    <label for="cars">Who can Use    :</label>

<select name="user" id="user">
  <option value="1" selected>All users</option>
  <option value="2">user1</option>
  <option value="3">user2</option>
  <option value="4">user3</option>
</select>
    </div>
    <div class="form-group">
    <label for="end_date">End Date    :</label>
<input type="date" id="end_date" name="end_date">
    </div>

    <div class="form-group">
    <label for="amount_limit">Purchase Amount Limit    :</label>
<input type="text" id="amount_limit" name="amount_limit">
    </div>   
    
    <div class="form-group">
    <label for="max_discount">Maximum Discount Amount    :</label>
<input type="text" id="max_discount" name="max_discount">
    </div>

    
    <div class="form-group">
    <input type="submit" name="add" value="ADD" class="btn btn-primary">
    </div>




</form>
</div>

</div>


</div>
</body>
</html>