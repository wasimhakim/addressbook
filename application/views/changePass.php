<?php include("topSection.php"); ?>

<div style="width:50%; margin-top:50px; background: white; padding: 40px 20px; border-radius: 10px;" class="container">
<?php 
    if(validation_errors() != "") {
?>
<div class="alert alert-dismissible alert-danger">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <?php echo validation_errors(); ?>
</div>
<?php } ?>
    <form action="changePass" method="post">
        <fieldset>
        <legend>Change Password</legend>
        <div class="form-group">
          <label for="exampleInputEmail1">Old Password</label>
          <input type="password" name="oPass" class="form-control" placeholder="Enter Old Password">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">New Password</label>
          <input type="password" name="nPass" class="form-control" placeholder="Enter New Password">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Confirm Password</label>
          <input type="password" name="cPass" class="form-control" placeholder="Confirm Password">
        </div>
        <button type="submit" class="btn btn-primary">Change</button>
    </form>
</div>


<?php include("bottomSection.php"); ?>