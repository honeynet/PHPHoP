<? 
//
//  This file is part of PHPHoP, the PHP Honeypot Project
//
//  Copyright oudot@rstack.org 2005-2006
//
//
// This script simulates "phpshell by macker" backdoor on your web server
// Place it in a directory where it can be found by fellow visitors
// This can be used to fool incoming clients looking at your server
//



$modulename="phpshell-macker";

include_once("config.php");

include_once($pathlib."/liblogtodisk.php");
include_once($pathlib."/liblogbymail.php");
include_once($pathlib."/liblogtomysql.php");
include_once($pathlib."/libsystem.php");

logtodisk($pathlog,$modulename);
logbymail($mailaddr,$modulename,$_SERVER['PHP_SELF'],$command);
logtomysql($modulename,$cmd,$mysqlhost,$mysqltcpport,$mysqlsocket,$mysqluser,$mysqlpassword,$mysqldatabase,$mysqlalertstable,$mysqlhoneypotstable);


//
// FAKE MAIN MENU DISPLAYED
//
$main = '<!-- PHPShell by Macker, Version 2.6.6dev, August 28th 2003  --> 
<HTML> 
 <HEAD> 
  <STYLE> 
  <!-- 
    A{ text-decoration:none; color:navy; font-size: 12px } 
    body { font-size: 12px;  
           font-family: arial, helvetica; 
            scrollbar-width: 5; 
            scrollbar-height: 5; 
            scrollbar-face-color: white; 
            scrollbar-shadow-color: silver; 
            scrollbar-highlight-color: white; 
            scrollbar-3dlight-color:silver; 
            scrollbar-darkshadow-color: silver; 
            scrollbar-track-color: white; 
            scrollbar-arrow-color: black; 
    } 
    Table { font-size: 12px; } 
    TR{ font-size: 12px; } 
    TD{ font-size: 12px;  
        font-family: arial, helvetical; 
        BORDER-LEFT: black 0px solid;  
 BORDER-RIGHT: black 0px solid;  
 BORDER-TOP: black 0px solid;  
 BORDER-BOTTOM: black 0px solid;  
 COLOR: black;  
    } 
    .border{       BORDER-LEFT: black 1px solid; 
      BORDER-RIGHT: black 1px solid; 
      BORDER-TOP: black 1px solid; 
      BORDER-BOTTOM: black 1px solid; 
    } 
    .none  {       BORDER-LEFT: black 0px solid; 
      BORDER-RIGHT: black 0px solid; 
      BORDER-TOP: black 0px solid; 
      BORDER-BOTTOM: black 0px solid; 
    } 
    .inputtext { 
      background-color: #EFEFEF; 
      font-family: arial, helvetica; 
      border: 1px solid #000000; 
      height: 20; 
    } 
    .lighttd {       background: #F8F8F8; 
    } 
    .darktd {        background: #E8E8E8; 
    } 
    input { font-family: arial, helvetica; 
    } 
    .inputbutton { 
                        background-color: silver; 
   border: 1px solid #000000; 
   border-width: 1px; 
   height: 20; 
    } 
    .inputtextarea { 
      background-color: #EFEFEF; 
      border: 1px solid #000000; 
      scrollbar-width: 5; 
      scrollbar-height: 5; 
      scrollbar-face-color: #EFEFEF; 
      scrollbar-shadow-color: silver; 
      scrollbar-highlight-color: #EFEFEF; 
      scrollbar-3dlight-color:silver; 
      scrollbar-darkshadow-color: silver; 
      scrollbar-track-color: #EFEFEF; 
      scrollbar-arrow-color: black; 
    } 
    .top { BORDER-TOP: black 1px solid; } 
    .textin { BORDER-LEFT: silver 1px solid; 
              BORDER-RIGHT: silver 1px solid; 
        BORDER-TOP: silver 1px solid; 
              BORDER-BOTTOM: silver 1px solid; 
              width: 99%; font-size: 12px; font-weight: bold; color: navy; 
            } 
    .notop { BORDER-TOP: black 0px solid; } 
    .bottom { BORDER-BOTTOM: black 1px solid; } 
    .nobottom { BORDER-BOTTOM: black 0px solid; } 
    .left { BORDER-LEFT: black 1px solid; } 
    .noleft { BORDER-LEFT: black 0px solid; } 
    .right { BORDER-RIGHT: black 1px solid; } 
    .noright { BORDER-RIGHT: black 0px solid; } 
    .silver{ BACKGROUND: silver; } 
  --> 
  </STYLE> 
  <TITLE></TITLE> 
 </HEAD> 
 <body topmargin="0" leftmargin="0"> 
 <div style="position: absolute; background: white; z-order:10000; top:0; left:0; width: 100%; height: 100%;"> 
 
 <table width=100% height="100%" NOWRAP border="0"> 
  <tr NOWRAP> 
   <td width="100%" NOWRAP> 
    <table NOWRAP width=100% border="0" cellpadding="0" cellspacing="0"> 
     <tr> 
      <td width="100%" class="silver border"> 
       <center> 
     <strong> 
   <font size=3>PHPShell by Macker - Version 2.6.6dev - August 28th 2003</font> 
 
            </strong> 
       </center> 
      </td> 
     </tr> 
    </table><br> 
 
  <table width="100%" border="0" cellpadding="0" cellspacing="0"> 
  <tr> 
   <td width="100%" class="border"> 
 
    <center>&nbsp;-<[{ PHPShell Main Menu }]>-&nbsp;</center> 
   </td> 
  </tr> 
 </table> 
 <br> 
  <center> 
 <table border="0" NOWRAP> 
   <tr>  
 
   <td valign="top" class="silver border"> 
           <a href="?&s=r&cmd=dir&dir=.">&nbsp;&nbsp;<font color="navy"><strong>==> Haxplorer <==</strong></font></a>&nbsp;&nbsp;   </td> 
    <td style="BORDER-TOP: silver 1px solid;" width=350 NOWRAP> 
    Haxplorer is a server side file browser wich (ab)uses the directory object to list 
     the files and directories stored on a webserver. This handy tools allows you to manage 
     files and directories on a unsecure server with php support.<br><br>This entire script 
     is coded for unsecure servers, if your server is secured the script will hide commands 
     or will even return errors to your browser...<br><br> 
   </td> 
  </tr> 
 
   <tr> 
   <td valign="top" class="silver border"> 
           <a href="?&s=r&cmd=con">&nbsp;&nbsp;<font color="navy"><strong>==> PHPKonsole <==</strong></font></a>&nbsp;&nbsp;   </td> 
    <td style="BORDER-TOP: silver 1px solid;" width=350 NOWRAP> 
    <br>PHPKonsole is just a little telnet like shell wich allows you to run commands on the webserver. 
     When you run commands they will run as the webservers UserID. This should work perfectly 
     for managing files, like moving, copying etc. If you\'re using a linux server, system commands 
     such as ls, mv and cp will be available for you... <br><br>This function will only work if the 
     server supports php and the execute commands...<br><br> 
   </td> 
 
  </tr> 
        </table> 
 </center> 
 <br> 
      <table width=100% border="0" cellpadding="0" cellspacing="0"> 
  <tr> 
   <td width="100%" class="silver border"> 
    <center>&nbsp;PHPShell by Macker - Version 2.6.6dev - August 28th 2003&nbsp;</center> 
 
   </td> 
  </tr> 
 </table> 
     </td> 
  </tr> 
 </table>'; 
 

// 
// FAKE EXPLORER DISPLAYED
//
$explorer='<html><head><style> 
  <!-- 
    A{ text-decoration:none; color:navy; font-size: 12px } 
    body { font-size: 12px;  
           font-family: arial, helvetica; 
            scrollbar-width: 5; 
            scrollbar-height: 5; 
            scrollbar-face-color: white; 
            scrollbar-shadow-color: silver; 
            scrollbar-highlight-color: white; 
            scrollbar-3dlight-color:silver; 
            scrollbar-darkshadow-color: silver; 
            scrollbar-track-color: white; 
            scrollbar-arrow-color: black; 
    } 
    Table { font-size: 12px; } 
    TR{ font-size: 12px; } 
    TD{ font-size: 12px;  
        font-family: arial, helvetical; 
        BORDER-LEFT: black 0px solid;  
 BORDER-RIGHT: black 0px solid;  
 BORDER-TOP: black 0px solid;  
 BORDER-BOTTOM: black 0px solid;  
 COLOR: black;  
    } 
    .border{       BORDER-LEFT: black 1px solid; 
      BORDER-RIGHT: black 1px solid; 
      BORDER-TOP: black 1px solid; 
      BORDER-BOTTOM: black 1px solid; 
    } 
    .none  {       BORDER-LEFT: black 0px solid; 
      BORDER-RIGHT: black 0px solid; 
      BORDER-TOP: black 0px solid; 
      BORDER-BOTTOM: black 0px solid; 
    } 
    .inputtext { 
      background-color: #EFEFEF; 
      font-family: arial, helvetica; 
      border: 1px solid #000000; 
      height: 20; 
    } 
    .lighttd {       background: #F8F8F8; 
    } 
    .darktd {        background: #E8E8E8; 
    } 
    input { font-family: arial, helvetica; 
    } 
    .inputbutton { 
                        background-color: silver; 
   border: 1px solid #000000; 
   border-width: 1px; 
   height: 20; 
    } 
    .inputtextarea { 
      background-color: #EFEFEF; 
      border: 1px solid #000000; 
      scrollbar-width: 5; 
      scrollbar-height: 5; 
      scrollbar-face-color: #EFEFEF; 
      scrollbar-shadow-color: silver; 
      scrollbar-highlight-color: #EFEFEF; 
      scrollbar-3dlight-color:silver; 
      scrollbar-darkshadow-color: silver; 
      scrollbar-track-color: #EFEFEF; 
      scrollbar-arrow-color: black; 
    } 
    .top { BORDER-TOP: black 1px solid; } 
    .textin { BORDER-LEFT: silver 1px solid; 
              BORDER-RIGHT: silver 1px solid; 
        BORDER-TOP: silver 1px solid; 
              BORDER-BOTTOM: silver 1px solid; 
              width: 99%; font-size: 12px; font-weight: bold; color: navy; 
            } 
    .notop { BORDER-TOP: black 0px solid; } 
    .bottom { BORDER-BOTTOM: black 1px solid; } 
    .nobottom { BORDER-BOTTOM: black 0px solid; } 
    .left { BORDER-LEFT: black 1px solid; } 
    .noleft { BORDER-LEFT: black 0px solid; } 
    .right { BORDER-RIGHT: black 1px solid; } 
    .noright { BORDER-RIGHT: black 0px solid; } 
    .silver{ BACKGROUND: silver; } 
  --> 
  </style><title></title></head><body topmargin="0" leftmargin="0"> 
<!-- PHPShell by Macker, Version 2.6.6dev, August 28th 2003  --> 
 
  
   
   
  
 <div style="background: white none repeat scroll 0%; position: absolute; -moz-background-clip: -moz-initial; -moz-background-origin: -moz-initial; -moz-background-inline-policy: -moz-initial; top: 0pt; left: 0pt; width: 100%; height: 100%;"> 
 <table nowrap="" border="0" height="100%" width="100%"> 
  <tbody><tr nowrap=""> 
   <td nowrap="nowrap" width="100%"> 
    <table nowrap="" border="0" cellpadding="0" cellspacing="0" width="100%"> 
     <tbody><tr> 
      <td class="silver border" width="100%"> 
       <center> 
     <strong> 
   <font size="3">PHPShell by Macker - Version 2.6.6dev - August 28th 2003</font> 
            </strong> 
       </center> 
      </td> 
     </tr> 
    </tbody></table><br> 
 
       <form name="urlform" action="?&amp;s=r&amp;" method="post"><input name="cmd" value="dir" type="hidden"> 
         <table nowrap="" border="0" cellpadding="0" cellspacing="0" width="100%"> 
   <tbody><tr> 
    <td class="silver border" width="100%"> 
     <center>&nbsp;HAXPLORER - Server Files Browser...&nbsp;</center> 
    </td> 
   </tr> 
  </tbody></table> 
       <br> 
  <table border="0" cellpadding="0" cellspacing="0" width="100%"> 
   <tbody><tr> 
           <td class="border nobottom noright"> 
            &nbsp;Browsing:&nbsp; 
   </td> 
          <td class="border nobottom noleft" width="100%"> 
        <table border="0" cellpadding="1" cellspacing="0" width="100%"> 
             <tbody><tr> 
              <td align="center" nowrap="nowrap" width="99%"><input name="dir" class="none textin" value="/var/www/localhost/htdocs'.dirname($_SERVER['PHP_SELF']).'" type="text"></td> 
              <td nowrap="nowrap"><center>&nbsp;<a href="javascript: urlform.submit();"><b>GO<b></b></b></a><b><b>&nbsp;</b></b><center></center></center></td> 
             </tr> 
            </tbody></table> 
             
   </td> 
  </tr> 
 </tbody></table> 
  <!--    </form>   --> 
        <table nowrap="" border="0" cellpadding="0" cellspacing="0" width="100%"> 
         <tbody><tr> 
   <td class="silver border" nowrap="nowrap" width="100%"> 
    &nbsp;Filename&nbsp; 
   </td> 
          <td class="silver border noleft" nowrap="nowrap"> 
    &nbsp;Actions&nbsp;(Attempt to perform)&nbsp; 
   </td> 
          <td class="silver border noleft" nowrap="nowrap"> 
    &nbsp;Size&nbsp; 
   </td> 
          <td class="silver border noleft" nowrap="nowrap" width="1"> 
    &nbsp;Attributes&nbsp; 
   </td> 
          <td class="silver border noleft" nowrap="nowrap"> 
    &nbsp;Modification Date&nbsp; 
   </td> 
  </tr><tr> 
    </tr><tr><td class="top left right lighttd" nowrap="nowrap">&nbsp;&nbsp;&nbsp;<a href="?&amp;s=r&amp;cmd=dir&amp;dir=./">[.]</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td> 
<td class="top right lighttd" nowrap="nowrap"><center>&nbsp;&nbsp; 
&nbsp;&nbsp;</center></td> 
<td class="top right lighttd" nowrap="nowrap">&nbsp;</td> 
<td class="top right lighttd" nowrap="nowrap">&nbsp;&nbsp; 
<strong>D</strong><strong>R</strong><strong>X<strong>&nbsp;&nbsp;</strong></strong></td> 
<td class="top right lighttd" nowrap="nowrap"> 
&nbsp;&nbsp;Sun 29-01-2006 16:17:33&nbsp;&nbsp;</td></tr> 
<tr><td class="top left right darktd" nowrap="nowrap">&nbsp;&nbsp;&nbsp;<a href="?&amp;s=r&amp;cmd=dir&amp;dir=./..">[..]</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td> 
<td class="top right darktd" nowrap="nowrap"><center>&nbsp;&nbsp; 
&nbsp;&nbsp;</center></td> 
<td class="top right darktd" nowrap="nowrap">&nbsp;</td> 
<td class="top right darktd" nowrap="nowrap">&nbsp;&nbsp; 
<strong>D</strong><strong>R</strong><strong>X<strong>&nbsp;&nbsp;</strong></strong></td> 
<td class="top right darktd" nowrap="nowrap"> 
&nbsp;&nbsp;Sun 29-01-2006 15:15:03&nbsp;&nbsp;</td></tr> 
<tr><td class="top left right lighttd" nowrap="nowrap">&nbsp;&nbsp;&nbsp;<a href="?&amp;s=r&amp;cmd=file&amp;file=./mc.php">mc.php</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td> 
<td class="top right lighttd" nowrap="nowrap"><center>&nbsp;&nbsp; 
<a href="?&amp;s=r&amp;cmd=ren&amp;lastcmd=dir&amp;lastdir=.&amp;oldfile=./mc.php">[Rename]</a>&nbsp;&nbsp;&nbsp; 
<a href="?&amp;s=r&amp;cmd=copy&amp;file=./mc.php">[Copy]</a> 
&nbsp;&nbsp;&nbsp;<a href="?&amp;s=r&amp;cmd=delfile&amp;file=./mc.php&amp;lastcmd=dir&amp;lastdir=.">[Delete]</a> 
&nbsp;&nbsp;&nbsp;<a href="?&amp;s=r&amp;cmd=downl&amp;file=./mc.php">[Download]</a> 
&nbsp;&nbsp;</center></td> 
<td class="top right lighttd" align="right" nowrap="nowrap"> 
&nbsp;&nbsp;<strong>36.384 KB<strong>&nbsp;&nbsp;</strong></strong></td> 
<td class="top right lighttd" nowrap="nowrap">&nbsp;&nbsp; 
<strong>R</strong>&nbsp;&nbsp;</td> 
<td class="top right lighttd" nowrap="nowrap"> 
&nbsp;&nbsp;Sun 29-01-2006 16:16:18&nbsp;&nbsp;</td></tr> 
</tbody></table><table border="0" cellpadding="0" cellspacing="0" width="100%"><tbody><tr> 
<td class="silver border noright" nowrap="nowrap" width="100%"> 
&nbsp;&nbsp;2&nbsp;Dir(s),&nbsp;1&nbsp;File(s)&nbsp;&nbsp; 
</td><td class="silver border noleft" nowrap="nowrap"> 
&nbsp;&nbsp;Total filesize:&nbsp;36.384 KB&nbsp;&nbsp;</td><td></td></tr> 
</tbody></table> 
<br><table nowrap=""><tbody><tr><td class="silver border">&nbsp;<strong>Server\'s PHP Version:&nbsp;&nbsp;</strong>&nbsp;</td><td>&nbsp;'.phpversion().'&nbsp;</td></tr> 
<tr><td class="silver border">&nbsp;<strong>Other actions:&nbsp;&nbsp;</strong>&nbsp;</td> 
<td>&nbsp;<b><a href="?&amp;s=r&amp;cmd=newfile&amp;lastcmd=dir&amp;lastdir=.">| New File |</a> 
&nbsp;&nbsp;&nbsp;<a href="?&amp;s=r&amp;cmd=newdir&amp;lastcmd=dir&amp;lastdir=.">| New Directory |</a> 
&nbsp;&nbsp;&nbsp;<a href="?&amp;s=r&amp;cmd=upload&amp;dir=.&amp;lastcmd=dir&amp;lastdir=.">| Upload a File |</a></b> 
</td></tr> 
<tr><td class="silver border">&nbsp;<strong>Script Location:&nbsp;&nbsp;</strong>&nbsp;</td><td>&nbsp;</td></tr> 
<tr><td class="silver border">&nbsp;<strong>Your IP:&nbsp;&nbsp;</strong>&nbsp;</td><td>&nbsp;&nbsp;</td></tr> 
<tr><td class="silver border">&nbsp;<strong>Browsing Directory:&nbsp;&nbsp;</strong></td><td>&nbsp;/var/www/localhost/htdocs'.dirname($_SERVER['PHP_SELF']).'&nbsp;</td></tr> 
<tr><td class="silver border" valign="top">&nbsp;<strong>Legend:&nbsp;&nbsp;</strong></td><td> 
<table nowrap=""><tbody><tr><td><strong>D:</strong></td><td>&nbsp;&nbsp;Directory.</td></tr> 
<tr><td><strong>R:</strong></td><td>&nbsp;&nbsp;Readable.</td></tr> 
<tr><td><strong>W:</strong></td><td>&nbsp;&nbsp;Writeable.</td></tr> 
<tr><td><strong>X:</strong></td><td>&nbsp;&nbsp;Executable.</td></tr> 
<tr><td><strong>U:</strong></td><td>&nbsp;&nbsp;HTTP Uploaded File.</td></tr> 
</tbody></table></td></tr></tbody></table><br>  <table border="0" cellpadding="0" cellspacing="0" width="100%"> 
   <tbody><tr> 
    <td style="" silver="" border="" width="100%"> 
     <center><strong> 
      &nbsp;&nbsp;<a href="?&amp;s=r&amp;cmd=&amp;dir="><font color="navy">[&nbsp;Main Menu&nbsp;]  </font></a>&nbsp;&nbsp; 
      &nbsp;&nbsp;<a href="?&amp;s=r&amp;cmd=con"><font color="navy">[&nbsp;PHPKonsole&nbsp;] </font></a>&nbsp;&nbsp; 
                    &nbsp;&nbsp;<a href="?&amp;s=r&amp;cmd=dir&amp;dir=."><font color="navy">[&nbsp;Haxplorer&nbsp;]  </font></a> &nbsp;&nbsp; 
      </strong></center> 
    </td> 
   </tr> 
  </tbody></table> 
  <br> 
   <table border="0" cellpadding="0" cellspacing="0" width="100%"> 
  <tbody><tr> 
   <td class="silver border" width="100%"> 
    <center>&nbsp;PHPShell by Macker - Version 2.6.6dev - August 28th 2003&nbsp;</center> 
   </td> 
  </tr> 
 </tbody></table> 
     </form></td> 
  </tr> 
 </tbody></table> 
 
     
</div></body></html>'; 
 
 
//
// FAKE SHELL DISPLAYED
//
$shell='<!-- PHPShell by Macker, Version 2.6.6dev, August 28th 2003  --> 
<HTML> 
 <HEAD> 
  <STYLE> 
  <!-- 
    A{ text-decoration:none; color:navy; font-size: 12px } 
    body { font-size: 12px;  
           font-family: arial, helvetica; 
            scrollbar-width: 5; 
            scrollbar-height: 5; 
            scrollbar-face-color: white; 
            scrollbar-shadow-color: silver; 
            scrollbar-highlight-color: white; 
            scrollbar-3dlight-color:silver; 
            scrollbar-darkshadow-color: silver; 
            scrollbar-track-color: white; 
            scrollbar-arrow-color: black; 
    } 
    Table { font-size: 12px; } 
    TR{ font-size: 12px; } 
    TD{ font-size: 12px;  
        font-family: arial, helvetical; 
        BORDER-LEFT: black 0px solid;  
 BORDER-RIGHT: black 0px solid;  
 BORDER-TOP: black 0px solid;  
 BORDER-BOTTOM: black 0px solid;  
 COLOR: black;  
    } 
    .border{       BORDER-LEFT: black 1px solid; 
      BORDER-RIGHT: black 1px solid; 
      BORDER-TOP: black 1px solid; 
      BORDER-BOTTOM: black 1px solid; 
    } 
    .none  {       BORDER-LEFT: black 0px solid; 
      BORDER-RIGHT: black 0px solid; 
      BORDER-TOP: black 0px solid; 
      BORDER-BOTTOM: black 0px solid; 
    } 
    .inputtext { 
      background-color: #EFEFEF; 
      font-family: arial, helvetica; 
      border: 1px solid #000000; 
      height: 20; 
    } 
    .lighttd {       background: #F8F8F8; 
    } 
    .darktd {        background: #E8E8E8; 
    } 
    input { font-family: arial, helvetica; 
    } 
    .inputbutton { 
                        background-color: silver; 
   border: 1px solid #000000; 
   border-width: 1px; 
   height: 20; 
    } 
    .inputtextarea { 
      background-color: #EFEFEF; 
      border: 1px solid #000000; 
      scrollbar-width: 5; 
      scrollbar-height: 5; 
      scrollbar-face-color: #EFEFEF; 
      scrollbar-shadow-color: silver; 
      scrollbar-highlight-color: #EFEFEF; 
      scrollbar-3dlight-color:silver; 
      scrollbar-darkshadow-color: silver; 
      scrollbar-track-color: #EFEFEF; 
      scrollbar-arrow-color: black; 
    } 
    .top { BORDER-TOP: black 1px solid; } 
    .textin { BORDER-LEFT: silver 1px solid; 
              BORDER-RIGHT: silver 1px solid; 
        BORDER-TOP: silver 1px solid; 
              BORDER-BOTTOM: silver 1px solid; 
              width: 99%; font-size: 12px; font-weight: bold; color: navy; 
            } 
    .notop { BORDER-TOP: black 0px solid; } 
    .bottom { BORDER-BOTTOM: black 1px solid; } 
    .nobottom { BORDER-BOTTOM: black 0px solid; } 
    .left { BORDER-LEFT: black 1px solid; } 
    .noleft { BORDER-LEFT: black 0px solid; } 
    .right { BORDER-RIGHT: black 1px solid; } 
    .noright { BORDER-RIGHT: black 0px solid; } 
    .silver{ BACKGROUND: silver; } 
  --> 
  </STYLE> 
  <TITLE></TITLE> 
 </HEAD> 
 <body topmargin="0" leftmargin="0"> 
 <div style="position: absolute; background: white; z-order:10000; top:0; left:0; width: 100%; height: 100%;"> 
 
 <table width=100% height="100%" NOWRAP border="0"> 
  <tr NOWRAP> 
   <td width="100%" NOWRAP> 
    <table NOWRAP width=100% border="0" cellpadding="0" cellspacing="0"> 
     <tr> 
      <td width="100%" class="silver border"> 
       <center> 
     <strong> 
   <font size=3>PHPShell by Macker - Version 2.6.6dev - August 28th 2003</font> 
 
            </strong> 
       </center> 
      </td> 
     </tr> 
    </table><br> 
 
 <center> 
<table> 
 <tr><td> 
<h3>PHPKonsole</h3> 
 
 
    <form name="myform" action="?&s=r&" method="get"> 
 <table border=0 cellspacing=0 cellpadding=0 width="100%"><tr><td>Current working directory: <b> 
 <input type="hidden" name="cmd" value="con"> 
 <a href="?cmd=con&stderr=&work_dir=/">Root</a>/<a href="?cmd=con&stderr=&work_dir=%2Fvar">var</a>/<a href="?cmd=con&stderr=&work_dir=%2Fvar%2Fwww">www</a>/<a href="?cmd=con&stderr=&work_dir=%2Fvar%2Fwww%2Flocalhost">localhost</a>/<a href="?cmd=con&stderr=&work_dir=%2Fvar%2Fwww%2Flocalhost%2Fhtdocs">htdocs</a><a href="?cmd=con&stderr=&work_dir=%2Fvar%2Fwww%2Flocalhost%2Fhtdocs'.dirname($_SERVER['PHP_SELF']).'">'.dirname($_SERVER['PHP_SELF']).'</a>&nbsp;</b></td> 
 
 <td align="right">Choose new working directory: <select class="inputtext" name="work_dir" onChange="this.form.submit()"> 
  
 <option value="/var/www/localhost/htdocs'.dirname($_SERVER['PHP_SELF']).'" selected>Current Directory</option> 
<option value="/var/www/localhost/htdocs'.dirname($_SERVER['PHP_SELF']).'">Parent Directory</option> 
 </select></td></tr></table> 
 <p>Command: <input class="inputtext" type="text" name="command" size="60"> 
 <input name="submit_btn" class="inputbutton" type="submit" value="Execute Command"></p> 
 <p>Enable <code>stderr</code>-trapping? <input type="checkbox" name="stderr" CHECKED></p> 
 
 <textarea cols="80" rows="19" class="inputtextarea" wrap=off readonly>'.shell($command).'</textarea> 
    </form> 
                                    
    <script language="JavaScript" type="text/javascript"> 
 document.forms[0].command.focus(); 
    </script> 
 </td></tr></table> 
  <table width="100%" border="0" cellpadding="0" cellspacing="0"> 
   <tr> 
    <td width="100%" style="class="silver border"> 
     <center><strong> 
 
      &nbsp;&nbsp;<a href="?&s=r&cmd=&dir="><font color="navy">[&nbsp;Main Menu&nbsp;]  </font></a>&nbsp;&nbsp; 
      &nbsp;&nbsp;<a href="?&s=r&cmd=con"><font color="navy">[&nbsp;PHPKonsole&nbsp;] </font></a>&nbsp;&nbsp; 
                    &nbsp;&nbsp;<a href="?&s=r&cmd=dir&dir=."><font color="navy">[&nbsp;Haxplorer&nbsp;]  </font></a> &nbsp;&nbsp; 
      </strong></center> 
 
    </td> 
   </tr> 
  </table> 
  <br> 
   <table width=100% border="0" cellpadding="0" cellspacing="0"> 
  <tr> 
   <td width="100%" class="silver border"> 
    <center>&nbsp;PHPShell by Macker - Version 2.6.6dev - August 28th 2003&nbsp;</center> 
 
   </td> 
  </tr> 
 </table> 
     </td> 
  </tr> 
 </table>'; 
 
if ( $cmd=="dir" ) { 
  echo $explorer; 
} 
else if ( $cmd=="con" ) { 
  echo $shell; 
} 
else { 
  echo $main; 
} 
?> 

