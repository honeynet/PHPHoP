<?php

// filter

$eventid="";

if (isset($_GET['eventid'])) {
  $eventid=$_GET['eventid'];
}

if (ereg('[^0-9]',$eventid)) {
  exit(0);
}

include 'eval.php';

include 'db.php';

$link=db_init();
    
$query = ("select entryid,remoteaddr,remoteuser,localtimer,phpself,querystring,extralog from phphop_alerts where entryid=$eventid ");
    
$result = mysql_query($query);
if (!$result) {
  die('Invalid Query :' . mysql_error());
}

$row=mysql_fetch_row($result);
  
list($entryid,$remoteaddr,$remoteuser,$ts,$self,$qs,$extra)=$row;

$remoteaddr=htmlspecialchars($remoteaddr);
$remoteuser=htmlspecialchars($user);
$ts=htmlspecialchars($ts);
$self=htmlspecialchars($self);
$qs=htmlspecialchars($qs);

if (eval_interesting($qs)) { $qs = "<font color=red>$qs</font>"; }

print "<table><tr><td>Event ID:</td><td>$eventid</td></tr>";
print "<tr><td>Timestamp:</td><td>$ts</td></tr>";
print "<tr><td>Script called:</td><td>$self</td></tr>";
print "<tr><td>Query string:</td><td>$qs</td></tr>";

print "</table>";

mysql_close($link);

?>