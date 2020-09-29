<?php include('topSection.php'); ?>



<div style="margin-top: 30px; width: 80%; background: white; padding: 20px 20px; border-radius: 10px;" class="container">
    <div class="row">
        <div class="col-lg-8 col-md-8 colsm-8 col-xs-8">
            <h1><?php echo $this->session->name; ?> <a href="createContact" type="button" class="btn btn-primary btn-sm">Create Contact</a></h1>
        </div>
        <div class="col-lg-4 col-md-4 colsm-4 col-xs-4">
            <h1 class="text-right"><a class="btn btn-danger btn-sm" href="changePass">Change Password</a> <a href="logout" class="btn btn-link">Logout</a></h1>
        </div>
    </div>
    <hr>
    <table class="table table-hover table-bordered">
        <thead>
            <tr>
                <th>S.no</th>
                <th>Name</th>
                <th>Address</th>
                <th>Profile</th>
            </tr>
        </thead>
        <tbody>
        <?php 
            foreach($contacts as $key => $contact):
        ?>
            <tr>
                <td><?php echo $key + 1; ?></td>
                <td><?php echo $contact->name; ?></td>
                <td><?php if(!empty($address[$key])) { echo $address[$key][0]->address.', '.$address[$key][0]->city.', '.$address[$key][0]->state.', '.$address[$key][0]->country.', '.$address[$key][0]->pincode; }?></td>
                <td><a href="profile?id=<?php echo $contact->id; ?>" class="btn btn-success">Profile</a></td>
            </tr>
                <?php  
        endforeach; ?>
        </tbody>
    </table>
    
</div>


<?php include('bottomSection.php'); ?>