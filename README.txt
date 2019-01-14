NB: This project has been discontinued and is only kept for historic reasons.

---------------------------------------
-
- PHP HoP - PHP Honeypot Project
- Copyright oudot@rstack.org 2005-2006
-
- For the latest version, go to http://www.nz-honeynet.org/phphop
-
---------------------------------------


 HISTORY
 =======

TODO emulate further vulnerablities - have seen vwar & recent horde attacks
     audit code for security problems

30th May - fix to phpshell, thanks Ryan 

23rd April - more GUI work - paging, html entity encoding - jamie

22nd April - more GUI work - jamie

16th April - php GUI interface, fix for sql logging for hiphop - jamie

6th April - libsystem download routine defaults to http if no URI schema given,
more changes by Francois, all merged in by Francois
new version number 0.5.1, added pdf, test data - Jamie

26 march 2006 - HiP HoP modified to handle 200 and 404 answers and fool 
automatic tools like nikto, nessus, web worms, etc. "hiphop.php" added to 
the official release.

26 march 2006 - Bug found and modification proposed by ROPERT Francois 
<Francois.ROPERT@supinfo.com> in libsystem.php


 AUTHORS
 =======

Francois Ropert
Jamie Riden
Laurent Oudot


 VERSION
 =======

This is the public version 0.5.3 (23 April 2006).
It contains a PHP library and some PHP modules :
- autobuild-fake-apache-dir
- phpmyadmin
- phpshell
- phpshell-by-macker
- webmail
- hiphop
Logs can be written on local disk, sent by email, or logged to mysql.


 REQUIREMENTS
 ============

To install PHP HoP, you need an Apache web server with PHP (version >= 4 should
be okay).


 INSTALL
 =======

PHP HoP is built on a tiny library (/lib) and on some modules. Those are used to
fool the attackers (decoy). You just need to copy the modules you want to add on
your web server, and the library, then some configurations might be required 
too.

Run snort and argus too if you can, as you may want to correlate
information from the apache logs, argus logs, snort logs, and phphop.

 * MODULES

For each module you want to install, just copy the related directory on your 
webserver, and modify the file "config.php" so that it fits your goals and 
environment.

 $pathlib="../lib/";  -> PATH of the PHP files included
 $pathlog="../logs/"; -> PATH of the logs
 $mailaddr="honeylogs@mydomain"; -> Address to receive instant alert emails

Example : I want the fake Horde bad configured module on my web server. I just 
upload "/mail" and "/lib" and then I modify "/mail/config.php".

 * LIBRARIES

Each module will use some PHP libraries, contained in the subdirectory "lib". We 
propose you to share that directory in "/lib/".


 CUSTOMIZE
 =========

You should use/modify those modules so that it fits your own environment.


 LICENCE
 =======

Copyright Laurent Oudot <oudot@rstack.org>

This software is a computer program whose purpose is to propose a web
decoy framework in PHP (low level interaction honeypot).

This software is governed by the CeCILL  license under French law and
abiding by the rules of distribution of free software.  You can  use, 
modify and/ or redistribute the software under the terms of the CeCILL
license as circulated by CEA, CNRS and INRIA at the following URL
"http://www.cecill.info". 

As a counterpart to the access to the source code and  rights to copy,
modify and redistribute granted by the license, users are provided only
with a limited warranty  and the software's author,  the holder of the
economic rights,  and the successive licensors  have only  limited
liability. 

In this respect, the user's attention is drawn to the risks associated
with loading,  using,  modifying and/or developing or reproducing the
software by the user in light of its specific status of free software,
that may mean  that it is complicated to manipulate,  and  that  also
therefore means  that it is reserved for developers  and  experienced
professionals having in-depth computer knowledge. Users are therefore
encouraged to load and test the software's suitability as regards their
requirements in conditions enabling the security of their systems and/or 
data to be ensured and,  more generally, to use and operate it in the 
same conditions as regards security. 

The fact that you are presently reading this means that you have had
knowledge of the CeCILL license and that you accept its terms.
