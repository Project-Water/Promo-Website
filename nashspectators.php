<?php 

$local_environment_site = "NASH";
$host = $_SERVER[HTTP_HOST];


$school = "";

if(strpos($host, 'localhost') !== false)
  $school = $local_environment_site;
else if(strpos($host, 'nash') !== false)
  header( 'Location: https://nadodgeball.com/nashspectators' ) ;
else if(strpos($host, 'nai') !== false)
  header( 'Location: https://nadodgeball.com/nashspectators' ) ;

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
img{
  max-width: 100%;
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
		echo '<h2>ALL-DAY NASH SPECTATORS</h2>';
    ?>
    <div class="container">
    <img src="/img/spectators.png">
    <br><br>
    <div id="buttonContainer"><a href="https://goo.gl/forms/phzO2DlWislECuSv2"><button>REGISTER HERE</button></a></div><br><br>
    <p>This registration form is for NASH STUDENTS ONLY.</p>

<p>Spectators may register to watch dodgeball all school day at NASH on April 13, 2017, with a special evening championship event from 7-10 PM at NASH.</p>

<p>General Admission Tickets ($25) include: All school day event entry, Evening event entry, a t-shirt, 2 slices of pizza, and bottled water.</p>

<p>SPECTATOR SUPREME Tickets ($30) include: All general admission PLUS 2 extra slices of pizza.</p>

</div>
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
  </body>
  </html>