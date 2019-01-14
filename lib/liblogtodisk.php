<?
//
//  This file is part of PHPHoP, the PHP Honeypot Project
//
//  Copyright oudot@rstack.org 2005-2006
//
//
// LOG TO LOCAL HARD DRIVE
// Set $pathlog to a directory where this script is allowed to write
// Please remind that this directory should not be readable directly
// from the net (use a htaccess feature like, if needed).


function logtodisk($pathlog,$name)
{

	if( is_null($pathlog) || $pathlog === "" )
		$pathlog="./";
	if( ! is_dir($pathlog) )
		mkdirs($pathlog, 0700);
	
	$filename=strftime($pathlog."/phphop-".$name."-%d-%b-%Y.log");
	$file = fopen($filename,"a+");
	if($file)
	{
	  flock($file,2); // may not work properly on partitions based on NFS...
	  fputs($file,
				 $GLOBALS["REMOTE_ADDR"].":"
				.$GLOBALS["REMOTE_USER"].":"
				.$GLOBALS["REMOTE_PORT"].":"
				.strftime("[%d/%b/%Y:%H:%m:%S +0100]").":"
				.((gethostbyaddr($GLOBALS["REMOTE_ADDR"])==$GLOBALS["REMOTE_ADDR"])?"":gethostbyaddr($GLOBALS["REMOTE_ADDR"])).":"
				."'".$PHP_SELF."':"
				.$GLOBALS["QUERY_STRING"].":"
				.$GLOBALS["REDIRECT_STATUS"].":"
				.$GLOBALS["HTTP_X_COMING_FROM"].":"
				.$GLOBALS["HTTP_USER_AGENT"].":"
				.$GLOBALS["HTTP_REFERER"].":"
				.$GLOBALS["HTTP_ACCEPT"].":"
				.$GLOBALS["HTTP_HOST"].":"
				.$GLOBALS["REQUEST_METHOD"]."\n");
	  flock($file,3);
	  fclose($file);
	}
}




// PHP 4 does not support recursive mkdir,so that we use this function: mkdirs()
function mkdirs($dir, $mode = FS_RIGHTS_D) {
 $stack = array(basename($dir));
 $path = null;
 while ( ($d = dirname($dir) ) ) {
     if ( !is_dir($d) ) {
         $stack[] = basename($d);
         $dir = $d;
     } else {
         $path = $d;
         break;
     }
 }
 
 $created = array();
 for ( $n = count($stack) - 1; $n >= 0; $n-- ) {
     $s = $path . '/'. $stack[$n];                                     
     if ( !mkdir($s, $mode) ) {
         for ( $m = count($created) - 1; $m >= 0; $m-- )
             rmdir($created[$m]);
         return false;
     }
     $created[] = $s;     
     $path = $s;
 }
 return true;
}


?>