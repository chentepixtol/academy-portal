<?php

/**
 * materia actions.
 *
 * @package    portal
 * @subpackage materia
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12479 2008-10-31 10:54:40Z fabien $
 */
class materiaActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $c = new Criteria();
    $this->materias = MateriaPeer::doSelect($c);
  }
  
  public function executeShow(sfWebRequest $request)
  {
    $this->materia = $this->getRoute()->getObject();
    $c = new Criteria();
    $c->add(WikiPeer::MATERIA_ID,$this->materia->getId());
    $this->bloques = WikiPeer::doSelect($c);
  }
}
