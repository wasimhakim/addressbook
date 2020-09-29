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
    <form action="addAddress?id=<?php echo $_GET['id']; ?>" method="post">
        <fieldset>
        <legend>Add Address</legend>
        <div class="form-group">
          <label for="exampleInputEmail1">Address</label>
          <input type="text" name="address" class="form-control" value="<?php echo set_value('address'); ?>" placeholder="Enter Address">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">City</label>
          <input type="text" name="city" class="form-control"  value="<?php echo set_value('city'); ?>" placeholder="Enter City">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">State</label>
          <input type="text" name="state" class="form-control"  value="<?php echo set_value('state'); ?>" placeholder="Enter State">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Country</label>
          <input type="text" name="country" class="form-control"  value="<?php echo set_value('country'); ?>" placeholder="Enter Country">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Pincode</label>
          <input type="number" name="pincode" class="form-control"  value="<?php echo set_value('pincode'); ?>" placeholder="Enter Pincode">
        </div>
        <button type="submit" class="btn btn-primary">Add</button>
    </form>
</div>


<?php include("bottomSection.php"); ?>