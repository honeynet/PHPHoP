<?php
//
//  This file is part of PHPHoP, the PHP Honeypot Project
//
//  Copyright oudot@rstack.org 2005-2006
//
//
// This script simulates a fake phpshell backdoor on your web server
// Place it in a directory where it can be found by fellow visitors
// This can be used to fool incoming clients looking at your server
//

// Fixed - 30/6/06 -missing footer, pointed out by Ryan from Chicago
// Honeypot Project (notified via Laurent) - jamesr

// TODO: improve the data logged (cookies...)
// TODO: improve the working directory feature displayed
// TODO: improve the current path displayed

$modulename="phpshell";

include_once("config.php");

include_once($pathlib."/liblogtodisk.php");
include_once($pathlib."/liblogbymail.php");
include_once($pathlib."/liblogtomysql.php");
include_once($pathlib."/libsystem.php");

logtodisk($pathlog,$modulename);
logbymail($mailaddr,$modulename,$_SERVER['PHP_SELF'],$command);
logtomysql($modulename,$command,$mysqlhost,$mysqltcpport,$mysqlsocket,$mysqluser,$mysqlpassword,$mysqldatabase,$mysqlalertstable,$mysqlhoneypotstable);

$path=dirname($_SERVER['PHP_SELF']);



$d=$_GET['work_dir'];
if($d=="")
  $d=dirname($_SERVER['PHP_SELF']);
$n=explode("/",$d);
$outputpath='<a href="'.$_SERVER["PHP_SELF"].'?work_dir=/">Root</a>/ ';
for ($i=1; $i<count($n); $i++) {
      $webpath.="%2F".$n[$i];
      $outputpath.='<a href="'.$_SERVER['PHP_SELF'].'?work_dir='.$webpath.'">'.$n[$i].'</a>/ ';
}

// Basic virgin web page proposed by the backdoor PhpShell
//TODO: implement correct path links
//TODO: implement the "choose new working directory option
$template = '<html>
<head>
<title>PHP Shell 1.7</title>
</head>
<body>
<h1>PHP Shell 1.7</h1>


<form name="myform" action="'.$_SERVER['PHP_SELF'].'" method="get">
<p>Current working directory: <b>
'.$outputpath.'</b></p>

<p>Choose new working directory:
<select name="work_dir" onChange="this.form.submit()">
<option value="'.$path.'" selected>Current Directory</option>
<option value="'.$path.'">Parent Directory</option>

</select></p>

<p>Command: <input type="text" name="command" size="60">
<input name="submit_btn" type="submit" value="Execute Command"></p>

<p>Enable <code>stderr</code>-trapping? <input type="checkbox" name="stderr"></p>

<textarea cols="80" rows="20" readonly>
'.shell($command).'
</textarea>
</form>

<script language="JavaScript" type="text/javascript">
document.forms[0].command.focus();
</script>

<hr>
<i>Copyright &copy; 2000&ndash;2002, <a
href="mailto:gimpster@gimpster.com">Martin Geisler</a>. Get the latest
version at <a href="http://www.gimpster.com">www.gimpster.com</a>.</i>

</body>
</html>
';

echo $template;
?>





