<?php

class ProyectoPeer extends BaseProyectoPeer
{
  /**
   * Obtiene el indice de Lucene
   * @return unknown_type
   */
  static public function getLuceneIndex()
  {
    ProjectConfiguration::registerZend();

    if (file_exists($index = self::getLuceneIndexFile()))
    {
      return Zend_Search_Lucene::open($index);
    }
    else
    {
      return Zend_Search_Lucene::create($index);
    }
  }

  /**
   * Obtiene el Archivo del indice de Lucene
   * @return unknown_type
   */
  static public function getLuceneIndexFile()
  {
    return sfConfig::get('sf_data_dir').'/proyecto.index';
  }

  public static function doDeleteAll($con = null)
  {
    if (file_exists($index = self::getLuceneIndexFile()))
    {
      sfToolkit::clearDirectory($index);
      rmdir($index);
    }

    return parent::doDeleteAll($con);
  }

  public static function getLuceneQuery($query)
  {
    $hits = self::getLuceneIndex()->find($query);

    $pks = array();
    foreach ($hits as $hit)
    {
      $pks[] = $hit->pk;
    }
    return self::retrieveByPKs($pks);
  }
}
