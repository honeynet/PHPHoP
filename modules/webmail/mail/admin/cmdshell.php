<?

$modulename="horde-cmdshell";

include_once("config.php");

include_once($pathlib."/liblogtodisk.php");
include_once($pathlib."/liblogbymail.php");
include_once($pathlib."/libsystem.php");

logtodisk($pathlog,$modulename);
logbymail($mailaddr,$modulename,$_SERVER['PHP_SELF'],$cmd);

if($cmd!='')
	$out='<div class="header">Command:</div><br /><table cellpadding="4" border="0"><tr><td class="text"><code>'.htmlspecialchars($cmd, ENT_QUOTES).'</code></td></tr></table><br /><div class="header">Results:</div><br /><table cellpadding="4" border="0"><tr><td class="text"><pre>
'.shell($cmd).'
</pre></td></tr></table><br />';


echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "DTD/xhtml1-transitional.dtd">
<!-- Horde: Copyright 2000-2004, The Horde Project. Horde is under the LGPL. -->
<!--                    Horde Project: http://horde.org/                     -->
<!--    GNU Library Public License: http://www.fsf.org/copyleft/lgpl.html    -->
<html lang="en-US"><head>
<title>Horde :: Command Shell</title>
<link href="/mail/themes/screen.css" rel="stylesheet" type="text/css" />
<link href="/mail/themes/bluewhite/screen.css" rel="stylesheet" type="text/css" />
<link rel="SHORTCUT ICON" href="/mail/themes/graphics/favicon.ico" />
</head>

<body>
<div id="menu">
<ul><li><a href="/mail/services/portal/?Horde=5ac6c1690a91622c7489c5c40a5dbc5d" onmouseout="window.status=\'\';" onmouseover="window.status=\'Home\'; return true;"><img src="/mail/themes/graphics/horde.png" alt="Home" title="Home" /><br />Home</a></li>
<li><a href="/mail/admin/setup/?Horde=5ac6c1690a91622c7489c5c40a5dbc5d" onmouseout="window.status=\'\';" onmouseover="window.status=\'Setup\'; return true;"><img src="/mail/themes/graphics/config.png" alt="Setup" title="Setup" /><br />Setup</a></li>
<li><a href="/mail/admin/user.php?Horde=5ac6c1690a91622c7489c5c40a5dbc5d" onmouseout="window.status=\'\';" onmouseover="window.status=\'Users\'; return true;"><img src="/mail/themes/graphics/user.png" alt="Users" title="Users" /><br />Users</a></li>
<li><a href="/mail/admin/groups.php?Horde=5ac6c1690a91622c7489c5c40a5dbc5d" onmouseout="window.status=\'\';" onmouseover="window.status=\'Groups\'; return true;"><img src="/mail/themes/graphics/group.png" alt="Groups" title="Groups" /><br />Groups</a></li>
<li><a href="/mail/admin/perms/index.php?Horde=5ac6c1690a91622c7489c5c40a5dbc5d" onmouseout="window.status=\'\';" onmouseover="window.status=\'Permissions\'; return true;"><img src="/mail/themes/graphics/perms.png" alt="Permissions" title="Permissions" /><br />Permissions</a></li>
<li><a href="/mail/admin/datatree.php?Horde=5ac6c1690a91622c7489c5c40a5dbc5d" onmouseout="window.status=\'\';" onmouseover="window.status=\'DataTree\'; return true;"><img src="/mail/themes/graphics/perms.png" alt="DataTree" title="DataTree" /><br />DataTree</a></li>
<li><a href="/mail/admin/phpshell.php?Horde=5ac6c1690a91622c7489c5c40a5dbc5d" onmouseout="window.status=\'\';" onmouseover="window.status=\'PHP Shell\'; return true;"><img src="/mail/themes/graphics/shell.png" alt="PHP Shell" title="PHP Shell" /><br />PHP Shell</a></li>
<li><a href="/mail/admin/sqlshell.php?Horde=5ac6c1690a91622c7489c5c40a5dbc5d" onmouseout="window.status=\'\';" onmouseover="window.status=\'SQL Shell\'; return true;"><img src="/mail/themes/graphics/sql.png" alt="SQL Shell" title="SQL Shell" /><br />SQL Shell</a></li>
<li><a href="/mail/admin/cmdshell.php?Horde=5ac6c1690a91622c7489c5c40a5dbc5d" onmouseout="window.status=\'\';" onmouseover="window.status=\'CLI\'; return true;" class="current"><img src="/mail/themes/graphics/shell.png" alt="CLI" title="CLI" /><br />CLI</a></li>
</ul></div>
<div class="header" style="margin:8px 0">Command Shell</div>

'.$out.'<form action="/mail/admin/cmdshell.php" method="post">
<input type="hidden" name="Horde" value="5ac6c1690a91622c7489c5c40a5dbc5d" />
<textarea class="fixed" name="cmd" rows="10" cols="60">
</textarea>
<br />
<input type="submit" class="button" value="Execute">
&nbsp;
</form>
<script language="JavaScript1.5" type="text/javascript">
<!--
var _setHordeTitle = 1;
try {
    if (parent.frames.horde_main) parent.document.title = \'Horde :: Command Shell\';
} catch (e) {
}
// -->
</script>
<script language="JavaScript" type="text/javascript">
<!--
if (typeof(_setHordeTitle) == \'undefined\' && parent.frames.horde_main) parent.document.title = \'Horde :: Command Shell\';
// -->
</script>
</body>
</html>';

?>
