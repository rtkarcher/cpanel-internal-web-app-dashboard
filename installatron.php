<?php
header("Location:success.php?output=$message");

/*
  	
Installatron Install Automation API			(Sample PHP code to install WordPress to an account)

	
	Provided here is sample PHP code that will intiate a HTTP connection to the Installatron Install Automation API, then install a copy of WordPress to the blog sub-directory of 	the auser account. A randomized password is used for the install's admin login, and the account owner will be emailed the login information for the new install.

	With minimal programming knowledge this sample can be modified and expanded on to handle installing different applications or multiple applications. This possibilities are 
	endless. 
	

*/

// First, let's define some configurables.
$_SERVER_HOST = "OMITTED";
$_SERVER_USER = "OMITTED";
$_SERVER_PASS = "OMITTED";
$_INSTALL_APPLICATION = "wordpress";
$_INSTALL_WHERE = "FILEPATH";

// Create the query for the Installatron Install Automation API
$query = $_SERVER_HOST."?api=json"
     ."#cmd=install"
	 ."&application=".$_INSTALL_APPLICATION
	 ."&installer=".$_INSTALL_APPLICATION
     ."&url=".urlencode($_INSTALL_WHERE)
;

// Send the query using CURL
$curl = curl_init();        
curl_setopt($curl, CURLOPT_SSLVERSION,		  3);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER,    0);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST,    1);
curl_setopt($curl, CURLOPT_HEADER,            1);
curl_setopt($curl, CURLOPT_RETURNTRANSFER,    1);
curl_setopt($curl, CURLOPT_HTTPHEADER,        array("Authorization: Basic ".base64_encode($_SERVER_USER.":".$_SERVER_PASS) . "\n\r"));
curl_setopt($curl, CURLOPT_URL,             $query);
$response = curl_exec($curl);

// And we got a response. Check for errors.
if ( $response === false ) {
    error_log("Installatron API Error: curl_exec threw error `".curl_error($curl)."` for `$query`.");
    return;
 }
curl_close($curl);
if ( strpos($response,"result") === false ) {
     error_log("Installatron API Error: malformed response for `$query`: ".$response);
     return;
 }
 
// Response looks good. Parse it.
$response = json_decode($response, true);
if ( $response["result"] === false ) {
     error_log("Installatron API Error: ".$response["message"]." (query: `$query`)");
     return;
 }
 
// Output the final result!
echo $response["message"];
?>
