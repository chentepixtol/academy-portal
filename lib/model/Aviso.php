<?php

class Aviso extends BaseAviso
{
  public function save(PropelPDO $con=null)
  {
    if(!$this->getFecha())
    {
      $now = time();
      $this->setFecha($now);
    }
    if(!$this->getSlug())
    {
      $this->setSlug(Portal::slugify($this->getTitulo()));
    }
    if (is_null($con))
    {
      $con = Propel::getConnection(SitioPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    $con->beginTransaction();
    try
    {
      $ret = parent::save($con);

      $this->updateLuceneIndex();

      $con->commit();

      return $ret;
    }
    catch (Exception $e)
    {
      $con->rollBack();
      throw $e;
    }
  }

  /**
   * Actualiza el index de Lucene
   * @return unknown_type
   */
  public function updateLuceneIndex()
  {

    $index = AvisoPeer::getLuceneIndex();

    $hits = $index->find(md5($this->getId()));
    foreach($hits as $hit)
    {
      $index->delete($hit->id);
    }

    $doc = new Zend_Search_Lucene_Document();

    $doc->addField(Zend_Search_Lucene_Field::UnIndexed('pk',$this->getId()));
    $doc->addField(Zend_Search_Lucene_Field::UnStored('key',md5($this->getId())));

    $doc->addField(Zend_Search_Lucene_Field::UnStored('titulo', $this->getTitulo(), 'utf-8'));
    $doc->addField(Zend_Search_Lucene_Field::UnStored('texto',strip_tags($this->getTexto()), 'utf-8'));

    $index->addDocument($doc);
    $index->commit();

  }

  public function delete(PropelPDO $con = null)
  {
    $index = AvisoPeer::getLuceneIndex();
    $hits = $index->find(md5($this->getId()));
    foreach($hits as $hit)
    {
      $index->delete($hit->id);
    }

    return parent::delete($con);
  }

  /**
   * Obtener la descripcion
   * @return string
   */
  public function getDescription()
  {
    sfApplicationConfiguration::getActive()->loadHelpers('Text');
    return truncate_text(strip_tags($this->getTexto()),150);
  }

}
