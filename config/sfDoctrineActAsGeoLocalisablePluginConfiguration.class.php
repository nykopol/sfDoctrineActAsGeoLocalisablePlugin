<?php

/**
 *
 * @package    sfDoctrineActAsGeoLocalisablePlugin
 * @subpackage config 
 * 
 * @author      Johan Desmyter <johan@etic.yt>
 */
class sfDoctrineActAsGeoLocalisablePluginConfiguration extends sfPluginConfiguration {

   public function initialize() {
	$this->_initializeConfig();
   }

   /**
    * 
    * @return void
    */
   protected function _initializeConfig() {

	$config_files = $this->configuration->getConfigPaths('config/doctrine_geo_localisable.yml');
	$config = sfYamlConfigHandler::parseYamls($config_files);
	$config = $config['doctrine_geo_localisable'];

	sfConfig::set('doctrine_geo_localisable', $config);
   }

}