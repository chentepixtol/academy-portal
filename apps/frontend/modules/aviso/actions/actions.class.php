<?php

/**
 * aviso actions.
 *
 * @package    portal
 * @subpackage aviso
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12479 2008-10-31 10:54:40Z fabien $
 */
class avisoActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
  }
  
  public function executeShow(sfWebRequest $request)
  {
    $this->aviso = $this->getRoute()->getObject();
  }
}
