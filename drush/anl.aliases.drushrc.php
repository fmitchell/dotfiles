<?php


/**
 * For use on any server to find the current environment.
 */
$aliases['dev'] = array(
  'uri' => 'anl.dev',
  'root' => '/Users/tim/htdocs/anl.dev',
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