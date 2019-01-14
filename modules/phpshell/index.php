<?
//
//  This file is part of PHPHoP, the PHP Honeypot Project
//
//  Copyright oudot@rstack.org 2005-2006
//
//
echo '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 3.2 Final//EN">
<HTML>
 <HEAD>
  <TITLE>Index of '.dirname($_SERVER['PHP_SELF']).'</TITLE>
 </HEAD>
 <BODY>
<H1>Index of '.dirname($_SERVER['PHP_SELF']).'</H1>
<UL>';

echo '<LI><A HREF=".."> Parent Directory</A>';

$handle = opendir(".");
while (false !== ($file = readdir($handle)))
{
	if ( $file == '..' || ($file[0] == 'l' && $file[1] == 'i' && $file[2] == 'b') || $file == 'config.php'|| $file == 'index.php' || $file == '.'|| $file == 'logs'|| $file == 'phpshell.php.txt');
	else
	{
		echo '<LI><a href="'.$file.'">'.$file.(is_dir($file)?'/':'').'</a>';
	}

}
closedir($handle);

echo '</UL><ADDRESS>'.$GLOBALS["SERVER_SOFTWARE"].' Server at <A HREF="mailto:'.$GLOBALS["SERVER_ADMIN"].'">'.$GLOBALS["HTTP_HOST"].'</A> Port '.$GLOBALS["SERVER_PORT"].'</ADDRESS>

</BODY></HTML>';

?>