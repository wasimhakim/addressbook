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
    <form action="createContact" method="post">
        <fieldset>
        <legend>Create Contact</legend>
        <div class="form-group">
          <label for="exampleInputEmail1">Full Name</label>
          <input type="text" name="name" class="form-control" value="<?php echo set_value('name'); ?>" placeholder="Enter Full Name">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Email</label>
          <input type="email" name="email" class="form-control"  value="<?php echo set_value('email'); ?>" placeholder="Enter Email">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Phone</label>
          <input type="number" name="phone" class="form-control"  value="<?php echo set_value('phone'); ?>" placeholder="Enter Phone number">
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>


<?php include("bottomSection.php"); ?>