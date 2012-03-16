<?php

class MailForm extends sfForm
{
  public function configure()
  {
    $this->setWidgets(array(
      'asunto' => new sfWidgetFormInput(),
      'correo' => new sfWidgetFormInput(),
      'mensaje' => new sfWidgetFormTextarea(),
      'alumnos' =>new sfWidgetFormInputCheckbox(),
      'profesores' => new sfWidgetFormInputCheckbox(),
    ));
    
    $this->widgetSchema->setNameFormat('mail[%s]');
    
    $this->setValidators(array(
      'asunto' => new sfValidatorString(array('required'=>true)),
      'correo' => new sfValidatorEmail(array('required' => false )),
      'mensaje' => new sfValidatorString(array('required'=>true)),
      'alumnos' => new sfValidatorBoolean(),
      'profesores' => new sfValidatorBoolean(),
    ));
    
  }
}