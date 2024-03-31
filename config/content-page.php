<?php if($page=='log-in'){?>
    <div class="right-div-in log-div" id="next_1">
        <div class="logo-div">
            <img src="all-images/image-pix/icon.png" alt="logo" title="AfooTech Login System logo" />
        </div><br clear="all"/>
        <h2><i class="bi-person-circle"></i> Administrative Log-in <br /><hr /></h2>
        
        <form id="login-info">
            <input type="hidden" name="action" value=""/>
            <div class="data">
                <label><i class="bi-envelope"></i> Email Address:</label>
                <input type="text" id="email" placeholder="Enter Email Address" title="Enter Your Email Address"/>
            </div>

            <div class="data">
                <label><i class="bi-lock"></i> Password:</label>
                <input type="password" id="password" placeholder="Enter Your Password" title="Enter Your Password"/>
            </div>
            <button class="btn" type="button" title="login" id="signin_btn" onclick="_sign_in();"><i class="bi-check-lg"></i> Login-In</button>
        </form>
        <div class="forget-pass">Forget Password? <span onclick=" _next_page('next_2')"> RESET PASSWORD</span></div>
    </div>


    <div class="right-div-in log-div" id="next_2">
        <div class="forget-pass reset-pass"><i class="bi-lock"></i> RESET PASSWORD</div> 
        <input type="hidden" name="action" value=""/>
        <div class="data">
            <label><i class="bi-envelope"></i> Provide Email Address:</label>
            <input type="text" id="reset_pass_email" placeholder="Enter Your Email Address"/>
        </div>

        <button class="btn" type="button" title="Next" id="submit_btn" onclick="_proceed_reset_password();">Proceed <i class="bi-arrow-right"></i></button>
        
        <div class="forget-pass">Existing User? <span onclick=" _next_page('next_1')"> LOG-IN HERE</span></div>
    </div>
<?php }?>



<?php if ($page=='reset_password'){?>
        <div class="reset-pass-div">
            <div class="div-in">
                <div class="title-div"><i class="bi-lock"></i> RESET PASSWORD</div>
                <div class="close-div" title="close" onclick="alert_close()">X</div><br clear="all"/>

                <div class="text-div">
                    <i class="fa fa-user"></i> Dear <span id="staff_fullname">XXX</span>, an <span>OTP</span> has been sent to your email address (<span id="staff_email"></span>) to reset your password. Kindly check your <strong>INBOX</strong> or<strong> SPAM</strong> to confirm.</span>
                </div>

                <input type="hidden" name="action" value=""/>
                <div class="data">
                    <label> ENTER OTP:</label>
                    <input type="text" id="otp" placeholder="Enter OTP" title="Enter OTP"/>
                </div>
                <div class="text-div resend">
                    <span>OTP</span> not received? <span id="resend_otp"><i class="fa fa-paper-plane-o"></i> RESEND OTP</span>
                </div>
                <div class="data">
                    <label> CREATE PASSWORD:</label>
                    <input type="password" id="create_pass" placeholder="CREATE PASSWORD" title="CREATE PASSWORD" onkeyup="_check_password()"/>
                </div>
                <div class="text-warning"> At least 8 characters required including upper & lower cases and special characters and numbers</div>
                <div id="pswd_info"><span>password not accepted</span></div>
                <div class="data">
                    <label>CONFIRMED PASSWORD:</label>
                    <input type="password" id="confirm_pass" placeholder="COMFIRMED PASSWORD" title="COMFIRMED PASSWORD"/>
                </div>
                <button type="submit" class="btn" id="submit_btn" onclick="_finish_reset_password('<?php echo $staff_id;?>')"><i class="bi-check-lg"></i> Reset Password</button>
            </div>
           
        </div>

    
<?php } ?>



<?php if ($page=='password_reset_completed'){?>
    
<?php } ?>





  

