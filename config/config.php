<?php
    session_start();
    session_regenerate_id();
    error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED ^ E_WARNING);
     // var_dump($_SESSION);

    $thename='Login Loom'; 
    $page = basename($_SERVER['SCRIPT_NAME']);
    $website_auto_url =(isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
   
    /////////////////////////////////////////////////////////////////

    $website_url='http://localhost/login-loom.com/';
//    $website_url='http://192.168.126.35/login-loom.com/';

?>

<?php
// session variables//
    $access_key=$_SESSION['access_key']; 
    $s_staff_id=$_SESSION['staff_id']; 
?>

<script>
    var website_url='http://localhost/login-loom.com/';
    var admin_local_url=website_url+"portal/config/code.php" /// for portal local url ////
    var login_local_url=website_url+"config/code.php" /// for login local url ////
</script>