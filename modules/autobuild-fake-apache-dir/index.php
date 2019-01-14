<?
echo '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 3.2 Final//EN">
<HTML>
 <HEAD>
  <TITLE>Index of '.dirname($_SERVER['PHP_SELF']).'</TITLE>
 </HEAD>
 <BODY>
<H1>Index of '.dirname($_SERVER['PHP_SELF']).'</H1>
<UL>';

echo '<LI>';
echo '<pre><img src="icons/blank.gif" alt="     "> <a href="?a=1">Name</a>                   <a href="?a=2">Last modified</a>         <a href="?a=3">Size</a>  <a href="?a=4">Description</a>
<hr>
<A HREF=".."> Parent Directory</A>
<img src="icons/unknown.gif" alt="[   ]"> <a href="passwords.txt         ">passwords.txt</a>          14-May-2003 12:04      1k  
<img src="icons/unknown.gif" alt="[   ]"> <a href="passwd"                >passwd</a>                 12-May-2003 11:21      3k  
<img src="icons/unknown.gif" alt="[   ]"> <a href="all-password-lists.txt">all-password-lists.txt</a> 12-May-2003 13:01      2k  
<img src="icons/unknown.gif" alt="[   ]"> <a href="creditcard.dat"        >creditcard.dat</a>         12-May-2003 10:01      5k  
<img src="icons/image.gif" alt="[   ]"> <a href="naked.jpg"               >naked.jpg</a>              11-June-2003 12:01    14k  
<img src="icons/image.gif" alt="[   ]"> <a href="nude.jpg"                >nude.jpg</a>               14-June-2003 12:01    32k  
<img src="icons/image.gif" alt="[   ]"> <a href="private.jpg"             >private.jpg</a>            14-June-2003 12:01    31k  
<img src="icons/image.gif" alt="[   ]"> <a href="girlfriend.jpg"          >girlfriend.jpg</a>         14-June-2003 12:01    21k  
<img src="icons/image.gif" alt="[   ]"> <a href="wife.jpg"                >wife.jpg</a>               14-June-2003 12:01    21k  
<img src="icons/image.gif" alt="[   ]"> <a href="nackt.jpg"               >nackt.jpg</a>              21-June-2003 12:01    51k  
<img src="icons/image.gif" alt="[   ]"> <a href="nude.gif"                >nude.gif</a>               14-June-2003 12:01    21k  
<img src="icons/image.gif" alt="[   ]"> <a href="sex.jpg"                 >sex.jpg</a>                16-June-2003 12:01    46k  
<img src="icons/image.gif" alt="[   ]"> <a href="free-movie.mpg"          >free-movie.mpg</a>         10-May-2002 12:02    232k  
<img src="icons/image.gif" alt="[   ]"> <a href="google-hacks.txt"        >google-hacks.txt</a>       10-May-2002 14:01      5k  
<img src="icons/image.gif" alt="[   ]"> <a href="hacking-google.txt"      >hacking-google.txt</a>     10-May-2002 14:01      5k  
<img src="icons/image.gif" alt="[   ]"> <a href="security-attacks.txt"    >security-attacks.txt</a>   10-May-2002 14:01      5k  
</pre><hr>';


$handle = opendir(".");
while (false !== ($file = readdir($handle)))
{
	if ( $file == '..' || $file == '.' || $file == 'index.php');
	else
	{
		echo '<LI><a href="'.$file.'">'.$file.'</a>';
	}

}
closedir($handle);

echo '</UL><ADDRESS>'.$GLOBALS["SERVER_SOFTWARE"].' Server at <A HREF="mailto:'.$GLOBALS["SERVER_ADMIN"].'">'.$GLOBALS["HTTP_HOST"].'</A> Port '.$GLOBALS["SERVER_PORT"].'</ADDRESS>

</BODY></HTML>';

?>
