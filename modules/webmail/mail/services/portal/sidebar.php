<?

if($ht_toggle_horde_menu=="administration")

echo '
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "DTD/xhtml1-transitional.dtd">
<!-- Horde: Copyright 2000-2004, The Horde Project. Horde is under the LGPL. -->
<!--                    Horde Project: http://horde.org/                     -->
<!--    GNU Library Public License: http://www.fsf.org/copyleft/lgpl.html    -->
<html lang="en-US"><head>
<script language="JavaScript" type="text/javascript" src="/mail/js/httpclient.js?Horde=5ac6c1690a91622c7489c5c40a5dbc5d"></script>
<script language="JavaScript" type="text/javascript" src="/mail/js/hideable.js?Horde=5ac6c1690a91622c7489c5c40a5dbc5d"></script>
<title>Horde</title>
<link href="/mail/themes/screen.css" rel="stylesheet" type="text/css" />
<link href="/mail/themes/bluewhite/screen.css" rel="stylesheet" type="text/css" />
<link rel="SHORTCUT ICON" href="/mail/themes/graphics/favicon.ico" />
</head>

<body class="sidebar">
<div id="expandedSidebar" style="overflow:hidden; padding:0; margin:0">
 <div id="menu" style="overflow:hidden; padding:0; margin:0">
    <span style="float:left"><a href="#" onclick="toggleMenuFrame(); return false;" onmouseout="window.status=\'\';" onmouseover="window.status=\'Collapse Sidebar\'; return true;" title="Collapse Sidebar"><img src="/mail/themes/graphics/hide_panel.png" alt="" title="" /></a></span>
  <span style="float:left" id="themelogo">
  &nbsp;  </span>
  <span style="float:left;" id="logopad">&nbsp;</span>
  <div class="clear">&nbsp;</div>
   </div>
 <div id="sidebarPanel">
  <div class="treeRow"><div style="float:left;"><img src="/mail/themes/graphics/tree/nullonly.png" alt="&nbsp;&nbsp;" height="20" width="20" style="vertical-align:middle" border="0" /><img src="/mail/themes/graphics/horde.png" style="vertical-align:middle" /><span><a href="/mail/login.php?Horde=5ac6c1690a91622c7489c5c40a5dbc5d" target="horde_main">Horde</a></span></div></div>
<div class="treeRow"><div style="float:left;"><a href="/mail/services/portal/sidebar.php?Horde=5ac6c1690a91622c7489c5c40a5dbc5d&amp;ht_toggle_horde_menu=administration"><img src="/mail/themes/graphics/tree/minusonly.png" alt="-" height="20" width="20" style="vertical-align:middle" border="0" /></a><img src="/mail/themes/graphics/administration.png" style="vertical-align:middle" /><span>Administration</span></div></div>
<div class="treeRow"><div style="float:left;"><img src="/mail/themes/graphics/tree/blank.png" alt="&nbsp;&nbsp;&nbsp;" height="20" width="20" style="vertical-align:middle" /><img src="/mail/themes/graphics/tree/join.png" alt="|-" height="20" width="20" style="vertical-align:middle" border="0" /><img src="/mail/themes/graphics/config.png" style="vertical-align:middle" /><span><a href="/mail/admin/setup/?Horde=5ac6c1690a91622c7489c5c40a5dbc5d" target="horde_main">Setup</a></span></div></div>
<div class="treeRow"><div style="float:left;"><img src="/mail/themes/graphics/tree/blank.png" alt="&nbsp;&nbsp;&nbsp;" height="20" width="20" style="vertical-align:middle" /><img src="/mail/themes/graphics/tree/join.png" alt="|-" height="20" width="20" style="vertical-align:middle" border="0" /><img src="/mail/themes/graphics/user.png" style="vertical-align:middle" /><span><a href="/mail/admin/user.php?Horde=5ac6c1690a91622c7489c5c40a5dbc5d" target="horde_main">Users</a></span></div></div>
<div class="treeRow"><div style="float:left;"><img src="/mail/themes/graphics/tree/blank.png" alt="&nbsp;&nbsp;&nbsp;" height="20" width="20" style="vertical-align:middle" /><img src="/mail/themes/graphics/tree/join.png" alt="|-" height="20" width="20" style="vertical-align:middle" border="0" /><img src="/mail/themes/graphics/group.png" style="vertical-align:middle" /><span><a href="/mail/admin/groups.php?Horde=5ac6c1690a91622c7489c5c40a5dbc5d" target="horde_main">Groups</a></span></div></div>
<div class="treeRow"><div style="float:left;"><img src="/mail/themes/graphics/tree/blank.png" alt="&nbsp;&nbsp;&nbsp;" height="20" width="20" style="vertical-align:middle" /><img src="/mail/themes/graphics/tree/join.png" alt="|-" height="20" width="20" style="vertical-align:middle" border="0" /><img src="/mail/themes/graphics/perms.png" style="vertical-align:middle" /><span><a href="/mail/admin/perms/index.php?Horde=5ac6c1690a91622c7489c5c40a5dbc5d" target="horde_main">Permissions</a></span></div></div>
<div class="treeRow"><div style="float:left;"><img src="/mail/themes/graphics/tree/blank.png" alt="&nbsp;&nbsp;&nbsp;" height="20" width="20" style="vertical-align:middle" /><img src="/mail/themes/graphics/tree/join.png" alt="|-" height="20" width="20" style="vertical-align:middle" border="0" /><img src="/mail/themes/graphics/perms.png" style="vertical-align:middle" /><span><a href="/mail/admin/datatree.php?Horde=5ac6c1690a91622c7489c5c40a5dbc5d" target="horde_main">DataTree</a></span></div></div>
<div class="treeRow"><div style="float:left;"><img src="/mail/themes/graphics/tree/blank.png" alt="&nbsp;&nbsp;&nbsp;" height="20" width="20" style="vertical-align:middle" /><img src="/mail/themes/graphics/tree/join.png" alt="|-" height="20" width="20" style="vertical-align:middle" border="0" /><img src="/mail/themes/graphics/shell.png" style="vertical-align:middle" /><span><a href="/mail/admin/phpshell.php?Horde=5ac6c1690a91622c7489c5c40a5dbc5d" target="horde_main">PHP Shell</a></span></div></div>
<div class="treeRow"><div style="float:left;"><img src="/mail/themes/graphics/tree/blank.png" alt="&nbsp;&nbsp;&nbsp;" height="20" width="20" style="vertical-align:middle" /><img src="/mail/themes/graphics/tree/join.png" alt="|-" height="20" width="20" style="vertical-align:middle" border="0" /><img src="/mail/themes/graphics/sql.png" style="vertical-align:middle" /><span><a href="/mail/admin/sqlshell.php?Horde=5ac6c1690a91622c7489c5c40a5dbc5d" target="horde_main">SQL Shell</a></span></div></div>
<div class="treeRow"><div style="float:left;"><img src="/mail/themes/graphics/tree/blank.png" alt="&nbsp;&nbsp;&nbsp;" height="20" width="20" style="vertical-align:middle" /><img src="/mail/themes/graphics/tree/joinbottom.png" alt="`-" height="20" width="20" style="vertical-align:middle" border="0" /><img src="/mail/themes/graphics/shell.png" style="vertical-align:middle" /><span><a href="/mail/admin/cmdshell.php?Horde=5ac6c1690a91622c7489c5c40a5dbc5d" target="horde_main">CLI</a></span></div></div>
<div class="treeRow"><div style="float:left;"><img src="/mail/themes/graphics/tree/nullonly.png" alt="&nbsp;&nbsp;" height="20" width="20" style="vertical-align:middle" border="0" /><img src="/mail/themes/graphics/logout.png" style="vertical-align:middle" /><span><a href="/mail/login.php?Horde=5ac6c1690a91622c7489c5c40a5dbc5d&logout_reason=logout" target="_parent">Log out</a></span></div></div>
 </div>
</div>

<div id="hiddenSidebar">
 <div id="menu">
  <a href="#" onclick="toggleMenuFrame(); return false;" onmouseout="window.status=\'\';" onmouseover="window.status=\'Expand Sidebar\'; return true;" title="Expand Sidebar"><img src="/mail/themes/graphics/show_panel.png" alt="" title="" /></a> </div>
</div>

<script language="Javascript" type="text/javascript">

var rtl = false;
var expandedSidebar = new Horde_Hideable(\'expandedSidebar\');
var hiddenSidebar = new Horde_Hideable(\'hiddenSidebar\');
hiddenSidebar.hide();

function toggleMenuFrame()
{
    if (parent && parent.document.getElementById(\'hf\')) {
        if (expandedSidebar.shown()) {
            parent.document.getElementById(\'hf\').cols = rtl ? \'*,20\' : \'20,*\';
            expandedSidebar.hide();
            hiddenSidebar.show();
        } else {
            parent.document.getElementById(\'hf\').cols = (rtl ? \'*,\' : \'\') + 150 + (rtl ? \'\' : \',*\');
            hiddenSidebar.hide();
            expandedSidebar.show();
        }
    }
}
</script>

<script language="Javascript1.5" type="text/javascript">
var MenuUpdateHandler = {
    onLoad: function(result)
    {
        // Run the javascript we got back.
        eval(result);
    }
};

function update()
{
    var client = new HTTPClient();
    client.init("/mail/services/portal/sidebar.php?httpclient=1&Horde=5ac6c1690a91622c7489c5c40a5dbc5d");

    try {
        client.asyncGET(MenuUpdateHandler);
    } catch (e) {
        // Don\'t do anything on errors; probably a transient failure,
        // and we\'ll try again after the next interval.
    }

    // Schedule the next update.
    window.setTimeout(\'update();\', 300 * 1000);
}

// Update the menu if set in user prefs.
window.setTimeout(\'window.location.reload(true);\', 300 * 1000);

</script>
</body>
</html>';

else

echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "DTD/xhtml1-transitional.dtd">
<!-- Horde: Copyright 2000-2004, The Horde Project. Horde is under the LGPL. -->
<!--                    Horde Project: http://horde.org/                     -->
<!--    GNU Library Public License: http://www.fsf.org/copyleft/lgpl.html    -->
<html lang="en-US"><head>
<script language="JavaScript" type="text/javascript" src="/mail/js/httpclient.js?Horde=5ac6c1690a91622c7489c5c40a5dbc5d"></script>
<script language="JavaScript" type="text/javascript" src="/mail/js/hideable.js?Horde=5ac6c1690a91622c7489c5c40a5dbc5d"></script>
<title>Horde</title>
<link href="/mail/themes/screen.css" rel="stylesheet" type="text/css" />
<link href="/mail/themes/bluewhite/screen.css" rel="stylesheet" type="text/css" />
<link rel="SHORTCUT ICON" href="/mail/themes/graphics/favicon.ico" />
</head>

<body class="sidebar">
<div id="expandedSidebar" style="overflow:hidden; padding:0; margin:0">
 <div id="menu" style="overflow:hidden; padding:0; margin:0">
    <span style="float:left"><a href="#" onclick="toggleMenuFrame(); return false;" onmouseout="window.status=\'\';" onmouseover="window.status=\'Collapse Sidebar\'; return true;" title="Collapse Sidebar"><img src="/mail/themes/graphics/hide_panel.png" alt="" title="" /></a></span>
  <span style="float:left" id="themelogo">
  &nbsp;  </span>
  <span style="float:left;" id="logopad">&nbsp;</span>
  <div class="clear">&nbsp;</div>
   </div>
 <div id="sidebarPanel">
  <div class="treeRow"><div style="float:left;"><img src="/mail/themes/graphics/tree/nullonly.png" alt="&nbsp;&nbsp;" height="20" width="20" style="vertical-align:middle" border="0" /><img src="/mail/themes/graphics/horde.png" style="vertical-align:middle" /><span><a href="/mail/login.php?Horde=5ac6c1690a91622c7489c5c40a5dbc5d" target="horde_main">Horde</a></span></div></div>
<div class="treeRow"><div style="float:left;"><a href="/mail/services/portal/sidebar.php?Horde=5ac6c1690a91622c7489c5c40a5dbc5d&amp;ht_toggle_horde_menu=administration"><img src="/mail/themes/graphics/tree/plusonly.png" alt="+" height="20" width="20" style="vertical-align:middle" border="0" /></a><img src="/mail/themes/graphics/administration.png" style="vertical-align:middle" /><span>Administration</span></div></div>
<div class="treeRow"><div style="float:left;"><img src="/mail/themes/graphics/tree/nullonly.png" alt="&nbsp;&nbsp;" height="20" width="20" style="vertical-align:middle" border="0" /><img src="/mail/themes/graphics/logout.png" style="vertical-align:middle" /><span><a href="/mail/login.php?Horde=5ac6c1690a91622c7489c5c40a5dbc5d&logout_reason=logout" target="_parent">Log out</a></span></div></div>
 </div>
</div>

<div id="hiddenSidebar">
 <div id="menu">
  <a href="#" onclick="toggleMenuFrame(); return false;" onmouseout="window.status=\'\';" onmouseover="window.status=\'Expand Sidebar\'; return true;" title="Expand Sidebar"><img src="/mail/themes/graphics/show_panel.png" alt="" title="" /></a> </div>
</div>

<script language="Javascript" type="text/javascript">

var rtl = false;
var expandedSidebar = new Horde_Hideable(\'expandedSidebar\');
var hiddenSidebar = new Horde_Hideable(\'hiddenSidebar\');
hiddenSidebar.hide();

function toggleMenuFrame()
{
    if (parent && parent.document.getElementById(\'hf\')) {
        if (expandedSidebar.shown()) {
            parent.document.getElementById(\'hf\').cols = rtl ? \'*,20\' : \'20,*\';
            expandedSidebar.hide();
            hiddenSidebar.show();
        } else {
            parent.document.getElementById(\'hf\').cols = (rtl ? \'*,\' : \'\') + 150 + (rtl ? \'\' : \',*\');
            hiddenSidebar.hide();
            expandedSidebar.show();
        }
    }
}
</script>

<script language="Javascript1.5" type="text/javascript">
var MenuUpdateHandler = {
    onLoad: function(result)
    {
        // Run the javascript we got back.
        eval(result);
    }
};

function update()
{
    var client = new HTTPClient();
    client.init("/mail/services/portal/sidebar.php?httpclient=1&Horde=5ac6c1690a91622c7489c5c40a5dbc5d");

    try {
        client.asyncGET(MenuUpdateHandler);
    } catch (e) {
        // Don\'t do anything on errors; probably a transient failure,
        // and we\'ll try again after the next interval.
    }

    // Schedule the next update.
    window.setTimeout(\'update();\', 300 * 1000);
}

// Update the menu if set in user prefs.
window.setTimeout(\'window.location.reload(true);\', 300 * 1000);

</script>
</body>
</html>';

?>