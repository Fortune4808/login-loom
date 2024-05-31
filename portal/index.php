<?php include '../../config/config.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php include 'meta-link.php';?>
    <title><?php echo $thename;?> | Applicant Portal</title>
</head>

<body>
    
<div class="overlay-div"></div>
<?php include 'header.php';?>
<?php include 'side-nav.php';?>
    
<div class="body-div">
    <div class="in-div">
        <div class="profile-div" data-aos="zoom-in" data-aos-duration="1500">
            <div class="profile-pix"><img src="all-images/image-pix/friends.png" alt="profile_pix" title="Profile Pix" /></div>
            <div class="text-div">
                <p><i class="bi-speedometer2"></i> Dashboard</p>
                <p class="name" id="user_login_fullname">XXXXX</p>
                <p class="date">Last Login Date: <span id="login_user_time">xxxxx</span></p>
            </div>
          
        </div>
        <div class="profile-div time-div" data-aos="zoom-in" data-aos-duration="1500">
            <div class="in-div">
                Current Time
                <div class="datetime">
                    <span id="clock"><span id="digitalclock" class="styling"></span></span>
                </div>
                <?php echo date("l, d F Y");?>
            </div>
        </div>

        <div class="profile-div admin-panel">
            <div id="main-div">  
                <?php             
                    $page='dashboard';
                    include 'content/content-page.php'
                ?>
            </div>               
        </div> 
    </div>
</div>
     
</body>
</html>