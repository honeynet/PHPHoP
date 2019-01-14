<?php

include 'eval.php';

function fatal_error($err) {
  print "<font color=red size=+2><pre>Error during execution! $err</pre></font>";
}
// filter

include 'db.php';

include 'header.php';

$filter=""; $dfilter=""; $pfilter=""; $pagelim=25;

if (isset($_GET['filter'])) {   $filter =$_GET['filter']; }
if (isset($_GET['dfilter'])) {  $dfilter=$_GET['dfilter']; }
if (isset($_GET['pfilter'])) {  $pfilter=$_GET['pfilter']; }

if (isset($_POST['filter'])) {   $filter =$_POST['filter']; }
if (isset($_POST['dfilter'])) {  $dfilter=$_POST['dfilter']; }
if (isset($_POST['pfilter'])) {  $pfilter=$_POST['pfilter']; }

if (isset($_GET['page']))
{
  $page=$_GET['page'];
} else {
  $page=0;
}

// too strict - TODO relax
if (ereg('[^a-zA-Z0-9]',$filter)) {  fatal_error( "'$filter' contains illegal characters!"); }
if (ereg('[^a-zA-Z0-9:\-]',$dfilter)) {  fatal_error( "'$dfilter' contains illegal characters!"); }
if (ereg('[\'<>]',$pfilter)) {  fatal_error( "'$pfilter' contains illegal characters!"); }

$link=db_init();

$poffset=$page * $pagelim ;
    
$query = "select entryid,remoteaddr,remoteuser,localtimer,phpself,querystring,extralog from phphop_alerts ";

$next=" where ";

if (!empty($filter)) {  $query .= $next." querystring like '%".$filter."%' ";  $next=" and "; }

if (!empty($dfilter)) { $query .= $next." localtimer like '%".$dfilter."%' "; $next=" and "; }

if (!empty($pfilter)) { $query .= $next." phpself like '%".$pfilter."%' ";  $next=" and "; }

$query .= "order by localtimer desc limit $pagelim offset $poffset";
    
$result = mysql_query($query);

if (!$result) {
  die('Invalid Query :' . mysql_error());
}

$nextpage=$page+1;
$prevpage=$page-1;

print "<form method=POST action=\"index.php?filter=$filter&pfilter=$pfilter&dfilter=$dfilter&page=$page\"><table>
<tr><td>Filter query string:</td><td><input type=text name=filter value=\"$filter\"></td>
<td><a href=\"index.php?filter=$filter&pfilter=$pfilter&dfilter=$dfilter&page=$nextpage\">Next page &gt;</a></td>
</tr>
<tr><td>URL filter</td><td><input type=text name=pfilter value=\"$pfilter\"</td>";

if ($prevpage>=0) {
  print "<td><a href=\"index.php?filter=$filter&pfilter=$pfilter&dfilter=$dfilter&page=$prevpage\">&lt; Previous page</a></td>";
} else {
  print "<td></td";
}


print "</tr>
<tr><td>Date filter</td><td><input type=text name=dfilter value=\"$dfilter\"</td></tr>
<tr><td></td><td<input type=submit value=\"apply filter(s)\"></td></tr></table>
</form>";

$row=mysql_fetch_row($result);

print "<table><tr><td>ID</td><td>Time</td><td>Script URL</td><td>Query string</td></tr>";

while (!empty($row[0])) {
 
  list($entryid,$remoteaddr,$remoteuser,$ts,$self,$qs,$extra)=$row;
  
  $ts=htmlspecialchars($ts);
  $qs=htmlspecialchars($qs);
  $self=htmlspecialchars($self);

  if (eval_interesting($qs)) { $qs = "<font color=red>$qs</font>"; }

  print "<tr><td><a href=\"show_event.php?eventid=$entryid\">$entryid</a></td><td width=300>$ts</td><td>$self</td><td>$qs</td></tr>";
  
  $row=mysql_fetch_row($result);
  
}

print "</table>";

mysql_close($link);

include 'footer.php';

?>