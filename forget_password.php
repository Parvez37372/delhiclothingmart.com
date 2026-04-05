<?php include('includes/header.php') ?>

<div class="user-area ptb-100 mt-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">



                
                    <div class="forgetPass text-center">
                        <div class="lock d-flex mx-auto">
                            <img src="assets/images/lock.png"  alt="">
                        </div>
                        <h3 class="">Forget Password</h3>
                        <h6 class="text-grey">Please enter your registered mobile number*.</6>
                        <input type="number" class=" form-control hny_frm checking input_check email_check mt-3 "placeholder="Mobile Number" value="" name="logInMobileNumber" id="logInMobileNumber" maxlength="10" value="" autocomplete="off">
                       
                        <button type="submit" class="btn common-btn text-center mb-3" id="lg_btn">Reset Password</button>

                    </div>
                
            </div>
            <div class="col-lg-6">
                <div class="right-swction">
                    <img src="assets/images/login.png" alt="">
                </div>
            </div>
        </div>


    </div>
</div>

<?php include('includes/footer.php') ?>