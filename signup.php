<?php include('includes/header.php') ?>

<div class="user-area ptb-100 mt-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="account1">
                    <div class="user-item loginsec">
                        <form action="javascript:void(0);" method="post" class="login formSubmit" id="login_form">
                            <h3 class="text-center mt-3">CREATE AN ACCOUNT</h3>
                            <!-- <p class="font-md color-gray-500">Welcome back!</p> -->
                            <input type="hidden" name="logIn" value="logIn">
                            <div class="form-group">
                                <div class="text-center" id="login_formMsg"></div>
                            </div>
                            <div class="form-group">
                                <label class="mb-5 font-sm color-black-700">First Name</label>
                                <input type="text" class="form-control hny_frm checking input_check email_check" placeholder="First name" value="" name="First name" id="logInMobileNumber" maxlength="10" value="" autocomplete="off">
                                <div class="err_msg" id="logInMobileNumberErrMsg" style="color: red;"></div>
                            </div>
                            <div class="form-group" style="position: relative;">
                                <label class="mb-5 font-sm color-gray-700">Last name</label>
                                <input type="text" class="form-control hny_frm checking input_check  " value="" placeholder="Last name" name="Last name" id="logInPassword" value="">
                                <!-- <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span> -->
                                <div class="err_msg" id="logInPasswordErrMsg" style="color: red;"></div>
                            </div>
                            <div class="form-group" style="position: relative;">
                                <label class="mb-5 font-sm color-gray-700">Email</label>
                                <input type="text" class="form-control hny_frm checking input_check  " value="" placeholder="email" name="email" id="logInPassword" value="">
                                <!-- <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span> -->
                                <div class="err_msg" id="logInPasswordErrMsg" style="color: red;"></div>
                            </div>
                            <div class="form-group" style="position: relative;">
                                <label class="mb-5 font-sm color-gray-700">Phone Number</label>
                                <input type="number" class="form-control hny_frm checking input_check  " value="" placeholder="number" name="number" id="logInPassword" value="">
                                <!-- <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span> -->
                                <div class="err_msg" id="logInPasswordErrMsg" style="color: red;"></div>
                            </div>
                            <div class="d-flex m-auto justify-content-between ">
                                <button type="submit" class="btn common-btn text-center" id="lg_btn">Signup</button>

                                <!-- <a class="font-xs color-gray-500 mt-3" href="javascript:void(0);">Forgot your password?</a> -->

                            </div>



                            <h5 class="mt-5 font-xs text-center">Have already an account? <a href="account.php" class="registerfrm">Login</a></h5>
                        </form>
                    </div>
                    <!-- <div class="user-item registersec ">
                        <form action="javascript:void(0);" class="signup formSubmit" id="registrationForm" method="post" onkeydown="return event.key != 'Enter';">
                            <h2>Register</h2>
                            <div class="form-group">
                                <p id="reg_msg" class="alert alert-info" style="display:none;"></p>
                            </div>
                            <input type="hidden" name="register" value="register">
                            <div class="form-group">
                                <input type="text" class="form-control hny_frm" placeholder="First Name:" name="firstName" id="firstName" value="" autocomplete="off" required>
                                <div class="err_msg" id="firstNameErrMsg" style="color: red;"></div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control hny_frm" placeholder="Last Name:" name="lastName" id="lastName" value="" autocomplete="off" required>
                                <div class="err_msg" id="lastNameErrMsg" style="color: red;"></div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control hny_frm" placeholder="Mobile Number:" name="mobileNumber" id="mobileNumber" maxlength="10" required>
                                <div class="err_msg" id="mobileNumberErrMsg" style="color: red;"></div>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control hny_frm" onkeyup="validateEmail(this, 'emailErrorText')" placeholder="Your Email:" name="emailId" value="" id="emailId" autocomplete="off" required>
                                <div class="err_msg emailErr" id="emailIdErrMsg" style="color: red;"></div>
                                <span class="emailErrorText text-danger"></span>
                            </div>
                            <div class="form-group" style="position: relative;">
                                <input type="password" class="form-control password" placeholder="Password:" name="userPassword" value="" id="userPassword" required>
                                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-passwordtwo"></span>
                                <div class="err_msg" id="userPasswordErrMsg" style="color: red;"></div>
                            </div>
                            <button type="submit" class="btn common-btn userRegBtn" name="submit" id="submit">
                                Register
                            </button>
                            <h4>Or</h4>
                            <div class="newssdd">
                                <a href="https://accounts.google.com/o/oauth2/auth?response_type=code&access_type=online&client_id=964293224238-qmbgnk9gnikmbp83su4f4psbpu8je0k9.apps.googleusercontent.com&redirect_uri=https%3A%2F%2Forganicsfeed.com%2Faccount.php&state&scope=email%20profile&approval_prompt=auto">
                                    <div class="google-btn">
                                        <div class="google-icon-wrapper">
                                            <svg width="32px" height="32px" viewBox="-3 0 262 262" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid" fill="#000000">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <g>
                                                        <path d="M255.878,133.451 C255.878,122.717 255.007,114.884 253.122,106.761 L130.55,106.761 L130.55,155.209 L202.497,155.209 C201.047,167.249 193.214,185.381 175.807,197.565 L175.563,199.187 L214.318,229.21 L217.003,229.478 C241.662,206.704 255.878,173.196 255.878,133.451" fill="#4285F4"> </path>
                                                        <path d="M130.55,261.1 C165.798,261.1 195.389,249.495 217.003,229.478 L175.807,197.565 C164.783,205.253 149.987,210.62 130.55,210.62 C96.027,210.62 66.726,187.847 56.281,156.37 L54.75,156.5 L14.452,187.687 L13.925,189.152 C35.393,231.798 79.49,261.1 130.55,261.1" fill="#34A853"> </path>
                                                        <path d="M56.281,156.37 C53.525,148.247 51.93,139.543 51.93,130.55 C51.93,121.556 53.525,112.853 56.136,104.73 L56.063,103 L15.26,71.312 L13.925,71.947 C5.077,89.644 0,109.517 0,130.55 C0,151.583 5.077,171.455 13.925,189.152 L56.281,156.37" fill="#FBBC05"> </path>
                                                        <path d="M130.55,50.479 C155.064,50.479 171.6,61.068 181.029,69.917 L217.873,33.943 C195.245,12.91 165.798,0 130.55,0 C79.49,0 35.393,29.301 13.925,71.947 L56.136,104.73 C66.726,73.253 96.027,50.479 130.55,50.479" fill="#EB4335"> </path>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <p class="btn-text"><b>Sign up with google</b></p>
                                    </div>
                                </a>

                                if user not login

                                <form action="" method="post">
                                    <div class="text-center social-btn">
                                        <a id="fb-btn" href="https://www.facebook.com/v2.5/dialog/oauth?client_id=3422707001350831&state=ee94ba9efdf4be54e28da47e360e189b&response_type=code&sdk=php-sdk-5.7.0&redirect_uri=https%3A%2F%2Forganicsfeed.com%2Faccount.php&scope=email" class="btn btn-primary btn-block">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" style="margin-right: 5px;" viewBox="0 0 266.893 266.895" id="facebook">
                                                <path fill="#485a96" d="M252.164 266.895c8.134 0 14.729-6.596 14.729-14.73V14.73c0-8.137-6.596-14.73-14.729-14.73H14.73C6.593 0 0 6.594 0 14.73v237.434c0 8.135 6.593 14.73 14.73 14.73h237.434z"></path>
                                                <path fill="#fff" d="M184.152 266.895V163.539h34.692l5.194-40.28h-39.887V97.542c0-11.662 3.238-19.609 19.962-19.609l21.329-.01V41.897c-3.689-.49-16.351-1.587-31.08-1.587-30.753 0-51.807 18.771-51.807 53.244v29.705h-34.781v40.28h34.781v103.355h41.597z"></path>
                                            </svg> Sign up with <b>Facebook</b></a>
                                    </div>
                                </form>
                            </div>

                            <h5>Already Have An Account? <a href="javascript:void(0);" class="loginfrm">Login</a></h5>
                        </form>
                    </div> -->
                </div>

                <div class="user-item otpVerify" style="display:none;">
                    <div class="form-container">
                        <h2> Otp Verification</h2>
                        <div class="form-inner">

                            <form method="POST" id="verifyOtpForm" class="otp-form">
                                <div class="customer-login-register">
                                    <div class="login-form">
                                        <p>Verify your mobile number<br>
                                            An OTP has been sent to your mobile number</p>
                                        <div class="form-fild">
                                            <input type="hidden" name="userInfo" id="userInfo" value="">
                                            <p><label>Verify Your Mobile <span class="required">*</span></label></p>
                                            <input id="codeBox1" class="codeBox" type="number" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" name="otp[]" maxlength="1" onkeyup="onKeyUpEvent(1, event)" onfocus="onFocusEvent(1)" />
                                            <input id="codeBox2" class="codeBox" type="number" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" name="otp[]" maxlength="1" onkeyup="onKeyUpEvent(2, event)" onfocus="onFocusEvent(2)" />
                                            <input id="codeBox3" class="codeBox" type="number" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" name="otp[]" maxlength="1" onkeyup="onKeyUpEvent(3, event)" onfocus="onFocusEvent(3)" />
                                            <input id="codeBox4" class="codeBox" type="number" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" name="otp[]" maxlength="1" onkeyup="onKeyUpEvent(4, event)" onfocus="onFocusEvent(4)" />
                                        </div>
                                        <div class="register-submit">
                                            <button type="submit" class="form-button btn common-btn" id="otpsubmit" name="submit">Verify</button>
                                        </div>

                                        <div class="text-center" id="verifyOtpFormMsg"></div>
                                        <div class="timerdiv"><span id="timer"></span></div>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
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