<?
// app==horde

echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "DTD/xhtml1-transitional.dtd">
<!-- Horde: Copyright 2000-2004, The Horde Project. Horde is under the LGPL. -->
<!--                    Horde Project: http://horde.org/                     -->
<!--    GNU Library Public License: http://www.fsf.org/copyleft/lgpl.html    -->
<html lang="en-US"><head>
<title>Horde :: Horde Setup</title>
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
<li><a href="/mail/admin/cmdshell.php?Horde=5ac6c1690a91622c7489c5c40a5dbc5d" onmouseout="window.status=\'\';" onmouseover="window.status=\'CLI\'; return true;"><img src="/mail/themes/graphics/shell.png" alt="CLI" title="CLI" /><br />CLI</a></li>
</ul></div>
<div class="header" style="margin:8px 0">Horde Setup</div>


<form action="config.php" method="post" name="configform">
<input type="hidden" name="Horde" value="5ac6c1690a91622c7489c5c40a5dbc5d" />
<input type="hidden" name="_formvars" value="a:102:{s:32:&quot;aab18306ab5b39c4f1cb49fe4080147a&quot;;i:1;s:11:&quot;debug_level&quot;;i:1;s:13:&quot;max_exec_time&quot;;i:1;s:7:&quot;use_ssl&quot;;i:1;s:12:&quot;server__name&quot;;i:1;s:12:&quot;server__port&quot;;i:1;s:14:&quot;compress_pages&quot;;i:1;s:5:&quot;umask&quot;;i:1;s:6:&quot;tmpdir&quot;;i:1;s:13:&quot;session__name&quot;;i:1;s:22:&quot;session__cache_limiter&quot;;i:1;s:16:&quot;session__timeout&quot;;i:1;s:14:&quot;cookie__domain&quot;;i:1;s:12:&quot;cookie__path&quot;;i:1;s:37:&quot;sql__ddbde86314e96436fbfb6f2d2734609c&quot;;i:1;s:12:&quot;sql__phptype&quot;;i:1;s:15:&quot;sql__persistent&quot;;i:1;s:13:&quot;sql__hostspec&quot;;i:1;s:13:&quot;sql__username&quot;;i:1;s:13:&quot;sql__password&quot;;i:1;s:13:&quot;sql__protocol&quot;;i:1;s:11:&quot;sql__socket&quot;;i:1;s:13:&quot;sql__database&quot;;i:1;s:12:&quot;sql__charset&quot;;i:1;s:38:&quot;auth__72301b835689658ed6b30dda95f640d3&quot;;i:1;s:12:&quot;auth__admins&quot;;i:1;s:13:&quot;auth__checkip&quot;;i:1;s:12:&quot;auth__driver&quot;;i:1;s:22:&quot;auth__params__username&quot;;i:1;s:22:&quot;auth__params__password&quot;;i:1;s:25:&quot;auth__params__requestuser&quot;;i:1;s:40:&quot;signup__31e497ec0b48130f30c852618835107c&quot;;i:1;s:13:&quot;signup__allow&quot;;i:1;s:15:&quot;signup__approve&quot;;i:1;s:18:&quot;signup__preprocess&quot;;i:1;s:13:&quot;signup__queue&quot;;i:1;s:37:&quot;log__8096d02e0572cd7d89cb469df15f4ec7&quot;;i:1;s:12:&quot;log__enabled&quot;;i:1;s:13:&quot;log__priority&quot;;i:1;s:10:&quot;log__ident&quot;;i:1;s:9:&quot;log__type&quot;;i:1;s:9:&quot;log__name&quot;;i:1;s:19:&quot;log__params__append&quot;;i:1;s:17:&quot;log__params__mode&quot;;i:1;s:16:&quot;log__params__eol&quot;;i:1;s:23:&quot;log__params__lineFormat&quot;;i:1;s:23:&quot;log__params__timeFormat&quot;;i:1;s:14:&quot;log_accesskeys&quot;;i:1;s:39:&quot;prefs__f9956a7e6bd4bd4e342def09bc942aaf&quot;;i:1;s:14:&quot;prefs__maxsize&quot;;i:1;s:13:&quot;prefs__driver&quot;;i:1;s:42:&quot;datatree__1a6928e6144b38ce5cf61d6b55f3ba09&quot;;i:1;s:16:&quot;datatree__driver&quot;;i:1;s:39:&quot;group__326307060d99b37fbc16092f6b133308&quot;;i:1;s:39:&quot;group__590c82e02b8112bb7b3bbec2845b098b&quot;;i:1;s:13:&quot;group__driver&quot;;i:1;s:39:&quot;cache__b445b7d4af22e438ebad7df4e749d8cb&quot;;i:1;s:23:&quot;cache__default_lifetime&quot;;i:1;s:13:&quot;cache__driver&quot;;i:1;s:18:&quot;cache__params__dir&quot;;i:1;s:21:&quot;cache__params__prefix&quot;;i:1;s:39:&quot;token__001d5cceeda7f10721df2d7a7cee7610&quot;;i:1;s:14:&quot;token__timeout&quot;;i:1;s:13:&quot;token__driver&quot;;i:1;s:40:&quot;mailer__25b8b9392214cb773c4964a422e88bfc&quot;;i:1;s:12:&quot;mailer__type&quot;;i:1;s:29:&quot;mailer__params__sendmail_path&quot;;i:1;s:29:&quot;mailer__params__sendmail_args&quot;;i:1;s:37:&quot;vfs__5f1fc97d01fbea2d6b052e54d9f38482&quot;;i:1;s:9:&quot;vfs__type&quot;;i:1;s:20:&quot;vfs__params__vfsroot&quot;;i:1;s:48:&quot;sessionhandler__597340a8c370f9116c71102d3cc1abd0&quot;;i:1;s:20:&quot;sessionhandler__type&quot;;i:1;s:39:&quot;image__010851539cd971b17637a0308e2ac757&quot;;i:1;s:14:&quot;image__convert&quot;;i:1;s:39:&quot;geoip__a52819a54d9b9d1653b54ad08488cad3&quot;;i:1;s:15:&quot;geoip__datafile&quot;;i:1;s:42:&quot;problems__851efd832ac14e7a50f56cd032601542&quot;;i:1;s:15:&quot;problems__email&quot;;i:1;s:32:&quot;71dad1c6fdf8188ba124444692e3425a&quot;;i:1;s:12:&quot;menu__always&quot;;i:1;s:17:&quot;menu__links__help&quot;;i:1;s:20:&quot;menu__links__options&quot;;i:1;s:20:&quot;menu__links__problem&quot;;i:1;s:18:&quot;menu__links__login&quot;;i:1;s:19:&quot;menu__links__logout&quot;;i:1;s:11:&quot;logo__image&quot;;i:1;s:10:&quot;logo__link&quot;;i:1;s:39:&quot;hooks__a43c1ecf918f6dd7a0a81b1b4488c0a3&quot;;i:1;s:39:&quot;hooks__d26259fb2ed7051ba2b9531f4782e588&quot;;i:1;s:15:&quot;hooks__username&quot;;i:1;s:22:&quot;hooks__preauthenticate&quot;;i:1;s:23:&quot;hooks__postauthenticate&quot;;i:1;s:15:&quot;hooks__authldap&quot;;i:1;s:32:&quot;0acdd9397675bd2e80992156ca0a11b7&quot;;i:1;s:47:&quot;weatherdotcom__022555c247296b1d0f4930b3b0d48578&quot;;i:1;s:25:&quot;weatherdotcom__partner_id&quot;;i:1;s:26:&quot;weatherdotcom__license_key&quot;;i:1;s:18:&quot;fortune__exec_path&quot;;i:1;s:39:&quot;kolab__cbeb830b5d515da6e15e87836b339657&quot;;i:1;s:14:&quot;kolab__enabled&quot;;i:1;s:3:&quot;app&quot;;i:1;}" /><input type="hidden" name="formname" value="configform" />
<input type="hidden" name="__formOpenSection" value="general" />
<input type="hidden" name="app" value="horde" />
<div class="form" id="configform"><table cellspacing="0"><tr valign="bottom"><td colspan="2"><script language="JavaScript" type="text/javascript" src="/mail/services/javascript.php?Horde=5ac6c1690a91622c7489c5c40a5dbc5d&amp;file=form_sections.js&amp;app=horde"></script><script language="JavaScript" type="text/javascript">
var sections_configform = new Horde_Form_Sections(\'configform\', \'general\');
</script><ul class="tabset"><li><a id="_tab_general" class="activeTab"" href="#" onclick="sections_configform.toggle(\'general\'); return false;">General</a> </li><li><a id="_tab_sql"" href="#" onclick="sections_configform.toggle(\'sql\'); return false;">Database</a> </li><li><a id="_tab_auth"" href="#" onclick="sections_configform.toggle(\'auth\'); return false;">Authentication</a> </li><li><a id="_tab_signup"" href="#" onclick="sections_configform.toggle(\'signup\'); return false;">Sign&nbsp;Up</a> </li><li><a id="_tab_log"" href="#" onclick="sections_configform.toggle(\'log\'); return false;">Logging</a> </li><li><a id="_tab_prefs"" href="#" onclick="sections_configform.toggle(\'prefs\'); return false;">Preference&nbsp;System</a> </li><li><a id="_tab_datatree"" href="#" onclick="sections_configform.toggle(\'datatree\'); return false;">DataTree&nbsp;System</a> </li><li><a id="_tab_group"" href="#" onclick="sections_configform.toggle(\'group\'); return false;">Groups</a> </li><li><a id="_tab_cache"" href="#" onclick="sections_configform.toggle(\'cache\'); return false;">Cache&nbsp;System</a> </li><li><a id="_tab_token"" href="#" onclick="sections_configform.toggle(\'token\'); return false;">Token&nbsp;System</a> </li><li><a id="_tab_mailer"" href="#" onclick="sections_configform.toggle(\'mailer\'); return false;">Mailer</a> </li><li><a id="_tab_vfs"" href="#" onclick="sections_configform.toggle(\'vfs\'); return false;">Virtual&nbsp;File&nbsp;Storage</a> </li><li><a id="_tab_session"" href="#" onclick="sections_configform.toggle(\'session\'); return false;">Custom&nbsp;Session&nbsp;Handler</a> </li><li><a id="_tab_image"" href="#" onclick="sections_configform.toggle(\'image\'); return false;">Image&nbsp;Manipulation</a> </li><li><a id="_tab_geoip"" href="#" onclick="sections_configform.toggle(\'geoip\'); return false;">Hostname->Country&nbsp;Lookup</a> </li><li><a id="_tab_problems"" href="#" onclick="sections_configform.toggle(\'problems\'); return false;">Problem&nbsp;Reporting</a> </li><li><a id="_tab_menu"" href="#" onclick="sections_configform.toggle(\'menu\'); return false;">Menu&nbsp;settings</a> </li><li><a id="_tab_hooks"" href="#" onclick="sections_configform.toggle(\'hooks\'); return false;">Custom&nbsp;Function&nbsp;Hooks</a> </li><li><a id="_tab_block"" href="#" onclick="sections_configform.toggle(\'block\'); return false;">Portal&nbsp;Block&nbsp;Configuration</a> </li><li><a id="_tab_kolab"" href="#" onclick="sections_configform.toggle(\'kolab\'); return false;">Kolab&nbsp;Groupware&nbsp;Server</a> </li></ul></td></tr></table><div id="_section_general" style="display:block;"><table class="item" cellspacing="0"><tr><td class="control" width="100%" colspan="2" valign="bottom"><b>General Horde Settings</b></td></tr>
<tr valign="top">
  <td width="50%" align="right" class="item0"><span class="form-error"><img src="/mail/themes/graphics/required.png" alt="*" title="*" /></span>&nbsp;The value to set error_reporting()   to. See <a href="/mail/services/go.php?url=http%3A%2F%2Fwww.php.net%2Fmanual%2Ffunction.error-reporting.php" target="_blank">http://www.php.net/manual/function.error-reporting.php</a> for more   information.</td>
  <td class="item0"><select name="debug_level" id="debug_level"> <option value="E_ERROR">E_ERROR</option>
 <option value="E_WARNING">E_WARNING</option>
 <option value="E_PARSE">E_PARSE</option>
 <option value="E_NOTICE">E_NOTICE</option>
 <option value="E_CORE_ERROR">E_CORE_ERROR</option>
 <option value="E_CORE_WARNING">E_CORE_WARNING</option>
 <option value="E_ALL" selected="selected">E_ALL</option>
</select></td>
</tr>
<tr valign="top">
  <td width="50%" align="right" class="item1"><span class="form-error"><img src="/mail/themes/graphics/required.png" alt="*" title="*" /></span>&nbsp;If we need to perform a long   operation, what should we set max_execution_time to (in seconds)? 0 means no   limit; however, a value of 0 will cause a warning if you are running in safe   mode. See <a href="/mail/services/go.php?url=http%3A%2F%2Fwww.php.net%2Fmanual%2Ffunction.set-time-limit.php" target="_blank">http://www.php.net/manual/function.set-time-limit.php</a> for more   information.</td>
  <td class="item1"><input type="text" size="5" name="max_exec_time" value="0" /></td>
</tr>
<tr valign="top">
  <td width="50%" align="right" class="item0"><span class="form-error"><img src="/mail/themes/graphics/required.png" alt="*" title="*" /></span>&nbsp;Determines how we generate   full URLs (for location headers and such).<br />NOTE: If you choose to   always generate https URLs, you MUST hardcode the correct HTTPS port number   in the server port setting below. Otherwise Horde will be unable to generate   correct HTTPS URLs when a user tries to access Horde via a non-HTTPS port.</td>
  <td class="item0"><select name="use_ssl" id="use_ssl"> <option value="0">Assume that we are not using SSL and never generate https URLs.</option>
 <option value="1">Assume that we are using SSL and always generate https URLs.</option>
 <option value="2" selected="selected">Attempt to auto-detect, and generate URLs appropriately</option>
 <option value="3">Assume that we are not using SSL and generate https URLs only     for login.</option>
</select></td>
</tr>
<tr valign="top">
  <td width="50%" align="right" class="item1"><span class="form-error"><img src="/mail/themes/graphics/required.png" alt="*" title="*" /></span>&nbsp;What server name should we use? You\'ll probably    know if you need to change this default; only in situations where you need to    override what Apache thinks the server name    is.</td>
  <td class="item1"><input type="text" name="server__name" size="40" value="$_SERVER[&#039;SERVER_NAME&#039;]" id="server__name" /><br />Enter a valid PHP expression.</td>
</tr>
<tr valign="top">
  <td width="50%" align="right" class="item0"><span class="form-error"><img src="/mail/themes/graphics/required.png" alt="*" title="*" /></span>&nbsp;What port number is the webserver running on?    Again, you shouldn\'t need to change the default, and you probably know it if    you do. The exception is if you have chosen to always generate https URLs, as    described above.</td>
  <td class="item0"><input type="text" name="server__port" size="40" value="$_SERVER[&#039;SERVER_PORT&#039;]" id="server__port" /><br />Enter a valid PHP expression.</td>
</tr>
<tr valign="top">
  <td width="50%" align="right" class="item1"><span class="form-error"><img src="/mail/themes/graphics/required.png" alt="*" title="*" /></span>&nbsp;If this option is set to true, and   you have the php zlib extension, pages over a certain size will be compressed   and sent to the browser as gzip-encoded data in order to save   bandwidth. There is a CPU-usage penalty to pay for this, but the decrease in   page size can be dramatic (70k to under 10k for a full mailbox page), and is   more than worth it over anything but an extremely fast   link.</td>
  <td class="item1"><input type="checkbox" name="compress_pages" checked="checked" /></td>
</tr>
<tr valign="top">
  <td width="50%" align="right" class="item0"><span class="form-error"><img src="/mail/themes/graphics/required.png" alt="*" title="*" /></span>&nbsp;What umask should we run with? This will affect the permissions on any temporary files that are created. This value is an integer.</td>
  <td class="item0"><input type="text" size="5" name="umask" value="077" /></td>
</tr>
<tr valign="top">
  <td width="50%" align="right" class="item1">If you want to use a   temporary directory other than the system default or the one specified in   php\'s upload_tmp_dir value, enter it here.</td>
  <td class="item1"><input type="text" name="tmpdir" size="40" value="" id="tmpdir" /></td>
</tr>
<tr valign="top">
  <td width="50%" align="right" class="item0"><span class="form-error"><img src="/mail/themes/graphics/required.png" alt="*" title="*" /></span>&nbsp;What name should we use for the session that    Horde apps share? If you want to share sessions with other applications on    your webserver, you will need to make sure that they are using the same    session name.  Note: Session names must consist of only alphanumeric    characters.</td>
  <td class="item0"><input type="text" name="session__name" size="40" value="Horde" id="session__name" /></td>
</tr>
<tr valign="top">
  <td width="50%" align="right" class="item1"><span class="form-error"><img src="/mail/themes/graphics/required.png" alt="*" title="*" /></span>&nbsp;What caching level should we use    for the session? DO NOT CHANGE THIS UNLESS YOU <b>REALLY</b> KNOW    WHAT YOU ARE DOING. Setting this to anything other than \'nocache\' will almost    certainly result in severely broken script behavior.</td>
  <td class="item1"><input type="text" name="session__cache_limiter" size="40" value="nocache" id="session__cache_limiter" /></td>
</tr>
<tr valign="top">
  <td width="50%" align="right" class="item0"><span class="form-error"><img src="/mail/themes/graphics/required.png" alt="*" title="*" /></span>&nbsp;How long should sessions last? 0 means    that the session ends when the user closes their browser. Set other values    with care - see    <a href="/mail/services/go.php?url=http%3A%2F%2Fwww.php.net%2Fmanual%2Fen%2Ffunction.session-set-cookie-params.php" target="_blank">http://www.php.net/manual/en/function.session-set-cookie-params.php</a>.</td>
  <td class="item0"><input type="text" name="session__timeout" size="40" value="0" id="session__timeout" /><br />Enter a valid PHP expression.</td>
</tr>
<tr valign="top">
  <td width="50%" align="right" class="item1"><span class="form-error"><img src="/mail/themes/graphics/required.png" alt="*" title="*" /></span>&nbsp;What domain should we set cookies from? If    you have a cluster that needs to share cookies, this might be \'.example.com\'    - the leading \'.\' is important. Most likely, though, you won\'t have to change    the default.</td>
  <td class="item1"><input type="text" name="cookie__domain" size="40" value="$_SERVER[&#039;SERVER_NAME&#039;]" id="cookie__domain" /><br />Enter a valid PHP expression.</td>
</tr>
<tr valign="top">
  <td width="50%" align="right" class="item0"><span class="form-error"><img src="/mail/themes/graphics/required.png" alt="*" title="*" /></span>&nbsp;What path should we set cookies to? This    should match where Horde is on your webserver - if it is at /horde, then this    should be \'/horde\'. If Horde is installed as the document root, then this    needs to be \'/\' - NOT \'\'.<br /><b>BUT</b>, if IE will be    used to access Horde modules, you should read this first (discussing issues    with IE\'s Content Advisor):    <a href="/mail/services/go.php?url=http%3A%2F%2Flists.horde.org%2Farchives%2Fimp%2FWeek-of-Mon-20030113%2F029149.html" target="_blank">http://lists.horde.org/archives/imp/Week-of-Mon-20030113/029149.html</a></td>
  <td class="item0"><input type="text" name="cookie__path" size="40" value="/horde" id="cookie__path" /></td>
</tr>
</table></div><div id="_section_sql" style="display:none;"><table class="item" cellspacing="0"><tr><td class="control" width="100%" colspan="2" valign="bottom"><b>Horde Database Settings</b></td></tr>
<tr valign="top">
  <td width="50%" align="right" class="item1"><span class="form-error"><img src="/mail/themes/graphics/required.png" alt="*" title="*" /></span>&nbsp;What database backend should we use?</td>
  <td class="item1"><select name="sql__phptype" id="sql__phptype" onchange="if (this.value) { document.configform.formname.value=\'\';document.configform.submit() }"> <option value="dbase">dBase</option>
 <option value="ibase">Firebird/InterBase</option>
 <option value="fbsql">Frontbase</option>
 <option value="ifx">Informix</option>
 <option value="msql">mSQL</option>
 <option value="mssql">MS SQL Server</option>
 <option value="mysql" selected="selected">MySQL</option>
 <option value="mysqli">MySQL improved (4.1+)</option>
 <option value="oci8">Oracle</option>
 <option value="odbc">ODBC</option>
 <option value="pgsql">PostgreSQL</option>
 <option value="sqlite">SQLite</option>
 <option value="sybase">Sybase</option>
</select></td>
</tr>
<tr valign="top">
  <td width="50%" align="right" class="item0">Request persistent connections?</td>
  <td class="item0"><input type="checkbox" name="sql__persistent" /></td>
</tr>
<tr valign="top">
  <td width="50%" align="right" class="item1"><span class="form-error"><img src="/mail/themes/graphics/required.png" alt="*" title="*" /></span>&nbsp;Database server/host</td>
  <td class="item1"><input type="text" name="sql__hostspec" size="40" value="localhost" id="sql__hostspec" /></td>
</tr>
<tr valign="top">
  <td width="50%" align="right" class="item0"><span class="form-error"><img src="/mail/themes/graphics/required.png" alt="*" title="*" /></span>&nbsp;Username to connect to the database as</td>
  <td class="item0"><input type="text" name="sql__username" size="40" value="horde" id="sql__username" /></td>
</tr>
<tr valign="top">
  <td width="50%" align="right" class="item1">Password to connect with</td>
  <td class="item1"><input type="text" name="sql__password" size="40" value="*****" id="sql__password" /></td>
</tr>
<tr valign="top">
  <td width="50%" align="right" class="item0"><span class="form-error"><img src="/mail/themes/graphics/required.png" alt="*" title="*" /></span>&nbsp;How should we connect to the database?</td>
  <td class="item0"><select name="sql__protocol" id="sql__protocol" onchange="if (this.value) { document.configform.formname.value=\'\';document.configform.submit() }"> <option value="unix" selected="selected">UNIX Sockets</option>
 <option value="tcp">TCP/IP</option>
</select></td>
</tr>
<tr valign="top">
  <td width="50%" align="right" class="item1">Location of UNIX socket</td>
  <td class="item1"><input type="text" name="sql__socket" size="40" value="" id="sql__socket" /></td>
</tr>
<tr valign="top">
  <td width="50%" align="right" class="item0"><span class="form-error"><img src="/mail/themes/graphics/required.png" alt="*" title="*" /></span>&nbsp;Database name to use</td>
  <td class="item0"><input type="text" name="sql__database" size="40" value="horde" id="sql__database" /></td>
</tr>
<tr valign="top">
  <td width="50%" align="right" class="item1"><span class="form-error"><img src="/mail/themes/graphics/required.png" alt="*" title="*" /></span>&nbsp;Internally used charset</td>
  <td class="item1"><input type="text" name="sql__charset" size="40" value="iso-8859-1" id="sql__charset" /></td>
</tr>
</table></div><div id="_section_auth" style="display:none;"><table class="item" cellspacing="0"><tr><td class="control" width="100%" colspan="2" valign="bottom"><b>Horde Authentication</b></td></tr>
<tr valign="top">
  <td width="50%" align="right" class="item0"><span class="form-error"><img src="/mail/themes/graphics/required.png" alt="*" title="*" /></span>&nbsp;Which users should be treated as    administrators (root, super-user) by Horde?</td>
  <td class="item0"><input type="text" size="60" name="auth__admins" value="Administrator" /></td>
</tr>
<tr valign="top">
  <td width="50%" align="right" class="item1"><span class="form-error"><img src="/mail/themes/graphics/required.png" alt="*" title="*" /></span>&nbsp;Should we always store and validate    the IP address of the client (as seen by the web server) in the session?    Doing so will help increase security by ensuring that an attacker from    another host can not try to hijack the session.</td>
  <td class="item1"><input type="checkbox" name="auth__checkip" checked="checked" /></td>
</tr>
<tr valign="top">
  <td width="50%" align="right" class="item0"><span class="form-error"><img src="/mail/themes/graphics/required.png" alt="*" title="*" /></span>&nbsp;What backend should we use for    authenticating users to Horde?</td>
  <td class="item0"><select name="auth__driver" id="auth__driver" onchange="if (this.value) { document.configform.formname.value=\'\';document.configform.submit() }"> <option value="application">Let a Horde application handle     authentication</option>
 <option value="auto" selected="selected">Automatic authentication as a certain user</option>
 <option value="composite">Composite authentication</option>
 <option value="ftp">FTP authentication</option>
 <option value="http">HTTP (Basic Authentication/.htpasswd)     authentication</option>
 <option value="imap">IMAP authentication</option>
 <option value="imsp">IMSP server authentication</option>
 <option value="ipbasic">Simple IP based authentication</option>
 <option value="ipmap">IP based authentication</option>
 <option value="krb5">Kerberos authentication</option>
 <option value="kolab">Kolab authentication</option>
 <option value="ldap">LDAP authentication</option>
 <option value="login">Login (su) authentication</option>
 <option value="mcal">MCAL authentication</option>
 <option value="pam">PAM (Pluggable Authentication Modules) authentication</option>
 <option value="passwd">passwd file authentication</option>
 <option value="radius">Radius authentication</option>
 <option value="sasl">SASL authentication</option>
 <option value="smb">SMB authentication</option>
 <option value="sql">SQL authentication</option>
 <option value="customsql">SQL authentication w/custom-made queries</option>
 <option value="cyrsql">SQL implementation for the Cyrus IMAP server</option>
 <option value="yahoo">Yahoo! authentication</option>
</select></td>
</tr>
<tr valign="top">
  <td width="50%" align="right" class="item1"><span class="form-error"><img src="/mail/themes/graphics/required.png" alt="*" title="*" /></span>&nbsp;The username to authenticate everyone as</td>
  <td class="item1"><input type="text" name="auth__params__username" size="40" value="Administrator" id="auth__params__username" /></td>
</tr>
<tr valign="top">
  <td width="50%" align="right" class="item0">The password to use for the user\'s credentials</td>
  <td class="item0"><input type="text" name="auth__params__password" size="40" value="" id="auth__params__password" /></td>
</tr>
<tr valign="top">
  <td width="50%" align="right" class="item1"><span class="form-error"><img src="/mail/themes/graphics/required.png" alt="*" title="*" /></span>&nbsp;Allow username to be passed by GET, POST or cookie?</td>
  <td class="item1"><input type="checkbox" name="auth__params__requestuser" /></td>
</tr>
</table></div><div id="_section_signup" style="display:none;"><table class="item" cellspacing="0"><tr><td class="control" width="100%" colspan="2" valign="bottom"><b>Horde Sign Up</b></td></tr>
<tr valign="top">
  <td width="50%" align="right" class="item0"><span class="form-error"><img src="/mail/themes/graphics/required.png" alt="*" title="*" /></span>&nbsp;Allow non-registered users to register and    provide a link on the login screen?</td>
  <td class="item0"><input type="checkbox" name="signup__allow" /></td>
</tr>
<tr valign="top">
  <td width="50%" align="right" class="item1"><span class="form-error"><img src="/mail/themes/graphics/required.png" alt="*" title="*" /></span>&nbsp;Admin has to approve any user submitted    registration requests? (WARNING: Setting to false would mean that every user    who signs up would have automatic access to your horde system.)</td>
  <td class="item1"><input type="checkbox" name="signup__approve" checked="checked" /></td>
</tr>
<tr valign="top">
  <td width="50%" align="right" class="item0"><span class="form-error"><img src="/mail/themes/graphics/required.png" alt="*" title="*" /></span>&nbsp;Pass the user submitted information    through the _horde_hook_signup_preprocess function in hooks.php before    processing the request?</td>
  <td class="item0"><input type="checkbox" name="signup__preprocess" /></td>
</tr>
<tr valign="top">
  <td width="50%" align="right" class="item1"><span class="form-error"><img src="/mail/themes/graphics/required.png" alt="*" title="*" /></span>&nbsp;Pass the user submitted information    through the _horde_hook_signup_queue function in hooks.php after processing    the request but before actually queueing it?</td>
  <td class="item1"><input type="checkbox" name="signup__queue" /></td>
</tr>
</table></div><div id="_section_log" style="display:none;"><table class="item" cellspacing="0"><tr><td class="control" width="100%" colspan="2" valign="bottom"><b>Horde Logging</b></td></tr>
<tr valign="top">
  <td width="50%" align="right" class="item0"><span class="form-error"><img src="/mail/themes/graphics/required.png" alt="*" title="*" /></span>&nbsp;Should Horde log errors and other useful    information?</td>
  <td class="item0"><select name="log__enabled" id="log__enabled" onchange="if (this.value) { document.configform.formname.value=\'\';document.configform.submit() }"> <option value="true" selected="selected">Yes</option>
 <option value="false">No</option>
</select></td>
</tr>
<tr valign="top">
  <td width="50%" align="right" class="item1"><span class="form-error"><img src="/mail/themes/graphics/required.png" alt="*" title="*" /></span>&nbsp;What level of messages      should we log? Each level logs itself and all those that come before it:      PEAR_LOG_ALERT would only log alerts and emergencies, but PEAR_LOG_DEBUG      would log everything.</td>
  <td class="item1"><select name="log__priority" id="log__priority"> <option value="PEAR_LOG_EMERG">PEAR_LOG_EMERG</option>
 <option value="PEAR_LOG_ALERT">PEAR_LOG_ALERT</option>
 <option value="PEAR_LOG_CRIT">PEAR_LOG_CRIT</option>
 <option value="PEAR_LOG_ERR">PEAR_LOG_ERR</option>
 <option value="PEAR_LOG_WARNING">PEAR_LOG_WARNING</option>
 <option value="PEAR_LOG_NOTICE" selected="selected">PEAR_LOG_NOTICE</option>
 <option value="PEAR_LOG_INFO">PEAR_LOG_INFO</option>
 <option value="PEAR_LOG_DEBUG">PEAR_LOG_DEBUG</option>
</select></td>
</tr>
<tr valign="top">
  <td width="50%" align="right" class="item0"><span class="form-error"><img src="/mail/themes/graphics/required.png" alt="*" title="*" /></span>&nbsp;What identifier should we use in the      logs?</td>
  <td class="item0"><input type="text" name="log__ident" size="40" value="HORDE" id="log__ident" /></td>
</tr>
<tr valign="top">
  <td width="50%" align="right" class="item1"><span class="form-error"><img src="/mail/themes/graphics/required.png" alt="*" title="*" /></span>&nbsp;What log driver should we use?</td>
  <td class="item1"><select name="log__type" id="log__type" onchange="if (this.value) { document.configform.formname.value=\'\';document.configform.submit() }"> <option value="console">Console</option>
 <option value="display">Display</option>
 <option value="error_log">Error Log</option>
 <option value="file" selected="selected">File</option>
 <option value="mail">Mail</option>
 <option value="mcal">Mcal</option>
 <option value="null">Null</option>
 <option value="sql">SQL</option>
 <option value="sqlite">SQLite</option>
 <option value="syslog">Syslog</option>
 <option value="win">Window</option>
</select></td>
</tr>
<tr valign="top">
  <td width="50%" align="right" class="item0"><span class="form-error"><img src="/mail/themes/graphics/required.png" alt="*" title="*" /></span>&nbsp;Path to the log        file</td>
  <td class="item0"><input type="text" name="log__name" size="40" value="/tmp/horde.log" id="log__name" /></td>
</tr>
<tr valign="top">
  <td width="50%" align="right" class="item1">Should new log         entries be appended to an existing log file? If this is false, new log files         will overwrite existing ones.</td>
  <td class="item1"><input type="checkbox" name="log__params__append" checked="checked" /></td>
</tr>
<tr valign="top">
  <td width="50%" align="right" class="item0">Octal         representation of the log file\'s permissions mode</td>
  <td class="item0"><input type="text" size="5" name="log__params__mode" value="" /></td>
</tr>
<tr valign="top">
  <td width="50%" align="right" class="item1">The end-of-line character         sequence</td>
  <td class="item1"><input type="text" name="log__params__eol" size="40" value="" id="log__params__eol" /><br />Enter a valid PHP expression.</td>
</tr>
<tr valign="top">
  <td width="50%" align="right" class="item0">Log line format         specification</td>
  <td class="item0"><input type="text" name="log__params__lineFormat" size="40" value="" id="log__params__lineFormat" /></td>
</tr>
<tr valign="top">
  <td width="50%" align="right" class="item1">Time stamp         format</td>
  <td class="item1"><input type="text" name="log__params__timeFormat" size="40" value="" id="log__params__timeFormat" /></td>
</tr>
<tr valign="top">
  <td width="50%" align="right" class="item0"><span class="form-error"><img src="/mail/themes/graphics/required.png" alt="*" title="*" /></span>&nbsp;Should Horde log statistics about    used access keys? This is only useful for translators of the    UI. You also need to set the log level to at least    PEAR_LOG_INFO.</td>
  <td class="item0"><input type="checkbox" name="log_accesskeys" /></td>
</tr>
</table></div><div id="_section_prefs" style="display:none;"><table class="item" cellspacing="0"><tr><td class="control" width="100%" colspan="2" valign="bottom"><b>Preference System Settings</b></td></tr>
<tr valign="top">
  <td width="50%" align="right" class="item1">The size of the    preferences field in your backend in bytes. Horde will reject any write to    the preferences backend if its length exceeds this value. Leave empty to    skip this checking. E.g. MySQL stores the preference data in a LONGTEXT    field. This field can hold 4294967295 bytes so most likely checking is not    needed. However other DB installations may only have a storage size of 64    KB (65535 bytes). These installations would want to turn checking on.</td>
  <td class="item1"><input type="text" size="5" name="prefs__maxsize" value="" /></td>
</tr>
<tr valign="top">
  <td width="50%" align="right" class="item0"><span class="form-error"><img src="/mail/themes/graphics/required.png" alt="*" title="*" /></span>&nbsp;What preferences driver should we use?</td>
  <td class="item0"><select name="prefs__driver" id="prefs__driver" onchange="if (this.value) { document.configform.formname.value=\'\';document.configform.submit() }"> <option value="none" selected="selected">None</option>
 <option value="imsp">IMSP Server</option>
 <option value="sql">SQL Database</option>
 <option value="ldap">LDAP</option>
 <option value="session">PHP Sessions</option>
 <option value="kolab">Kolab (LDAP)</option>
</select></td>
</tr>
</table></div><div id="_section_datatree" style="display:none;"><table class="item" cellspacing="0"><tr><td class="control" width="100%" colspan="2" valign="bottom"><b>DataTree System Settings</b></td></tr>
<tr valign="top">
  <td width="50%" align="right" class="item1"><span class="form-error"><img src="/mail/themes/graphics/required.png" alt="*" title="*" /></span>&nbsp;What backend should we use for Horde    DataTree storage?</td>
  <td class="item1"><select name="datatree__driver" id="datatree__driver" onchange="if (this.value) { document.configform.formname.value=\'\';document.configform.submit() }"> <option value="null" selected="selected">None</option>
 <option value="sql">SQL Database</option>
</select></td>
</tr>
</table></div><div id="_section_group" style="display:none;"><table class="item" cellspacing="0"><tr><td class="control" width="100%" colspan="2" valign="bottom"><b>Groups Settings</b></td></tr>
<tr><td width="100%" colspan="2" class="item0"><table cellpadding="8"><tr><td>The Hooks backend extends the DataTree backend to allow hooks to extend a
    group to dynamically include members into a group.  See hooks.php.dist for
    an example.</td></tr></table></td></tr>
<tr valign="top">
  <td width="50%" align="right" class="item1"><span class="form-error"><img src="/mail/themes/graphics/required.png" alt="*" title="*" /></span>&nbsp;What backend should we use for Horde    Groups?</td>
  <td class="item1"><select name="group__driver" id="group__driver"> <option value="datatree" selected="selected">DataTree</option>
 <option value="hooks">Hooks</option>
</select></td>
</tr>
</table></div><div id="_section_cache" style="display:none;"><table class="item" cellspacing="0"><tr><td class="control" width="100%" colspan="2" valign="bottom"><b>Cache System Settings</b></td></tr>
<tr valign="top">
  <td width="50%" align="right" class="item0"><span class="form-error"><img src="/mail/themes/graphics/required.png" alt="*" title="*" /></span>&nbsp;How long, in seconds, should objects be    cached by default?</td>
  <td class="item0"><input type="text" size="5" name="cache__default_lifetime" value="1800" /></td>
</tr>
<tr valign="top">
  <td width="50%" align="right" class="item1"><span class="form-error"><img src="/mail/themes/graphics/required.png" alt="*" title="*" /></span>&nbsp;If you want to enable the Horde Cache,    select a driver here. This is used to speed up portions of Horde by storing    commonly processed objects to disk.</td>
  <td class="item1"><select name="cache__driver" id="cache__driver" onchange="if (this.value) { document.configform.formname.value=\'\';document.configform.submit() }"> <option value="none">Don\'t cache any objects</option>
 <option value="file" selected="selected">Store objects in filesystem</option>
 <option value="zps4">Use the Zend Performance Suite output cache</option>
</select></td>
</tr>
<tr valign="top">
  <td width="50%" align="right" class="item0">The location to store the       cached files</td>
  <td class="item0"><input type="text" name="cache__params__dir" size="40" value="Horde::getTempDir()" id="cache__params__dir" /><br />Enter a valid PHP expression.</td>
</tr>
<tr valign="top">
  <td width="50%" align="right" class="item1">The filename prefix to       use for the cache files.</td>
  <td class="item1"><input type="text" name="cache__params__prefix" size="40" value="" id="cache__params__prefix" /></td>
</tr>
</table></div><div id="_section_token" style="display:none;"><table class="item" cellspacing="0"><tr><td class="control" width="100%" colspan="2" valign="bottom"><b>Token System Settings</b></td></tr>
<tr valign="top">
  <td width="50%" align="right" class="item0">The period (in    seconds) after which an id is purged</td>
  <td class="item0"><input type="text" size="5" name="token__timeout" value="" /></td>
</tr>
<tr valign="top">
  <td width="50%" align="right" class="item1"><span class="form-error"><img src="/mail/themes/graphics/required.png" alt="*" title="*" /></span>&nbsp;If you want to enable Form Tokens, select    a driver here. This is used by the Horde::Form:: API and some other parts    of Horde to ensure that a form can only be submitted once.</td>
  <td class="item1"><select name="token__driver" id="token__driver" onchange="if (this.value) { document.configform.formname.value=\'\';document.configform.submit() }"> <option value="none" selected="selected">Disable Form Tokens</option>
 <option value="file">Local filesystem token storage</option>
 <option value="sql">SQL-based token storage</option>
</select></td>
</tr>
</table></div><div id="_section_mailer" style="display:none;"><table class="item" cellspacing="0"><tr><td class="control" width="100%" colspan="2" valign="bottom"><b>Mailer</b></td></tr>
<tr valign="top">
  <td width="50%" align="right" class="item0"><span class="form-error"><img src="/mail/themes/graphics/required.png" alt="*" title="*" /></span>&nbsp;What method should we use for sending    mail?</td>
  <td class="item0"><select name="mailer__type" id="mailer__type" onchange="if (this.value) { document.configform.formname.value=\'\';document.configform.submit() }"> <option value="null">Disable mailing</option>
 <option value="sendmail" selected="selected">Use the local sendmail binary</option>
 <option value="smtp">Use a SMTP server</option>
</select></td>
</tr>
<tr valign="top">
  <td width="50%" align="right" class="item1">The location       of the sendmail binary on the filesystem       [/usr/sbin/sendmail]</td>
  <td class="item1"><input type="text" name="mailer__params__sendmail_path" size="40" value="/usr/lib/sendmail" id="mailer__params__sendmail_path" /></td>
</tr>
<tr valign="top">
  <td width="50%" align="right" class="item0">Any extra       parameters to pass to the sendmail or sendmail wrapper       binary</td>
  <td class="item0"><input type="text" name="mailer__params__sendmail_args" size="40" value="-oi" id="mailer__params__sendmail_args" /></td>
</tr>
</table></div><div id="_section_vfs" style="display:none;"><table class="item" cellspacing="0"><tr><td class="control" width="100%" colspan="2" valign="bottom"><b>Virtual File Storage</b></td></tr>
<tr valign="top">
  <td width="50%" align="right" class="item1"><span class="form-error"><img src="/mail/themes/graphics/required.png" alt="*" title="*" /></span>&nbsp;If a VFS (virtual filesystem) backend is    required, which one should we use?</td>
  <td class="item1"><select name="vfs__type" id="vfs__type" onchange="if (this.value) { document.configform.formname.value=\'\';document.configform.submit() }"> <option value="file" selected="selected">Files on the local system</option>
 <option value="sql">SQL database</option>
</select></td>
</tr>
<tr valign="top">
  <td width="50%" align="right" class="item0"><span class="form-error"><img src="/mail/themes/graphics/required.png" alt="*" title="*" /></span>&nbsp;Where on the real filesystem should       Horde use as root of the virtual filesystem?</td>
  <td class="item0"><input type="text" name="vfs__params__vfsroot" size="40" value="/tmp" id="vfs__params__vfsroot" /></td>
</tr>
</table></div><div id="_section_session" style="display:none;"><table class="item" cellspacing="0"><tr><td class="control" width="100%" colspan="2" valign="bottom"><b>Custom Session Handler</b></td></tr>
<tr valign="top">
  <td width="50%" align="right" class="item1"><span class="form-error"><img src="/mail/themes/graphics/required.png" alt="*" title="*" /></span>&nbsp;What sessionhandler driver should we    use?</td>
  <td class="item1"><select name="sessionhandler__type" id="sessionhandler__type" onchange="if (this.value) { document.configform.formname.value=\'\';document.configform.submit() }"> <option value="none" selected="selected">Use the default PHP (file-based) session handler</option>
 <option value="external">Use your own custom session handler</option>
 <option value="dbm">DBM based sessions</option>
 <option value="mysql">MySQL based sessions</option>
 <option value="oci8">Oracle based sessions</option>
 <option value="pgsql">PostgreSQL based sessions</option>
 <option value="sapdb">Use PEAR\'s DB abstraction layer w/ODBC</option>
 <option value="sql">Use PEAR\'s DB abstraction layer</option>
</select></td>
</tr>
</table></div><div id="_section_image" style="display:none;"><table class="item" cellspacing="0"><tr><td class="control" width="100%" colspan="2" valign="bottom"><b>Image Manipulation</b></td></tr>
<tr valign="top">
  <td width="50%" align="right" class="item0">Horde requires either    GD support built-in to PHP (--with-gd) or the ImageMagick software    package (<a href="/mail/services/go.php?url=http%3A%2F%2Fwww.imagemagick.org%2F" target="_blank">http://www.imagemagick.org/</a>) to do image    manipulation/creation. If using ImageMagick, specify the full path    name to the \'convert\' program. On Windows, this path *cannot* have    spaces in it. Use DOS-style abbreviations if necessary: Progra~1    instead of Program Files, for instance. If using GD, or using    neither, leave this field blank.</td>
  <td class="item0"><input type="text" name="image__convert" size="40" value="" id="image__convert" /></td>
</tr>
</table></div><div id="_section_geoip" style="display:none;"><table class="item" cellspacing="0"><tr><td class="control" width="100%" colspan="2" valign="bottom"><b>Hostname->Country Lookup</b></td></tr>
<tr valign="top">
  <td width="50%" align="right" class="item1">Horde, by default, can    do Hostname -> Country lookup using the top level domain (e.g. \'uk\',    \'de\') of the hostname.  However, many popular top level domains    (e.g. \'com\', \'net\') span more than one country.  In these instances, Horde    can use the MaxMind GeoIP Hostname to Country lookup to try to determine    the correct country.  To activate this functionality, the GeoIP.dat country    database must be present on your local system.  This file can be downloaded    free of charge from <a href="/mail/services/go.php?url=http%3A%2F%2Fwww.maxmind.com%2Fdownload%2Fgeoip%2Fdatabase%2F" target="_blank">http://www.maxmind.com/download/geoip/database/</a>.  If    this database is present, specify the full path name to the database below.    If empty, the GeoIP lookup will not be performed.</td>
  <td class="item1"><input type="text" name="geoip__datafile" size="40" value="" id="geoip__datafile" /></td>
</tr>
</table></div><div id="_section_problems" style="display:none;"><table class="item" cellspacing="0"><tr><td class="control" width="100%" colspan="2" valign="bottom"><b>Problem Reporting</b></td></tr>
<tr valign="top">
  <td width="50%" align="right" class="item0"><span class="form-error"><img src="/mail/themes/graphics/required.png" alt="*" title="*" /></span>&nbsp;If problem reporting is enabled in an    application\'s menu, where should problem report emails be    sent?</td>
  <td class="item0"><input type="text" name="problems__email" size="40" value="webmaster@example.com" id="problems__email" /></td>
</tr>
</table></div><div id="_section_menu" style="display:none;"><table class="item" cellspacing="0"><tr><td class="control" width="100%" colspan="2" valign="bottom"><b>Menu settings</b></td></tr>
<tr valign="top">
  <td width="50%" align="right" class="item1"><span class="form-error"><img src="/mail/themes/graphics/required.png" alt="*" title="*" /></span>&nbsp;Should we <b>always</b>    display the Horde frameset?</td>
  <td class="item1"><input type="checkbox" name="menu__always" /></td>
</tr>
<tr valign="top">
  <td width="50%" align="right" class="item0"><span class="form-error"><img src="/mail/themes/graphics/required.png" alt="*" title="*" /></span>&nbsp;Should we display help links in the     menu?</td>
  <td class="item0"><select name="menu__links__help" id="menu__links__help"> <option value="all" selected="selected">All users</option>
 <option value="authenticated">Authenticated users</option>
 <option value="never">Never</option>
</select></td>
</tr>
<tr valign="top">
  <td width="50%" align="right" class="item1"><span class="form-error"><img src="/mail/themes/graphics/required.png" alt="*" title="*" /></span>&nbsp;Should we display options links in the     menu?</td>
  <td class="item1"><select name="menu__links__options" id="menu__links__options"> <option value="all">All users</option>
 <option value="authenticated" selected="selected">Authenticated users</option>
 <option value="never">Never</option>
</select></td>
</tr>
<tr valign="top">
  <td width="50%" align="right" class="item0"><span class="form-error"><img src="/mail/themes/graphics/required.png" alt="*" title="*" /></span>&nbsp;Should we display problem reporting links     in the menu?</td>
  <td class="item0"><select name="menu__links__problem" id="menu__links__problem"> <option value="all" selected="selected">All users</option>
 <option value="authenticated">Authenticated users</option>
 <option value="never">Never</option>
</select></td>
</tr>
<tr valign="top">
  <td width="50%" align="right" class="item1"><span class="form-error"><img src="/mail/themes/graphics/required.png" alt="*" title="*" /></span>&nbsp;Should we display a login link in the menu     when not logged in?</td>
  <td class="item1"><select name="menu__links__login" id="menu__links__login"> <option value="all" selected="selected">All users</option>
 <option value="never">Never</option>
</select></td>
</tr>
<tr valign="top">
  <td width="50%" align="right" class="item0"><span class="form-error"><img src="/mail/themes/graphics/required.png" alt="*" title="*" /></span>&nbsp;Should we display a logout link in the     menu when logged in?</td>
  <td class="item0"><select name="menu__links__logout" id="menu__links__logout"> <option value="authenticated" selected="selected">Authenticated users</option>
 <option value="never">Never</option>
</select></td>
</tr>
<tr valign="top">
  <td width="50%" align="right" class="item1">The URL of an image for    the top of the Horde menu. The image should be no larger than 140 pixels    wide by 40 pixels high to prevent the frame from scrolling.</td>
  <td class="item1"><input type="text" name="logo__image" size="40" value="" id="logo__image" /></td>
</tr>
<tr valign="top">
  <td width="50%" align="right" class="item0">If a logo is displayed in    the Horde menu, what URL (if any) should it link to?</td>
  <td class="item0"><input type="text" name="logo__link" size="40" value="" id="logo__link" /></td>
</tr>
</table></div><div id="_section_hooks" style="display:none;"><table class="item" cellspacing="0"><tr><td class="control" width="100%" colspan="2" valign="bottom"><b>Custom Function Hooks</b></td></tr>
<tr><td width="100%" colspan="2" class="item1"><table cellpadding="8"><tr><td>There are example functions for all hooks in horde/config/hooks.php.dist.</td></tr></table></td></tr>
<tr valign="top">
  <td width="50%" align="right" class="item0"><span class="form-error"><img src="/mail/themes/graphics/required.png" alt="*" title="*" /></span>&nbsp;If this is checked, the function    _username_hook_frombackend() will be used to set the user name at login    time. The counterpart function _username_hook_tobackend() will be used to    convert user names back, for example when showing name lists to the    user.</td>
  <td class="item0"><input type="checkbox" name="hooks__username" /></td>
</tr>
<tr valign="top">
  <td width="50%" align="right" class="item1"><span class="form-error"><img src="/mail/themes/graphics/required.png" alt="*" title="*" /></span>&nbsp;If this is checked and the    function _horde_hook_preauthenticate() returns false, authentication will    fail.</td>
  <td class="item1"><input type="checkbox" name="hooks__preauthenticate" /></td>
</tr>
<tr valign="top">
  <td width="50%" align="right" class="item0"><span class="form-error"><img src="/mail/themes/graphics/required.png" alt="*" title="*" /></span>&nbsp;If this is checked and the    function _horde_hook_postauthenticate() returns false, authentication will    fail.</td>
  <td class="item0"><input type="checkbox" name="hooks__postauthenticate" /></td>
</tr>
<tr valign="top">
  <td width="50%" align="right" class="item1"><span class="form-error"><img src="/mail/themes/graphics/required.png" alt="*" title="*" /></span>&nbsp;If this is checked, the function    _horde_hook_authldap() will be used to create and set the attributes needed    to add/edit/delete users by the LDAP Auth driver.</td>
  <td class="item1"><input type="checkbox" name="hooks__authldap" /></td>
</tr>
</table></div><div id="_section_block" style="display:none;"><table class="item" cellspacing="0"><tr><td class="control" width="100%" colspan="2" valign="bottom"><b>Portal Block Configuration</b></td></tr>
<tr><td width="100%" colspan="2" class="item0"><table cellpadding="8"><tr><td>Use of the weather.com block requires free registration for the XML
   feed at http://www.weather.com/services/xmloap.html.
   After registration, an email will be returned with the Partner ID and
   license key.<br / >
   NOTE: weather.com guidelines require registration and use of the returned
   values, but the application appears to function with any string values.</td></tr></table></td></tr>
<tr valign="top">
  <td width="50%" align="right" class="item1">The partner I.D.   from weather.com</td>
  <td class="item1"><input type="text" name="weatherdotcom__partner_id" size="40" value="" id="weatherdotcom__partner_id" /></td>
</tr>
<tr valign="top">
  <td width="50%" align="right" class="item0">The license key   from weather.com</td>
  <td class="item0"><input type="text" name="weatherdotcom__license_key" size="40" value="" id="weatherdotcom__license_key" /></td>
</tr>
<tr valign="top">
  <td width="50%" align="right" class="item1">Path to fortune   executable</td>
  <td class="item1"><input type="text" name="fortune__exec_path" size="40" value="" id="fortune__exec_path" /></td>
</tr>
</table></div><div id="_section_kolab" style="display:none;"><table class="item" cellspacing="0"><tr><td width="100%" colspan="2" class="item0"><table cellpadding="8"><tr><td><div style="text-align:center"><b>*** IF YOU HAVE NO IDEA WHAT
    KOLAB IS THEN YOU CAN SAFELY IGNORE THIS TAB ***</b></div>
    Kolab is in no way required for normal Horde usage. If, however, you intend
    to use Horde as a webclient for Kolab then you will need to ensure that the
    following fields correspond to those required by your Kolab installation.
    You can find some of the required values in the <code>
    $KOLAB_ROOT/etc/kolab/kolab.conf</code> configuration file. Please
    note that the old iCal/vCard storage format has been dropped in favour of
    the new XML storage format & IMAP folder annotations; subsequently the
    Horde Kolab modules will only work with version 2 of the Kolab server.
    <div style="text-align:center">If you would like to find out more
    about Kolab then please visit the Kolab community website at
    http://www.kolab.org/</div></td></tr></table></td></tr>
<tr valign="top">
  <td width="50%" align="right" class="item1"><span class="form-error"><img src="/mail/themes/graphics/required.png" alt="*" title="*" /></span>&nbsp;Horde/Kolab integration status</td>
  <td class="item1"><select name="kolab__enabled" id="kolab__enabled" onchange="if (this.value) { document.configform.formname.value=\'\';document.configform.submit() }"> <option value="false" selected="selected">Disabled</option>
 <option value="true">Enabled</option>
</select></td>
</tr>
</table></div><table cellspacing="0"><tr><td colspan="2" class="control">
      <input class="button" name="submitbutton" type="submit" value="Generate Horde Configuration" />
    </td></tr></table>
</div></form>
<script language="JavaScript" type="text/javascript">
<!--
try {
    document.configform.debug_level.focus();
} catch(e) {}
//-->
</script>



<script language="JavaScript1.5" type="text/javascript">
<!--
var _setHordeTitle = 1;
try {
    if (parent.frames.horde_main) parent.document.title = \'Horde :: Horde Setup\';
} catch (e) {
}
// -->
</script>
<script language="JavaScript" type="text/javascript">
<!--
if (typeof(_setHordeTitle) == \'undefined\' && parent.frames.horde_main) parent.document.title = \'Horde :: Horde Setup\';
// -->
</script>
</body>
</html>';

?>