<?
//
//  This file is part of PHPHoP, the PHP Honeypot Project
//
//  Copyright oudot@rstack.org 2005-2006
//

$pathlib="../../../lib/";			// PATH of the PHP files included
$pathlog="../../../logs/"; 		// PATH of the logs
$mailaddr="";	// Email address to receive alerts
				// If empty, no email sent.
$mysqlhost="localhost";     // MySQL Host
$mysqltcpport="3306";           // MySQL TCP Port
$mysqlsocket="";            // MySQL socket (optionnal, only if connection is by socket)
$mysqluser="";             // MySQL Login 
$mysqlpassword="";            // MySQL Password
$mysqldatabase="";          // MySQL Database Name
$mysqlalertstable="phphop_alerts";             // MySQL Alerts Table 
                            // If empty, no MySQL alerts logging
$mysqlhoneypotstable="phphop_honeypots";   // MySQL Honeypots Table

?>
