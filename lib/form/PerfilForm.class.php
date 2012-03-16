<?php

/**
 * Perfil form.
 *
 * @package    portal
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormTemplate.php 10377 2008-07-21 07:10:32Z dwhittle $
 */
class PerfilForm extends BasePerfilForm
{
  public function configure()
  {
    unset($this['user_id']);
    
    $this->setValidator('email', new sfValidatorEmail(array('required'=> false)));
  }
}
