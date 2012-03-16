<?php

/**
 * Aviso form.
 *
 * @package    portal
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormTemplate.php 10377 2008-07-21 07:10:32Z dwhittle $
 */
class AvisoForm extends BaseAvisoForm
{
  public function configure()
  {
   unset($this['fecha']); 
   unset($this['slug']);
  }
  
}
