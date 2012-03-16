<?php

class Materia extends BaseMateria
{
  public function __toString()
  {
    return $this->getSlug();
  }
  
  public function save(PropelPDO $con=null)
  {
    if(!$this->getSlug())
    {
      $this->setSlug(Portal::slugify($this->getNombre()));
    }
    return parent::save($con);
  }
  
}
