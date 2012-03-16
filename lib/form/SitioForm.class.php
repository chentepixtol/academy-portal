<?php

/**
 * Sitio form.
 *
 * @package    portal
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormTemplate.php 10377 2008-07-21 07:10:32Z dwhittle $
 */
class SitioForm extends BaseSitioForm
{
  public function configure()
  {
    unset($this['profesor_id']);
    unset($this['fecha']);
  }
}
