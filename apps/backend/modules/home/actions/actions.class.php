<?php

/**
 * home actions.
 *
 * @package    portal
 * @subpackage home
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12479 2008-10-31 10:54:40Z fabien $
 */
class homeActions extends sfActions
{
  /**
   * Executes index action
   *
   * @param sfRequest $request A request object
   */
  public function executeIndex(sfWebRequest $request)
  {
    if( !$this->getUser()->getAttribute("usuario_id") &&( !$this->getUser()->hasCredential('administrator') || !$this->getUser()->hasCredential('profesor')) )
    {
      $usuario = $this->getUser()->getGuardUser();
      $usuario_profile = $usuario->getProfile();
      $this->getUser()->setAttribute("usuario_id",$usuario->getId());
      $this->getUser()->setAttribute('username',$usuario->getUsername());
      $this->getUser()->setAttribute("nombre",$usuario_profile->getNombre());

      if($usuario->getUsername() == "administrator")
      {
        $this->getUser()->addCredential('administrator');
      }
      else
      {
        $this->getUser()->addCredential('profesor');
      }

    }

  }

  public function executeSalir()
  {
    session_start();
    $_SESSION = array();
    session_destroy();
    $this->redirect("@signout");
  }

}
