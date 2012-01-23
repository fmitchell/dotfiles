<?php


/**
 * For use on any server to find the current environment.
 */
$aliases['dev'] = array(
  'uri' => 'energy.dev',
  'root' => '/Users/tim/htdocs/energy.dev',
  'path-aliases' => array(
    '%dump-dir' => '/tmp/',
    '%files' => 'sites/development/files',
  ),
);
$aliases['fmitchell'] = array(
  'uri' => 'fmitchell.energy.dev',
  'root' => '/Users/tim/htdocs/fmitchell.energy.dev',
  'path-aliases' => array(
    '%dump-dir' => '/tmp/',
    '%files' => 'sites/development/files',
  ),
);

$aliases['johnrobertwilson'] = array(
  'uri' => 'johnrobertwilson.energy.dev',
  'root' => '/Users/tim/htdocs/johnrobertwilson.energy.dev',
  'path-aliases' => array(
    '%dump-dir' => '/tmp/',
    '%files' => 'sites/development/files',
  ),
);

$aliases['selenium'] = array(
  'uri' => 'selenium.energy.dev',
  'root' => '/Users/tim/htdocs/selenium.energy.dev',
  'path-aliases' => array(
    '%dump-dir' => '/tmp/',
    '%files' => 'sites/development/files',
  ),
);


$aliases['achieve'] = array(
  'uri' => 'achieve.energy.dev',
  'root' => '/Users/tim/htdocs/achieve.energy.dev',
  'path-aliases' => array(
    '%dump-dir' => '/tmp/',
    '%files' => 'sites/development/files',
  ),
);
/**
 * For use on the Jenkins server to sync files / databases.
 */
/*$aliases['dev'] = array(
  'uri' => 'http://dev.cms.doe.gov/',
  'remote-host' => 'dev.cms.doe.gov',
  'remote-user' => 'energy_gov',
  'ssh-options' => '-i /var/lib/jenkins/.ssh/id_rsa2',
  'root' => '/var/www/energy.gov/htdocs',
  'path-aliases' => array(
    '%dump-dir' => '/tmp/',
    '%drush-script' => 'sudo -uapache /opt/drush/drush',
  ),
);

$aliases['stage'] = array(
  'uri' => 'http://stage.cms.doe.gov/',
  'remote-host' => 'stage.cms.doe.gov',
  'remote-user' => 'energy_gov',
  'ssh-options' => '-i /var/lib/jenkins/.ssh/id_rsa2',
  'root' => '/var/www/energy.gov/htdocs',
  'path-aliases' => array(
    '%dump-dir' => '/tmp/',
    '%drush-script' => 'sudo -uapache /opt/drush/drush',
  ),
);

$aliases['qa'] = array(
  'uri' => 'http://qa.cms.doe.gov/',
  'remote-host' => 'qa.cms.doe.gov',
  'remote-user' => 'energy_gov',
  'ssh-options' => '-i /var/lib/jenkins/.ssh/id_rsa2',
  'root' => '/var/www/energy.gov/htdocs',
  'path-aliases' => array(
    '%dump-dir' => '/tmp/',
    '%drush-script' => 'sudo -uapache /opt/drush/drush',
  ),
);

$aliases['prod'] = array(
  'uri' => 'http://web1.cms.doe.gov/',
  'remote-host' => 'web1.cms.doe.gov',
  'remote-user' => 'energy_gov',
  'ssh-options' => '-i /var/lib/jenkins/.ssh/id_rsa2',
  'root' => '/var/www/energy.gov/htdocs',
  'path-aliases' => array(
    '%dump-dir' => '/tmp/',
    '%drush-script' => 'sudo -uapache /opt/drush/drush',
  ),
);

$aliases['prod2'] = array(
  'uri' => 'http://web2.cms.doe.gov/',
  'remote-host' => 'web2.cms.doe.gov',
  'remote-user' => 'energy_gov',
  'ssh-options' => '-i /var/lib/jenkins/.ssh/id_rsa2',
  'root' => '/var/www/energy.gov/htdocs',
  'path-aliases' => array(
    '%dump-dir' => '/tmp/',
    '%drush-script' => 'sudo -uapache /opt/drush/drush',
  ),
);
*/