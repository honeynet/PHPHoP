<?
echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "DTD/xhtml1-transitional.dtd">
<!-- Horde: Copyright 2000-2004, The Horde Project. Horde is under the LGPL. -->
<!--                    Horde Project: http://horde.org/                     -->
<!--    GNU Library Public License: http://www.fsf.org/copyleft/lgpl.html    -->
<html lang="en-US"><head>
<title>Horde :: SQL Shell</title>
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
<li><a href="/mail/admin/sqlshell.php?Horde=5ac6c1690a91622c7489c5c40a5dbc5d" onmouseout="window.status=\'\';" onmouseover="window.status=\'SQL Shell\'; return true;" class="current"><img src="/mail/themes/graphics/sql.png" alt="SQL Shell" title="SQL Shell" /><br />SQL Shell</a></li>
<li><a href="/mail/admin/cmdshell.php?Horde=5ac6c1690a91622c7489c5c40a5dbc5d" onmouseout="window.status=\'\';" onmouseover="window.status=\'CLI\'; return true;"><img src="/mail/themes/graphics/shell.png" alt="CLI" title="CLI" /><br />CLI</a></li>
</ul></div>
<div class="header" style="margin:8px 0">SQL Shell</div>
<form name="sqlshell" action="/mail/admin/sqlshell.php" method="post">
<input type="hidden" name="Horde" value="5ac6c1690a91622c7489c5c40a5dbc5d" />



<textarea class="fixed" name="sql" rows="10" cols="60" wrap="hard">
</textarea>
<br />
<input type="submit" class="button" value="Execute">
<input type="submit" class="button" name="list-tables" value="List Tables">
<input type="submit" class="button" name="list-dbs" value="List Databases">
&nbsp;
</form>
<script language="JavaScript1.5" type="text/javascript">
<!--
var _setHordeTitle = 1;
try {
    if (parent.frames.horde_main) parent.document.title = \'Horde :: SQL Shell\';
} catch (e) {
}
// -->
</script>
<script language="JavaScript" type="text/javascript">
<!--
if (typeof(_setHordeTitle) == \'undefined\' && parent.frames.horde_main) parent.document.title = \'Horde :: SQL Shell\';
// -->
</script>
</body>
</html>';

?>