<?php

/**
 * perfil actions.
 *
 * @package    portal
 * @subpackage perfil
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12474 2008-10-31 10:41:27Z fabien $
 */
class perfilActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->perfil_list = PerfilPeer::doSelect(new Criteria());
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->perfil = $this->getRoute()->getObject();
  }
}
