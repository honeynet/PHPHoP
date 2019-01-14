<?

$modulename="horde-login";

include_once("config.php");

include_once($pathlib."/liblogtodisk.php");
include_once($pathlib."/liblogbymail.php");
include_once($pathlib."/liblogtomysql.php");

logtodisk($pathlog,$modulename);
logbymail($mailaddr,$modulename,$_SERVER['PHP_SELF'],((isset($imapuser))?"login: $imapuser - password: $pass":""));
$data = ((isset($imapuser))?"login: $imapuser - password: $pass":"");
echo $data;
logtomysql($modulename,$command,$mysqlhost,$mysqltcpport,$mysqlsocket,$mysqluser,$mysqlpassword,$mysqldatabase,$mysqlalertstable,$mysqlhoneypotstable);

if($imapuser=="admin" || $imapuser=="root" || $imapuser=="administrator" || $imapuser=="adm")
{
	header ("Location: mail/");
	exit;
}

echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "DTD/xhtml1-transitional.dtd">
<html lang="en-US"><head><!-- IMP: Copyright 2001-2004, The Horde Project. IMP is under the GPL. --><!--   Horde Project: http://horde.org/ | IMP: http://horde.org/imp/    --><!--      GNU Public License: http://www.fsf.org/copyleft/gpl.html      -->




<script language="JavaScript" type="text/javascript" src="enter_key_trap.js"></script><title>Mail :: Welcome to Horde</title>

<link href="favicon.ico" rel="SHORTCUT ICON">
<link href="screen_002.css" rel="stylesheet" type="text/css">
<link href="screen_004.css" rel="stylesheet" type="text/css">
<link href="screen_003.css" rel="stylesheet" type="text/css">
<link href="screen.css" rel="stylesheet" type="text/css"></head><body>

<script language="JavaScript" type="text/javascript">
<!--

function setFocus()
{
    if (document.imp_login.imapuser.value == "") {
        document.imp_login.imapuser.focus();
    } else {
        document.imp_login.pass.focus();
    }
}


function submit_login(e)
{
    if (typeof e != \'undefined\' && !enter_key_trap(e)) {
        return;
    }

    if (document.imp_login.imapuser.value == "") {
        alert(\'Please provide your username.\');
        document.imp_login.imapuser.focus();
        return false;
    } else if (document.imp_login.pass.value == "") {
        alert(\'Please provide your password.\');
        document.imp_login.pass.focus();
        return false;
    } else {
        document.imp_login.loginButton.disabled = true;
        document.imp_login.submit();
        return true;
    }
}
//-->
</script>

<form name="imp_login" action="" method="post" target="_parent">
<input name="actionID" value="" type="hidden">
<input name="url" value="" type="hidden">
<input name="mailbox" value="INBOX" type="hidden">
<input name="load_frameset" value="1" type="hidden">
<input name="autologin" value="0" type="hidden">

<div id="menu">
 <span style="float: right;">
   </span>
 <h1 align="center">Welcome to Horde</h1>
</div>

<br class="spacer">

<table width="100%"><tbody><tr><td align="center"><table align="center" width="300">

<tbody>';

if(isset($imapuser))
	echo '<tr>
	  <td colspan="2" class="tooltip">Login failed.</td>
	</tr>';

echo '<tr>
    <td colspan="2">
        <input name="server" value="localhost" type="hidden">
        <input name="port" value="143" type="hidden">
        <input name="namespace" value="" type="hidden">
        <input name="maildomain" value="'.$GLOBALS["HTTP_HOST"].'" type="hidden">
        <input name="protocol" value="imap" type="hidden">
        <input name="realm" value="" type="hidden">
    </td>
</tr>

<tr>
    <td colspan="2"><input name="folders" value="INBOX." type="hidden"></td>
</tr>

<tr>
    <td class="light" align="right"><b>Username</b></td>
    <td class="light" align="left" nowrap="nowrap">
      <input tabindex="1" name="imapuser" value="'.htmlspecialchars($imapuser).'" type="text">
        </td>
</tr>
<tr>
    <td class="light" align="right"><b>Password</b></td>
    <td align="left"><input tabindex="2" name="pass" type="password"></td>
</tr>

<tr>
    <td class="light" align="right"><b>Language</b></td>
    <td class="light" align="left"><select tabindex="3" name="new_lang" onchange="selectLang()"><option value="fr_FR">Français</option></select>
    </td>
</tr>

<tr>
    <td>&nbsp;</td>
    <td class="light" align="left"><input class="button" name="loginButton" tabindex="4" value="Log in" onclick="return submit_login();" type="submit">
    </form>
<form action="/mail/">
<input class="button" name="loginButton" tabindex="4" value="Admin" type="submit">
</form>
</td>
</tr>


</tbody></table></td></tr></tbody></table>
<script language="JavaScript" type="text/javascript">
<!--

function updatePort()
{
}

function selectLang()
{
    // We need to reload the login page here, but only if the user hasn\'t
    // already entered a username and password.
    if (document.imp_login.imapuser.value == \'\' &&
        document.imp_login.pass.value == \'\') {
        var lang_page = \'login.php?new_lang=\' + document.imp_login.new_lang[document.imp_login.new_lang.selectedIndex].value;
        self.location = lang_page;
    }
}

if (parent.frames.horde_main) {
    document.imp_login.target = \'_parent\';
}
//-->
</script>
<script language="JavaScript1.2" type="text/javascript">
<!--
// Setup the enter keytrap code.
if (window.document.captureEvents != null) {
    window.document.captureEvents(Event.KEYPRESS);
    window.document.onkeypress = submit_login;
}
//-->
</script>
<!-- This file contains any "Message Of The Day" Type information -->
<!-- It will be included below the log-in form on the login page. -->

<br>
<table width="100%"><tbody><tr><td align="center"><img src="horde-power1.png" alt="Powered by Horde" title="Powered by Horde"></td></tr></tbody></table>
<script language="JavaScript1.5" type="text/javascript">
<!--
var _setHordeTitle = 1;
try {
    if (document.title && parent.frames.horde_main) parent.document.title = document.title;
} catch (e) {
}
// -->
</script>
<script language="JavaScript" type="text/javascript">
<!--
if (typeof(_setHordeTitle) == \'undefined\' && document.title && parent.frames.horde_main) parent.document.title = document.title;
// -->
</script>
<script language="JavaScript" type="text/javascript">
<!--
setFocus()
//-->
</script>
</body></html>';

?>
