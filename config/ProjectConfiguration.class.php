<?php

# FROZEN_SF_LIB_DIR: /usr/share/php/symfony

require_once dirname(__FILE__).'/../lib/symfony/autoload/sfCoreAutoload.class.php';
sfCoreAutoload::register();

class ProjectConfiguration extends sfProjectConfiguration
{
  public function setup()
  {
    // for compatibility / remove and enable only the plugins you want
    $this->enableAllPluginsExcept(array('sfDoctrinePlugin', 'sfCompat10Plugin'));
    
    $this->setWebDir($this->getRootDir().'/www');

  }
  
  static protected $zendLoaded = false;

  static public function registerZend()
  {
    if (self::$zendLoaded)
    {
      return;
    }

    set_include_path(sfConfig::get('sf_lib_dir').'/'.PATH_SEPARATOR.get_include_path());
    require_once sfConfig::get('sf_lib_dir').'/Zend/Loader.php';

    
    Zend_Loader::registerAutoload();
    self::$zendLoaded = true;
  }
  
  
}
