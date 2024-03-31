<?php include 'config/config.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'meta-link.php';?>
    <title><?php echo $thename;?> | Administrative Login</title>
</head>

<body>
<div class="overlay-div"></div>  
<div class="loader-wrapper" id="loader-wrapper">
    <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
</div>

    <?php include 'header.php';?>

    <div class="container-div">
      
        <div class="left-div animated fadeInRight">
            <div class="text-div">
                <div class="text-div-in">
                    <a href="<?php echo $website_url?>" title=""><i class="bi-house-door-fill"></i> HOME PAGE</a> &nbsp;| &nbsp;
                    <a href="" onClick="window.location.reload();" title="Adminstrative Login"><i class="bi-lock"></i> LOG-IN</a>
                </div>
                <h1>AfooTech Login System Administrative Portal<br /><hr /></h1>
                <div class="logo-div"><img src="all-images/image-pix/logo.png" alt="logo" title="AfooTech Login System logo" /></div>
            </div>
        </div>

        <div class="right-div animated fadeInLeft">
            <div class="info" id="more-info">
                <?php $page='log-in';?>
                <?php include 'config/content-page.php';?> 
            </div>
            <?php include 'footer.php';?>
        </div>
    </div>

    <script>
		superplaceholder({
			el: email,
				sentences: [ 'Enter Email Address', 'e.g sunaf4real@gmail.com', 'info@pec.com.ng', 'king123@hotmail.com', 'afootech2016@yahoo.com' ],
				options: {
				letterDelay: 80,
				loop: true,
				startOnFocus: false
			}
		});
</script>

<script>
		superplaceholder({
			el: reset_pass_email,
				sentences: [ 'Enter Email Address', 'e.g sunaf4real@gmail.com', 'info@pec.com.ng', 'king123@hotmail.com', 'afootech2016@yahoo.com' ],
				options: {
				letterDelay: 80,
				loop: true,
				startOnFocus: false
			}
		});
</script>

     
</body>
</html>