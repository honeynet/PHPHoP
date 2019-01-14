-- 
-- Table structure `phphop_alerts`
-- 

CREATE TABLE phphop_alerts (
  EntryID int(11) unsigned NOT NULL auto_increment,
  RemoteAddr int(11) NOT NULL default '0',
  RemoteUser varchar(255) NOT NULL default '',
  RemotePort smallint(6) unsigned NOT NULL default '0',
  LocalTimer timestamp NOT NULL default '0000-00-00 00:00:00',
  RemoteDnsAddr varchar(200) NOT NULL default '',
  PhpSelf varchar(255) NOT NULL default '',
  QueryString varchar(255) NOT NULL default '',
  RedirectStatus smallint(10) unsigned NOT NULL default '0',
  HttpXComingFrom varchar(15) NOT NULL default '',
  HttpUserAgent varchar(255) NOT NULL default '',
  HttpReferrer varchar(255) NOT NULL default '',
  HttpAccept varchar(50) NOT NULL default '',
  HttpHost varchar(255) NOT NULL default '',
  RequestMethod varchar(50) NOT NULL default '',
  ModuleName varchar(50) NOT NULL default '',
  AlertType varchar(50) NOT NULL default '',
  AlertSeverity smallint(5) unsigned NOT NULL default '0',
  ExtraLog varchar(255) NOT NULL default '',
  HoneypotId smallint(5) unsigned NOT NULL default '0',
  PRIMARY KEY  (EntryID)
);

-- --------------------------------------------------------

-- 
-- Table structure `phphop_honeypots`
-- 

CREATE TABLE phphop_honeypots (
  id int(11) NOT NULL default '0',
  name varchar(100) NOT NULL default '',
  contact_email varchar(100) NOT NULL default '',
  main_url varchar(100) NOT NULL default '',
  login varchar(40) NOT NULL default '',
  `password` varchar(100) NOT NULL default '',
  creation_date varchar(40) NOT NULL default '',
  country char(3) NOT NULL default '',
  PRIMARY KEY  (id)
);
