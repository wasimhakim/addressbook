<?php 
    include("topSection.php"); 
?>

<div style="width:30%; margin-top:50px; background: white; padding: 40px 20px; border-radius: 10px;" class="container">
<?php 
    if(validation_errors() != "") {
?>
<div class="alert alert-dismissible alert-danger">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <?php echo validation_errors(); ?>
</div>
<?php } ?>
    <form action="login" method="post">
        <fieldset>
        <legend>Log In</legend>
        <div class="form-group">
          <label for="exampleInputEmail1">Username</label>
          <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo set_value('username'); ?>" placeholder="Enter Username">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" name="pass" class="form-control" id="exampleInputPassword1" value="<?php echo set_value('pass'); ?>" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
    <br>
    <br>
    <a style="color: gray;" href="signup">Create new account</a>
</div>


<?php include("bottomSection.php"); ?>

