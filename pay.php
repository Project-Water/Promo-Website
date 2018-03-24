<?php 

$local_environment_site = "NASH";
$host = $_SERVER[HTTP_HOST];


$school = "";

if(strpos($host, 'localhost') !== false)
  $school = $local_environment_site;
else if(strpos($host, 'nash') !== false)
  header( 'Location: https://nadodgeball.com/pay' ) ;
else if(strpos($host, 'nai') !== false)
  header( 'Location: https://nadodgeball.com/pay' ) ;

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
	margin-top: 20vh !important;
	display: block;
	font-size: 80px !important;
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
		echo '<h2>' .  $school .  ' Payment Details</h2>';

    ?>
<div class="container">Your "Team Captain" (whoever registered your team online) received an email last week with permission slips and payment directions for your team. As a whole, each team has signed up for either the $30/player general admission or $35/player PIZZA SUPREME admission package.<br><br>

<div class="text-center">
<a href="pdf/2017NASHPermissionForm.pdf" target="_blank"><button type="button" class="btn btn-primary btn-lg" style="background-color:white;color:#3cf;margin-right:10px;font-size: 50px;">NASH</button></a>
<a href="pdf/2017NAIPermissionForm.pdf" target="_blank"><button type="button" class="btn btn-primary btn-lg" style="background-color:white;color:#3cf;margin-left:10px;font-size: 50px;">NAI</button></a></div>

<br><br>Print and fill out your permission form above. Then, submit your team\'s 6-7 forms and all money ($30/player) or ($35/player for PIZZA SUPREME) TOGETHER in a sealed envelope with your team name on it by Thursday, March 2nd to our NA Project Water representatives during your lunch period (right outside the cafeteria). Checks can be made out to North Allegheny School District, with "NA Project Water" in the memo line. No coins please. Questions can be sent to <a href="mailto:support@naprojectwater.com">support@naprojectwater.com</a></div>
    

    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
  </body>
  </html>