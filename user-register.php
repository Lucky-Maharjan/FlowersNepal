
<?php $title = "Register"; include_once('includes/header.php');?>
<div class="inner-about inner-register">
    <div class="overlay-inner">
    </div>
</div>
<!-- Contact Starts -->
<section class="about py-5">
    <div class="container py-md-5">
        <h3 class="tittle-wthree text-center">Registration</h3>
        <p class="sub-tittle text-center mt-4 mb-sm-5 mb-4">Please fill up the given form clearly for registering at your first try</p>
        <div class="row">
            <div class="col-lg-4 contact-info-left"></div>
            <div class="col-lg-4 contact-right-wthree-info login">
                <h5 class="text-center mb-4"></h5>
                
                <form action="actions/userRegistration-action.php" method="POST" name="usrReg">
                    
                    <div class="form-group mt-4">
                        <label><i class="fas fa-file-signature"></i> First Name</label>
                        <input type="text" class="form-control" name="fname" placeholder="" required>
                    </div>
                                        
                    <div class="form-group mt-4">
                        <label><i class="fab fa-galactic-senate"></i> Last Name</label>
                        <input type="text" class="form-control" name="lname" placeholder="" required>
                    </div>
                                                            
                    <div class="form-group mt-4">
                        <label><i class="fas fa-at"></i> Email</label>
                        <input type="text" class="form-control" name="email" placeholder="" required>
                    </div>
                                                            
                    <div class="form-group mt-4">
                        <label><i class="fas fa-mobile-alt"></i> Telephone</label>
                        <input type="text" class="form-control" name="telephone" placeholder="" required>
                    </div>
                    
                    <div class="form-group mt-4">
                        <label><i class="fas fa-map-marker-alt"></i> Address</label>
                        <input type="text" class="form-control" name="address" placeholder="" required>
                    </div>
                    
                    <div class="form-group mt-4">
                        <label><i class="fas fa-city"></i> City</label>
                        <input type="text" class="form-control" name="city" placeholder="" required>
                    </div>
                    
                  <!--   <div class="form-group mt-4">
                        <label><i class="far fa-flag"></i> Country</label>
                        <input type="text" class="form-control" name="country" placeholder="" required>
                    </div> -->
                    
                   <!--  <div class="form-group mt-4">
                        <label><i class="fas fa-place-of-worship"></i> Region</label>
                        <input type="text" class="form-control" name="region" placeholder="" required>
                    </div> -->
                    
                    <div class="form-group mt-4" style="border-bottom: 2px solid #ddd; padding-bottom: 15px;">
                        <label><i class="fas fa-transgender-alt"></i> Gender: </label>
                        <label class="radio-inline">
                            <input type="radio" name="gender" value="Male" checked> Male
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="gender" value="Female"> Female
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="gender" value="Other"> Other
                        </label>
                    </div>
                    
                    <div class="form-group mt-4">
                        <label><i class="fas fa-key"></i> Password</label>
                        <input type="password" class="form-control" name="password" placeholder="" required>
                    </div>
                    
                    <div class="form-group mt-4">
                        <label><i class="fas fa-unlock-alt"></i> Confirm Password</label>
                        <input type="password" class="form-control" name="confirm_password" placeholder="" required>
                    </div>
                    
                    <button type="submit" class="btn btn-primary submit mb-4" name="userRegistration" onclick="return userRegistrationValidation()">Submit </button>

                </form>

            </div>
            <div class="col-lg-4 contact-info-left"></div>
        </div>
    </div>
</section>
    <!-- Contact Ends -->
<?php 
    include_once('includes/footer.php');
?>