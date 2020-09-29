<?php include('topSection.php'); ?>

<div style="margin-top: 30px; width: 80%; background: white; padding: 20px 20px; border-radius: 10px;" class="container">
    <div class="row">
        <div class="col-lg-8 col-md-8 colsm-8 col-xs-8">
            <h1>Profile <a href="contactlist" class="btn btn-primary btn-sm">Contact List</a></h1>
        </div>
        <div class="col-lg-4 col-md-4 colsm-4 col-xs-4">
            <h1 class="text-right"><a class="btn btn-danger btn-sm" href="addAddress?id=<?php echo $contacts[0]->id; ?>">+ Add Address</a></h1>
        </div>
    </div>
    <hr>
    <p><b>Name:</b> <?php echo  $contacts[0]->name ?></p>
    <p><b>Email:</b> <?php echo $contacts[0]->email ?></p>
    <p><b>Phone:</b> <?php echo $contacts[0]->phone ?></p>
    <br>
    <?php foreach($addresses as $key => $address): ?>
    <p><b>Address:</b> <?php echo $address->address.', '.$address->city.', '.$address->state.', '.$address->country.', '.$address->pincode; 
    if($address->status == "default") {
        echo " <b>(default)</b>";
    } else {
        echo '<a href="makeDefault?id='.$address->id.'&mid='.$_GET["id"].'"> Make Default</a>';
    } 
    ?> </p>
    <?php endforeach ?>
    
</div>



<?php include('bottomSection.php'); ?>