<?php

function db_init()
{
  $mysqlhost="localhost";     // MySQL Host
  $mysqltcpport="3306";           // MySQL TCP Port
  $mysqlsocket="";            // MySQL socket (optionnal, only if connection is by socket)
  $mysqluser="root";             // MySQL Login 
  $mysqlpassword="n0p4ss";            // MySQL Password
  $mysqldatabase="hiphop";          // MySQL Database Name
  $mysqlalertstable="phphop_alerts";             // MySQL Alerts Table 
  // If empty, no MySQL alerts logging
  $mysqlhoneypotstable="phphop_honeypots";   // MySQL Honeypots Table
  
  if (!empty($mysqlalertstable)) {
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
    
  }

  return $link;
}

?>