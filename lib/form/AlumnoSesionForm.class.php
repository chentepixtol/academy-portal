<?php
class AlumnoSesionForm extends sfForm
{
  public function configure()
  {
    $this->setWidget('username',new sfWidgetFormInput());
    $this->setWidget('password', new sfWidgetFormInputPassword());

    $this->setValidator('username', new sfValidatorString(array('max_length' => 40)));
    $this->setValidator('password', new sfValidatorString(array('max_length' => 40)));

    $this->widgetSchema->setNameFormat('alumno[%s]');
    
  }
}