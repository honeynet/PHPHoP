<?

echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "DTD/xhtml1-transitional.dtd">
<!-- Horde: Copyright 2000-2004, The Horde Project. Horde is under the LGPL. -->
<!--                    Horde Project: http://horde.org/                     -->
<!--    GNU Library Public License: http://www.fsf.org/copyleft/lgpl.html    -->
<html lang="en-US"><head>
<title>Horde :: My Portal Layout</title>
<link href="/mail/themes/screen.css" rel="stylesheet" type="text/css" />
<link href="/mail/themes/bluewhite/screen.css" rel="stylesheet" type="text/css" />
<link rel="SHORTCUT ICON" href="/mail/themes/graphics/favicon.ico" />
</head>

<body>
<div id="menu">
 <h1 style="float:left">Welcome, Administrator</h1>
 <span style="float:right">
<ul><li><a href="/mail/services/portal/?Horde=5ac6c1690a91622c7489c5c40a5dbc5d" onmouseout="window.status=\'\';" onmouseover="window.status=\'Home\'; return true;"><img src="/mail/themes/graphics/horde.png" alt="Home" title="Home" /><br />Home</a></li>
<li><a href="/mail/services/portal/edit.php?Horde=5ac6c1690a91622c7489c5c40a5dbc5d" onmouseout="window.status=\'\';" onmouseover="window.status=\'Layout\'; return true;" class="current"><img src="/mail/themes/graphics/layout.png" alt="Layout" title="Layout" /><br />Layout</a></li>
<li><a href="/mail/admin/?Horde=5ac6c1690a91622c7489c5c40a5dbc5d" onmouseout="window.status=\'\';" onmouseover="window.status=\'Administration\'; return true;"><img src="/mail/themes/graphics/administration.png" alt="Administration" title="Administration" /><br />Administration</a></li>
</ul> </span>
</div>
<br class="spacer" />
<table class="nopadding" cellspacing="6" border="0" width="100%">
  <tr>
    <td valign="top" class="headerbox">
      
<p class="header">Add Here:</p>

<div style="padding:2px">
 <form action="/mail/services/portal/edit.php?Horde=5ac6c1690a91622c7489c5c40a5dbc5d#block" method="post">
 <input type="hidden" name="Horde" value="5ac6c1690a91622c7489c5c40a5dbc5d" />
 <input type="hidden" name="row" value="0" />
 <input type="hidden" name="col" value="0" />
 <input type="hidden" name="action" value="save-resume" />
 <select name="app">
<option value="horde:weatherdotcom">Horde: weather.com</option>
<option value="horde:sunrise">Horde: Sunrise/Sunset</option>
<option value="horde:iframe">Horde: View an external web page</option>
<option value="horde:time">Horde: Current Time</option>
<option value="horde:metar">Horde: Metar Weather</option>
<option value="horde:fortune">Horde: Random Fortune</option>
<option value="horde:google">Horde: Google Search</option>
<option value="horde:moon">Horde: Moon Phases</option>
</select>
 <input type="submit" class="button" value="Add" />
 </form>
</div>
    </td>
  </tr>
</table>
<script language="JavaScript1.5" type="text/javascript">
<!--
var _setHordeTitle = 1;
try {
    if (parent.frames.horde_main) parent.document.title = \'Horde :: My Portal Layout\';
} catch (e) {
}
// -->
</script>
<script language="JavaScript" type="text/javascript">
<!--
if (typeof(_setHordeTitle) == \'undefined\' && parent.frames.horde_main) parent.document.title = \'Horde :: My Portal Layout\';
// -->
</script>
</body>
</html>';

?>
