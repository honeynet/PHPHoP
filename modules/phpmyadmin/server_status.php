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
logbymail($mailaddr,$modulename,$_SERVER['PHP_SELF'],"srv status: ".$db); 

echo '<?xml version="1.0" encoding="utf-8"?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">
<head>
<link rel="icon" href="./favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="./favicon.ico" type="image/x-icon" />
<title>phpMyAdmin</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<base href="'.dirname($_SERVER['PHP_SELF']).'" />
    <link rel="stylesheet" type="text/css" href="./css/phpmyadminright.css" />
    <link rel="stylesheet" type="text/css" href="./css/print.css" media="print" />
    <script type="text/javascript" language="javascript">
    <!--
    // Updates the title of the frameset if possible (ns4 does not allow this)
    if (typeof(parent.document) != \'undefined\' && typeof(parent.document) != \'unknown\'
        && typeof(parent.document.title) == \'string\') {
        parent.document.title = \''.$GLOBALS["HTTP_HOST"].' /  | phpMyAdmin 2.7.0-pl1\';
    }
    
    //-->
    </script>
        
        <script src="libraries/tooltip.js" type="text/javascript"
            language="javascript"></script>

        <meta name="OBGZip" content="true" />
    </head>


        <body bgcolor="#F5F5F5">
    <div id="TooltipContainer" onmouseover="holdTooltip();" onmouseout="swapTooltip(\'default\');"></div>
    <div id="serverinfo">
<a href="main.php?lang=en-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci" class="item">        <img class="icon" src="./themes/original/img/s_host.png" width="16" height="16" alt="" /> 
Server: Server1</a>
</div><div id="topmenucontainer">

<ul id="topmenu">
<li><a class="tab" href="main.php?lang=en-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci" ><img class="icon" src="./themes/original/img/s_db.png" width="16" height="16" alt="Databases" />Databases</a></li>
<li><a class="tab" href="main.php?lang=en-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci" ><img class="icon" src="./themes/original/img/b_sql.png" width="16" height="16" alt="SQL" />SQL</a></li>
<li><a class="tabactive" href="main.php?lang=en-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci" ><img class="icon" src="./themes/original/img/s_status.png" width="16" height="16" alt="Status" />Status</a></li>
<li><a class="tab" href="main.php?lang=en-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci" ><img class="icon" src="./themes/original/img/s_vars.png" width="16" height="16" alt="Variables" />Variables</a></li>
<li><a class="tab" href="main.php?lang=en-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci" ><img class="icon" src="./themes/original/img/s_asci.png" width="16" height="16" alt="Charsets" />Charsets</a></li>
<li><a class="tab" href="main.php?lang=en-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci" ><img class="icon" src="./themes/original/img/b_engine.png" width="16" height="16" alt="Engines" />Engines</a></li>
<li><a class="tab" href="main.php?lang=en-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci" ><img class="icon" src="./themes/original/img/s_rights.png" width="16" height="16" alt="Privileges" />Privileges</a></li>
<li><a class="tab" href="main.php?lang=en-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci" ><img class="icon" src="./themes/original/img/s_tbl.png" width="16" height="16" alt="Binary log" />Binary log</a></li>

<li><a class="tab" href="main.php?lang=en-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci" ><img class="icon" src="./themes/original/img/s_process.png" width="16" height="16" alt="Processes" />Processes</a></li>
<li><a class="tab" href="main.php?lang=en-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci" ><img class="icon" src="./themes/original/img/b_export.png" width="16" height="16" alt="Export" />Export</a></li>
<li><a class="tab" href="main.php?lang=en-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci" ><img class="icon" src="./themes/original/img/b_import.png" width="16" height="16" alt="Import" />Import</a></li>
</ul>
<div class="clearfloat"></div></div>
<br />
<a name="_top"></a>
<div id="serverstatus">
<h2>
<img class="icon" src="./themes/original/img/s_status.png" width="16" height="16" alt="" />Runtime Information
</h2>
<div id="statuslinks">
    <a href="server_status.php?lang=en-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci"
       >Refresh</a>

    <a href="server_status.php?flush=STATUS&amp;lang=en-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci"
       >Reset</a>
    <a href="http://dev.mysql.com/doc/refman/server-status-variables.html" 
       target="documentation">MySQL - Documentation</a>
</div>

<p>
This MySQL server has been running for 10 days, 3 hours, 7 minutes and 37 seconds. It started up on Feb 03, 2006 at 10:19 PM.
</p>

<div id="sectionlinks">
<a href="server_status.php?lang=en-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci#ssl">SSL</a>
<a href="server_status.php?lang=en-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci#handler">Handler</a>

<a href="server_status.php?lang=en-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci#qcache">Query cache</a>
<a href="server_status.php?lang=en-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci#threads">Threads</a>
<a href="server_status.php?lang=en-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci#binlog_cache">Binary log</a>
<a href="server_status.php?lang=en-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci#created_tmp">Temporary data</a>
<a href="server_status.php?lang=en-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci#delayed">Delayed inserts</a>
<a href="server_status.php?lang=en-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci#key">Key cache</a>
<a href="server_status.php?lang=en-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci#select">Joins</a>
<a href="server_status.php?lang=en-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci#repl">Replication</a>
<a href="server_status.php?lang=en-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci#sort">Sorting</a>

<a href="server_status.php?lang=en-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci#table">Tables</a>
</div>

<h3><b>Server traffic</b>: These tables show the network traffic statistics of this MySQL server since its startup.</h3>

<table id="serverstatustraffic" class="data">
<thead>
<tr>
    <th colspan="2">Traffic</th>
    <th>&oslash; per hour</th>

</tr>
</thead>
<tbody>
<tr class="odd">
    <th class="name">Received</th>
    <td class="value">95 MB</td>
    <td class="value">399 KB</td>
</tr>
<tr class="even">
    <th class="name">Sent</th>

    <td class="value">154 MB</td>
    <td class="value">648 KB</td>
</tr>
<tr class="odd">
    <th class="name">Total</th>
    <td class="value">248 MB</td>
    <td class="value">1 MB</td>

</tr>
</tbody>
</table>

<table id="serverstatusconnections" class="data">
<thead>
<tr>
    <th colspan="2">Connections</th>
    <th>&oslash; per hour</th>
    <th>%</th>

</tr>
</thead>
<tbody>
<tr class="odd">
    <th class="name">max. concurrent connections</th>
    <td class="value">12  </td>
    <td class="value">--- </td>
    <td class="value">--- </td>
</tr>

<tr class="even">
    <th class="name">Failed attempts</th>
    <td class="value">0  </td>
    <td class="value">0.00  </td>
    <td class="value">0.00%</td>
</tr>
<tr class="odd">
    <th class="name">Aborted</th>

    <td class="value">146  </td>
    <td class="value">0.60  </td>
    <td class="value">41.36%</td>
</tr>
<tr class="even">
    <th class="name">Total</th>
    <td class="value">353  </td>

    <td class="value">1.45  </td>
    <td class="value">100.00%</td>
</tr>
</tbody>
</table>

<hr class="clearfloat" />

<h3><b>Query statistics</b>: Since its startup, 1,023,025 queries have been sent to the server.</h3>

<table id="serverstatusqueriessummary" class="data">

<thead>
<tr>
    <th>Total</th>
    <th>&oslash; per hour</th>
    <th>&oslash; per minute</th>
    <th>&oslash; per second</th>

</tr>
</thead>
<tbody>
<tr class="odd">
    <td class="value">1 M</td>
    <td class="value">4.21 k</td>
    <td class="value">70.13  </td>
    <td class="value">1.17  </td>
</tr>

</tbody>
</table>

<div id="serverstatusqueriesdetails">
    <table id="serverstatusqueriesdetails1" class="data">
    <col class="namecol" />
    <col class="valuecol" span="3" />
    <thead>
        <tr><th colspan="2">Query type</th>
            <th>&oslash; per hour</th>

            <th>%</th>
        </tr>
    </thead>
    <tbody>
        <tr class="odd">
            <th class="name">admin commands</th>
            <td class="value">0  </td>

            <td class="value">0.00  </td>
            <td class="value">0.00%</td>
        </tr>
        <tr class="even">
            <th class="name">alter db</th>
            <td class="value">0  </td>
            <td class="value">0.00  </td>

            <td class="value">0.00%</td>
        </tr>
        <tr class="odd">
            <th class="name">alter table</th>
            <td class="value">0  </td>
            <td class="value">0.00  </td>
            <td class="value">0.00%</td>

        </tr>
        <tr class="even">
            <th class="name">analyze</th>
            <td class="value">0  </td>
            <td class="value">0.00  </td>
            <td class="value">0.00%</td>
        </tr>

        <tr class="odd">
            <th class="name">backup table</th>
            <td class="value">0  </td>
            <td class="value">0.00  </td>
            <td class="value">0.00%</td>
        </tr>
        <tr class="even">

            <th class="name">begin</th>
            <td class="value">0  </td>
            <td class="value">0.00  </td>
            <td class="value">0.00%</td>
        </tr>
        <tr class="odd">
            <th class="name">change db</th>

            <td class="value">383  </td>
            <td class="value">1.58  </td>
            <td class="value">0.04%</td>
        </tr>
        <tr class="even">
            <th class="name">change master</th>
            <td class="value">0  </td>

            <td class="value">0.00  </td>
            <td class="value">0.00%</td>
        </tr>
        <tr class="odd">
            <th class="name">check</th>
            <td class="value">0  </td>
            <td class="value">0.00  </td>

            <td class="value">0.00%</td>
        </tr>
        <tr class="even">
            <th class="name">checksum</th>
            <td class="value">0  </td>
            <td class="value">0.00  </td>
            <td class="value">0.00%</td>

        </tr>
        <tr class="odd">
            <th class="name">commit</th>
            <td class="value">0  </td>
            <td class="value">0.00  </td>
            <td class="value">0.00%</td>
        </tr>

        <tr class="even">
            <th class="name">create db</th>
            <td class="value">0  </td>
            <td class="value">0.00  </td>
            <td class="value">0.00%</td>
        </tr>
        <tr class="odd">

            <th class="name">create function</th>
            <td class="value">0  </td>
            <td class="value">0.00  </td>
            <td class="value">0.00%</td>
        </tr>
        <tr class="even">
            <th class="name">create index</th>

            <td class="value">0  </td>
            <td class="value">0.00  </td>
            <td class="value">0.00%</td>
        </tr>
        <tr class="odd">
            <th class="name">create table</th>
            <td class="value">5  </td>

            <td class="value">0.02  </td>
            <td class="value">0.00%</td>
        </tr>
        <tr class="even">
            <th class="name">delete</th>
            <td class="value">12 k</td>
            <td class="value">50.02  </td>

            <td class="value">1.19%</td>
        </tr>
        <tr class="odd">
            <th class="name">delete multi</th>
            <td class="value">0  </td>
            <td class="value">0.00  </td>
            <td class="value">0.00%</td>

        </tr>
        <tr class="even">
            <th class="name">do</th>
            <td class="value">0  </td>
            <td class="value">0.00  </td>
            <td class="value">0.00%</td>
        </tr>

        <tr class="odd">
            <th class="name">drop db</th>
            <td class="value">0  </td>
            <td class="value">0.00  </td>
            <td class="value">0.00%</td>
        </tr>
        <tr class="even">

            <th class="name">drop function</th>
            <td class="value">0  </td>
            <td class="value">0.00  </td>
            <td class="value">0.00%</td>
        </tr>
        <tr class="odd">
            <th class="name">drop index</th>

            <td class="value">0  </td>
            <td class="value">0.00  </td>
            <td class="value">0.00%</td>
        </tr>
        <tr class="even">
            <th class="name">drop table</th>
            <td class="value">0  </td>

            <td class="value">0.00  </td>
            <td class="value">0.00%</td>
        </tr>
        <tr class="odd">
            <th class="name">drop user</th>
            <td class="value">0  </td>
            <td class="value">0.00  </td>

            <td class="value">0.00%</td>
        </tr>
        <tr class="even">
            <th class="name">flush</th>
            <td class="value">2  </td>
            <td class="value">0.01  </td>
            <td class="value">0.00%</td>

        </tr>
        <tr class="odd">
            <th class="name">grant</th>
            <td class="value">0  </td>
            <td class="value">0.00  </td>
            <td class="value">0.00%</td>
        </tr>

        <tr class="even">
            <th class="name">ha close</th>
            <td class="value">0  </td>
            <td class="value">0.00  </td>
            <td class="value">0.00%</td>
        </tr>
        <tr class="odd">

            <th class="name">ha open</th>
            <td class="value">0  </td>
            <td class="value">0.00  </td>
            <td class="value">0.00%</td>
        </tr>
        <tr class="even">
            <th class="name">ha read</th>

            <td class="value">0  </td>
            <td class="value">0.00  </td>
            <td class="value">0.00%</td>
        </tr>
        <tr class="odd">
            <th class="name">help</th>
            <td class="value">0  </td>

            <td class="value">0.00  </td>
            <td class="value">0.00%</td>
        </tr>
        <tr class="even">
            <th class="name">insert</th>
            <td class="value">271 k</td>
            <td class="value">1.11 k</td>

            <td class="value">26.50%</td>
        </tr>
        <tr class="odd">
            <th class="name">insert select</th>
            <td class="value">373  </td>
            <td class="value">1.53  </td>
            <td class="value">0.04%</td>

        </tr>
        <tr class="even">
            <th class="name">kill</th>
            <td class="value">21  </td>
            <td class="value">0.09  </td>
            <td class="value">0.00%</td>
        </tr>

        <tr class="odd">
            <th class="name">load</th>
            <td class="value">0  </td>
            <td class="value">0.00  </td>
            <td class="value">0.00%</td>
        </tr>
        <tr class="even">

            <th class="name">load master data</th>
            <td class="value">0  </td>
            <td class="value">0.00  </td>
            <td class="value">0.00%</td>
        </tr>
        <tr class="odd">
            <th class="name">load master table</th>

            <td class="value">0  </td>
            <td class="value">0.00  </td>
            <td class="value">0.00%</td>
        </tr>
        <tr class="even">
            <th class="name">lock tables</th>
            <td class="value">0  </td>

            <td class="value">0.00  </td>
            <td class="value">0.00%</td>
        </tr>
        <tr class="odd">
            <th class="name">optimize</th>
            <td class="value">0  </td>
            <td class="value">0.00  </td>

            <td class="value">0.00%</td>
        </tr>
        <tr class="even">
            <th class="name">preload keys</th>
            <td class="value">0  </td>
            <td class="value">0.00  </td>
            <td class="value">0.00%</td>

        </tr>
        <tr class="odd">
            <th class="name">purge</th>
            <td class="value">0  </td>
            <td class="value">0.00  </td>
            <td class="value">0.00%</td>
        </tr>

        <tr class="even">
            <th class="name">purge before date</th>
            <td class="value">0  </td>
            <td class="value">0.00  </td>
            <td class="value">0.00%</td>
        </tr>
        <tr class="odd">

            <th class="name">rename table</th>
            <td class="value">0  </td>
            <td class="value">0.00  </td>
            <td class="value">0.00%</td>
        </tr>
        <tr class="even">
            <th class="name">repair</th>

            <td class="value">0  </td>
            <td class="value">0.00  </td>
            <td class="value">0.00%</td>
        </tr>
        <tr class="odd">
            <th class="name">replace</th>
            <td class="value">1 k</td>

            <td class="value">5.60  </td>
            <td class="value">0.13%</td>
        </tr>
        <tr class="even">
            <th class="name">replace select</th>
            <td class="value">10  </td>
            <td class="value">0.04  </td>

            <td class="value">0.00%</td>
        </tr>
        <tr class="odd">
            <th class="name">reset</th>
            <td class="value">0  </td>
            <td class="value">0.00  </td>
            <td class="value">0.00%</td>

        </tr>
    </tbody>
    </table>
    <table id="serverstatusqueriesdetails46" class="data">
    <col class="namecol" />
    <col class="valuecol" span="3" />
    <thead>
        <tr><th colspan="2">Query type</th>

            <th>&oslash; per hour</th>
            <th>%</th>
        </tr>
    </thead>
    <tbody>
        <tr class="odd">
            <th class="name">restore table</th>

            <td class="value">0  </td>
            <td class="value">0.00  </td>
            <td class="value">0.00%</td>
        </tr>
        <tr class="even">
            <th class="name">revoke</th>
            <td class="value">0  </td>

            <td class="value">0.00  </td>
            <td class="value">0.00%</td>
        </tr>
        <tr class="odd">
            <th class="name">revoke all</th>
            <td class="value">0  </td>
            <td class="value">0.00  </td>

            <td class="value">0.00%</td>
        </tr>
        <tr class="even">
            <th class="name">rollback</th>
            <td class="value">0  </td>
            <td class="value">0.00  </td>
            <td class="value">0.00%</td>

        </tr>
        <tr class="odd">
            <th class="name">savepoint</th>
            <td class="value">0  </td>
            <td class="value">0.00  </td>
            <td class="value">0.00%</td>
        </tr>

        <tr class="even">
            <th class="name">select</th>
            <td class="value">722 k</td>
            <td class="value">2.97 k</td>
            <td class="value">70.62%</td>
        </tr>
        <tr class="odd">

            <th class="name">set option</th>
            <td class="value">570  </td>
            <td class="value">2.34  </td>
            <td class="value">0.06%</td>
        </tr>
        <tr class="even">
            <th class="name">show binlog events</th>

            <td class="value">3  </td>
            <td class="value">0.01  </td>
            <td class="value">0.00%</td>
        </tr>
        <tr class="odd">
            <th class="name">show binlogs</th>
            <td class="value">107  </td>

            <td class="value">0.44  </td>
            <td class="value">0.01%</td>
        </tr>
        <tr class="even">
            <th class="name">show charsets</th>
            <td class="value">146  </td>
            <td class="value">0.60  </td>

            <td class="value">0.01%</td>
        </tr>
        <tr class="odd">
            <th class="name">show collations</th>
            <td class="value">146  </td>
            <td class="value">0.60  </td>
            <td class="value">0.01%</td>

        </tr>
        <tr class="even">
            <th class="name">show column types</th>
            <td class="value">0  </td>
            <td class="value">0.00  </td>
            <td class="value">0.00%</td>
        </tr>

        <tr class="odd">
            <th class="name">show create db</th>
            <td class="value">0  </td>
            <td class="value">0.00  </td>
            <td class="value">0.00%</td>
        </tr>
        <tr class="even">

            <th class="name">show create table</th>
            <td class="value">0  </td>
            <td class="value">0.00  </td>
            <td class="value">0.00%</td>
        </tr>
        <tr class="odd">
            <th class="name">show databases</th>

            <td class="value">28  </td>
            <td class="value">0.12  </td>
            <td class="value">0.00%</td>
        </tr>
        <tr class="even">
            <th class="name">show errors</th>
            <td class="value">0  </td>

            <td class="value">0.00  </td>
            <td class="value">0.00%</td>
        </tr>
        <tr class="odd">
            <th class="name">show fields</th>
            <td class="value">9  </td>
            <td class="value">0.04  </td>

            <td class="value">0.00%</td>
        </tr>
        <tr class="even">
            <th class="name">show grants</th>
            <td class="value">56  </td>
            <td class="value">0.23  </td>
            <td class="value">0.01%</td>

        </tr>
        <tr class="odd">
            <th class="name">show innodb status</th>
            <td class="value">0  </td>
            <td class="value">0.00  </td>
            <td class="value">0.00%</td>
        </tr>

        <tr class="even">
            <th class="name">show keys</th>
            <td class="value">0  </td>
            <td class="value">0.00  </td>
            <td class="value">0.00%</td>
        </tr>
        <tr class="odd">

            <th class="name">show logs</th>
            <td class="value">0  </td>
            <td class="value">0.00  </td>
            <td class="value">0.00%</td>
        </tr>
        <tr class="even">
            <th class="name">show master status</th>

            <td class="value">0  </td>
            <td class="value">0.00  </td>
            <td class="value">0.00%</td>
        </tr>
        <tr class="odd">
            <th class="name">show new master</th>
            <td class="value">0  </td>

            <td class="value">0.00  </td>
            <td class="value">0.00%</td>
        </tr>
        <tr class="even">
            <th class="name">show open tables</th>
            <td class="value">5  </td>
            <td class="value">0.02  </td>

            <td class="value">0.00%</td>
        </tr>
        <tr class="odd">
            <th class="name">show privileges</th>
            <td class="value">0  </td>
            <td class="value">0.00  </td>
            <td class="value">0.00%</td>

        </tr>
        <tr class="even">
            <th class="name">show processlist</th>
            <td class="value">19  </td>
            <td class="value">0.08  </td>
            <td class="value">0.00%</td>
        </tr>

        <tr class="odd">
            <th class="name">show slave hosts</th>
            <td class="value">2  </td>
            <td class="value">0.01  </td>
            <td class="value">0.00%</td>
        </tr>
        <tr class="even">

            <th class="name">show slave status</th>
            <td class="value">2  </td>
            <td class="value">0.01  </td>
            <td class="value">0.00%</td>
        </tr>
        <tr class="odd">
            <th class="name">show status</th>

            <td class="value">6  </td>
            <td class="value">0.02  </td>
            <td class="value">0.00%</td>
        </tr>
        <tr class="even">
            <th class="name">show storage engines</th>
            <td class="value">18  </td>

            <td class="value">0.07  </td>
            <td class="value">0.00%</td>
        </tr>
        <tr class="odd">
            <th class="name">show tables</th>
            <td class="value">91  </td>
            <td class="value">0.37  </td>

            <td class="value">0.01%</td>
        </tr>
        <tr class="even">
            <th class="name">show variables</th>
            <td class="value">339  </td>
            <td class="value">1.39  </td>
            <td class="value">0.03%</td>

        </tr>
        <tr class="odd">
            <th class="name">show warnings</th>
            <td class="value">0  </td>
            <td class="value">0.00  </td>
            <td class="value">0.00%</td>
        </tr>

        <tr class="even">
            <th class="name">slave start</th>
            <td class="value">0  </td>
            <td class="value">0.00  </td>
            <td class="value">0.00%</td>
        </tr>
        <tr class="odd">

            <th class="name">slave stop</th>
            <td class="value">0  </td>
            <td class="value">0.00  </td>
            <td class="value">0.00%</td>
        </tr>
        <tr class="even">
            <th class="name">stmt prepare</th>

            <td class="value">0  </td>
            <td class="value">0.00  </td>
            <td class="value">0.00%</td>
        </tr>
        <tr class="odd">
            <th class="name">stmt execute</th>
            <td class="value">0  </td>

            <td class="value">0.00  </td>
            <td class="value">0.00%</td>
        </tr>
        <tr class="even">
            <th class="name">stmt send long data</th>
            <td class="value">0  </td>
            <td class="value">0.00  </td>

            <td class="value">0.00%</td>
        </tr>
        <tr class="odd">
            <th class="name">stmt reset</th>
            <td class="value">0  </td>
            <td class="value">0.00  </td>
            <td class="value">0.00%</td>

        </tr>
        <tr class="even">
            <th class="name">stmt close</th>
            <td class="value">0  </td>
            <td class="value">0.00  </td>
            <td class="value">0.00%</td>
        </tr>

        <tr class="odd">
            <th class="name">truncate</th>
            <td class="value">0  </td>
            <td class="value">0.00  </td>
            <td class="value">0.00%</td>
        </tr>
        <tr class="even">

            <th class="name">unlock tables</th>
            <td class="value">0  </td>
            <td class="value">0.00  </td>
            <td class="value">0.00%</td>
        </tr>
        <tr class="odd">
            <th class="name">update</th>

            <td class="value">14 k</td>
            <td class="value">56.04  </td>
            <td class="value">1.33%</td>
        </tr>
        <tr class="even">
            <th class="name">update multi</th>
            <td class="value">0  </td>

            <td class="value">0.00  </td>
            <td class="value">0.00%</td>
        </tr>
    </tbody>
    </table>
</div>

<div id="serverstatussection">
    <table class="data" id="serverstatussectionquery">

    <caption class="tblHeaders">
        <a class="top"
           href="server_status.php?lang=en-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci#_top"
           name="query">Begin            <img src="./themes/original/img/s_asc.png" width="11" height="9" align="middle" alt="" />        </a>
    </caption>
    <col class="namecol" />
    <col class="valuecol" />
    <col class="descrcol" />
    <thead>
        <tr>

            <th>Variable</th>
            <th>Value</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr class="odd">

            <th class="name">Flush_commands</th>
            <td class="value">1  </td>
            <td class="descr">
            The number of executed FLUSH statements.            </td>
        </tr>
        <tr class="even">
            <th class="name">Slow_queries</th>

            <td class="value"><span class="allfine">0  </span></td>
            <td class="descr">
            The number of queries that have taken more than long_query_time seconds. <a href="http://dev.mysql.com/doc/refman/slow-query-log.html">MySQL - Documentation</a>
            </td>
        </tr>
    </tbody>
    </table>

    <table class="data" id="serverstatussectionssl">
    <caption class="tblHeaders">
        <a class="top"
           href="server_status.php?lang=en-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci#_top"
           name="ssl">Begin            <img src="./themes/original/img/s_asc.png" width="11" height="9" align="middle" alt="" />        </a>
SSL    </caption>
    <col class="namecol" />
    <col class="valuecol" />
    <col class="descrcol" />
    <thead>

        <tr>
            <th>Variable</th>
            <th>Value</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>

        <tr class="odd">
            <th class="name">Ssl_accept_renegotiates</th>
            <td class="value">0  </td>
            <td class="descr">
                        </td>
        </tr>
        <tr class="even">
            <th class="name">Ssl_accepts</th>

            <td class="value">0  </td>
            <td class="descr">
                        </td>
        </tr>
        <tr class="odd">
            <th class="name">Ssl_callback_cache_hits</th>
            <td class="value">0  </td>

            <td class="descr">
                        </td>
        </tr>
        <tr class="even">
            <th class="name">Ssl_cipher</th>
            <td class="value"></td>
            <td class="descr">
                        </td>

        </tr>
        <tr class="odd">
            <th class="name">Ssl_cipher_list</th>
            <td class="value"></td>
            <td class="descr">
                        </td>
        </tr>
        <tr class="even">

            <th class="name">Ssl_client_connects</th>
            <td class="value">0  </td>
            <td class="descr">
                        </td>
        </tr>
        <tr class="odd">
            <th class="name">Ssl_connect_renegotiates</th>

            <td class="value">0  </td>
            <td class="descr">
                        </td>
        </tr>
        <tr class="even">
            <th class="name">Ssl_ctx_verify_depth</th>
            <td class="value">0  </td>

            <td class="descr">
                        </td>
        </tr>
        <tr class="odd">
            <th class="name">Ssl_ctx_verify_mode</th>
            <td class="value">0  </td>
            <td class="descr">
                        </td>

        </tr>
        <tr class="even">
            <th class="name">Ssl_default_timeout</th>
            <td class="value">0  </td>
            <td class="descr">
                        </td>
        </tr>
        <tr class="odd">

            <th class="name">Ssl_finished_accepts</th>
            <td class="value">0  </td>
            <td class="descr">
                        </td>
        </tr>
        <tr class="even">
            <th class="name">Ssl_finished_connects</th>

            <td class="value">0  </td>
            <td class="descr">
                        </td>
        </tr>
        <tr class="odd">
            <th class="name">Ssl_session_cache_hits</th>
            <td class="value">0  </td>

            <td class="descr">
                        </td>
        </tr>
        <tr class="even">
            <th class="name">Ssl_session_cache_misses</th>
            <td class="value">0  </td>
            <td class="descr">
                        </td>

        </tr>
        <tr class="odd">
            <th class="name">Ssl_session_cache_mode</th>
            <td class="value">NONE</td>
            <td class="descr">
                        </td>
        </tr>
        <tr class="even">

            <th class="name">Ssl_session_cache_overflows</th>
            <td class="value">0  </td>
            <td class="descr">
                        </td>
        </tr>
        <tr class="odd">
            <th class="name">Ssl_session_cache_size</th>

            <td class="value">0  </td>
            <td class="descr">
                        </td>
        </tr>
        <tr class="even">
            <th class="name">Ssl_session_cache_timeouts</th>
            <td class="value">0  </td>

            <td class="descr">
                        </td>
        </tr>
        <tr class="odd">
            <th class="name">Ssl_sessions_reused</th>
            <td class="value">0  </td>
            <td class="descr">
                        </td>

        </tr>
        <tr class="even">
            <th class="name">Ssl_used_session_cache_entries</th>
            <td class="value">0  </td>
            <td class="descr">
                        </td>
        </tr>
        <tr class="odd">

            <th class="name">Ssl_verify_depth</th>
            <td class="value">0  </td>
            <td class="descr">
                        </td>
        </tr>
        <tr class="even">
            <th class="name">Ssl_verify_mode</th>

            <td class="value">0  </td>
            <td class="descr">
                        </td>
        </tr>
        <tr class="odd">
            <th class="name">Ssl_version</th>
            <td class="value"></td>
            <td class="descr">

                        </td>
        </tr>
    </tbody>
    </table>
    <table class="data" id="serverstatussectionhandler">
    <caption class="tblHeaders">
        <a class="top"
           href="server_status.php?lang=en-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci#_top"
           name="handler">Begin            <img src="./themes/original/img/s_asc.png" width="11" height="9" align="middle" alt="" />        </a>
Handler    </caption>

    <col class="namecol" />
    <col class="valuecol" />
    <col class="descrcol" />
    <thead>
        <tr>
            <th>Variable</th>
            <th>Value</th>
            <th>Description</th>

        </tr>
    </thead>
    <tbody>
        <tr class="odd">
            <th class="name">Handler_commit</th>
            <td class="value">0  </td>
            <td class="descr">
            The number of internal COMMIT statements.            </td>

        </tr>
        <tr class="even">
            <th class="name">Handler_delete</th>
            <td class="value">223 k</td>
            <td class="descr">
            The number of times a row was deleted from a table.            </td>
        </tr>

        <tr class="odd">
            <th class="name">Handler_discover</th>
            <td class="value">0  </td>
            <td class="descr">
            The MySQL server can ask the NDB Cluster storage engine if it knows about a table with a given name. This is called discovery. Handler_discover indicates the number of time tables have been discovered.            </td>
        </tr>
        <tr class="even">

            <th class="name">Handler_read_first</th>
            <td class="value">5 k</td>
            <td class="descr">
            The number of times the first entry was read from an index. If this is high, it suggests that the server is doing a lot of full index scans; for example, SELECT col1 FROM foo, assuming that col1 is indexed.            </td>
        </tr>
        <tr class="odd">
            <th class="name">Handler_read_key</th>

            <td class="value">629 k</td>
            <td class="descr">
            The number of requests to read a row based on a key. If this is high, it is a good indication that your queries and tables are properly indexed.            </td>
        </tr>
        <tr class="even">
            <th class="name">Handler_read_next</th>
            <td class="value">6 M</td>

            <td class="descr">
            The number of requests to read the next row in key order. This is incremented if you are querying an index column with a range constraint or if you are doing an index scan.            </td>
        </tr>
        <tr class="odd">
            <th class="name">Handler_read_prev</th>
            <td class="value">0  </td>
            <td class="descr">

            The number of requests to read the previous row in key order. This read method is mainly used to optimize ORDER BY ... DESC.            </td>
        </tr>
        <tr class="even">
            <th class="name">Handler_read_rnd</th>
            <td class="value"><span class="attention">150 k</span></td>
            <td class="descr">
            The number of requests to read a row based on a fixed position. This is high if you are doing a lot of queries that require sorting of the result. You probably have a lot of queries that require MySQL to scan whole tables or you have joins that don\'t use keys properly.            </td>

        </tr>
        <tr class="odd">
            <th class="name">Handler_read_rnd_next</th>
            <td class="value"><span class="attention">2 M</span></td>
            <td class="descr">
            The number of requests to read the next row in the data file. This is high if you are doing a lot of table scans. Generally this suggests that your tables are not properly indexed or that your queries are not written to take advantage of the indexes you have.            </td>
        </tr>

        <tr class="even">
            <th class="name">Handler_rollback</th>
            <td class="value">0  </td>
            <td class="descr">
            The number of internal ROLLBACK statements.            </td>
        </tr>
        <tr class="odd">

            <th class="name">Handler_update</th>
            <td class="value">24 k</td>
            <td class="descr">
            The number of requests to update a row in a table.            </td>
        </tr>
        <tr class="even">
            <th class="name">Handler_write</th>

            <td class="value">406 k</td>
            <td class="descr">
            The number of requests to insert a row in a table.            </td>
        </tr>
    </tbody>
    </table>
    <table class="data" id="serverstatussectionqcache">
    <caption class="tblHeaders">

        <a class="top"
           href="server_status.php?lang=en-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci#_top"
           name="qcache">Begin            <img src="./themes/original/img/s_asc.png" width="11" height="9" align="middle" alt="" />        </a>
Query cache    </caption>
    <col class="namecol" />
    <col class="valuecol" />
    <col class="descrcol" />
    <thead>
        <tr>
            <th>Variable</th>

            <th>Value</th>
            <th>Description</th>
        </tr>
    </thead>
    <tfoot>
        <tr class="tblFooters">
            <th colspan="3" class="tblFooters">
<a href="server_status.php?flush=QUERY CACHE&amp;lang=en-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci">Flush query cache</a>

<a href="http://dev.mysql.com/doc/refman/query-cache.html">MySQL - Documentation</a>
            </th>
        </tr>
    </tfoot>
    <tbody>
        <tr class="odd">
            <th class="name">Qcache_free_blocks</th>
            <td class="value">0  </td>

            <td class="descr">
            The number of free memory blocks in query cache.            </td>
        </tr>
        <tr class="even">
            <th class="name">Qcache_free_memory</th>
            <td class="value">0  </td>
            <td class="descr">

            The amount of free memory for query cache.            </td>
        </tr>
        <tr class="odd">
            <th class="name">Qcache_hits</th>
            <td class="value">0  </td>
            <td class="descr">
            The number of cache hits.            </td>

        </tr>
        <tr class="even">
            <th class="name">Qcache_inserts</th>
            <td class="value">0  </td>
            <td class="descr">
            The number of queries added to the cache.            </td>
        </tr>

        <tr class="odd">
            <th class="name">Qcache_lowmem_prunes</th>
            <td class="value"><span class="allfine">0  </span></td>
            <td class="descr">
            The number of queries that have been removed from the cache to free up memory for caching new queries. This information can help you tune the query cache size. The query cache uses a least recently used (LRU) strategy to decide which queries to remove from the cache.            </td>
        </tr>
        <tr class="even">

            <th class="name">Qcache_not_cached</th>
            <td class="value">0  </td>
            <td class="descr">
            The number of non-cached queries (not cachable, or not cached due to the query_cache_type setting).            </td>
        </tr>
        <tr class="odd">
            <th class="name">Qcache_queries_in_cache</th>

            <td class="value">0  </td>
            <td class="descr">
            The number of queries registered in the cache.            </td>
        </tr>
        <tr class="even">
            <th class="name">Qcache_total_blocks</th>
            <td class="value">0  </td>

            <td class="descr">
            The total number of blocks in the query cache.            </td>
        </tr>
    </tbody>
    </table>
    <table class="data" id="serverstatussectionthreads">
    <caption class="tblHeaders">
        <a class="top"
           href="server_status.php?lang=en-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci#_top"
           name="threads">Begin            <img src="./themes/original/img/s_asc.png" width="11" height="9" align="middle" alt="" />        </a>

Threads    </caption>
    <col class="namecol" />
    <col class="valuecol" />
    <col class="descrcol" />
    <thead>
        <tr>
            <th>Variable</th>
            <th>Value</th>

            <th>Description</th>
        </tr>
    </thead>
    <tfoot>
        <tr class="tblFooters">
            <th colspan="3" class="tblFooters">
<a href="server_processlist.php?lang=en-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci">Show processes</a>
<a href="http://dev.mysql.com/doc/refman/mysql-threads.html">MySQL - Documentation</a>

            </th>
        </tr>
    </tfoot>
    <tbody>
        <tr class="odd">
            <th class="name">Slow_launch_threads</th>
            <td class="value"><span class="attention">1  </span></td>
            <td class="descr">

            The number of threads that have taken more than slow_launch_time seconds to create.            </td>
        </tr>
        <tr class="even">
            <th class="name">Threads_cached</th>
            <td class="value"><span class="allfine">0  </span></td>
            <td class="descr">
            The number of threads in the thread cache. The cache hit rate can be calculated as Threads_created/Connections. If this value is red you should raise your thread_cache_size.            </td>

        </tr>
        <tr class="odd">
            <th class="name">Threads_connected</th>
            <td class="value">3  </td>
            <td class="descr">
            The number of currently open connections.            </td>
        </tr>

        <tr class="even">
            <th class="name">Threads_created</th>
            <td class="value">352  </td>
            <td class="descr">
            The number of threads created to handle connections. If Threads_created is big, you may want to increase the thread_cache_size value. (Normally this doesn\'t give a notable performance improvement if you have a good thread implementation.)            </td>
        </tr>
        <tr class="odd">

            <th class="name">Threads_running</th>
            <td class="value">1  </td>
            <td class="descr">
            The number of threads that are not sleeping.            </td>
        </tr>
        <tr class="even">
            <th class="name">Threads_cache_hitrate_%</th>

            <td class="value">0.28 %</td>
            <td class="descr">
                        </td>
        </tr>
    </tbody>
    </table>
    <table class="data" id="serverstatussectionbinlog_cache">
    <caption class="tblHeaders">

        <a class="top"
           href="server_status.php?lang=en-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci#_top"
           name="binlog_cache">Begin            <img src="./themes/original/img/s_asc.png" width="11" height="9" align="middle" alt="" />        </a>
Binary log    </caption>
    <col class="namecol" />
    <col class="valuecol" />
    <col class="descrcol" />
    <thead>
        <tr>
            <th>Variable</th>

            <th>Value</th>
            <th>Description</th>
        </tr>
    </thead>
    <tfoot>
        <tr class="tblFooters">
            <th colspan="3" class="tblFooters">
<a href="http://dev.mysql.com/doc/refman/binary-log.html">MySQL - Documentation</a>

            </th>
        </tr>
    </tfoot>
    <tbody>
        <tr class="odd">
            <th class="name">Binlog_cache_disk_use</th>
            <td class="value"><span class="allfine">0  </span></td>
            <td class="descr">

            The number of transactions that used the temporary binary log cache but that exceeded the value of binlog_cache_size and used a temporary file to store statements from the transaction.            </td>
        </tr>
        <tr class="even">
            <th class="name">Binlog_cache_use</th>
            <td class="value">0  </td>
            <td class="descr">
            The number of transactions that used the temporary binary log cache.            </td>

        </tr>
    </tbody>
    </table>
    <table class="data" id="serverstatussectioncreated_tmp">
    <caption class="tblHeaders">
        <a class="top"
           href="server_status.php?lang=en-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci#_top"
           name="created_tmp">Begin            <img src="./themes/original/img/s_asc.png" width="11" height="9" align="middle" alt="" />        </a>
Temporary data    </caption>
    <col class="namecol" />

    <col class="valuecol" />
    <col class="descrcol" />
    <thead>
        <tr>
            <th>Variable</th>
            <th>Value</th>
            <th>Description</th>

        </tr>
    </thead>
    <tbody>
        <tr class="odd">
            <th class="name">Created_tmp_disk_tables</th>
            <td class="value"><span class="attention">4 k</span></td>
            <td class="descr">
            The number of temporary tables on disk created automatically by the server while executing statements. If Created_tmp_disk_tables is big, you may want to increase the tmp_table_size  value to cause temporary tables to be memory-based instead of disk-based.            </td>

        </tr>
        <tr class="even">
            <th class="name">Created_tmp_files</th>
            <td class="value">3  </td>
            <td class="descr">
            How many temporary files mysqld has created.            </td>
        </tr>

        <tr class="odd">
            <th class="name">Created_tmp_tables</th>
            <td class="value">5 k</td>
            <td class="descr">
            The number of in-memory temporary tables created automatically by the server while executing statements.            </td>
        </tr>
    </tbody>

    </table>
    <table class="data" id="serverstatussectiondelayed">
    <caption class="tblHeaders">
        <a class="top"
           href="server_status.php?lang=en-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci#_top"
           name="delayed">Begin            <img src="./themes/original/img/s_asc.png" width="11" height="9" align="middle" alt="" />        </a>
Delayed inserts    </caption>
    <col class="namecol" />
    <col class="valuecol" />
    <col class="descrcol" />

    <thead>
        <tr>
            <th>Variable</th>
            <th>Value</th>
            <th>Description</th>
        </tr>
    </thead>

    <tbody>
        <tr class="odd">
            <th class="name">Delayed_errors</th>
            <td class="value"><span class="allfine">0  </span></td>
            <td class="descr">
            The number of rows written with INSERT DELAYED for which some error occurred (probably duplicate key).            </td>
        </tr>

        <tr class="even">
            <th class="name">Delayed_insert_threads</th>
            <td class="value">0  </td>
            <td class="descr">
            The number of INSERT DELAYED handler threads in use. Every different table on which one uses INSERT DELAYED gets its own thread.            </td>
        </tr>
        <tr class="odd">

            <th class="name">Delayed_writes</th>
            <td class="value">0  </td>
            <td class="descr">
            The number of INSERT DELAYED rows written.            </td>
        </tr>
        <tr class="even">
            <th class="name">Not_flushed_delayed_rows</th>

            <td class="value">0  </td>
            <td class="descr">
            The number of rows waiting to be written in INSERT DELAY queues.            </td>
        </tr>
    </tbody>
    </table>
    <table class="data" id="serverstatussectionkey">
    <caption class="tblHeaders">

        <a class="top"
           href="server_status.php?lang=en-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci#_top"
           name="key">Begin            <img src="./themes/original/img/s_asc.png" width="11" height="9" align="middle" alt="" />        </a>
Key cache    </caption>
    <col class="namecol" />
    <col class="valuecol" />
    <col class="descrcol" />
    <thead>
        <tr>
            <th>Variable</th>

            <th>Value</th>
            <th>Description</th>
        </tr>
    </thead>
    <tfoot>
        <tr class="tblFooters">
            <th colspan="3" class="tblFooters">
<a href="http://dev.mysql.com/doc/refman/myisam-key-cache.html">MySQL - Documentation</a>

            </th>
        </tr>
    </tfoot>
    <tbody>
        <tr class="odd">
            <th class="name">Key_blocks_not_flushed</th>
            <td class="value">0  </td>
            <td class="descr">

            The number of key blocks in the key cache that have changed but haven\'t yet been flushed to disk. It used to be known as Not_flushed_key_blocks.            </td>
        </tr>
        <tr class="even">
            <th class="name">Key_blocks_unused</th>
            <td class="value">14 k</td>
            <td class="descr">
            The number of unused blocks in the key cache. You can use this value to determine how much of the key cache is in use.            </td>

        </tr>
        <tr class="odd">
            <th class="name">Key_blocks_used</th>
            <td class="value">9 k</td>
            <td class="descr">
            The number of used blocks in the key cache. This value is a high-water mark that indicates the maximum number of blocks that have ever been in use at one time.            </td>
        </tr>

        <tr class="even">
            <th class="name">Key_read_requests</th>
            <td class="value">9 M</td>
            <td class="descr">
            The number of requests to read a key block from the cache.            </td>
        </tr>
        <tr class="odd">

            <th class="name">Key_reads</th>
            <td class="value"><span class="allfine">13 k</span></td>
            <td class="descr">
            The number of physical reads of a key block from disk. If Key_reads is big, then your key_buffer_size value is probably too small. The cache miss rate can be calculated as Key_reads/Key_read_requests.            </td>
        </tr>
        <tr class="even">
            <th class="name">Key_write_requests</th>

            <td class="value">809 k</td>
            <td class="descr">
            The number of requests to write a key block to the cache.            </td>
        </tr>
        <tr class="odd">
            <th class="name">Key_writes</th>
            <td class="value"><span class="allfine">472 k</span></td>

            <td class="descr">
            The number of physical writes of a key block to disk.            </td>
        </tr>
        <tr class="even">
            <th class="name">Key_buffer_fraction_%</th>
            <td class="value">11.60 %</td>
            <td class="descr">

                        </td>
        </tr>
    </tbody>
    </table>
    <table class="data" id="serverstatussectionselect">
    <caption class="tblHeaders">
        <a class="top"
           href="server_status.php?lang=en-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci#_top"
           name="select">Begin            <img src="./themes/original/img/s_asc.png" width="11" height="9" align="middle" alt="" />        </a>
Joins    </caption>

    <col class="namecol" />
    <col class="valuecol" />
    <col class="descrcol" />
    <thead>
        <tr>
            <th>Variable</th>
            <th>Value</th>
            <th>Description</th>

        </tr>
    </thead>
    <tbody>
        <tr class="odd">
            <th class="name">Select_full_join</th>
            <td class="value"><span class="attention">148  </span></td>
            <td class="descr">
            The number of joins that do not use indexes. If this value is not 0, you should carefully check the indexes of your tables.            </td>

        </tr>
        <tr class="even">
            <th class="name">Select_full_range_join</th>
            <td class="value">0  </td>
            <td class="descr">
            The number of joins that used a range search on a reference table.            </td>
        </tr>

        <tr class="odd">
            <th class="name">Select_range</th>
            <td class="value">13 k</td>
            <td class="descr">
            The number of joins that used ranges on the first table. (It\'s normally not critical even if this is big.)            </td>
        </tr>
        <tr class="even">

            <th class="name">Select_range_check</th>
            <td class="value"><span class="allfine">0  </span></td>
            <td class="descr">
            The number of joins without keys that check for key usage after each row. (If this is not 0, you should carefully check the indexes of your tables.)            </td>
        </tr>
        <tr class="odd">
            <th class="name">Select_scan</th>

            <td class="value">20 k</td>
            <td class="descr">
            The number of joins that did a full scan of the first table.            </td>
        </tr>
    </tbody>
    </table>
    <table class="data" id="serverstatussectionrepl">
    <caption class="tblHeaders">

        <a class="top"
           href="server_status.php?lang=en-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci#_top"
           name="repl">Begin            <img src="./themes/original/img/s_asc.png" width="11" height="9" align="middle" alt="" />        </a>
Replication    </caption>
    <col class="namecol" />
    <col class="valuecol" />
    <col class="descrcol" />
    <thead>
        <tr>
            <th>Variable</th>

            <th>Value</th>
            <th>Description</th>
        </tr>
    </thead>
    <tfoot>
        <tr class="tblFooters">
            <th colspan="3" class="tblFooters">
<a href="sql.php?sql_query=SHOW+SLAVE+HOSTS&amp;goto=server_status.php&amp;lang=en-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci">Show slave hosts</a>

<a href="sql.php?sql_query=SHOW+SLAVE+STATUS&amp;goto=server_status.php&amp;lang=en-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci">Show slave status</a>
<a href="http://dev.mysql.com/doc/refman/replication.html">MySQL - Documentation</a>
            </th>
        </tr>
    </tfoot>
    <tbody>
        <tr class="odd">
            <th class="name">Rpl_status</th>

            <td class="value">NULL</td>
            <td class="descr">
            The status of failsafe replication (not yet implemented).            </td>
        </tr>
        <tr class="even">
            <th class="name">Slave_open_temp_tables</th>
            <td class="value">0  </td>

            <td class="descr">
            The number of temporary tables currently open by the slave SQL thread.            </td>
        </tr>
        <tr class="odd">
            <th class="name">Slave_running</th>
            <td class="value">OFF</td>
            <td class="descr">

            This is ON if this server is a slave that is connected to a master.            </td>
        </tr>
        <tr class="even">
            <th class="name">Slave_retried_transactions</th>
            <td class="value">0  </td>
            <td class="descr">
            Total (since startup) number of times the replication slave SQL thread has retried transactions.            </td>

        </tr>
    </tbody>
    </table>
    <table class="data" id="serverstatussectionsort">
    <caption class="tblHeaders">
        <a class="top"
           href="server_status.php?lang=en-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci#_top"
           name="sort">Begin            <img src="./themes/original/img/s_asc.png" width="11" height="9" align="middle" alt="" />        </a>
Sorting    </caption>
    <col class="namecol" />

    <col class="valuecol" />
    <col class="descrcol" />
    <thead>
        <tr>
            <th>Variable</th>
            <th>Value</th>
            <th>Description</th>

        </tr>
    </thead>
    <tbody>
        <tr class="odd">
            <th class="name">Sort_merge_passes</th>
            <td class="value"><span class="allfine">0  </span></td>
            <td class="descr">
            The number of merge passes the sort algorithm has had to do. If this value is large, you should consider increasing the value of the sort_buffer_size system variable.            </td>

        </tr>
        <tr class="even">
            <th class="name">Sort_range</th>
            <td class="value">2 k</td>
            <td class="descr">
            The number of sorts that were done with ranges.            </td>
        </tr>

        <tr class="odd">
            <th class="name">Sort_rows</th>
            <td class="value">211 k</td>
            <td class="descr">
            The number of sorted rows.            </td>
        </tr>
        <tr class="even">

            <th class="name">Sort_scan</th>
            <td class="value">22 k</td>
            <td class="descr">
            The number of sorts that were done by scanning the table.            </td>
        </tr>
    </tbody>
    </table>

    <table class="data" id="serverstatussectiontable">
    <caption class="tblHeaders">
        <a class="top"
           href="server_status.php?lang=en-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci#_top"
           name="table">Begin            <img src="./themes/original/img/s_asc.png" width="11" height="9" align="middle" alt="" />        </a>
Tables    </caption>
    <col class="namecol" />
    <col class="valuecol" />
    <col class="descrcol" />
    <thead>

        <tr>
            <th>Variable</th>
            <th>Value</th>
            <th>Description</th>
        </tr>
    </thead>
    <tfoot>

        <tr class="tblFooters">
            <th colspan="3" class="tblFooters">
<a href="server_status.php?flush=TABLES&amp;lang=en-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci">Flush (close) all tables</a>
<a href="sql.php?sql_query=SHOW+OPEN+TABLES&amp;goto=server_status.php&amp;lang=en-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci">Show open tables</a>
            </th>
        </tr>
    </tfoot>
    <tbody>
        <tr class="odd">

            <th class="name">Open_tables</th>
            <td class="value">64  </td>
            <td class="descr">
            The number of tables that are open.            </td>
        </tr>
        <tr class="even">
            <th class="name">Opened_tables</th>

            <td class="value"><span class="attention">311  </span></td>
            <td class="descr">
            The number of tables that have been opened. If opened tables is big, your table cache value is probably too small.            </td>
        </tr>
        <tr class="odd">
            <th class="name">Table_locks_immediate</th>
            <td class="value">724 k</td>

            <td class="descr">
            The number of times that a table lock was acquired immediately.            </td>
        </tr>
        <tr class="even">
            <th class="name">Table_locks_waited</th>
            <td class="value"><span class="attention">83  </span></td>
            <td class="descr">

            The number of times that a table lock could not be acquired immediately and a wait was needed. If this is high, and you have performance problems, you should first optimize your queries, and then either split your table or tables or use replication.            </td>
        </tr>
    </tbody>
    </table>
    <table class="data" id="serverstatussectionall">
    <caption class="tblHeaders">
        <a class="top"
           href="server_status.php?lang=en-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci#_top"
           name="all">Begin            <img src="./themes/original/img/s_asc.png" width="11" height="9" align="middle" alt="" />        </a>

    </caption>
    <col class="namecol" />
    <col class="valuecol" />
    <col class="descrcol" />
    <thead>
        <tr>
            <th>Variable</th>
            <th>Value</th>

            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr class="odd">
            <th class="name">Open_files</th>
            <td class="value">130  </td>

            <td class="descr">
            The number of files that are open.            </td>
        </tr>
        <tr class="even">
            <th class="name">Open_streams</th>
            <td class="value">0  </td>
            <td class="descr">

            The number of streams that are open (used mainly for logging).            </td>
        </tr>
    </tbody>
    </table>
</div>
</div>
<script type="text/javascript">
//<![CDATA[
        window.parent.reload_querywindow(
        "",
        "",
        "" );
        //]]>
</script>
    </body>
</html>';

?>
