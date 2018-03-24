<?php 

$local_environment_site = "NASH";
$host = $_SERVER[HTTP_HOST];


$school = "";

if(strpos($host, 'localhost') !== false)
  $school = $local_environment_site;
else if(strpos($host, 'nash') !== false)
  header( 'Location: https://nadodgeball.com/AP' ) ;
else if(strpos($host, 'nai') !== false)
  header( 'Location: https://nadodgeball.com/AP' ) ;

?>
<style>

@font-face {
	font-family: HelveticaNeueCondensedBold;
	src: url('../fonts/HelveticaNeueCondensedBold.eot');
	src: url('../fonts/HelveticaNeueCondensedBold.eot?#iefix') format('embedded-opentype'), url('../fonts/HelveticaNeueCondensedBold.woff') format('woff'), url('../fonts/HelveticaNeueCondensedBold.ttf') format('truetype'), url('../fonts/HelveticaNeueCondensedBold.svg#HelveticaNeueCondensedBold') format('svg');
}

div,h2 { 
	font-family: HelveticaNeueCondensedBold;
}

.container{
	color:white;
	background-color: rgba(0,0,0,0.5);
	border-radius: 5px;
	padding: 10px;
	font-size: 23px;
}

h2{
	display: block;
	font-size: 60px !important;
}
</style>
<?php 

$local_environment_site = "NASH";
$host = $_SERVER[HTTP_HOST];


$school = "";

if(strpos($host, 'localhost') !== false)
	$school = $local_environment_site;
else if(strpos($host, 'nash') !== false)
	$school = "NASH";
else if(strpos($host, 'nai') !== false)
	$school = "NAI";




?>




<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title><?php echo $school; ?> Dodgeball</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/styles.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="apple-touch-icon" sizes="57x57" href="/img/favicon/apple-touch-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="/img/favicon/apple-touch-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="/img/favicon/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="/img/favicon/apple-touch-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="/img/favicon/apple-touch-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="/img/favicon/apple-touch-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="/img/favicon/apple-touch-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="/img/favicon/apple-touch-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="/img/favicon/apple-touch-icon-180x180.png">
  <link rel="icon" type="image/png" href="/img/favicon/favicon-32x32.png" sizes="32x32">
  <link rel="icon" type="image/png" href="/img/favicon/favicon-194x194.png" sizes="194x194">
  <link rel="icon" type="image/png" href="/img/favicon/favicon-96x96.png" sizes="96x96">
  <link rel="icon" type="image/png" href="/img/favicon/android-chrome-192x192.png" sizes="192x192">
  <link rel="icon" type="image/png" href="/img/favicon/favicon-16x16.png" sizes="16x16">
  <link rel="manifest" href="/img/favicon/manifest.json">
  <link rel="mask-icon" href="/img/favicon/safari-pinned-tab.svg">
  <link rel="shortcut icon" href="/img/favicon/favicon.ico">
  <meta name="msapplication-TileColor" content="#33ccff">
  <meta name="msapplication-TileImage" content="/img/favicon/mstile-144x144.png">
  <meta name="msapplication-config" content="/img/favicon/browserconfig.xml">
  <meta name="theme-color" content="#33ccff">

  <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
  </head>

  <body>

    <?php
		echo '<h2>AP Pre-Registration/<br>Dodgeball Rescheduling</h2>';
    ?>
    <div class="container"><p><h3 class="text-center">Attention ALL AP Students participating in the 2017 NA Dodgeball Tournament:</h3></p>

<p><h3 class="text-center">When you scheduled your AP Pre-Registration, you had the following options:</h3></p>

<p>Wed, Apr 12, 2017 at 10:00 AM - SESSION 1 - NASH AUD<br>
Wed, Apr 12, 2017 at 2:20 PM - SESSON 3 AFTER SCHOOL - NASH AUD<br>
Thu, Apr 13, 2017 at 12:47 PM - SESSION 2 - NASH AUD<br>
Thu, Apr 13, 2017 at 8:00 AM - NAI STUDENTS ONLY - NAI Collaboration Room</p>

<p>Students who signed up for the 2017 NA Dodgeball Tournament are scheduled to participate in activities with their teams all school day on Thursday, April 13th at NAI or NASH. </p>

<p>As such, registered players who scheduled their AP Pre-Registration on April 13th must instead choose a session on Wednesday, April 12 to avoid scheduling conflict. According to the counseling office, NAI students are permitted to attend the NASH Pre-Registration session after school on Wed, April 12th to avoid conflict with dodgeball.</p>

<p>The video below shows how to reschedule your AP Pre-Registration with just a few clicks.
If you have any questions, feel free to contact <a href="mailto:support@naprojectwater.com">support@naprojectwater.com</a>.
See you at the tournament!</p>

<p><h3 class="text-center">You can <a href="https://user.totalregistration.net/ap/393745">click here</a> to make scheduling changes.</h3></p>
<br>
<div class="embed-responsive embed-responsive-16by9">
<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/lfR_vcDnQjc?ecver=1" frameborder="0" allowfullscreen style="display: block;margin-right: auto;margin-left: auto"></iframe><br></div>
</div>
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
  </body>
  </html>