<!DOCTYPE html>
<html>
 <head>
   <title>COVID_19 Stat App By Turjo</title>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="style.css">
	
	 
	

 </head>
 <body style="overflow:hidden;">

 <?php
$apiKey = "f46f08b2f6c4e7a26537ad4c58cc693b"; // API Key
$cityId = "1185241"; // City of Dhaka
$googleApiUrl = "http://api.openweathermap.org/data/2.5/weather?id=" . $cityId . "&lang=en&units=metric&APPID=" . $apiKey;



$ch = curl_init(); // Initialize a cURL session

curl_setopt($ch, CURLOPT_HEADER, 0); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $googleApiUrl);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_VERBOSE, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);


/*
curl_setopt-> Set an option for a cURL transfer
CURLOPT_HEADER-> Pass headers to the data stream
CURLOPT_RETURNTRANSFER-> If you set CURLOPT_RETURNTRANSFER to true or 1 then the return value from curl_exec will be the actual result from the successful operation
CURLOPT_URL-> Provide the URL to use in the request
CURLOPT_FOLLOWLOCATION-> Follow HTTP 3xx redirects
CURLOPT_VERBOSE-> Set verbose mode on/off
CURLOPT_SSL_VERIFYPEER-> Verify the peer's SSL certificate


*/


$response = curl_exec($ch); // curl_exec => Execute the given cURL session.

curl_close($ch);
$data = json_decode($response);  // json_decode => Takes a JSON encoded string and converts it into a PHP variable.
$currentTime = time();
?>


 
<nav class="navbar navbar-inverse ">
  <div class="container-fluid ">
    <div class="navbar-header color_gradients">
      <a class="navbar-brand" href="#" style="font-weight: bold;color;font-family: Arial;color:white;margin-left:3px;">COVID19 STAT</a>
    </div>
    <ul class="nav navbar-nav ">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">About Corona Virus</a></li>
      <li><a href="#">Preventation</a></li>
      <li><a href="#">Emergency Numbers</a></li>
      <li class="active"><a href="#"> Current Temparature: <?php echo $data->main->temp; ?> degree</a></li>
      <li class="active"><a href="#">Country : <?php echo $data->sys->country; ?></a></li>
      <li class="active"><a href="#">Sun Rise : <?php echo $data->sys->sunrise; ?></a></li>
      <li class="active"><a href="#">Sun Set : <?php echo $data->sys->sunset; ?></a></li>
   


    </ul>
  </div>
</nav>
  
<div class="se">
 <span>
 <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32" enable-background="new 0 0 32 32" xml:space="preserve">
  
  <style>
    /* <![CDATA[ */ 
    
@-webkit-keyframes blink-circle-230817 {
  0%,10% {opacity:0; }
  12%,90% {opacity:1; }
  100% {opacity:1; }
}

@keyframes blink-circle-230817 {
  0%,10% {opacity:0; }
  12%,90% {opacity:1; }
  100% {opacity:1; }
}

.blink01-circle-230817 {
  animation: blink-circle-230817 10s linear infinite;
}

.blink02-circle-230817 {
  -webkit-animation: blink-circle-230817 10s linear 1s infinite;
  animation: blink-circle-230817 10s linear 1s infinite;
}

.blink03-circle-230817 {
  -webkit-animation: blink-circle-230817 10s linear 2s infinite;
  animation: blink-circle-230817 10s linear 2s infinite;
}

.blink04-circle-230817 {
  -webkit-animation: blink-circle-230817 10s linear 3s infinite;
  animation: blink-circle-230817 10s linear 3s infinite;
}

.blink05-circle-230817 {
  -webkit-animation: blink-circle-230817 10s linear 4s infinite;
  animation: blink-circle-230817 10s linear 4s infinite;
}

.blink06-circle-230817 {
  -webkit-animation: blink-circle-230817 10s linear 5s infinite;
  animation: blink-circle-230817 10s linear 5s infinite;
}

.blink07-circle-230817 {
  -webkit-animation: blink-circle-230817 10s linear 6s infinite;
  animation: blink-circle-230817 10s linear 6s infinite;
}

.blink08-circle-230817 {
  -webkit-animation: blink-circle-230817 10s linear 7s infinite;
  animation: blink-circle-230817 10s linear 7s infinite;
}

.blink09-circle-230817 {
  -webkit-animation: blink-circle-230817 10s linear 8s infinite;
  animation: blink-circle-230817 10s linear 8s infinite;
}

.blink10-circle-230817 {
  -webkit-animation: blink-circle-230817 10s linear 9s infinite;
  animation: blink-circle-230817 10s linear 9s infinite;
}
    
    /* ]]> */
  </style>
    
    
<path class="blink04-circle-230817" d="M28.436,22.609c0.871,0.641,1.064,1.87,0.432,2.742c-0.641,0.879-1.862,1.072-2.741,0.439
	c-0.879-0.641-1.073-1.87-0.433-2.75C26.326,22.17,27.556,21.977,28.436,22.609z"/>
<path class="blink08-circle-230817" d="M4.026,16c0,1.081-0.879,1.959-1.968,1.959C0.979,17.96,0.1,17.081,0.1,16c0-1.089,0.879-1.968,1.959-1.968
	C3.147,14.033,4.026,14.912,4.026,16z"/>
<path class="blink09-circle-230817" d="M3.572,9.392C2.691,8.75,2.498,7.521,3.14,6.649c0.632-0.879,1.863-1.072,2.742-0.44c0.871,0.641,1.064,1.87,0.432,2.742
	C5.672,9.831,4.451,10.024,3.572,9.392z"/>
<path class="blink07-circle-230817" d="M5.882,25.791c-0.879,0.633-2.109,0.439-2.742-0.439C2.498,24.48,2.692,23.25,3.573,22.61
	c0.879-0.633,2.1-0.439,2.741,0.432C6.946,23.921,6.753,25.15,5.882,25.791z"/>
<path class="blink10-circle-230817" d="M12.296,4.6c-1.027,0.335-2.13-0.231-2.467-1.259c-0.334-1.036,0.225-2.139,1.261-2.474c1.027-0.335,2.138,0.231,2.473,1.26
	C13.898,3.155,13.332,4.265,12.296,4.6z"/>
<path class="blink06-circle-230817" d="M11.09,31.133c-1.036-0.335-1.595-1.445-1.261-2.474c0.337-1.028,1.439-1.594,2.475-1.259
	c1.028,0.336,1.595,1.438,1.259,2.474C13.228,30.902,12.117,31.469,11.09,31.133z"/>
<path class="blink05-circle-230817" d="M20.917,31.133c-1.036,0.336-2.139-0.23-2.474-1.259c-0.335-1.036,0.231-2.138,1.259-2.474
	c1.029-0.335,2.14,0.23,2.474,1.259C22.513,29.688,21.944,30.798,20.917,31.133z"/>
<path class="blink02-circle-230817" d="M28.436,9.392c-0.88,0.633-2.109,0.439-2.742-0.44c-0.641-0.872-0.446-2.101,0.433-2.742
	c0.879-0.633,2.101-0.439,2.741,0.439C29.5,7.521,29.307,8.75,28.436,9.392z"/>
<path class="blink03-circle-230817" d="M29.939,17.96c-1.079,0-1.958-0.879-1.958-1.959c0-1.089,0.879-1.968,1.958-1.968c1.082,0,1.961,0.879,1.961,1.968
	C31.9,17.081,31.021,17.96,29.939,17.96z"/>
<path class="blink01-circle-230817" d="M19.702,4.6c-1.027-0.335-1.594-1.445-1.259-2.473s1.438-1.595,2.474-1.26c1.027,0.335,1.596,1.438,1.259,2.474
	C21.842,4.369,20.731,4.936,19.702,4.6z"/>
</svg>
</span>
<span style="font-family:Sans-serif;color:#4B0082;font-size:35px;">
    Live Update Of Coronavirus | Bangladesh Local Time <?php echo date("H:i:s"); ?>
</span>
</div>




<?php

$googleApiUrl = "https://coronavirus-19-api.herokuapp.com/countries/Bangladesh";

// https://github.com/javieraviles/covidAPI

$ch_1 = curl_init(); // Initialize a cURL session

curl_setopt($ch_1, CURLOPT_HEADER, 0); 
curl_setopt($ch_1, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch_1, CURLOPT_URL, $googleApiUrl);
curl_setopt($ch_1, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch_1, CURLOPT_VERBOSE, 0);
curl_setopt($ch_1, CURLOPT_SSL_VERIFYPEER, false);


/*
curl_setopt-> Set an option for a cURL transfer
CURLOPT_HEADER-> Pass headers to the data stream
CURLOPT_RETURNTRANSFER-> If you set CURLOPT_RETURNTRANSFER to true or 1 then the return value from curl_exec will be the actual result from the successful operation
CURLOPT_URL-> Provide the URL to use in the request
CURLOPT_FOLLOWLOCATION-> Follow HTTP 3xx redirects
CURLOPT_VERBOSE-> Set verbose mode on/off
CURLOPT_SSL_VERIFYPEER-> Verify the peer's SSL certificate


*/


$response = curl_exec($ch_1); // curl_exec => Execute the given cURL session.

curl_close($ch_1);
$data = json_decode($response);  // json_decode => Takes a JSON encoded string and converts it into a PHP variable.
//print_r($data);




?>




























<div class="b_stat">
<div class="card back"><p>Total Cases:<?php echo $data->cases; ?></p></div>
<div class="card card-1 back"><p>Today Cases: <?php echo $data->todayCases; ?></p></div>
<div class="card card-2 back"><p>Death Cases: <?php echo $data->deaths; ?></p></div>
<div class="card card-3 back"><p>Today Death Cases: <?php echo $data->todayDeaths; ?></p></div>
<div class="card card-4 back"><p>Recovering Cases: <?php echo $data->recovered; ?></p></div>
<div class="card card-5 back"><p>Critical Cases: <?php echo $data->critical; ?></p></div>
</div>


<div>
sss
</div>

	 
	 
 </body>

</html>
