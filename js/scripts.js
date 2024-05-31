$(document).ready(function() {
  var images = ["all-images/backgrounds/bg1.jpg", "all-images/backgrounds/bg2.jpg", "all-images/backgrounds/bg3.jpg"];
  $("#background-images, #background").backstretch(images, { duration: 4000, fade: 2000 });
});



function _next_page(next_id) {
  $('.log-div').hide();
  $('#'+next_id).fadeIn(1000);
}


$(document).ready(function() {
	function trim(s) {
            return s.replace( /^\s*/, "" ).replace( /\s*$/, "" );
        }
$("#login-info").keydown(function(e){
	if(e.keyCode==13){
		_sign_in();
	}
});
});

function alert_close(){
  $('.overlay-div').html('').fadeOut(200);
}
	

function _get_page(page){
  $('.overlay-div').html('<div class="ajax-loader"><br><img src="all-images/image-pix/ajax-loader.gif"/></div>').fadeIn(500);
  var action='reset_password';
  var dataString ='action='+ action+'&page='+ page;
  $.ajax({
  type: "POST",
  url: login_local_url,
  data: dataString,
  cache: false,
  success: function(html){
      $('.overlay-div').html(html);}
  });
}

function _get_form(page){
  $('.overlay-div').html('<div class="ajax-loader"><br><img src="all-images/image-pix/ajax-loader.gif"/></div>').fadeIn(500);
  var action='get_form';
  var dataString ='action='+ action+'&page='+ page;
  $.ajax({
  type: "POST",
  url: account_local_url,
  data: dataString,
  cache: false,
  success: function(html){
      $('.overlay-div').html(html);}
  });
}



function _proceed_reset_password(){
  var email = $('#reset_pass_email').val();

  if (email == '') {
    $('#warning-div').html('<div><i class="bi-exclamation-circle"></i></div> EMAIL ERROR!<br /><span>Fill all Fields To Continue</span>').fadeIn(500).delay(3000).fadeOut(100);

  }else{

    var btn_text  = $('#submit_btn').html();
    $('#submit_btn').html('<i id="spinner" class="bi bi-arrow-repeat"></i> PROCESSING...');
    document.getElementById('submit_btn').disabled = true;

    var dataString ='email=' + email;

    $.ajax({
      type: "POST",
      url: user_reset_password_api,
      dataType: "json",
      data: dataString,
      beforeSend: function(xhr) {
        xhr.setRequestHeader('apiKey', apiKey);
      },
      cache: false,
      success: function (data) {
        var success = data.success; 
        var message = data.message; 

        if(success==true){ 
          var user_id = data.user_id;
          var fullname = data.fullname;
          var email_address = data.email_address;
          _reset_password(user_id,fullname,email_address);

        }else{
          $('#warning-div').html('<div><i class="bi-exclamation-circle"></i></div>' + 'ERROR!<br> ' + '<span>' + message + '</span>').fadeIn(500).delay(5000).fadeOut(100);

        }

        $('#submit_btn').html(btn_text);
        document.getElementById('submit_btn').disabled=false;
      },

    });
  }
}

function _reset_password(user_id,fullname,email_address){
  var action='reset_password';
  $('.overlay-div').html('<div class="ajax-loader"><img src="all-images/image-pix/ajax-loader.gif"/></div>').fadeIn(500);
  var dataString ='action='+ action+'&user_id='+ user_id;
  $.ajax({
  type: "POST",
  url: user_login_local_url,
  data: dataString,
  cache: false,
  success: function(html){
       $('.overlay-div').html(html);
       $('#fullname').html(fullname);
       $('#email_address').html(email_address);
  }
  });
}

function _resend_otp(ids,user_id){
  var btn_text=$('#'+ids).html();
  $('#'+ids).html('SENDING...');
  var dataString ='user_id='+ user_id;
  $.ajax({
  type: "POST",
  url: user_resend_otp_api,
  data: dataString,
  beforeSend: function(xhr) {
    xhr.setRequestHeader('apiKey', apiKey);
  },
  cache: false, 
  success: function(data){
      var message = data.message;
          $('#success-div').html('<div><i class="bi-check"></i></div>' + 'SUCCESS!<br>' + '<span> '+message+' </span>').fadeIn(500).delay(5000).fadeOut(100);
      $('#'+ids).html(btn_text);
  }
});
}


function _finish_reset_password(user_id){
  var otp = $('#otp').val();
  var password = $('#create_pass').val();
  var cpassword = $('#confirm_pass').val();

  if (otp == '') {
    $('#warning-div').html('<div><i class="bi-exclamation-circle"></i></div> OTP ERROR!<br /><span>Fill all Fields To Continue</span>').fadeIn(500).delay(3000).fadeOut(100);
  } else if (password == '' || cpassword=='') {
    $('#warning-div').html('<div><i class="bi-exclamation-circle"></i></div> PASSWORD ERROR!<br /><span>Fill all Fields To Continue</span>').fadeIn(500).delay(3000).fadeOut(100);

  } else {
    if (password != cpassword) {
      $('#not-success-div').html('<div><i class="bi-x-circle"></i></div> Password NOT Match<br /><span>Check the password and try again</span>').fadeIn(500).delay(5000).fadeOut(100);

    } else {
      if ((password.match(/^(?=[^A-Z]*[A-Z])(?=[^!"#$%&'()*+,-.:;<=>?@[\]^_`{|}~]*[!"#$%&'()*+,-.:;<=>?@[\]^_`{|}~])(?=\D*\d).{8,}$/)) && (password.length >= 8)) {

        var btn_text = $('#submit_btn').html();
        $('#submit_btn').html('<i id="spinner" class="bi bi-arrow-repeat"></i> PROCESSING...');
        document.getElementById('submit_btn').disabled = true;

        var dataString ='user_id=' + user_id + '&otp=' + otp + '&password=' + password;

        $.ajax({
          type: "POST",
          url: user_finish_reset_password_api,
          data: dataString,
          cache: false,
          dataType: 'json',
          beforeSend: function(xhr) {
            xhr.setRequestHeader('apiKey', apiKey);
          },
          cache: false,
          success: function(data) {
            var success = data.success;
            var message = data.message2;

            if (success == true) {
              var user_id = data.user_id;
              var otp = data.otp;
              var password = data.password;

              $('#success-div').html('<div><i class="bi-check-all"></i></div>' + 'SUCCESS!' + "<br>" + message + "").fadeIn(500).delay(5000).fadeOut(100);
              _password_reset_completed(user_id,otp,password);
            }else{

              $('#not-success-div').html('<div><i class="bi-x-circle"></i></div> INVALID OTP<br /><span>Check the OTP and try again</span>').fadeIn(500).delay(5000).fadeOut(100);
              $('#submit_btn').html(btn_text);
              document.getElementById('submit_btn').disabled=false;
            }
          }
        });
      } else {
        $('#warning-div').html('<div><i class="bi-exclamation-circle"></i></div> Password Error!<br><span>Check your password and try again</span>').fadeIn(500).delay(5000).fadeOut(100);
      }
    }
  }
}


function _check_password(){
	var password = $('#create_pass').val();
	if (password==''){
    $('#pswd_info').hide();
    $('.text-warning').fadeIn(500);
	}else{
    $('.text-warning').hide();
		if(password.length<8){
			 $('#pswd_info').fadeIn(500);
		}else{
			if (password.match(/^(?=[^A-Z]*[A-Z])(?=[^!"#$%&'()*+,-.:;<=>?@[\]^_`{|}~]*[!"#$%&'()*+,-.:;<=>?@[\]^_`{|}~])(?=\D*\d).{8,}$/)) {
				$('#pswd_info').hide();
			  } else {
				 $('#pswd_info').fadeIn(500);
			  }
		}
	}
 }
 
function _password_reset_completed(user_id){
  var action='password_reset_completed';
  $('.overlay-div').html('<div class="ajax-loader"><br><img src="all-images/image-pix/ajax-loader.gif"/></div>').fadeIn(500);
  var dataString ='action='+ action+'&user_id='+ user_id;
  $.ajax({
  type: "POST",
  url: user_login_local_url,
  data: dataString,
  cache: false,
  success: function(html)
      {$('.overlay-div').html(html);}
  });
}




function _user_registration() {
  var agent_id = $('#agent_id').val();
  var fullname = $('#fullname').val();
  var maiden_name = $('#maiden_name').val();
  var dob = $('#dob').val();
  var address = $('#address').val();
  var town = $('#town').val();
  var income = $('#income').val();
  var phone_number = $('#phone_number').val();
  var email = $('#email').val();
  var occupation = $('#occupation').val();
  var gender = $('#gender').val();
  var marital_status = $('#marital_status').val();
  var credit_card = $('#credit_card').val();
  var prize_cash = $('#prize_cash').val();

  var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  var phoneRegex = /^\+?1?\s?\(?\d{3}\)?[\s.-]?\d{3}[\s.-]?\d{4}$/;
  var containsPunctuationOrNumber = /[^\p{L}\s]/gu.test(fullname + maiden_name);

  if (agent_id == '') {
    $('#warning-div').html('<div><i class="bi-exclamation-circle"></i></div> AGENT ID ERROR!<br /><span>Fill all Fields To Continue</span>').fadeIn(500).delay(3000).fadeOut(100);
  } else if (fullname == '') {
    $('#warning-div').html('<div><i class="bi-exclamation-circle"></i></div> FULLNAME ERROR!<br /><span>Fill all Fields To Continue</span>').fadeIn(500).delay(3000).fadeOut(100);
  } else if (maiden_name == '') {
    $('#warning-div').html('<div><i class="bi-exclamation-circle"></i></div> MOTHER MAIDEN NAME ERROR!<br /><span>Fill all Fields To Continue</span>').fadeIn(500).delay(3000).fadeOut(100);
  } else if (dob == '') {
    $('#warning-div').html('<div><i class="bi-exclamation-circle"></i></div> DATE OF BIRTH ERROR!<br /><span>Fill all Fields To Continue</span>').fadeIn(500).delay(3000).fadeOut(100);
  } else if (address == '') {
    $('#warning-div').html('<div><i class="bi-exclamation-circle"></i></div> ADDRESS ERROR!<br /><span>Fill all Fields To Continue</span>').fadeIn(500).delay(3000).fadeOut(100);
  } else if (town == '') {
    $('#warning-div').html('<div><i class="bi-exclamation-circle"></i></div> TOWN/CITY ERROR!<br /><span>Fill all Fields To Continue</span>').fadeIn(500).delay(3000).fadeOut(100);
  } else if (income == '') {
    $('#warning-div').html('<div><i class="bi-exclamation-circle"></i></div> MONTHLY INCOME ERROR!<br /><span>Fill all Fields To Continue</span>').fadeIn(500).delay(3000).fadeOut(100);
  } else if (phone_number == '') {
    $('#warning-div').html('<div><i class="bi-exclamation-circle"></i></div> PHONE NUMBER ERROR!<br /><span>Fill all Fields To Continue</span>').fadeIn(500).delay(3000).fadeOut(100);
  } else if (email == '') {
    $('#warning-div').html('<div><i class="bi-exclamation-circle"></i></div> EMAIL ADDRESS ERROR!<br /><span>Fill all Fields To Continue</span>').fadeIn(500).delay(3000).fadeOut(100);
  } else if (occupation == '') {
    $('#warning-div').html('<div><i class="bi-exclamation-circle"></i></div> OCCUPATION ERROR!<br /><span>Fill all Fields To Continue</span>').fadeIn(500).delay(3000).fadeOut(100);
  } else if (gender == '') {
    $('#warning-div').html('<div><i class="bi-exclamation-circle"></i></div> GENDER ERROR!<br /><span>Fill all Fields To Continue</span>').fadeIn(500).delay(3000).fadeOut(100);
  } else if (marital_status == '') {
    $('#warning-div').html('<div><i class="bi-exclamation-circle"></i></div> MARITAL STATUS ERROR!<br /><span>Fill all Fields To Continue</span>').fadeIn(500).delay(3000).fadeOut(100);
  } else if (credit_card == '') {
    $('#warning-div').html('<div><i class="bi-exclamation-circle"></i></div> CREDIT CARD ERROR!<br /><span>Fill all Fields To Continue</span>').fadeIn(500).delay(3000).fadeOut(100);
  } else if (prize_cash == '') {
    $('#warning-div').html('<div><i class="bi-exclamation-circle"></i></div> CASH OR CHECK ERROR!<br /><span>Fill all Fields To Continue</span>').fadeIn(500).delay(3000).fadeOut(100);
  }else if (!emailRegex.test(email)){
    $('#warning-div').html('<div><i class="bi-exclamation-circle"></i></div> EMAIL ERROR!<br /><span>Enter a valid Email To Continue</span>').fadeIn(500).delay(3000).fadeOut(100);
  }else if (!phoneRegex.test(phone_number)){
    $('#warning-div').html('<div><i class="bi-exclamation-circle"></i></div> PHONE NUMBER ERROR!<br /><span>Enter a valid Phone number To Continue</span>').fadeIn(500).delay(3000).fadeOut(100);
  }else if (containsPunctuationOrNumber){
    $('#warning-div').html('<div><i class="bi-exclamation-circle"></i></div> NAME ERROR!<span> Name should not contain any punctuation mark or number.</span>').fadeIn(500).delay(3000).fadeOut(100);
  } else {
    var btn_text = $('#submit_btn').html();
    $('#submit_btn').html('<i id="spinner" class="bi bi-arrow-repeat"></i> SUBMITTING...');
    document.getElementById('submit_btn').disabled = true;

    var dataString = 'agent_id=' + agent_id + '&fullname=' + fullname + '&maiden_name=' + maiden_name + '&dob=' + dob + '&address=' + address + '&town=' + town + '&income=' + income + '&phone_number=' + phone_number + '&email_address=' + email + '&occupation=' + occupation + '&gender=' + gender + '&marital_status=' + marital_status + '&credit_card=' + credit_card + '&prize_cash=' + prize_cash;

    $.ajax({
      type: "POST",
      url: user_registration_api,
      data: dataString,
      cache: false,
      dataType: 'json',
      beforeSend: function(xhr) {
        xhr.setRequestHeader('apiKey', apiKey);
      },
      success: function(data) {
        var success = data.success;
        var message = data.message;

        if (success == true) {
          // var user_id = data.user_id;

          $('#submit_btn').html(btn_text);
          document.getElementById('submit_btn').disabled = false;

          $('#success-div').html('<div><i class="bi-check-all"></i></div>' + 'SUCCESS!' + "<br>" + message + "").fadeIn(500).delay(5000).fadeOut(100);
        } else {

          $('#not-success-div').html('<div><i class="bi-check-all"></i></div>' + 'ERROR!' + "<br>" + message + "").fadeIn(500).delay(5000).fadeOut(100);
          $('#submit_btn').html(btn_text);
          document.getElementById('submit_btn').disabled = false;
        }

      },
    });
  }
}

