
<?php
    $title = "Contact";
    session_start();
    if(isset($_GET['msg']) && $_GET['msg'] == 'contacted'){
        echo "<script>window.alert('Query sent to admin!');</script>";
    }
    include_once('includes/header.php');
?>
<div class="inner-about inner-contact">
    <div class="overlay-inner">
    </div>
</div>
<!-- Contact Starts -->
<section class="about py-5">
    <div class="container py-md-5">
        <h3 class="tittle-wthree text-center">Contact Us</h3>
        <p class="sub-tittle text-center mt-4 mb-sm-5 mb-4">Dear Users, You can directly contact to the admins for your any queries. Just fill up the form given below properly.</p>
        <div class="row">
            <div class="col-lg-6 contact-info-left">
                <ul class="list-unstyled w3ls-items">
                    <li>
                        <div class="row mt-5">
                            <div class="col-3">
                                <div class="con-icon">
                                    <span class="fa fa-home"></span></div>
                            </div>
                            <div class="col-9">
                                <h6>Address</h6>
                                <p>Flowers Nepal <br>Stop And Smell The Roses.
                                    <br>Sunakothi 27,
                                    <br>Lalitpur, Nepal. </p>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="row mt-5">
                            <div class="col-3">
                                <div class="con-icon">
                                    <span class="fa fa-envelope"></span></div>
                            </div>
                            <div class="col-9">
                                <h6>Email</h6>
                                <a href="mailto:devish@devish.com.np">admin@flowersnepal.com</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="row mt-5">
                            <div class="col-3">
                                <div class="con-icon">
                                    <span class="fa fa-phone" style="transform: rotateZ(180deg);"></span> </div>
                            </div>
                            <div class="col-9">
                                <h6>Phone</h6>
                                <p>+977-9861289839</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-lg-6 contact-right-wthree-info login">
                <h5 class="text-center mb-4"></h5>
                <form action="actions/contact-action.php" method="post" name="contact">
                    <div class="form-group mt-4">
                        <label>Name</label>
                        <input type="text" name="contact-name" class="form-control name" id="validationDefault01" placeholder="" required="">
                    </div>
                    <div class="form-group mt-4">
                        <label>Email</label>
                        <input type="email" name="contact-email" class="form-control email" id="validationDefault02" placeholder="" required="">
                    </div>

                    <div class="form-group mt-4">
                        <label class="mb-2">Subject</label>
                        <input type="text" name="contact-subject" class="form-control subject" id="password1" placeholder="" required="">
                    </div>
                    <div class="form-group mt-4">
                        <label class="mb-2">Message</label>
                        <textarea class="form-control message" name="contact-message" name="Message" placeholder="" required=""></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary submit mb-4" name="contact-submit" onclick="return contactValidation()">Submit </button>

                </form>

            </div>
        </div>

        <div class="map-wthree mt-5 p-2">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14133.574545079768!2d85.32267108593341!3d27.674226195864716!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19c50daa2fb1%3A0x6f197fa38097b530!2sPatan+Durbar+Square!5e0!3m2!1sen!2snp!4v1560333855622!5m2!1sen!2snp"></iframe>
        </div>
    </div>
</section>
    <!-- Contact Ends -->
<?php
    include_once('includes/footer.php');
?>
