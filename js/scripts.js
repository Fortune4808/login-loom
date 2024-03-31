jQuery(document).ready(function() {
  $.backstretch(["all-images/backgrounds/bg1.jpg"],{duration: 4000, fade: 2000});
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


function _proceed_reset_password(){
  var email = $('#reset_pass_email').val();

  if (email == '') {
    $('#warning-div').html('<div><i class="bi-exclamation-circle"></i></div> EMAIL ERROR!<br /><span>Fill all Fields To Continue</span>').fadeIn(500).delay(3000).fadeOut(100);

  }else{

    var btn_text  = $('#submit_btn').html();
    $('#submit_btn').html('<i id="spinner" class="bi bi-arrow-repeat"></i> PROCESSING...');
    document.getElementById('submit_btn').disabled = true;

    var action='proceed-reset-password-api';
    var dataString ='action=' + action + '&email=' + email;

    $.ajax({
      type: "POST",
      url: endPoint,
      dataType: "json",
      data: dataString,
      cache: false,
      success: function (data) {
        var result = data.result; 
        var message1 = data.message1;
        var message2 = data.message2; 

        if(result==true){ 
          var staff_id = data.staff_id;
          var staff_fullname = data.staff_fullname;
          var staff_email = data.staff_email;
          _reset_password(staff_id,staff_fullname,staff_email);

        }else{
          $('#warning-div').html('<div><i class="bi-exclamation-circle"></i></div> '+message1+' <br /><span> '+message2+' </span>').fadeIn(500).delay(5000).fadeOut(100);
        }

        $('#submit_btn').html(btn_text);
        document.getElementById('submit_btn').disabled=false;
      },

    });
  }
}

function _reset_password(staff_id,staff_fullname,staff_email){
  var action='reset_password';
  $('.overlay-div').html('<div class="ajax-loader"><img src="all-images/image-pix/ajax-loader.gif"/></div>').fadeIn(500);
  var dataString ='action='+ action+'&staff_id='+ staff_id;
  $.ajax({
  type: "POST",
  url: login_local_url,
  data: dataString,
  cache: false,
  success: function(html){
       $('.overlay-div').html(html);
       $('#staff_fullname').html(staff_fullname);
       $('#staff_email').html(staff_email);
  }
  });
}


function _finish_reset_password(staff_id){
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

        var action = 'finish-reset-password-api';
        var dataString = 'action=' + action + '&staff_id=' + staff_id + '&otp=' + otp + '&password=' + password;

        $.ajax({
          type: "POST",
          url: endPoint,
          data: dataString,
          cache: false,
          dataType: 'json',
          cache: false,
          success: function(data) {
            var result = data.result;
            var message1 = data.message1;
            var message2 = data.message2;

            if (result == true) {
              var staff_id = data.staff_id;
              var otp = data.otp;
              var password = data.password;

              $('#success-div').html('<div><i class="bi-check-all"></i></div>' + message1 + "<br>" + message2 + "").fadeIn(500).delay(5000).fadeOut(100);
              _password_reset_completed(staff_id,otp,password);
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


 
function _password_reset_completed(staff_id){
  var action='password_reset_completed';
  $('.overlay-div').html('<div class="ajax-loader"><br><img src="all-images/image-pix/ajax-loader.gif"/></div>').fadeIn(500);
  var dataString ='action='+ action+'&staff_id='+ staff_id;
  $.ajax({
  type: "POST",
  url: login_local_url,
  data: dataString,
  cache: false,
  success: function(html)
      {$('.overlay-div').html(html);}
  });
}









function _sign_in(email, password){
  var email = $('#email').val();
  var password = $('#password').val();

  if (email == '') {
    $('#warning-div').html('<div><i class="bi-exclamation-circle"></i></div> EMAIL ERROR!<br /><span>Fill all Fields To Continue</span>').fadeIn(500).delay(3000).fadeOut(100);
  
  }else if (password == ''){
    $('#warning-div').html('<div><i class="bi-exclamation-circle"></i></div> PASSWORD ERROR!<br /><span>Fill all Fields To Continue</span>' ).fadeIn(500).delay(3000).fadeOut(100);
  }else{

    var btn_text  = $('#signin_btn').html();
    $('#signin_btn').html('<i id="spinner" class="bi bi-arrow-repeat"></i> AUTHENTICATING...');
    document.getElementById('signin_btn').disabled = true;

    var action='login-api';

    var dataString ='action=' + action + '&email=' + email +'&password='+ password;

    $.ajax({
      type: "POST",
      url: endPoint,
      dataType: "json",
      data: dataString,
      cache: false,
      success: function (info) {
        var success = info.success;
        var message1 = info.message1;
        var message2 = info.message2;

        if (success == true){
          $('#success-div').html('<div><i class="bi-check-all"></i></div>' + message1 + "<br>"+ message2 +"").fadeIn(500).delay(5000).fadeOut(100);

          var s_staff_id = info.s_staff_id; 
          var access_key= info.access_key;
          redirectToPortal(s_staff_id, access_key);
        
          $('#signin_btn').html(btn_text);
          document.getElementById('signin_btn').disabled = false;
        }else{
          $('#warning-div').html('<div><i class="bi-exclamation-circle"></i></div>'  + message1 + "<br>"+ message2 +"").fadeIn(500).delay(3000).fadeOut(100);

          $('#signin_btn').html(btn_text);
          document.getElementById('signin_btn').disabled = false;
        }

      },
    });
  
  }
}

function redirectToPortal() {
  var portalUrl = website_url + 'portal/';
  window.location.href = portalUrl;
}