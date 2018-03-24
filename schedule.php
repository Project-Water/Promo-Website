<?php 

$local_environment_site = "NAI";
$host = $_SERVER[HTTP_HOST];


$school = "";

if(strpos($host, 'localhost') !== false)
	$school = $local_environment_site;
else if(strpos($host, 'nash') !== false)
	$school = "NASH";
else if(strpos($host, 'nai') !== false)
	$school = "NAI";
else
  $school = "NASH";
?>




<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title><?php echo $school; ?> Schedule</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/schedule.css">
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

    if(strpos($host, 'nadodgeball') !== false){
      echo '<br><br><div style="text-align:center;"><h1 style="color:white;">CHOOSE A SCHOOL</h1><a href="https://nashdodgeball.com/schedule"><button type="button" class="btn btn-primary btn-lg" style="background-color:white;color:#3cf;margin-right:10px;font-size: 50px;">NASH</button></a>';
      echo '<a href="https://naidodgeball.com/schedule"><button type="button" class="btn btn-primary btn-lg" style="background-color:white;color:#3cf;margin-left:10px;font-size: 50px;">NAI</button></a></div>';
      echo '</body></html>';
      die();
    }

    ?>

    <h2><?php echo $school; ?> Schedule</h2>
    <div class="container-fluid">
      <div class="loader" id="loader">Loading...</div>
      <form id="teamChooser" style="display: none;text-align: center;">
        <select></select>
      </form>
      <br>
      <div class="table-responsive">
        <table class="table" id="scheduleTable">
          <tbody>
          </tbody>
        </table>
      </div>
      <br><br>
      <div class="text-center" id="playersDiv" style="display: none;">
        <h3>On your team</h3>
        <div id="players" style="color:white;"></div>
      </div>
    </div>
    <script src="https://www.gstatic.com/firebasejs/3.7.4/firebase.js"></script>
    <script>

    // Initialize Firebase
    var config = {
      apiKey: "AIzaSyAJqS8YxLjKQcXLeoWdH4rtHEyxdH7lrEU",
      authDomain: "lunar-caster-87118.firebaseapp.com",
      databaseURL: "https://lunar-caster-87118.firebaseio.com",
      projectId: "lunar-caster-87118",
      storageBucket: "lunar-caster-87118.appspot.com",
      messagingSenderId: "472703596562"
    };
    firebase.initializeApp(config);
  </script>
  <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript">
    <?php 
    echo 'var school = "' . $school . '";' ;
    ?>
  </script>
  <script type="text/javascript" src="/js/schedule.js"></script>
</body>
</html>