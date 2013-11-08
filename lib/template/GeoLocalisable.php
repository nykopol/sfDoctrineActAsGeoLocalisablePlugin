<?php

/**
 * Easily add latitude and longitude fields for geolocalisation
 *
 * @package     sfDoctrineActAsGeoLocalisablePlugin
 * @subpackage  template
 * @author      Johan Desmyter <johan@etic.yt>
 */
class Doctrine_Template_GeoLocalisable extends Doctrine_Template
{

  /**
   * __construct
   *
   * @param string $array
   * @return void
   */
  public function __construct(array $options = array())
  {
      $config = sfConfig::get('doctrine_geo_localisable');
      $this->_options = Doctrine_Lib::arrayDeepMerge($config, $options);
  }

  /**
   * Set table definition for signable behavior.
   *
   * @return void
   */
  public function setTableDefinition()
  {
     if($this->_options['latitude']['enabled']){
	  $latitude = $this->_options['latitude'];
	  $this->hasColumn($latitude['field_name'], $latitude['field_type'], $latitude['field_length'], $latitude['params']);
     }
     
     if($this->_options['longitude']['enabled']){
	  $longitude = $this->_options['longitude'];
	  $this->hasColumn($longitude['field_name'], $longitude['field_type'], $longitude['field_length'], $longitude['params']);
     }
  }

}
