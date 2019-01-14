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
logbymail($mailaddr,$modulename,$_SERVER['PHP_SELF'],"main");

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
        <img id="pmalogoright" src="./themes/original/img/logo_right.png"
        alt="phpMyAdmin" />
    <h1>
Welcome to <bdo dir="ltr" xml:lang="en">phpMyAdmin 2.7.0-pl1</bdo></h1>
    <p><strong>MySQL <bdo dir="ltr" xml:lang="en">4.1.14-log</bdo> running on Server1 as root@localhost</strong></p>
<hr class="clearfloat" />

 
<table>
<tr><td valign="top">
<table cellpadding="3" cellspacing="0">
<tr><th class="tblHeaders" colspan="2" xml:lang="en" dir="ltr">MySQL</th></tr>
<tr>
        <td width="16" valign="top" ><img class="icon" src="./themes/original/img/b_newdb.png"  width="16" height="16" alt="Create new database" /></td>    <td valign="top">
                <form method="post" action="db_create.php"><b>
            <label for="text_create_db">Create new database</label>&nbsp;<a href="http://dev.mysql.com/doc/refman/4.1/en/create-database.html" target="mysql_doc"><img class="icon" src="./themes/original/img/b_help.png" width="11" height="11" alt="Documentation" title="Documentation" /></a></b><br />
                                <input type="hidden" name="lang" value="en-utf-8" />
                    <input type="hidden" name="server" value="1" />
                    <input type="hidden" name="collation_connection" value="utf8_general_ci" />
            <input type="hidden" name="reload" value="1" />
            <input type="text" name="db" value="" maxlength="64" class="textfield" id="text_create_db"/>
                                <select xml:lang="en" dir="ltr" name="db_collation">
                        <option value="">Collation</option>
                        <option value=""></option>
                        <optgroup label="armscii8" title="ARMSCII-8 Armenian">
                            <option value="armscii8_bin" title="Armenian, Binary">armscii8_bin</option>
                            <option value="armscii8_general_ci" title="Armenian, case-insensitive">armscii8_general_ci</option>
                        </optgroup>
                        <optgroup label="ascii" title="US ASCII">
                            <option value="ascii_bin" title="West European (multilingual), Binary">ascii_bin</option>
                            <option value="ascii_general_ci" title="West European (multilingual), case-insensitive">ascii_general_ci</option>
                        </optgroup>
                        <optgroup label="big5" title="Big5 Traditional Chinese">
                            <option value="big5_bin" title="Traditional Chinese, Binary">big5_bin</option>
                            <option value="big5_chinese_ci" title="Traditional Chinese, case-insensitive">big5_chinese_ci</option>
                        </optgroup>
                        <optgroup label="binary" title="Binary pseudo charset">
                            <option value="binary" title="Binary">binary</option>
                        </optgroup>
                        <optgroup label="cp1250" title="Windows Central European">
                            <option value="cp1250_bin" title="Central European (multilingual), Binary">cp1250_bin</option>
                            <option value="cp1250_croatian_ci" title="Croatian, case-insensitive">cp1250_croatian_ci</option>
                            <option value="cp1250_czech_cs" title="Czech, case-sensitive">cp1250_czech_cs</option>
                            <option value="cp1250_general_ci" title="Central European (multilingual), case-insensitive">cp1250_general_ci</option>
                        </optgroup>
                        <optgroup label="cp1251" title="Windows Cyrillic">
                            <option value="cp1251_bin" title="Cyrillic (multilingual), Binary">cp1251_bin</option>
                            <option value="cp1251_bulgarian_ci" title="Bulgarian, case-insensitive">cp1251_bulgarian_ci</option>
                            <option value="cp1251_general_ci" title="Cyrillic (multilingual), case-insensitive">cp1251_general_ci</option>
                            <option value="cp1251_general_cs" title="Cyrillic (multilingual), case-sensitive">cp1251_general_cs</option>
                            <option value="cp1251_ukrainian_ci" title="Ukrainian, case-insensitive">cp1251_ukrainian_ci</option>
                        </optgroup>
                        <optgroup label="cp1256" title="Windows Arabic">
                            <option value="cp1256_bin" title="Arabic, Binary">cp1256_bin</option>
                            <option value="cp1256_general_ci" title="Arabic, case-insensitive">cp1256_general_ci</option>
                        </optgroup>
                        <optgroup label="cp1257" title="Windows Baltic">
                            <option value="cp1257_bin" title="Baltic (multilingual), Binary">cp1257_bin</option>
                            <option value="cp1257_general_ci" title="Baltic (multilingual), case-insensitive">cp1257_general_ci</option>
                            <option value="cp1257_lithuanian_ci" title="Lithuanian, case-insensitive">cp1257_lithuanian_ci</option>
                        </optgroup>
                        <optgroup label="cp850" title="DOS West European">
                            <option value="cp850_bin" title="West European (multilingual), Binary">cp850_bin</option>
                            <option value="cp850_general_ci" title="West European (multilingual), case-insensitive">cp850_general_ci</option>
                        </optgroup>
                        <optgroup label="cp852" title="DOS Central European">
                            <option value="cp852_bin" title="Central European (multilingual), Binary">cp852_bin</option>
                            <option value="cp852_general_ci" title="Central European (multilingual), case-insensitive">cp852_general_ci</option>
                        </optgroup>
                        <optgroup label="cp866" title="DOS Russian">
                            <option value="cp866_bin" title="Russian, Binary">cp866_bin</option>
                            <option value="cp866_general_ci" title="Russian, case-insensitive">cp866_general_ci</option>
                        </optgroup>
                        <optgroup label="cp932" title="SJIS for Windows Japanese">
                            <option value="cp932_bin" title="Japanese, Binary">cp932_bin</option>
                            <option value="cp932_japanese_ci" title="Japanese, case-insensitive">cp932_japanese_ci</option>
                        </optgroup>
                        <optgroup label="dec8" title="DEC West European">
                            <option value="dec8_bin" title="West European (multilingual), Binary">dec8_bin</option>
                            <option value="dec8_swedish_ci" title="Swedish, case-insensitive">dec8_swedish_ci</option>
                        </optgroup>
                        <optgroup label="euckr" title="EUC-KR Korean">
                            <option value="euckr_bin" title="Korean, Binary">euckr_bin</option>
                            <option value="euckr_korean_ci" title="Korean, case-insensitive">euckr_korean_ci</option>
                        </optgroup>
                        <optgroup label="gb2312" title="GB2312 Simplified Chinese">
                            <option value="gb2312_bin" title="Simplified Chinese, Binary">gb2312_bin</option>
                            <option value="gb2312_chinese_ci" title="Simplified Chinese, case-insensitive">gb2312_chinese_ci</option>
                        </optgroup>
                        <optgroup label="gbk" title="GBK Simplified Chinese">
                            <option value="gbk_bin" title="Simplified Chinese, Binary">gbk_bin</option>
                            <option value="gbk_chinese_ci" title="Simplified Chinese, case-insensitive">gbk_chinese_ci</option>
                        </optgroup>
                        <optgroup label="geostd8" title="GEOSTD8 Georgian">
                            <option value="geostd8_bin" title="Georgian, Binary">geostd8_bin</option>
                            <option value="geostd8_general_ci" title="Georgian, case-insensitive">geostd8_general_ci</option>
                        </optgroup>
                        <optgroup label="greek" title="ISO 8859-7 Greek">
                            <option value="greek_bin" title="Greek, Binary">greek_bin</option>
                            <option value="greek_general_ci" title="Greek, case-insensitive">greek_general_ci</option>
                        </optgroup>
                        <optgroup label="hebrew" title="ISO 8859-8 Hebrew">
                            <option value="hebrew_bin" title="Hebrew, Binary">hebrew_bin</option>
                            <option value="hebrew_general_ci" title="Hebrew, case-insensitive">hebrew_general_ci</option>
                        </optgroup>
                        <optgroup label="hp8" title="HP West European">
                            <option value="hp8_bin" title="West European (multilingual), Binary">hp8_bin</option>
                            <option value="hp8_english_ci" title="English, case-insensitive">hp8_english_ci</option>
                        </optgroup>
                        <optgroup label="keybcs2" title="DOS Kamenicky Czech-Slovak">
                            <option value="keybcs2_bin" title="Czech-Slovak, Binary">keybcs2_bin</option>
                            <option value="keybcs2_general_ci" title="Czech-Slovak, case-insensitive">keybcs2_general_ci</option>
                        </optgroup>
                        <optgroup label="koi8r" title="KOI8-R Relcom Russian">
                            <option value="koi8r_bin" title="Russian, Binary">koi8r_bin</option>
                            <option value="koi8r_general_ci" title="Russian, case-insensitive">koi8r_general_ci</option>
                        </optgroup>
                        <optgroup label="koi8u" title="KOI8-U Ukrainian">
                            <option value="koi8u_bin" title="Ukrainian, Binary">koi8u_bin</option>
                            <option value="koi8u_general_ci" title="Ukrainian, case-insensitive">koi8u_general_ci</option>
                        </optgroup>
                        <optgroup label="latin1" title="cp1252 West European">
                            <option value="latin1_bin" title="West European (multilingual), Binary">latin1_bin</option>
                            <option value="latin1_danish_ci" title="Danish, case-insensitive">latin1_danish_ci</option>
                            <option value="latin1_general_ci" title="West European (multilingual), case-insensitive">latin1_general_ci</option>
                            <option value="latin1_general_cs" title="West European (multilingual), case-sensitive">latin1_general_cs</option>
                            <option value="latin1_german1_ci" title="German (dictionary), case-insensitive">latin1_german1_ci</option>
                            <option value="latin1_german2_ci" title="German (phone book), case-insensitive">latin1_german2_ci</option>
                            <option value="latin1_spanish_ci" title="Spanish, case-insensitive">latin1_spanish_ci</option>
                            <option value="latin1_swedish_ci" title="Swedish, case-insensitive">latin1_swedish_ci</option>
                        </optgroup>
                        <optgroup label="latin2" title="ISO 8859-2 Central European">
                            <option value="latin2_bin" title="Central European (multilingual), Binary">latin2_bin</option>
                            <option value="latin2_croatian_ci" title="Croatian, case-insensitive">latin2_croatian_ci</option>
                            <option value="latin2_czech_cs" title="Czech, case-sensitive">latin2_czech_cs</option>
                            <option value="latin2_general_ci" title="Central European (multilingual), case-insensitive">latin2_general_ci</option>
                            <option value="latin2_hungarian_ci" title="Hungarian, case-insensitive">latin2_hungarian_ci</option>
                        </optgroup>
                        <optgroup label="latin5" title="ISO 8859-9 Turkish">
                            <option value="latin5_bin" title="Turkish, Binary">latin5_bin</option>
                            <option value="latin5_turkish_ci" title="Turkish, case-insensitive">latin5_turkish_ci</option>
                        </optgroup>
                        <optgroup label="latin7" title="ISO 8859-13 Baltic">
                            <option value="latin7_bin" title="Baltic (multilingual), Binary">latin7_bin</option>
                            <option value="latin7_estonian_cs" title="Estonian, case-sensitive">latin7_estonian_cs</option>
                            <option value="latin7_general_ci" title="Baltic (multilingual), case-insensitive">latin7_general_ci</option>
                            <option value="latin7_general_cs" title="Baltic (multilingual), case-sensitive">latin7_general_cs</option>
                        </optgroup>
                        <optgroup label="macce" title="Mac Central European">
                            <option value="macce_bin" title="Central European (multilingual), Binary">macce_bin</option>
                            <option value="macce_general_ci" title="Central European (multilingual), case-insensitive">macce_general_ci</option>
                        </optgroup>
                        <optgroup label="macroman" title="Mac West European">
                            <option value="macroman_bin" title="West European (multilingual), Binary">macroman_bin</option>
                            <option value="macroman_general_ci" title="West European (multilingual), case-insensitive">macroman_general_ci</option>
                        </optgroup>
                        <optgroup label="sjis" title="Shift-JIS Japanese">
                            <option value="sjis_bin" title="Japanese, Binary">sjis_bin</option>
                            <option value="sjis_japanese_ci" title="Japanese, case-insensitive">sjis_japanese_ci</option>
                        </optgroup>
                        <optgroup label="swe7" title="7bit Swedish">
                            <option value="swe7_bin" title="Swedish, Binary">swe7_bin</option>
                            <option value="swe7_swedish_ci" title="Swedish, case-insensitive">swe7_swedish_ci</option>
                        </optgroup>
                        <optgroup label="tis620" title="TIS620 Thai">
                            <option value="tis620_bin" title="Thai, Binary">tis620_bin</option>
                            <option value="tis620_thai_ci" title="Thai, case-insensitive">tis620_thai_ci</option>
                        </optgroup>
                        <optgroup label="ucs2" title="UCS-2 Unicode">
                            <option value="ucs2_bin" title="Unicode (multilingual), Binary">ucs2_bin</option>
                            <option value="ucs2_czech_ci" title="Czech, case-insensitive">ucs2_czech_ci</option>
                            <option value="ucs2_danish_ci" title="Danish, case-insensitive">ucs2_danish_ci</option>
                            <option value="ucs2_estonian_ci" title="Estonian, case-insensitive">ucs2_estonian_ci</option>
                            <option value="ucs2_general_ci" title="Unicode (multilingual), case-insensitive">ucs2_general_ci</option>
                            <option value="ucs2_icelandic_ci" title="Icelandic, case-insensitive">ucs2_icelandic_ci</option>
                            <option value="ucs2_latvian_ci" title="Latvian, case-insensitive">ucs2_latvian_ci</option>
                            <option value="ucs2_lithuanian_ci" title="Lithuanian, case-insensitive">ucs2_lithuanian_ci</option>
                            <option value="ucs2_persian_ci" title="Persian, case-insensitive">ucs2_persian_ci</option>
                            <option value="ucs2_polish_ci" title="Polish, case-insensitive">ucs2_polish_ci</option>
                            <option value="ucs2_roman_ci" title="West European, case-insensitive">ucs2_roman_ci</option>
                            <option value="ucs2_romanian_ci" title="Romanian, case-insensitive">ucs2_romanian_ci</option>
                            <option value="ucs2_slovak_ci" title="Slovak, case-insensitive">ucs2_slovak_ci</option>
                            <option value="ucs2_slovenian_ci" title="Slovenian, case-insensitive">ucs2_slovenian_ci</option>
                            <option value="ucs2_spanish2_ci" title="Traditional Spanish, case-insensitive">ucs2_spanish2_ci</option>
                            <option value="ucs2_spanish_ci" title="Spanish, case-insensitive">ucs2_spanish_ci</option>
                            <option value="ucs2_swedish_ci" title="Swedish, case-insensitive">ucs2_swedish_ci</option>
                            <option value="ucs2_turkish_ci" title="Turkish, case-insensitive">ucs2_turkish_ci</option>
                            <option value="ucs2_unicode_ci" title="Unicode (multilingual), case-insensitive">ucs2_unicode_ci</option>
                        </optgroup>
                        <optgroup label="ujis" title="EUC-JP Japanese">
                            <option value="ujis_bin" title="Japanese, Binary">ujis_bin</option>
                            <option value="ujis_japanese_ci" title="Japanese, case-insensitive">ujis_japanese_ci</option>
                        </optgroup>
                        <optgroup label="utf8" title="UTF-8 Unicode">
                            <option value="utf8_bin" title="Unicode (multilingual), Binary">utf8_bin</option>
                            <option value="utf8_czech_ci" title="Czech, case-insensitive">utf8_czech_ci</option>
                            <option value="utf8_danish_ci" title="Danish, case-insensitive">utf8_danish_ci</option>
                            <option value="utf8_estonian_ci" title="Estonian, case-insensitive">utf8_estonian_ci</option>
                            <option value="utf8_general_ci" title="Unicode (multilingual), case-insensitive">utf8_general_ci</option>
                            <option value="utf8_icelandic_ci" title="Icelandic, case-insensitive">utf8_icelandic_ci</option>
                            <option value="utf8_latvian_ci" title="Latvian, case-insensitive">utf8_latvian_ci</option>
                            <option value="utf8_lithuanian_ci" title="Lithuanian, case-insensitive">utf8_lithuanian_ci</option>
                            <option value="utf8_persian_ci" title="Persian, case-insensitive">utf8_persian_ci</option>
                            <option value="utf8_polish_ci" title="Polish, case-insensitive">utf8_polish_ci</option>
                            <option value="utf8_roman_ci" title="West European, case-insensitive">utf8_roman_ci</option>
                            <option value="utf8_romanian_ci" title="Romanian, case-insensitive">utf8_romanian_ci</option>
                            <option value="utf8_slovak_ci" title="Slovak, case-insensitive">utf8_slovak_ci</option>
                            <option value="utf8_slovenian_ci" title="Slovenian, case-insensitive">utf8_slovenian_ci</option>
                            <option value="utf8_spanish2_ci" title="Traditional Spanish, case-insensitive">utf8_spanish2_ci</option>
                            <option value="utf8_spanish_ci" title="Spanish, case-insensitive">utf8_spanish_ci</option>
                            <option value="utf8_swedish_ci" title="Swedish, case-insensitive">utf8_swedish_ci</option>
                            <option value="utf8_turkish_ci" title="Turkish, case-insensitive">utf8_turkish_ci</option>
                            <option value="utf8_unicode_ci" title="Unicode (multilingual), case-insensitive">utf8_unicode_ci</option>
                        </optgroup>
                    </select>
            <input type="submit" value="Create" id="buttonGo" />
        </form>
        </td>
</tr>
<tr>
            <td width="16" valign="top" ><a href="./server_status.php?lang=en-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci"><img class="icon" src="./themes/original/img/s_status.png"  width="16" height="16" alt="Show MySQL runtime information" /></a></td>    <td><a href="./server_status.php?lang=en-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci">
            Show MySQL runtime information        </a>
    </td>
</tr>
<tr>        <td width="16" valign="top" ><a href="./main.php?lang=en-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci"><img class="icon" src="./themes/original/img/s_vars.png"  width="16" height="16" alt="Show MySQL system variables" /></a></td>    <td><a href="./main.php?lang=en-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci">
            Show MySQL system variables</a>
            <a href="http://dev.mysql.com/doc/refman/4.1/en/show-variables.html" target="mysql_doc"><img class="icon" src="./themes/original/img/b_help.png" width="11" height="11" alt="Documentation" title="Documentation" /></a>    </td>
</tr>
<tr>    <td width="16" valign="top" ><a href="./main.php?lang=en-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci"><img class="icon" src="./themes/original/img/s_process.png"  width="16" height="16" alt="Show processes" /></a></td>    <td><a href="./main.php?lang=en-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci">
            Show processes</a>
        <a href="http://dev.mysql.com/doc/refman/4.1/en/show-processlist.html" target="mysql_doc"><img class="icon" src="./themes/original/img/b_help.png" width="11" height="11" alt="Documentation" title="Documentation" /></a>    </td>
</tr>
        <tr>        <td width="16" valign="top" ><a href="./main.php?lang=en-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci"><img class="icon" src="./themes/original/img/s_asci.png"  width="16" height="16" alt="Character Sets and Collations" /></a></td>    <td><a href="./main.php?lang=en-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci">
            Character Sets and Collations</a>
    </td>
</tr>
            <tr>    <td width="16" valign="top" ><a href="./main.php?lang=en-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci"><img class="icon" src="./themes/original/img/b_engine.png"  width="16" height="16" alt="Storage Engines" /></a></td>    <td><a href="./main.php?lang=en-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci">
            Storage Engines</a>
    </td>
</tr>
        
<tr>        <td width="16" valign="top" ><a href="main.php?lang=en-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci&amp;mode=reload"><img class="icon" src="./themes/original/img/s_reload.png"  width="16" height="16" alt="Reload MySQL" /></a></td>    <td><a href="main.php?lang=en-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci&amp;mode=reload">
            Reload MySQL</a>
        <a href="http://dev.mysql.com/doc/refman/4.1/en/flush.html" target="mysql_doc"><img class="icon" src="./themes/original/img/b_help.png" width="11" height="11" alt="Documentation" title="Documentation" /></a>
    </td>
</tr>
            <tr>        <td width="16" valign="top" ><a href="main.php?lang=en-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci"><img class="icon" src="./themes/original/img/s_rights.png"  width="16" height="16" alt="Privileges" /></a></td>    <td><a href="main.php?lang=en-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci">
            Privileges</a>
    </td>
</tr>
            <tr>            <td width="16" valign="top" ><a href="main.php?lang=en-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci"><img class="icon" src="./themes/original/img/s_tbl.png"  width="16" height="16" alt="Binary log" /></a></td>    <td><a href="main.php?lang=en-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci">
            Binary log</a>
    </td>
</tr>
                <tr>    <td width="16" valign="top" ><a href="main.php?lang=en-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci"><img class="icon" src="./themes/original/img/s_db.png"  width="16" height="16" alt="Databases" /></a></td>    <td><a href="./main.php?lang=en-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci">
            Databases</a>
    </td>
</tr>
<tr>
        <td width="16" valign="top" ><a href="main.php?lang=en-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci"><img class="icon" src="./themes/original/img/b_export.png"  width="16" height="16" alt="Export" /></a></td>    <td><a href="./main.php?lang=en-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci">
            Export</a>
    </td>
</tr>
<tr>
        <td width="16" valign="top" ><a href="main.php?lang=en-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci"><img class="icon" src="./themes/original/img/b_import.png"  width="16" height="16" alt="Import" /></a></td>    <td><a href="./main.php?lang=en-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci">
            Import</a>
    </td>
</tr>
        </table>
</td>
<td width="20">&nbsp;</td>
<td valign="top">
<table border="0" cellpadding="3" cellspacing="0">
<tr><th class="tblHeaders" colspan="2" xml:lang="en" dir="ltr">phpMyAdmin</th></tr>
<tr><td width="16" valign="top" ><a href="./translators.html" target="documentation"><img class="icon" src="./themes/original/img/s_lang.png"  width="16" height="16" alt="Language" /></a></td>    <td><form method="post" action="index.php" target="_parent">
        <bdo xml:lang="en" dir="ltr">
            <input type="hidden" name="convcharset" value="iso-8859-1" />
            <input type="hidden" name="server" value="1" />
            Language <a href="./translators.html" target="documentation"><img class="icon" src="./themes/original/img/b_info.png" width="11" height="11" alt="Info" /></a>: <select name="lang" onchange="this.form.submit();">
                            <option value="af-utf-8">Afrikaans (af-utf-8)</option>
                        <option value="sq-utf-8">Albanian (sq-utf-8)</option>
                        <option value="ar-utf-8">Arabic (ar-utf-8)</option>
                        <option value="az-utf-8">Azerbaijani (az-utf-8)</option>
                        <option value="eu-utf-8">Basque (eu-utf-8)</option>
                        <option value="becyr-utf-8">Belarusian (becyr-utf-8)</option>
                        <option value="belat-utf-8">Belarusian latin (belat-utf-8)</option>
                        <option value="bs-utf-8">Bosnian (bs-utf-8)</option>
                        <option value="ptbr-utf-8">Brazilian portuguese (ptbr-utf-8)</option>
                        <option value="bg-utf-8">Bulgarian (bg-utf-8)</option>
                        <option value="ca-utf-8">Catalan (ca-utf-8)</option>
                        <option value="zh-utf-8">Chinese simplified (zh-utf-8)</option>
                        <option value="zhtw-utf-8">Chinese traditional (zhtw-utf-8)</option>
                        <option value="hr-utf-8">Croatian (hr-utf-8)</option>
                        <option value="cs-utf-8">Czech (cs-utf-8)</option>
                        <option value="da-utf-8">Danish (da-utf-8)</option>
                        <option value="nl-utf-8">Dutch (nl-utf-8)</option>
                        <option value="en-utf-8" selected="selected">English (en-utf-8)</option>
                        <option value="et-utf-8">Estonian (et-utf-8)</option>
                        <option value="fi-utf-8">Finnish (fi-utf-8)</option>
                        <option value="fr-utf-8">French (fr-utf-8)</option>
                        <option value="gl-utf-8">Galician (gl-utf-8)</option>
                        <option value="ka-utf-8">Georgian (ka-utf-8)</option>
                        <option value="de-utf-8">German (de-utf-8)</option>
                        <option value="el-utf-8">Greek (el-utf-8)</option>
                        <option value="he-utf-8">Hebrew (he-utf-8)</option>
                        <option value="hi-utf-8">Hindi (hi-utf-8)</option>
                        <option value="hu-utf-8">Hungarian (hu-utf-8)</option>
                        <option value="id-utf-8">Indonesian (id-utf-8)</option>
                        <option value="it-utf-8">Italian (it-utf-8)</option>
                        <option value="ja-utf-8">Japanese (ja-utf-8)</option>
                        <option value="ko-utf-8">Korean (ko-utf-8)</option>
                        <option value="lv-utf-8">Latvian (lv-utf-8)</option>
                        <option value="lt-utf-8">Lithuanian (lt-utf-8)</option>
                        <option value="ms-utf-8">Malay (ms-utf-8)</option>
                        <option value="mn-utf-8">Mongolian (mn-utf-8)</option>
                        <option value="no-utf-8">Norwegian (no-utf-8)</option>
                        <option value="fa-utf-8">Persian (fa-utf-8)</option>
                        <option value="pl-utf-8">Polish (pl-utf-8)</option>
                        <option value="pt-utf-8">Portuguese (pt-utf-8)</option>
                        <option value="ro-utf-8">Romanian (ro-utf-8)</option>
                        <option value="ru-utf-8">Russian (ru-utf-8)</option>
                        <option value="srcyr-utf-8">Serbian (srcyr-utf-8)</option>
                        <option value="srlat-utf-8">Serbian latin (srlat-utf-8)</option>
                        <option value="sk-utf-8">Slovak (sk-utf-8)</option>
                        <option value="sl-utf-8">Slovenian (sl-utf-8)</option>
                        <option value="es-utf-8">Spanish (es-utf-8)</option>
                        <option value="sv-utf-8">Swedish (sv-utf-8)</option>
                        <option value="tt-utf-8">Tatarish (tt-utf-8)</option>
                        <option value="th-utf-8">Thai (th-utf-8)</option>
                        <option value="tr-utf-8">Turkish (tr-utf-8)</option>
                        <option value="uk-utf-8">Ukrainian (uk-utf-8)</option>
                </select>
            </bdo>
                <noscript><input type="submit" value="Go" /></noscript>
            </form>
        </td>
    </tr>
        <!-- Charset Info -->
    <tr>
        <td width="16" valign="top" ><img class="icon" src="./themes/original/img/s_asci.png"  width="16" height="16" alt="MySQL charset" /></td>
        <td>
            MySQL charset:             <strong xml:lang="en" dir="ltr">               UTF-8 Unicode
               (utf8)
            </strong>
        </td>
    </tr>
    <!-- MySQL Connection Collation -->
    <tr>
        <td width="16" valign="top" ><img class="icon" src="./themes/original/img/s_asci.png"  width="16" height="16" alt="MySQL connection collation" /></td>
        <td>
            <form method="post" action="index.php" target="_parent">
                <input type="hidden" name="lang" value="en-utf-8" />
                <input type="hidden" name="server" value="1" />
                <label for="select_collation_connection">
                    MySQL connection collation: 
                </label>
                <select xml:lang="en" dir="ltr" name="collation_connection" id="select_collation_connection" onchange="this.form.submit();">
                    <option value="">Collation</option>
                    <option value=""></option>
                    <optgroup label="armscii8" title="ARMSCII-8 Armenian">
                        <option value="armscii8_bin" title="Armenian, Binary">armscii8_bin</option>
                        <option value="armscii8_general_ci" title="Armenian, case-insensitive">armscii8_general_ci</option>
                    </optgroup>
                    <optgroup label="ascii" title="US ASCII">
                        <option value="ascii_bin" title="West European (multilingual), Binary">ascii_bin</option>
                        <option value="ascii_general_ci" title="West European (multilingual), case-insensitive">ascii_general_ci</option>
                    </optgroup>
                    <optgroup label="big5" title="Big5 Traditional Chinese">
                        <option value="big5_bin" title="Traditional Chinese, Binary">big5_bin</option>
                        <option value="big5_chinese_ci" title="Traditional Chinese, case-insensitive">big5_chinese_ci</option>
                    </optgroup>
                    <optgroup label="binary" title="Binary pseudo charset">
                        <option value="binary" title="Binary">binary</option>
                    </optgroup>
                    <optgroup label="cp1250" title="Windows Central European">
                        <option value="cp1250_bin" title="Central European (multilingual), Binary">cp1250_bin</option>
                        <option value="cp1250_croatian_ci" title="Croatian, case-insensitive">cp1250_croatian_ci</option>
                        <option value="cp1250_czech_cs" title="Czech, case-sensitive">cp1250_czech_cs</option>
                        <option value="cp1250_general_ci" title="Central European (multilingual), case-insensitive">cp1250_general_ci</option>
                    </optgroup>
                    <optgroup label="cp1251" title="Windows Cyrillic">
                        <option value="cp1251_bin" title="Cyrillic (multilingual), Binary">cp1251_bin</option>
                        <option value="cp1251_bulgarian_ci" title="Bulgarian, case-insensitive">cp1251_bulgarian_ci</option>
                        <option value="cp1251_general_ci" title="Cyrillic (multilingual), case-insensitive">cp1251_general_ci</option>
                        <option value="cp1251_general_cs" title="Cyrillic (multilingual), case-sensitive">cp1251_general_cs</option>
                        <option value="cp1251_ukrainian_ci" title="Ukrainian, case-insensitive">cp1251_ukrainian_ci</option>
                    </optgroup>
                    <optgroup label="cp1256" title="Windows Arabic">
                        <option value="cp1256_bin" title="Arabic, Binary">cp1256_bin</option>
                        <option value="cp1256_general_ci" title="Arabic, case-insensitive">cp1256_general_ci</option>
                    </optgroup>
                    <optgroup label="cp1257" title="Windows Baltic">
                        <option value="cp1257_bin" title="Baltic (multilingual), Binary">cp1257_bin</option>
                        <option value="cp1257_general_ci" title="Baltic (multilingual), case-insensitive">cp1257_general_ci</option>
                        <option value="cp1257_lithuanian_ci" title="Lithuanian, case-insensitive">cp1257_lithuanian_ci</option>
                    </optgroup>
                    <optgroup label="cp850" title="DOS West European">
                        <option value="cp850_bin" title="West European (multilingual), Binary">cp850_bin</option>
                        <option value="cp850_general_ci" title="West European (multilingual), case-insensitive">cp850_general_ci</option>
                    </optgroup>
                    <optgroup label="cp852" title="DOS Central European">
                        <option value="cp852_bin" title="Central European (multilingual), Binary">cp852_bin</option>
                        <option value="cp852_general_ci" title="Central European (multilingual), case-insensitive">cp852_general_ci</option>
                    </optgroup>
                    <optgroup label="cp866" title="DOS Russian">
                        <option value="cp866_bin" title="Russian, Binary">cp866_bin</option>
                        <option value="cp866_general_ci" title="Russian, case-insensitive">cp866_general_ci</option>
                    </optgroup>
                    <optgroup label="cp932" title="SJIS for Windows Japanese">
                        <option value="cp932_bin" title="Japanese, Binary">cp932_bin</option>
                        <option value="cp932_japanese_ci" title="Japanese, case-insensitive">cp932_japanese_ci</option>
                    </optgroup>
                    <optgroup label="dec8" title="DEC West European">
                        <option value="dec8_bin" title="West European (multilingual), Binary">dec8_bin</option>
                        <option value="dec8_swedish_ci" title="Swedish, case-insensitive">dec8_swedish_ci</option>
                    </optgroup>
                    <optgroup label="euckr" title="EUC-KR Korean">
                        <option value="euckr_bin" title="Korean, Binary">euckr_bin</option>
                        <option value="euckr_korean_ci" title="Korean, case-insensitive">euckr_korean_ci</option>
                    </optgroup>
                    <optgroup label="gb2312" title="GB2312 Simplified Chinese">
                        <option value="gb2312_bin" title="Simplified Chinese, Binary">gb2312_bin</option>
                        <option value="gb2312_chinese_ci" title="Simplified Chinese, case-insensitive">gb2312_chinese_ci</option>
                    </optgroup>
                    <optgroup label="gbk" title="GBK Simplified Chinese">
                        <option value="gbk_bin" title="Simplified Chinese, Binary">gbk_bin</option>
                        <option value="gbk_chinese_ci" title="Simplified Chinese, case-insensitive">gbk_chinese_ci</option>
                    </optgroup>
                    <optgroup label="geostd8" title="GEOSTD8 Georgian">
                        <option value="geostd8_bin" title="Georgian, Binary">geostd8_bin</option>
                        <option value="geostd8_general_ci" title="Georgian, case-insensitive">geostd8_general_ci</option>
                    </optgroup>
                    <optgroup label="greek" title="ISO 8859-7 Greek">
                        <option value="greek_bin" title="Greek, Binary">greek_bin</option>
                        <option value="greek_general_ci" title="Greek, case-insensitive">greek_general_ci</option>
                    </optgroup>
                    <optgroup label="hebrew" title="ISO 8859-8 Hebrew">
                        <option value="hebrew_bin" title="Hebrew, Binary">hebrew_bin</option>
                        <option value="hebrew_general_ci" title="Hebrew, case-insensitive">hebrew_general_ci</option>
                    </optgroup>
                    <optgroup label="hp8" title="HP West European">
                        <option value="hp8_bin" title="West European (multilingual), Binary">hp8_bin</option>
                        <option value="hp8_english_ci" title="English, case-insensitive">hp8_english_ci</option>
                    </optgroup>
                    <optgroup label="keybcs2" title="DOS Kamenicky Czech-Slovak">
                        <option value="keybcs2_bin" title="Czech-Slovak, Binary">keybcs2_bin</option>
                        <option value="keybcs2_general_ci" title="Czech-Slovak, case-insensitive">keybcs2_general_ci</option>
                    </optgroup>
                    <optgroup label="koi8r" title="KOI8-R Relcom Russian">
                        <option value="koi8r_bin" title="Russian, Binary">koi8r_bin</option>
                        <option value="koi8r_general_ci" title="Russian, case-insensitive">koi8r_general_ci</option>
                    </optgroup>
                    <optgroup label="koi8u" title="KOI8-U Ukrainian">
                        <option value="koi8u_bin" title="Ukrainian, Binary">koi8u_bin</option>
                        <option value="koi8u_general_ci" title="Ukrainian, case-insensitive">koi8u_general_ci</option>
                    </optgroup>
                    <optgroup label="latin1" title="cp1252 West European">
                        <option value="latin1_bin" title="West European (multilingual), Binary">latin1_bin</option>
                        <option value="latin1_danish_ci" title="Danish, case-insensitive">latin1_danish_ci</option>
                        <option value="latin1_general_ci" title="West European (multilingual), case-insensitive">latin1_general_ci</option>
                        <option value="latin1_general_cs" title="West European (multilingual), case-sensitive">latin1_general_cs</option>
                        <option value="latin1_german1_ci" title="German (dictionary), case-insensitive">latin1_german1_ci</option>
                        <option value="latin1_german2_ci" title="German (phone book), case-insensitive">latin1_german2_ci</option>
                        <option value="latin1_spanish_ci" title="Spanish, case-insensitive">latin1_spanish_ci</option>
                        <option value="latin1_swedish_ci" title="Swedish, case-insensitive">latin1_swedish_ci</option>
                    </optgroup>
                    <optgroup label="latin2" title="ISO 8859-2 Central European">
                        <option value="latin2_bin" title="Central European (multilingual), Binary">latin2_bin</option>
                        <option value="latin2_croatian_ci" title="Croatian, case-insensitive">latin2_croatian_ci</option>
                        <option value="latin2_czech_cs" title="Czech, case-sensitive">latin2_czech_cs</option>
                        <option value="latin2_general_ci" title="Central European (multilingual), case-insensitive">latin2_general_ci</option>
                        <option value="latin2_hungarian_ci" title="Hungarian, case-insensitive">latin2_hungarian_ci</option>
                    </optgroup>
                    <optgroup label="latin5" title="ISO 8859-9 Turkish">
                        <option value="latin5_bin" title="Turkish, Binary">latin5_bin</option>
                        <option value="latin5_turkish_ci" title="Turkish, case-insensitive">latin5_turkish_ci</option>
                    </optgroup>
                    <optgroup label="latin7" title="ISO 8859-13 Baltic">
                        <option value="latin7_bin" title="Baltic (multilingual), Binary">latin7_bin</option>
                        <option value="latin7_estonian_cs" title="Estonian, case-sensitive">latin7_estonian_cs</option>
                        <option value="latin7_general_ci" title="Baltic (multilingual), case-insensitive">latin7_general_ci</option>
                        <option value="latin7_general_cs" title="Baltic (multilingual), case-sensitive">latin7_general_cs</option>
                    </optgroup>
                    <optgroup label="macce" title="Mac Central European">
                        <option value="macce_bin" title="Central European (multilingual), Binary">macce_bin</option>
                        <option value="macce_general_ci" title="Central European (multilingual), case-insensitive">macce_general_ci</option>
                    </optgroup>
                    <optgroup label="macroman" title="Mac West European">
                        <option value="macroman_bin" title="West European (multilingual), Binary">macroman_bin</option>
                        <option value="macroman_general_ci" title="West European (multilingual), case-insensitive">macroman_general_ci</option>
                    </optgroup>
                    <optgroup label="sjis" title="Shift-JIS Japanese">
                        <option value="sjis_bin" title="Japanese, Binary">sjis_bin</option>
                        <option value="sjis_japanese_ci" title="Japanese, case-insensitive">sjis_japanese_ci</option>
                    </optgroup>
                    <optgroup label="swe7" title="7bit Swedish">
                        <option value="swe7_bin" title="Swedish, Binary">swe7_bin</option>
                        <option value="swe7_swedish_ci" title="Swedish, case-insensitive">swe7_swedish_ci</option>
                    </optgroup>
                    <optgroup label="tis620" title="TIS620 Thai">
                        <option value="tis620_bin" title="Thai, Binary">tis620_bin</option>
                        <option value="tis620_thai_ci" title="Thai, case-insensitive">tis620_thai_ci</option>
                    </optgroup>
                    <optgroup label="ucs2" title="UCS-2 Unicode">
                        <option value="ucs2_bin" title="Unicode (multilingual), Binary">ucs2_bin</option>
                        <option value="ucs2_czech_ci" title="Czech, case-insensitive">ucs2_czech_ci</option>
                        <option value="ucs2_danish_ci" title="Danish, case-insensitive">ucs2_danish_ci</option>
                        <option value="ucs2_estonian_ci" title="Estonian, case-insensitive">ucs2_estonian_ci</option>
                        <option value="ucs2_general_ci" title="Unicode (multilingual), case-insensitive">ucs2_general_ci</option>
                        <option value="ucs2_icelandic_ci" title="Icelandic, case-insensitive">ucs2_icelandic_ci</option>
                        <option value="ucs2_latvian_ci" title="Latvian, case-insensitive">ucs2_latvian_ci</option>
                        <option value="ucs2_lithuanian_ci" title="Lithuanian, case-insensitive">ucs2_lithuanian_ci</option>
                        <option value="ucs2_persian_ci" title="Persian, case-insensitive">ucs2_persian_ci</option>
                        <option value="ucs2_polish_ci" title="Polish, case-insensitive">ucs2_polish_ci</option>
                        <option value="ucs2_roman_ci" title="West European, case-insensitive">ucs2_roman_ci</option>
                        <option value="ucs2_romanian_ci" title="Romanian, case-insensitive">ucs2_romanian_ci</option>
                        <option value="ucs2_slovak_ci" title="Slovak, case-insensitive">ucs2_slovak_ci</option>
                        <option value="ucs2_slovenian_ci" title="Slovenian, case-insensitive">ucs2_slovenian_ci</option>
                        <option value="ucs2_spanish2_ci" title="Traditional Spanish, case-insensitive">ucs2_spanish2_ci</option>
                        <option value="ucs2_spanish_ci" title="Spanish, case-insensitive">ucs2_spanish_ci</option>
                        <option value="ucs2_swedish_ci" title="Swedish, case-insensitive">ucs2_swedish_ci</option>
                        <option value="ucs2_turkish_ci" title="Turkish, case-insensitive">ucs2_turkish_ci</option>
                        <option value="ucs2_unicode_ci" title="Unicode (multilingual), case-insensitive">ucs2_unicode_ci</option>
                    </optgroup>
                    <optgroup label="ujis" title="EUC-JP Japanese">
                        <option value="ujis_bin" title="Japanese, Binary">ujis_bin</option>
                        <option value="ujis_japanese_ci" title="Japanese, case-insensitive">ujis_japanese_ci</option>
                    </optgroup>
                    <optgroup label="utf8" title="UTF-8 Unicode">
                        <option value="utf8_bin" title="Unicode (multilingual), Binary">utf8_bin</option>
                        <option value="utf8_czech_ci" title="Czech, case-insensitive">utf8_czech_ci</option>
                        <option value="utf8_danish_ci" title="Danish, case-insensitive">utf8_danish_ci</option>
                        <option value="utf8_estonian_ci" title="Estonian, case-insensitive">utf8_estonian_ci</option>
                        <option value="utf8_general_ci" title="Unicode (multilingual), case-insensitive" selected="selected">utf8_general_ci</option>
                        <option value="utf8_icelandic_ci" title="Icelandic, case-insensitive">utf8_icelandic_ci</option>
                        <option value="utf8_latvian_ci" title="Latvian, case-insensitive">utf8_latvian_ci</option>
                        <option value="utf8_lithuanian_ci" title="Lithuanian, case-insensitive">utf8_lithuanian_ci</option>
                        <option value="utf8_persian_ci" title="Persian, case-insensitive">utf8_persian_ci</option>
                        <option value="utf8_polish_ci" title="Polish, case-insensitive">utf8_polish_ci</option>
                        <option value="utf8_roman_ci" title="West European, case-insensitive">utf8_roman_ci</option>
                        <option value="utf8_romanian_ci" title="Romanian, case-insensitive">utf8_romanian_ci</option>
                        <option value="utf8_slovak_ci" title="Slovak, case-insensitive">utf8_slovak_ci</option>
                        <option value="utf8_slovenian_ci" title="Slovenian, case-insensitive">utf8_slovenian_ci</option>
                        <option value="utf8_spanish2_ci" title="Traditional Spanish, case-insensitive">utf8_spanish2_ci</option>
                        <option value="utf8_spanish_ci" title="Spanish, case-insensitive">utf8_spanish_ci</option>
                        <option value="utf8_swedish_ci" title="Swedish, case-insensitive">utf8_swedish_ci</option>
                        <option value="utf8_turkish_ci" title="Turkish, case-insensitive">utf8_turkish_ci</option>
                        <option value="utf8_unicode_ci" title="Unicode (multilingual), case-insensitive">utf8_unicode_ci</option>
                    </optgroup>
                </select>
                <noscript><input type="submit" value="Go" /></noscript>
<a href="http://dev.mysql.com/doc/refman/4.1/en/charset-connection.html" target="mysql_doc"><img class="icon" src="./themes/original/img/b_help.png" width="11" height="11" alt="Documentation" title="Documentation" /></a>
            </form>
        </td>
    </tr>
    <tr>
    <td width="16" valign="top" ><a href="./themes.php" target="themes" onclick="window.open(\'./themes.php\',\'themes\',\'left=10,top=20,width=510,height=350,scrollbars=yes,status=yes,resizable=yes\');"><img class="icon" src="./themes/original/img/s_theme.png"  width="16" height="16" alt="Theme / Style" /></a></td>
    <td><form name="setTheme" method="post" action="index.php" target="_parent">
                        <input type="hidden" name="lang" value="en-utf-8" />
                    <input type="hidden" name="server" value="1" />
                    <input type="hidden" name="collation_connection" value="utf8_general_ci" />
<a href="./themes.php" target="themes" onclick="window.open(\'./themes.php\',\'themes\',\'left=10,top=20,width=510,height=350,scrollbars=yes,status=yes,resizable=yes\');">Theme / Style</a>:
            <select name="set_theme" xml:lang="en" dir="ltr" onchange="this.form.submit();" >
    <option value="darkblue_orange">Darkblue/orange</option><option value="original" selected="selected">Original</option>            </select>
            <noscript><input type="submit" value="Go" /></noscript>
        </form>
    </td>
</tr>
    <tr><td width="16" valign="top" ><a href="Documentation.html" target="documentation"><img class="icon" src="./themes/original/img/b_docs.png"  width="16" height="16" alt="phpMyAdmin documentation" /></a></td>    <td><a href="Documentation.html" target="documentation">
            <b>phpMyAdmin documentation</b></a>
    </td>
</tr>

<tr>
<td width="16" valign="top" ><a href="http://www.phpMyAdmin.net/" target="_blank"><img class="icon" src="./themes/original/img/b_home.png"  width="16" height="16" alt="Official phpMyAdmin Homepage" /></a></td>    <td><a href="http://www.phpMyAdmin.net/" target="_blank">
            Official phpMyAdmin Homepage</a>
    </td>
</tr>
<tr><td></td>
    <td><bdo xml:lang="en" dir="ltr">
        [<a href="changelog.php" target="_blank">ChangeLog</a>]
        [<a href="http://cvs.sourceforge.net/cgi-bin/viewcvs.cgi/phpmyadmin/phpMyAdmin/"
            target="_blank">CVS</a>]
        [<a href="http://sourceforge.net/mail/?group_id=23067"
            target="_blank">Lists</a>]
        </bdo>
    </td>
</tr>
</table>

</td>
</tr>
</table>

<hr />

<div class="warning">Your configuration file contains settings (root with no password) that correspond to the default MySQL privileged account. Your MySQL server is running with this default, is open to intrusion, and you really should fix this security hole.</div>
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