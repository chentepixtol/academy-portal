<?php

/**
 * sitio actions.
 *
 * @package    portal
 * @subpackage sitio
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12479 2008-10-31 10:54:40Z fabien $
 */

class sitioActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $c = new Criteria();
    $this->profesores = PerfilPeer::doSelect($c);
  }
  
  public function executeShow(sfWebRequest $request)
  {
    $c = new Criteria();
    $this->usuario = $this->getRoute()->getObject();
    $c->add(SitioPeer::PROFESOR_ID,$this->usuario->getUserId());
    $c->addAscendingOrderByColumn(SitioPeer::ORDEN);
    $this->bloques = SitioPeer::doSelect($c);
  }
  
}
