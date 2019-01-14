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
logbymail($mailaddr,$modulename,$_SERVER['PHP_SELF'],"db_details_structure: ".$db); 

echo '<?xml version="1.0" encoding="utf-8"?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">
<head>
<link rel="icon" href="./favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="./favicon.ico" type="image/x-icon" />
<title>phpMyAdmin</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<base href="'.$GLOBALS["HTTP_HOST"].dirname($_SERVER['PHP_SELF']).'" />
    <link rel="stylesheet" type="text/css" href="./css/phpmyadminright.css" />
    <link rel="stylesheet" type="text/css" href="./css/print.css" media="print" />
    <script type="text/javascript" language="javascript">
    <!--
    // Updates the title of the frameset if possible (ns4 does not allow this)
    if (typeof(parent.document) != \'undefined\' && typeof(parent.document) != \'unknown\'
        && typeof(parent.document.title) == \'string\') {
        parent.document.title = \''.$GLOBALS["HTTP_HOST"].' /  / '.$db.'  /  | phpMyAdmin 2.7.0-pl1\';
    }
    
    // js form validation stuff
    var errorMsg0   = \'Missing value in the form!\';
    var errorMsg1   = \'This is not a number!\';
    var noDropDbMsg = \'"DROP DATABASE" statements are disabled.\';
    var confirmMsg  = \'Do you really want to \';
    var confirmMsgDropDB  = \'You are about to DESTROY a complete database!\';
    //-->
    </script>
    <script src="libraries/functions.js" type="text/javascript" language="javascript"></script>

        
        <script src="libraries/tooltip.js" type="text/javascript"
            language="javascript"></script>
        <meta name="OBGZip" content="true" />
    </head>


        <body bgcolor="#F5F5F5">
    <div id="TooltipContainer" onmouseover="holdTooltip();" onmouseout="swapTooltip(\'default\');"></div>
    <div id="serverinfo">
<a href="main.php?lang=en-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci" class="item">        <img class="icon" src="./themes/original/img/s_host.png" width="16" height="16" alt="" /> 

Server: Server1</a>
        <span class="separator"><img class="icon" src="./themes/original/img/item_ltr.png" width="5" height="9" alt="-" /></span>
<a href="db_details_structure.php?lang=en-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci&amp;db='.$db.'" class="item">        <img class="icon" src="./themes/original/img/s_db.png" width="16" height="16" alt="" /> 
Database: '.$db.'</a>
</div><div id="topmenucontainer">
<ul id="topmenu">
<li>Structure</li>
<li>SQL</li>
<li><span class="tab"><img class="icon" src="./themes/original/img/b_search.png" width="16" height="16" alt="Search" />Search</span></li>
<li><span class="tab"><img class="icon" src="./themes/original/img/s_db.png" width="16" height="16" alt="Query" />Query</span></li>

<li><span class="tab"><img class="icon" src="./themes/original/img/b_export.png" width="16" height="16" alt="Export" />Export</span></li>
<li><a class="tab" href="main.php?lang=en-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci&amp;&amp;goto=db_details_structure.php" ><img class="icon" src="./themes/original/img/b_import.png" width="16" height="16" alt="Import" />Import</a></li>
<li><a class="tab" href="main.php?lang=en-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci&amp;db=test&amp;goto=db_details_structure.php" ><img class="icon" src="./themes/original/img/b_tblops.png" width="16" height="16" alt="Operations" />Operations</a></li>
<li><a class="tab" href="main.php?lang=en-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci&amp;db=test&amp;goto=db_details_structure.php&amp;checkprivs=test&amp;viewing_mode=db" ><img class="icon" src="./themes/original/img/s_rights.png" width="16" height="16" alt="Privileges" />Privileges</a></li>
<li><a class="tabcaution" href="main.php?lang=en-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci&amp;db=test&amp;goto=db_details_structure.php&amp;sql_query=DROP+DATABASE+%60test%60&amp;zero_rows=Database+%60test%60+has+been+dropped.&amp;goto=main.php&amp;back=db_details_structure.php&amp;reload=1&amp;purge=1" onclick="return confirmLinkDropDB(this, \'DROP DATABASE `test`\')"><img class="icon" src="./themes/original/img/b_deltbl.png" width="16" height="16" alt="Drop" />Drop</a></li>
</ul>
<div class="clearfloat"></div></div>
<br />
<p>No tables found in database.</p>
<form method="post" action="tbl_create.php"
    onsubmit="return (emptyFormElements(this, \'table\') &amp;&amp; checkFormElementInRange(this, \'num_fields\', \'Table must have at least one field.\', 1))">
<fieldset>

    <legend>
<img class="icon" src="./themes/original/img/b_newtbl.png" width="16" height="16" alt="" />Create new table on database <a href="db_details_structure.php?lang=en-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci&amp;db='.$db.'" title="Jump to database &quot;'.$db.'&quot;.">'.$db.'</a>    </legend>
    <input type="hidden" name="lang" value="en-utf-8" />
<input type="hidden" name="server" value="1" />
<input type="hidden" name="collation_connection" value="utf8_general_ci" />
<input type="hidden" name="db" value="'.$db.'" />
    <div class="formelement">
        Name:
        <input type="text" name="table" maxlength="64" size="30" />
    </div>

    <div class="formelement">
        Number of fields:
        <input type="text" name="num_fields" size="2" />
    </div>
</fieldset>
<fieldset class="tblFooters">
    <input type="submit" value="Go" />
</fieldset>
</form>
<script type="text/javascript">
//<![CDATA[
        window.parent.setAll( \'en-utf-8\', \'utf8_general_ci\', \'1\', \''.$db.'\', \'\' );
            window.parent.reload_querywindow(
        "'.$db.'",
        "",
        "" );
        //]]>
</script>
    </body>

</html>';

?>
