<?
//
//  This file is part of PHPHoP, the PHP Honeypot Project
//
//  Copyright oudot@rstack.org 2005-2006
//
//  This script contains functions to emulate system interaction
//

// TODO: improve fixed values with either randomized or configurable values


// Download (steal) the URL ($link) given by the visitor
// Can be used to simulate tools like wget, curl, lynx...
// Return related output of the command, if any
function download($tool,$link,$stagetwo=0)
{
	global $pathlog;
	global $modulename;
	$downloadfilename=strftime($pathlog."/phphop-".$modulename."-".$tool."-%d-%b-%Y--%H-%M-%S");
	$wfile = fopen($downloadfilename.".downloaded","a+");
	if($wfile)
	{
		$url = explode("?", $link);

		//default to http if no schema
		if ( !preg_match("!://!", $url[0], $matches) ) {
		  $url[0]="http://".$url[0];
		}

		$remote = @fopen($url[0],"r");
		if($remote)
		{
		        $maxsize=500*1024;  // some Kaiten variants weigh in around 400Kb
			$s=fread($remote,$maxsize);
			fputs($wfile,$s);
			$size=filesize($downloadfilename.".downloaded");
			if($tool=="wget")
				$out="--".strftime("%H:%M:%S")."--  ".$link."\nResolving...\nConnecting... connected.\nHTTP request sent, awaiting response... 200 OK\nLength: ".$size." [text/html]\n\n    0K ..                                                    100%   25.49 MB/s\n\n".strftime("%H:%M:%S")." (25.49 MB/s) - saved [".$size."/".$size."]";
			fclose($remote);
		}else {
		  $logfile = fopen($downloadfilename.".log","a+");
		  if($logfile)
		  {
		    $foo=$url[0];
		    fputs($logfile,"Couldn't download URL $foo");
		    fclose($logfile);
		  }

		}
		fclose($wfile);
	} else {

	  $logfile = fopen($downloadfilename.".log","a+");
	  if($logfile)
	    {
	      fputs($logfile,"Couldn't open file for downloading URL $url");
	      fclose($logfile);
	    }

	}
	
	$logfile = fopen($downloadfilename.".log","a+");
	if($logfile)
	{
		fputs($logfile,"[ ".strftime("%H:%M:%S")." ] Request to download [ ".$link." ]\n             Result in ".$downloadfilename.".downloaded\n" );
		fputs($logfile,"output -$out");
		fclose($logfile);
	}


	if ($stagetwo) {
	  //if asked, we parse the downloaded file looking for further wget's

	  $wfile = fopen($downloadfilename.".downloaded","r");

	  if($wfile)
	  {
	    $iter=1;

	    while (!feof($wfile)) {
	      $filedata = fgets($wfile);

	      if ( preg_match("/^wget ([a-zA-Z\d_\.\/]+)/", $filedata, $matches) ) {
		$wgeturl = $matches[1];

		$sfile = fopen($downloadfilename.".downloaded.part$iter","a+");
		if($sfile)
		{
		  $iter++;

		  //default to http if no schema
		  if ( !preg_match("!://!", $wgeturl, $matches) ) {
		    $wgeturl="http://".$wgeturl;
		  }

		  $remote = @fopen($wgeturl,"r");

		  if($remote)
		  {
		    $maxsize=500*1024;  // some Kaiten variants weigh in around 400Kb
		    $s=fread($remote,$maxsize);
		    fputs($sfile,$s);
		    fclose($remote);
		  }
		  fclose($sfile);
	      
		  $logfile = fopen($downloadfilename.".log","a+");
		  if($logfile)	
		  {
		    fputs($logfile,"[ ".strftime("%H:%M:%S")." ] Second stage, wget download [ ".$wgeturl." ]\n             Result in ".$downloadfilename.".downloaded\n" );
		    fclose($logfile);
		  }
		}
	      }
	    }
	  }
	}

	return $out;
}


// Take a command sent to a fake shell and return the related output if any
function shell($command)
{
	if(!empty($command))
	{
 	        $cmds = explode(';', $command);
	        $totalcmds = count($cmds);
	        if($totalcmds!=1)
	        {
			for($i=0; $i<=$totalcmds; $i++)
	        		$output.=shell($cmds[$i])."\n";
	        	return $output;
                }

// patch from pm
//		$mycommand = explode(" ", $command);
		$dummy = explode(" ", $command);
		$mycommand = array();
		for ($i=0; $i < count($dummy); $i++)
			if (!empty($dummy[$i])) $mycommand[] = $dummy[$i];
// endof patch

		switch ($mycommand[0]) {
			case 'w':	
			case "/usr/bin/w":	
				$time=strftime("%H:%M:%S");
				$m=strftime("%M");
				if($m != "59")
					$m+=1;
				if($m < 10)
					$m="0".$m;
				$output=" ".$time." up 15:".$m.",  0 users,  load average: 0.00, 0.00, 0.00\nUSER     TTY      FROM              LOGIN@   IDLE   JCPU   PCPU WHAT\nguest    pts/0    192.168.1.100   16:36    0.00s  1.06s  0.06s mail";
				break;

			case "id":
			case "/usr/bin/id":
			case "/bin/id":		
				$output="uid=99(nobody) gid=99(nogroup)"; 
				break;

			case "uname":		
			case "/bin/uname":		
				$output="Linux"; 
				if($mycommand[1]=="-a")
					$output.=" web 2.4.26 #6 Mon Jun 14 19:07:27 PDT 2004 i686 unknown unknown GNU/Linux";
				break;

			case "ls":
			case "dir":
			case "/bin/ls":
				$lstmp = explode("/", $_SERVER['PHP_SELF']);
				for ($i=0; $i < count($lstmp); $i++)
					$output=$lstmp[$i]; 
				if($mycommand[1][0]=="-" && ($mycommand[1][1]=="l" || $mycommand[1][2]=="l" || $mycommand[1][3]=="l") )
					$output="total 12\n-rw-r--r--  1 root   root 4602 2004-12-11 18:46 ".$output;
				break;

			case "shutdown":
			case "/sbin/shutdown":
				$output="Permission denied";
				break;

			case "/sbin/ifconfig":
				$output="eth0      Link encap:Ethernet  HWaddr 00:3C:95:BE:26:B2\n          inet addr:192.168.1.19  Bcast:192.168.1.255  Mask:255.255.255.0\n          UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1\n          RX packets:13459 errors:0 dropped:0 overruns:0 frame:0\n          TX packets:15162 errors:0 dropped:0 overruns:0 carrier:0\n          collisions:0 txqueuelen:0\n          RX bytes:7724456 (7.3 MiB)  TX bytes:8058387 (7.6 MiB)\n";
				break;

			case "ps":
			case "/bin/ps":
			case "/usr/bin/ps":
				$output="  PID TTY      STAT   TIME COMMAND\n";
				if($mycommand[1]!="")

					$output="  PID TTY      STAT   TIME COMMAND\n    1 ?        S      0:07 init [3]\n    2 ?        S      0:01 [keventd]\n    3 ?        SN     0:00 [ksoftirqd_CPU0]\n    4 ?        S      0:00 [kswapd]\n    5 ?        S      0:00 [bdflush]\n    6 ?        S      0:00 [kupdated]\n   10 ?        S<     0:00 [mdrecoveryd]\n   57 ?        Ss     0:00 /usr/sbin/syslogd\n  550 ?        Ss     0:04 /usr/sbin/httpd\n  558 tty1     Ss+    0:00 /sbin/agetty 38400 tty1 linux\n 3523 ?        R+     0:00 ps ".$mycommand[1];
				break;			

			case "echo":
				if($mycommand[1]!="")
					if($mycommand[1]=="*")
						$output=shell("ls");
					else 
						$output=htmlspecialchars($mycommand[1], ENT_QUOTES);
				break;
			case "pwd":
				$output="/var/www/htdocs";
				break;
			case "who":
				if($mycommand[1]=="--lookup")
					$output="guest      pts/0        Dec 16 16:36    (webdevel)";
				else
					$output="guest      pts/0        Dec 16 16:36    (192.168.1.100)";
				break;
			case "cd":
				break;
			case "cat":
				if($mycommand[1]=="phpshell.php")
				{
				 $tmpf=fopen("phpshell.php".".txt","r");
				 if($tmpf)
				 {
					$maxsize=65536;
					$output=fread($tmpf,$maxsize);
					fclose($tmpf);
				 }
				}
				if($mycommand[1]=="/etc/passwd")
					$output="root:$1$\$uJrlcWVCxhkpdTguT/ZAz2:0:0:root:/:/bin/sh\nnobody::99:99:nobody:/:/bin/sh\nguest::100:100:guest:/:/bin/sh";
				break;

			case "curl":
				if($mycommand[1]!="")
					$output=download($mycommand[0],$mycommand[1]);
				else
					$output="curl: try 'curl --help' or 'curl --manual' for more information";
				break;

			case "lynx":
				if($mycommand[1]!="")
					$output=download($mycommand[0],$mycommand[1]);
				else
					$output="USAGE: lynx [options] [file]";
				break;
			case "wget":
				if($mycommand[1]!="")
					$output=download($mycommand[0],$mycommand[1]);
				else
					$output="wget: missing URL\nUsage: wget [OPTION]... [URL]...\n\nTry `wget --help' for more options.";
				break;

			case "chmod":
			case "/bin/chmod":
			case "/usr/bin/chmod":
				break;
			case "mkdir":
			case "/bin/mkdir":
			case "/usr/bin/mkdir":
				$output="";
				break;


			default:		
				$output='sh: '.htmlspecialchars($mycommand[0], ENT_QUOTES).': command not found';

		}
	}
	return $output;
}
?>