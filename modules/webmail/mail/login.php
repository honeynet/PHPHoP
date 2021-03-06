<?

$modulename="horde-cmdshell";

include_once("config.php");

include_once($pathlib."/liblogtodisk.php");
include_once($pathlib."/liblogbymail.php");
include_once($pathlib."/liblogtomysql.php");

logtodisk($pathlog,$modulename);
logbymail($mailaddr,$modulename,$_SERVER['PHP_SELF'],"");
logtomysql($modulename,'',$mysqlhost,$mysqltcpport,$mysqlsocket,$mysqluser,$mysqlpassword,$mysqldatabase,$mysqlalertstable,$mysqlhoneypotstable);


if($frameset_loaded==1)

echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "DTD/xhtml1-transitional.dtd">
<!-- Horde: Copyright 2000-2004, The Horde Project. Horde is under the LGPL. -->
<!--                    Horde Project: http://horde.org/                     -->
<!--    GNU Library Public License: http://www.fsf.org/copyleft/lgpl.html    -->
<html lang="en-US"><head>
<meta http-equiv="refresh" content="300;url=services/portal/?Horde=5ac6c1690a91622c7489c5c40a5dbc5d" />
<title>Horde :: My Portal</title>
<link href="themes/screen.css" rel="stylesheet" type="text/css" />
<link href="themes/bluewhite/screen.css" rel="stylesheet" type="text/css" />
<link rel="SHORTCUT ICON" href="themes/graphics/favicon.ico" />
</head>

<body>
<div id="menu">
 <h1 style="float:left">Welcome, Administrator</h1>
 <span style="float:right">
<ul><li><a href="services/portal/?Horde=5ac6c1690a91622c7489c5c40a5dbc5d" onmouseout="window.status=\'\';" onmouseover="window.status=\'Home\'; return true;"><img src="themes/graphics/horde.png" alt="Home" title="Home" /><br />Home</a></li>
<li><a href="services/portal/edit.php?Horde=5ac6c1690a91622c7489c5c40a5dbc5d" onmouseout="window.status=\'\';" onmouseover="window.status=\'Layout\'; return true;"><img src="themes/graphics/layout.png" alt="Layout" title="Layout" /><br />Layout</a></li>
<li><a href="admin/?Horde=5ac6c1690a91622c7489c5c40a5dbc5d" onmouseout="window.status=\'\';" onmouseover="window.status=\'Administration\'; return true;"><img src="themes/graphics/administration.png" alt="Administration" title="Administration" /><br />Administration</a></li>
</ul> </span>
</div>
<br class="spacer" />
<p class="notice"><img src="themes/graphics/alerts/message.png" alt="Message" title="Message" />&nbsp;&nbsp;Last login: Never</p><br class="spacer" /><table class="nopadding" cellspacing="6" width="100%">
</table>
<script language="JavaScript1.5" type="text/javascript">
<!--
var _setHordeTitle = 1;
try {
    if (parent.frames.horde_main) parent.document.title = \'Horde :: My Portal\';
} catch (e) {
}
// -->
</script>
<script language="JavaScript" type="text/javascript">
<!--
if (typeof(_setHordeTitle) == \'undefined\' && parent.frames.horde_main) parent.document.title = \'Horde :: My Portal\';
// -->
</script>
</body>
</html>';

else

if($logout_reason=="logout")

echo '<br />
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "DTD/xhtml1-frameset.dtd">
<html>
<head>
  <link rel="SHORTCUT ICON" href="mail/themes/graphics/favicon.ico"  />
  <title>Horde</title>
</head>

<frameset cols="150,*" border="0" id="hf" framespacing="0" frameborder="0">
  <frame name="horde_menu" src="services/portal/sidebar.php?Horde=5ac6c1690a91622c7489c5c40a5dbc5d" scrolling="auto" marginheight="0" marginwidth="0" frameborder="0" noresize="noresize" />
  <frame name="horde_main" src="login.php?Horde=5ac6c1690a91622c7489c5c40a5dbc5d&amp;frameset_loaded=1" scrolling="auto" marginheight="0" marginwidth="0" frameborder="0" noresize="noresize" />
</frameset>

</html>';

else


echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "DTD/xhtml1-frameset.dtd">
<html>
<head>
  <link rel="SHORTCUT ICON" href="themes/graphics/favicon.ico"  />
  <title>Horde</title>
</head>

<frameset cols="150,*" border="0" id="hf" framespacing="0" frameborder="0">
  <frame name="horde_menu" src="services/portal/sidebar.php?Horde=5ac6c1690a91622c7489c5c40a5dbc5d" scrolling="auto" marginheight="0" marginwidth="0" frameborder="0" noresize="noresize" />
  <frame name="horde_main" src="login.php?Horde=5ac6c1690a91622c7489c5c40a5dbc5d&amp;frameset_loaded=1" scrolling="auto" marginheight="0" marginwidth="0" frameborder="0" noresize="noresize" />
</frameset>

</html>';

?>
