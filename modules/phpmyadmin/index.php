<?
// 
//  This file is part of PHPHoP, the PHP Honeypot Project 
// 
//  Copyright oudot@rstack.org 2005-2006 
// 
// 
// This script simulates a fake phpmyadmin frontend with few options
 
 
// TODO: improve the proposed options 
 
$modulename="phpmyadmin"; 

include_once("config.php"); 
 
include_once($pathlib."/liblogtodisk.php"); 
include_once($pathlib."/liblogbymail.php"); 
include_once($pathlib."/liblogtomysql.php");
 
logtodisk($pathlog,$modulename);
logbymail($mailaddr,$modulename,$_SERVER['PHP_SELF'],$command);
logtomysql($modulename,$data,$mysqlhost,$mysqltcpport,$mysqlsocket,$mysqluser,$mysqlpassword,$mysqldatabase,$mysqlalertstable,$mysqlhoneypotstable);

echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"
    xml:lang="en"
    lang="en"
    dir="ltr">
<head>
<link rel="icon" href="./favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="./favicon.ico" type="image/x-icon" />
<title>phpMyAdmin 2.7.0-pl1 - '.$GLOBALS["HTTP_HOST"].'</title>
<meta http-equiv="Content-Type"
    content="text/html; charset=utf-8" />
<script type="text/javascript" language="javascript">
//<![CDATA[
    // definitions used in querywindow.js
    var common_query = \'lang=en-utf-8&server=1&collation_connection=utf8_general_ci\';
    var opendb_url = \'db_details_structure.php\';
    var safari_browser = true;    
    var querywindow_height = 400;
    var querywindow_width = 600;
    var collation_connection = \'utf8_general_ci\';
    var lang = \'en-utf-8\';
    var server = \'1\';
    var table = \'\';
    var db    = \'\';
    var pma_absolute_uri = \''.$GLOBALS["HTTP_HOST"].dirname($_SERVER['PHP_SELF']).'\';
//]]>
</script>
<script src="libraries/querywindow.js" type="text/javascript"
    language="javascript"></script>
</head>
<frameset cols="200,*" rows="*" id="mainFrameset">
    <frame frameborder="0" id="leftFrame"
        src="left.php?lang=en-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci" 
        name="nav1139874024" />
    <frame frameborder="0" id="rightFrame"
        src="main.php?lang=en-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci" 
        name="phpmain1139874024" />
    <noframes>
        <body>
            <p>phpMyAdmin is more friendly with a <b>frames-capable</b> browser.</p>
        </body>
    </noframes>
</frameset>
</html>';
?>
