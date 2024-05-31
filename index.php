<?php include '../config/config.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'meta-link.php';?>
    <title><?php echo $thename?> Application | Submit Your Application </title>
    <meta name="keywords" content="<?php echo $thename?>, Federal grants application, Apply for grants, Grant support programs application, Financial assistance, Funding opportunities, Grant application process, Eligibility criteria, Grant funding sources, Federal funding programs, Government financial aid, Grant application deadlines, Grant funding for individuals, Federal grant initiatives, USA Free Money" />
    <meta name="description" content="The federal government USA's free money grant, USA grant programs, tourism grant funding, hospitality grant opportunities, celebrating diversity, sustainable practices grant, immersive experiences funding, and global grant impact."/>

    <meta property="og:title" content="<?php echo $thename?> | Federal grants, Government grants, Grant support programs, Financial assistance, Funding opportunities, Grant application process, Eligibility criteria, Grant funding sources, Federal funding programs, Government financial aid, Grant application deadlines, Grant funding for individuals, Federal grant initiatives, USA Free Money" />
    <meta property="og:image" content="<?php echo $website_url?>/all-images/body-pix/about-image2.jpg"/>
    <meta property="og:description" content="The federal government USA's free money grant, USA grant programs, tourism grant funding, hospitality grant opportunities, celebrating diversity, sustainable practices grant, immersive experiences funding, and global grant impact."/>

    <meta name="twitter:title" content="<?php echo $thename?> | Federal grants, Government grants, Grant support programs, Financial assistance, Funding opportunities, Grant application process, Eligibility criteria, Grant funding sources, Federal funding programs, Government financial aid, Grant application deadlines, Grant funding for individuals, Federal grant initiatives, USA Free Money"/> 
    <meta name="twitter:card" content="<?php echo $thename?>"/> 
    <meta name="twitter:image"  content="<?php echo $website_url?>/all-images/body-pix/about-image2.jpg"/> 
    <meta name="twitter:description" content="The federal government USA's free money grant, USA grant programs, tourism grant funding, hospitality grant opportunities, celebrating diversity, sustainable practices grant, immersive experiences funding, and global grant impact."/>
</head>

<body>
<?php include 'alert.php';?>
    
<div class="overlay-div"></div>

<div id="background"></div>
<div class="container-div">
    <div class="left-div animated fadeInLeft">
            
        <div class="logo-div" title="Home Page">
            <a href="<?php echo $website_url?>"><img src="all-images/image-pix/logo.png" alt="Logo"></a>
        </div>

        <div class="info" id="more-info">
            <?php $page='log-in';?>
            <?php include 'config/content-page.php';?> 
        </div>
    </div>

    <div class="right-div animated fadeIn">
        <div class="circular-container">
            <div id="background-images" class="circular-background"></div>
        </div>
    </div>
</div>

    <script>
		superplaceholder({
			el: email,
				sentences: [ 'Enter Email Address', 'e.g federalgrants@gmail.com', 'info@federalgrants.com', 'king123@hotmail.com', 'federalgrants@yahoo.com' ],
				options: {
				letterDelay: 80,
				loop: true,
				startOnFocus: false
			}
		});
</script>

     
</body>
</html>