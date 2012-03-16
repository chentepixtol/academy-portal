<?php
class ClaveRegistroForm extends sfForm
{
  public function configure()
  {
    $this->setWidget("num",new sfWidgetFormInput());
    $this->widgetSchema->setLabel("num","Numero de Claves");
    $this->setValidator("num",new sfValidatorInteger());
    
    $this->widgetSchema->setNameFormat('clave[%s]');
    
  }
}
?>