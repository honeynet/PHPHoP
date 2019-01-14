<?
//
//  This file is part of PHPHoP, the PHP Honeypot Project
//
//  Copyright oudot@rstack.org 2005-2006
//
//
// LOG TO MYSQL DATABASE
// Set $pathlog to a directory where this script is allowed to write
// Please remind that this directory should not be readable directly
// from the net (use a htaccess feature like, if needed).


function logtomysql($modulename,$command,$mysqlhost,$mysqltcpport,$mysqlsocket,$mysqluser,$mysqlpassword,$mysqldatabase,$mysqlalertstable,$mysqlhoneypotstable)
{


  if (!empty($mysqlalertstable))
  {
    if (!empty($mysqlsocket)) // Connection with a local /path/to/socket
    {
      $link = mysql_connect($mysqlsocket, $mysqluser, $mysqlpassword);
      if (!$link) {
        die('Connection died : ' . mysql_error());
      }
      
    } else { // Connection with a Hostname:Port combination
      $link = mysql_connect($mysqlhost.":".$mysqltcpport, $mysqluser, $mysqlpassword);
      if (!$link) {
        die('Connection died : ' . mysql_error());
      }
        
    }
    
    $db_selected = mysql_select_db($mysqldatabase, $link);
    if (!$db_selected) {
      die ('Can\'t connect to database : ' . mysql_error());
    }

    // Build the SQL Query$GLOBALS['b']
    
    $query = ("INSERT INTO ". $mysqlalertstable.
    "  SET EntryId = ''" .
    ", RemoteAddr = ". ip2long($GLOBALS["REMOTE_ADDR"]) .
    ", RemoteUser = '". mysql_real_escape_string($GLOBALS["REMOTE_USER"]) . "'".
    ", RemotePort = ". $GLOBALS["REMOTE_PORT"] .
    ", LocalTimer = ". strftime("%Y%m%d%H%M%S") .
    ", RemoteDnsAddr = '". mysql_real_escape_string(((gethostbyaddr($GLOBALS["REMOTE_ADDR"])==$GLOBALS["REMOTE_ADDR"])?"":gethostbyaddr($GLOBALS["REMOTE_ADDR"]))) . "'".
    ", PhpSelf = '". mysql_real_escape_string($PHP_SELF) . "'".
    ", QueryString = '". mysql_real_escape_string($GLOBALS["QUERY_STRING"]) . "'".
    ", RedirectStatus = '". $GLOBALS["REDIRECT_STATUS"] . "'".
    ", HttpXComingFrom = '". mysql_real_escape_string($GLOBALS["HTTP_X_COMING_FROM"]) . "'".
    ", HttpUserAgent = '". mysql_real_escape_string($GLOBALS["HTTP_USER_AGENT"]) . "'".
    ", HttpReferrer = '". mysql_real_escape_string($GLOBALS["HTTP_REFERER"]) . "'".
    ", HttpAccept = '". mysql_real_escape_string($GLOBALS["HTTP_ACCEPT"]) . "'".
    ", HttpHost = '". mysql_real_escape_string($GLOBALS["HTTP_HOST"]) . "'".
    ", RequestMethod = '". mysql_real_escape_string($GLOBALS["REQUEST_METHOD"]) . "'".
    ", ModuleName = '". mysql_real_escape_string($modulename) . "'".
    ", AlertType = '". mysql_real_escape_string("") . "'".
    ", AlertSeverity = '". "" . "'".
    ", ExtraLog = '". mysql_real_escape_string($command) . "'".
    ", HoneypotId = '". "" . "'"
    );

    print "<pre>$query</pre>";
    
    
    $result = mysql_query($query);
    if (!$result) {
      die('Invalid Query :' . mysql_error());
    }
    mysql_close($link);
  }

}

function redirect_logtomysql($modulename,$command,$mysqlhost,$mysqltcpport,$mysqlsocket,$mysqluser,$mysqlpassword,$mysqldatabase,$mysqlalertstable,$mysqlhoneypotstable)
{


  if (!empty($mysqlalertstable))
  {
    if (!empty($mysqlsocket)) // Connection with a local /path/to/socket
    {
      $link = mysql_connect($mysqlsocket, $mysqluser, $mysqlpassword);
      if (!$link) {
        die('Connection died : ' . mysql_error());
      }
      
    } else { // Connection with a Hostname:Port combination
      $link = mysql_connect($mysqlhost.":".$mysqltcpport, $mysqluser, $mysqlpassword);
      if (!$link) {
        die('Connection died : ' . mysql_error());
      }
        
    }
    
    $db_selected = mysql_select_db($mysqldatabase, $link);
    if (!$db_selected) {
      die ('Can\'t connect to database : ' . mysql_error());
    }

    // Build the SQL Query$GLOBALS['b']
    
    $query = ("INSERT INTO ". $mysqlalertstable.
    "  SET EntryId = ''" .
	      //    ", RemoteAddr = ". ip2long($GLOBALS["REMOTE_ADDR"]) .
    ", RemoteUser = '". mysql_real_escape_string($GLOBALS["REMOTE_USER"]) . "'".
	      //    ", RemotePort = ". $GLOBALS["REMOTE_PORT"] .
    ", LocalTimer = ". strftime("%Y%m%d%H%M%S") .
	      //    ", RemoteDnsAddr = '". mysql_real_escape_string(((gethostbyaddr($GLOBALS["REMOTE_ADDR"])==$GLOBALS["REMOTE_ADDR"])?"":gethostbyaddr($GLOBALS["REMOTE_ADDR"]))) . "'".
    ", PhpSelf = '". mysql_real_escape_string($_SERVER['REDIRECT_URL']) . "'".
    ", QueryString = '". mysql_real_escape_string($_SERVER["REDIRECT_QUERY_STRING"])."' ".
	      //    ", RedirectStatus = '". $GLOBALS["REDIRECT_STATUS"] . "'".
	      //    ", HttpXComingFrom = '". mysql_real_escape_string($GLOBALS["HTTP_X_COMING_FROM"]) . "'".
    ", HttpUserAgent = '". mysql_real_escape_string($GLOBALS["HTTP_USER_AGENT"]) . "'".
	      //    ", HttpReferer = '". mysql_real_escape_string($GLOBALS["HTTP_REFERER"]) . "'".
	      //    ", HttpAccept = '". mysql_real_escape_string($GLOBALS["HTTP_ACCEPT"]) . "'".
	      //    ", HttpHost = '". mysql_real_escape_string($GLOBALS["HTTP_HOST"]) . "'".
	      //    ", RequestMethod = '". mysql_real_escape_string($GLOBALS["REQUEST_METHOD"]) . "'".
    ", ModuleName = '". mysql_real_escape_string($modulename) . "'".
    ", AlertType = '". mysql_real_escape_string("") . "'".
    ", AlertSeverity = '". "" . "'".
    ", ExtraLog = '". mysql_real_escape_string($command) . "'".
    ", HoneypotId = '". "" . "'"
    );        
    
    $result = mysql_query($query);
    if (!$result) {
      die('Invalid Query :' . mysql_error());
    }
    mysql_close($link);
  }

}

?>
