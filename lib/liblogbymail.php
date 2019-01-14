<?
//
//  This file is part of PHPHoP, the PHP Honeypot Project
//
//  Copyright oudot@rstack.org 2005-2006
//
// SEND IMPORTANT ALERT BY EMAIL

function logbymail($mailalert,$name,$phpself,$bonuslog)
{
   if(!empty($mailalert))
   {
	if (!empty($bonuslog)) {
		
		$subject="[phphop] ".$name." : Extended log";
		
		$msg="PHPHoP Email Instant Alert\nSomeone arrived on module ".$name." on web site ".$GLOBALS["HTTP_HOST"].$phpself."\nIP Source: ".$GLOBALS["REMOTE_ADDR"]." - ".((gethostbyaddr($GLOBALS["REMOTE_ADDR"])==$GLOBALS["REMOTE_ADDR"])?"":gethostbyaddr($GLOBALS["REMOTE_ADDR"]))."\nBrowser  : [".$GLOBALS["HTTP_USER_AGENT"]. " ]\nReferer  : [ " .$GLOBALS["HTTP_REFERER"]." ]\nExtra logs: [ ".$bonuslog." ]";
	}
	else if (!empty($GLOBALS["QUERY_STRING"])) {
		
		$subject="[phphop] ".$name." : Visitor";
		
		$msg="PHPHoP Email Instant Alert\nSomeone arrived on module ".$name." on web site ".$GLOBALS["HTTP_HOST"].$phpself."\nIP Source: ".$GLOBALS["REMOTE_ADDR"]." - ".((gethostbyaddr($GLOBALS["REMOTE_ADDR"])==$GLOBALS["REMOTE_ADDR"])?"":gethostbyaddr($GLOBALS["REMOTE_ADDR"]))."\nBrowser  : [".$GLOBALS["HTTP_USER_AGENT"]. " ]\nReferer  : [ " .$GLOBALS["HTTP_REFERER"]." ]";

	}
	else
		return;

	if(is_callable("email", FALSE))	// Some ISP use such a wrapper on mail()
		email("phphop",$mailalert,$subject,$msg);
	else
		mail("phphop",$mailalert,$subject,$msg);
	
  }
}
?>
