jQuery(document).ready(function() {
  $.backstretch(["all-images/backgrounds/bg1.jpg"],{duration: 4000, fade: 2000});
});


function _expand_link(ids){
    $('#'+ids+'-li').toggle('slow');
}


function _next_page(next_id) {
  $('.log-div').hide();
  $('#'+next_id).fadeIn(1000);
}

function alert_close(){
  $('.overlay-div').html('').fadeOut(200);
}


function _get_page(page){
  $('.main-dashboard-div').html('<div class="ajax-loader"><br><img src="all-images/image-pix/ajax-loader.gif"/></div>').fadeIn(500);
      var action='get_page';
      var dataString ='action='+action+'&page='+page;
      $.ajax({
      type: "POST",
      url: admin_local_url,
      data: dataString,
      cache: false,
      success: function(html){
          $('#main-div').html(html);
      }
    });
}

function _get_form(page){
  $('.overlay-div').html('<div class="ajax-loader"><br><img src="all-images/image-pix/ajax-loader.gif"/></div>').fadeIn(500);
  var action='get_form';
  var dataString ='action='+ action+'&page='+ page;
  $.ajax({
  type: "POST",
  url: admin_local_url,
  data: dataString,
  cache: false,
  success: function(html){
      $('.overlay-div').html(html);}
  });
}

function _get_admin_profile(page){
  $('.overlay-div').html('<div class="ajax-loader"><br><img src="all-images/image-pix/ajax-loader.gif"/></div>').fadeIn(500);
  var action='get_form';
  var dataString ='action='+ action+'&page='+ page;
  $.ajax({
  type: "POST",
  url: admin_local_url,
  data: dataString,
  cache: false,
  success: function(html){
      $('.overlay-div').html(html);}
  });
}



function _get_staff_login() {
  var action = 'fetch-staff-api';
  var dataString = 'action=' + action + '&staff_id=' + login_staff_id;
  $.ajax({
    type: "POST",
    url: endPoint,
    data: dataString,
    dataType: 'json',
    cache: false,

    success: function(info) {
      var success = info.success;

      if(success==true){
        var fetch = info.data[0];
        alert(info);
        var staff_surname = fetch.staff_surname;
        var last_login_date = fetch.last_login_date;
        alert(last_login_date);
      $("#login_user_time").html(last_login_date);
     }else{
      ///
    }
    }
  });
}



function _all_active_staff(){
  var action = 'fetch-staff-api';
  var dataString = 'action=' + action;

  $.ajax({
    type: 'POST',
    url: endPoint,
    data: dataString,
    dataType: 'json',
    cache: false,
    success: function (info){
     var fetch = info.data;
      var success = info.success;
      var message1 = info.message1;

      var text = '';
      if(success==true){
        for (var i = 0; i < fetch.length; i++) {
          var staff_id = fetch[i].staff_id;
          var staff_surname = fetch[i].staff_surname.toUpperCase();
          var staff_othername = fetch[i].staff_othername.toUpperCase();
          var status_name = fetch[i].status_name.toUpperCase();
        text+=

        '<div class="container-item" onclick="_get_admin_profile(\'admin-profile\');">' +
            '<div class="profile">' +
                '<div class="picture-box">' +
                    '<div class="in-div">' +
                        '<img src="all-images/image-pix/friends.png" alt="profile-pic" title="Profile Pix" />' +
                    '</div>' +
                '</div>' +
            '</div>' +
            '<div class="text-div">' +
                '<p>' + staff_surname + ' ' + staff_othername + '<br /><hr /></p>' +
                '<br clear="all"/>' +
                '<p><span>STAFF ID: ' + staff_id + '</span></p>' +
                '<p><span>09056251889</span></p>' +
                '<div class="activate-div">' + status_name + '</div>' +
            '</div>' +
    '</div>';
    
}
       $('#fetch_all_active-staff').html(text);
}else{
  text +=
    '<div class="false-notification-div">' +
      "<p> " + message1 +" </p>" +'</div>';
  $('#fetch_all_active-staff').html(text)
}
    },

  });
}
