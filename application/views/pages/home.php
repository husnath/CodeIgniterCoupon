<div class="container">
<br><br><br>
  <form method="post">
    <label>Order Total</label>
    <input type="text" name="amount" value="<?php echo $amount; ?>">
    <br><br><br>
    <label>Use your coupon</label>
    <input type="text" name="code">
    <input type="submit" name="apply" value="apply">
</form>

<span style="color:red"><?php echo $error; ?></span>
<br><br>
<span style="color:blue">Your final Amount Rs.
<?php 
if(isset($final_amount)){
  echo $final_amount;
}
else{
  echo $amount;
}
?>
</span> 
<br><br><br>
<input type="submit" name="order" value="PLACE ORDER" class="btn btn-success">


</div>