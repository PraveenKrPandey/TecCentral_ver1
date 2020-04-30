<?php 
// include('dbConnetion.php');

if (isset($_REQUEST['rSignup'])){
    if (($_REQUEST['rName'] == "") || ($_REQUEST['rEmail'] == "") || ($_REQUEST['rPassword'] == "")) {
        $regmsg = '<div class="alert alert-warning mt-2" role="alert">All Fields are Required</div>';
    }else {
        $regmsg = '<div class="alert alert-success mt-2" role="alert">Account  Succefully Created</div>';    }
}  ?>

<!-- start registration form -->
<div class="container pt-5 id=" registration">
    <h2 class="text-center">Create an Account</h2>
    <div class="row mt-4 mb-4">
        <div class="col-md-6 offset-md-3">
            <form action="" class="shadow-lg p-4" method="post">
                <div class="form-group">
                    <i class="fas fa-user"></i><label for="name" class="font-weight-bold pl-2">Name</label><input type="text" class="form-control" placeholder="Name" name="rName">
                </div>
                <div class="form-group">
                    <i class="fas fa-user"></i><label for="email" class="font-weight-bold pl-2">Email</label><input type="Email" class="form-control" placeholder="Email" name="rEmail">
                    <small class="form-text">We'll never share your email with anyone</small>
                </div>
                <div class="form-group">
                    <i class="fas fa-key"></i><label for="pass" class="font-weight-bold pl-2">Password</label><input type="Password" class="form-control" placeholder="Password" name="rPassword">
                </div>
                <button type="submit" class="btn btn-primary mt-5 btn-block shadow-sm font-weight-bold" name="rSignup">sign Up</button>
                <em style="font-size:10px;">Note-By clicking sign Up, you agree to our terms, Data policy and cookie policy</em>
                <?php if (isset($regmsg)) {
                    echo $regmsg;
                } ?>
            </form>
        </div>
    </div>
</div>
<!-- end registration form container-->