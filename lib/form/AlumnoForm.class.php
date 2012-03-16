<?php

/**
 * Alumno form.
 *
 * @package    portal
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormTemplate.php 10377 2008-07-21 07:10:32Z dwhittle $
 */
class AlumnoForm extends BaseAlumnoForm
{
  public function configure()
  {
    $this->setWidget('password',new sfWidgetFormInputPassword());
    $this->setValidator('email', new sfValidatorEmail());
    $this->setValidator('boleta',new sfValidatorInteger());
  }
}
