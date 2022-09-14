<?php
$CONFIG = array (
  'passwordsalt' => '/ufXs7Rtecu6d7BhkHz6PrXF/qyMtX',
  'secret' => 'Waqsz1JLTFbVhG8PsmLCkPCFFRTtT19bXTcm7fJScoQm3OsD',
  'datadirectory' => '/bitnami/owncloud/data',
  'overwrite.cli.url' => 'http://localhost',
  'dbtype' => 'mysql',
  'version' => '10.10.0.3',
  'dbname' => 'bitnami_owncloud',
  'dbhost' => '127.0.0.1:3306',
  'dbtableprefix' => 'oc_',
  'mysql.utf8mb4' => true,
  'dbuser' => 'bn_owncloud',
  'dbpassword' => '1bfd1570e7507a32581e66be3e7d71772fdb8b5991bfa1bbc83411888826e5a7',
  'allow_user_to_change_mail_address' => '',
  'logtimezone' => 'UTC',
  'apps_paths' => 
  array (
    0 => 
    array (
      'path' => '/opt/bitnami/owncloud/apps',
      'url' => '/apps',
      'writable' => false,
    ),
    1 => 
    array (
      'path' => '/opt/bitnami/owncloud/apps-external',
      'url' => '/apps-external',
      'writable' => true,
    ),
  ),
  'installed' => true,
  'instanceid' => 'oct24u468zfc',
  'trusted_domains' => 
  array (
    0 => 'localhost',
    1 => '20.112.101.211',
    2 => 'files.ccof.org',
    3 => 'sharewith.ccof.org',
  ),
  'mail_domain' => 'ccof.org',
  'mail_from_address' => 'emailfordata',
  'mail_smtpmode' => 'smtp',
  'mail_smtpauthtype' => 'LOGIN',
  'mail_smtpauth' => 1,
  'mail_smtphost' => 'smtp.office365.com',
  'mail_smtpport' => '587',
  'mail_smtpname' => 'emailfordata@ccof.org',
  'mail_smtpsecure' => 'tls',
#  'memcache.local' => '\OC\Memcache\APCu',
  'filelocking.enabled' => 'true',
  'memcache.locking' => 'true',
  'memcache.local' => '\OC\Memcache\Redis',
  'redis' => [
      'host' => '/var/run/redis/redis-server.sock',
      'port' => 0,
      'password' => '',
      'dbindex' => 0,
  ],

);
