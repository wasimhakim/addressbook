<?php include("topSection.php"); ?>

<div style="width:30%; margin-top:50px; background: white; padding: 40px 20px; border-radius: 10px;" class="container">
<?php 
    if(validation_errors() != "") {
?>
<div class="alert alert-dismissible alert-danger">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <?php echo validation_errors(); ?>
</div>
<?php } ?>
    <form action="signup" method="post">
        <fieldset>
        <legend>Sign Up</legend>
        <div class="form-group">
          <label for="exampleInputEmail1">Full Name</label>
          <input type="text" name="fullName" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo set_value('fullName'); ?>" placeholder="Enter Full Name">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Username</label>
          <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo set_value('username'); ?>" placeholder="Enter Username">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" name="pass" class="form-control" id="exampleInputPassword1" value="<?php echo set_value('pass'); ?>" placeholder="Password">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Confirm Password</label>
          <input type="password" name="cPass" class="form-control" id="exampleInputPassword1" value="<?php echo set_value('cPass'); ?>" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary">Sign Up</button>
    </form>
    <br>
    <br>
    <a style="color: gray;" href="login">Login here</a>
</div>


<?php include("bottomSection.php"); ?>