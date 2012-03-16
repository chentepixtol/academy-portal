<?php

class Sitio extends BaseSitio
{
  public function save(PropelPDO $con=null)
  {
    if(!$this->getFecha())
    {
      $this->setFecha(time());
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
    $index = SitioPeer::getLuceneIndex();

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
    $index = SitioPeer::getLuceneIndex();
    $hits = $index->find(md5($this->getId()));
    foreach($hits as $hit)
    {
      $index->delete($hit->id);
    }

   return parent::delete($con);
  }

}
