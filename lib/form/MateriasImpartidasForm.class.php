<?php

class MateriasImpartidasForm extends sfForm
{
  public function configure()
  {
    $c = new Criteria();
    $materias = MateriaPeer::doSelect($c);
    foreach($materias as $materia)
    {
      $this->setWidget($materia->getId(), new sfWidgetFormInputCheckbox());
      $this->setValidator($materia->getId(), new sfValidatorBoolean());
      $this->widgetSchema->setLabel($materia->getId(), $materia->getNombre());
    }
    
    $this->widgetSchema->setNameFormat('materias[%s]');
    
    $this->widgetSchema->setFormFormatterName('list');
    
  }
}