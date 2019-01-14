<?php
//
//  This file is part of PHPHoP, the PHP Honeypot Project
//
//  Copyright oudot@rstack.org 2005-2006
//
// Developers :
//		 jamesr@europe.com - Jamie Riden 
//		 oudot@rstack.org  - Laurent Oudot

// test case:
//
// see TESTDATA.TXT - including xml inline mucks up the PHP interpreter


// I suggest using mod_rewrite as follows in httpd.conf:
//
// RewriteEngine on
// RewriteRule ^(.*)/xmlrpc.php$ /xmlsrv/xmlrpc.php [R,L]
//
// RewriteRule ^(.*)/xmlsrv.php$ /xmlsrv/xmlrpc.php [R,L]

$modulename="xmlrpc";

include_once("config.php");
include_once($pathlib."/libsystem.php");

//
// Create a fake 500 answer
//
$s404 = '<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN">
<HTML><HEAD>
<TITLE>500 Internal Server Error</TITLE>
</HEAD><BODY>
<H1>Internal Server Error</H1>
The server encountered an error while trying to fetch the URL '.htmlspecialchars($_SERVER["REDIRECT_URL"]).'</P>
<HR>
<ADDRESS>'.$GLOBALS["SERVER_SOFTWARE"].' Server at <A HREF="mailto:'.$GLOBALS["SERVER_ADMIN"].'">'.$GLOBALS["HTTP_HOST"].'</A> Port '.$GLOBALS["SERVER_PORT"].'</ADDRESS>
</BODY></HTML>';

//
// Handle 500 answers
//
function s500() {
  global $s500;
  header("HTTP/1.1 500 Internal Server Error");
  echo $s500;

}

//
// Create a stupid fake 200 answer 
//
$s200 = '<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN">
<HTML><HEAD><TITLE></TITLE>
</HEAD><BODY>
</BODY></HTML>';

//
// Handle 200 answers
//
function s200() {
  global $s200;
  header("HTTP/1.1 200 OK");
  
  echo $s200;
}

//
// We want to handle HTTP headers properly, so that we buffer the answer before
// sending it back to the HTTP client
//
ob_start();

$method="";
if (isset($_SERVER['REQUEST_METHOD'])) {
  $method=$_SERVER['REQUEST_METHOD'];
}

if ($method=="POST") {
   
  $data = file_get_contents("php://input"); // get POST data

  $decoded=urldecode($data);
  $mydownload="";

  // wget is by far the most common
  if (ereg("wget ([^;]+);",$decoded,$regs)) {
    $mydownload = $regs[1];
    if (!ereg('^[^0-9:\.A-Za-z/ ]$',$mydownload ) && strlen($mydownload )>1 ) {
      download("wget",$mydownload);      
    }
  } else {
    // curl, followed by one or more options before url
    if (ereg("curl.+ ([^-][^;]+);",$decoded,$regs)) {
      $mydownload = $regs[1];
      if (!ereg('^[^0-9:\.A-Za-z/ ]$',$mydownload ) && strlen($mydownload )>1 ) {
	download("wget",$mydownload);      
      }
    }
  }

  s500();
} else {
  // tell them the file exists for GET/HEAD etc. requests
  s200();
} 

ob_end_flush();


?>