<?php
$local_environment_site = "NA";
$host = $_SERVER[HTTP_HOST];


$school = "NA";

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

    <h1><?php echo $school ?> DODGEBALL</h1>

    <br>
<!--    
<h2 id="registerLabel">SHIRT SELECTION OPENS IN</h2>
    <?php
      if(strcmp($school, 'NASH') == 0){
        echo '<a href="https://www.eventbrite.com/e/2018-nash-dodgeball-shirt-selection-tickets-43577595762" target="_blank"><button id="registerButton" style="display: none;">SELECT SHIRT COLOR</button></a>';
      }
      else if(strcmp($school, 'NAI') == 0){
        echo '<a href="https://www.eventbrite.com/e/2018-nai-dodgeball-shirt-selection-tickets-43533935172" target="_blank"><button id="registerButton" style="display: none;">SELECT SHIRT COLOR</button></a>';
      }
      else{
        echo '<a href="https://www.eventbrite.com/e/2018-nash-dodgeball-shirt-selection-tickets-43577595762" target="_blank"><button id="registerButton" style="display: none;">SELECT NASH SHIRT COLOR</button></a><br><a href="https://www.eventbrite.com/e/2018-nai-dodgeball-shirt-selection-tickets-43533935172" target="_blank"><button id="registerButton2" style="display: none;">SELECT NAI SHIRT COLOR</button></a>';
      }

    ?>
-->

    <div id="clockdiv">
      <div>
        <span class="days"></span>
        <div class="smalltext">DAYS</div>
      </div>
      <div>
        <span class="hours"></span>
        <div class="smalltext">HOURS</div>
      </div>
      <div>
        <span class="minutes"></span>
        <div class="smalltext">MINUTES</div>
      </div>
      <div>
        <span class="seconds"></span>
        <div class="smalltext">SECONDS</div>
      </div>
    </div>
    <br>
    <div id="buttonContainer">
      <button onclick="playVideo()">WATCH VIDEO</button>
      <a href="https://naprojectwater.com/events"><button>MAIN SITE</button></a>
      <br></br>
	<a href="/schedule"><button>SCHEDULE</button></a>
    </div>
    <!--
    <br>
    <br>
    <br>
    <br>
    <div class="container-fluid">
        <h3 class="text-center">PAST ANNOUNCEMENTS</h3>
        <a href="/nashspectators">
          <div class="row text-center">
              <h4>ALL-DAY NASH SPECTATORS</h4>
          </div>
        </a>
        <a href="/shirts">
          <div class="row text-center">
              <h4>T-SHIRT COLOR LOCK-IN 🔐</h4>
          </div>
        </a>
        <a href="/AP">
          <div class="row text-center">
              <h4>AP Pre-Registration/ Rescheduling</h4>
          </div>
        </a>
        <a href="/pay">
          <div class="row text-center">
              <h4>Payment Details</h4>
          </div>
        </a>
    </div>-->


    <div id="ytplayer"></div>

    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.transform2d.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
  </body>
  </html>