<?php

class Banner extends BaseBanner
{
  public function save(PropelPDO $con=null)
  {
    if(!$this->getFecha())
    {
      $this->setFecha(time());
    }
    return parent::save($con);
  }
  
  public function __toString()
  {
    return " " . $this->getTexto();
  }
  
}
