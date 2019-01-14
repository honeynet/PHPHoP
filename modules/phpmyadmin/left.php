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
 
logtodisk($pathlog,$modulename); 
logbymail($mailaddr,$modulename,$_SERVER['PHP_SELF'],"left"); 

echo '<?xml version="1.0" encoding="utf-8"?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"
    xml:lang="en"
    lang="en"
    dir="ltr">

<head>
    <link rel="icon" href="./favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon" />
    <title>phpMyAdmin</title>
    <meta http-equiv="Content-Type"
        content="text/html; charset=utf-8" />
    <base href="'.dirname($_SERVER['PHP_SELF']).'"
        target="phpmain1139874024" />
    <link rel="stylesheet" type="text/css"
        href="./css/phpmyadminleft.css" />
    <script type="text/javascript" language="javascript">
    //<![CDATA[
    function toggle( id, only_open ) {
        el = document.getElementById(\'subel\' + id);
        if ( ! el ) {
            return false;
        }
        
        img = document.getElementById(\'el\' + id + \'Img\');
        
        if ( el.style.display == \'none\' || only_open ) {
            el.style.display = \'\';
            if ( img ) {
                img.src = \'./themes/original/img/b_minus.png\';
                img.alt = \'-\';
            }
        } else {
            el.style.display = \'none\';
            if ( img ) {
                img.src = \'./themes/original/img/b_plus.png\';
                img.alt = \'+\';
            }
        }
        return true;
    }
    //]]>
    </script>
</head>

<body id="body_leftFrame">
<div id="pmalogo">
<a href="http://www.phpmyadmin.net/" target="_blank"><img src="./themes/original/img/logo_left.png" alt="phpMyAdmin" id="imgpmalogo" /></a>
</div>
<div id="leftframelinks">
<a href="main.php?lang=en-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci" title="Home"><img class="icon" src="./themes/original/img/b_home.png" width="16"  height="16" alt="Home" /></a>
<a href="querywindow.php?lang=en-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci&amp;no_js=true" title="Query window" onclick="javascript:window.parent.open_querywindow(); return false;"><img class="icon" src="./themes/original/img/b_selboard.png" width="16" height="16" alt="Query window" /></a>
    <a href="Documentation.html" target="documentation" title="phpMyAdmin documentation" ><img class="icon" src="./themes/original/img/b_docs.png" width="16" height="16" alt="phpMyAdmin documentation" /></a>
    <a href="http://dev.mysql.com/doc/refman/4.1/en/index.html" target="mysql_doc"><img class="icon" src="./themes/original/img/b_sqlhelp.png" width="16" height="16" alt="Documentation" title="Documentation" /></a>
</div>
    <div id="databaseList">
    <form method="post" action="index.php" target="_parent" id="left"
        onsubmit="
                window.parent.goTo( \'db_details_structure.php?lang=en-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci&amp;db=\' + this.value, \'main\' );
                window.parent.goTo( \'left.php?lang=en-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci&amp;db=\' + this.value);
        return false;">
    <label for="lightm_db">Database</label>
    <input type="hidden" name="lang" value="en-utf-8" />
<input type="hidden" name="server" value="1" />
<input type="hidden" name="collation_connection" value="utf8_general_ci" />

<select name="db" id="lightm_db" xml:lang="en" dir="ltr" onchange="window.parent.openDb( this.value );">
<option value="" dir="ltr">(Databases) ...</option>
<option value="mysql" title="">mysql (15)</option>
<option value="emails" title="">emails (9125)</option>
<option value="secretfiles" title="">secretfiles (27)</option>
<option value="securitylogs" title="">securitylogs (3)</option>
<option value="test" title="">test (0)</option>
</select>
<noscript>
<input type="submit" name="Go" value="Go" />
</noscript>
</form>
</div>
 
<div id="left_tableList">
<p>Please select a database</p>
 
</div>
</body>
</html>';

?>
