<?php

/**
 * registro actions.
 *
 * @package    portal
 * @subpackage registro
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12479 2008-10-31 10:54:40Z fabien $
 */
class registroActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $this->clave_form = new ClaveForm();
  }
  
  public function executeVerifica(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod('post'));
    $c = new Criteria();
    $c->add(ClavePeer::CLAVE,$request->getParameter('clave[clave]'));
    $clave_found = ClavePeer::doSelectOne($c);
    if(isset($clave_found))
    {
      $usuario = $this->getUser();
      $usuario->setAuthenticated(true);
      $usuario->addCredential("registro");
      $clave_found->delete();
      $this->redirect('registro/datos');      
    }
    else
    {
      $this->redirect('registro/index');
    }
  }
  
  public function executeDatos()
  {
    $this->datos_form = new sfGuardUserForm();
  }
  
  public function executeGuardar(sfWebRequest $request)
  {
    $this->forward404Unless( $request->isMethod('post'));
    $this->datos_form = new sfGuardUserForm();
    $this->datos_form->bind($request->getParameter('sf_guard_user'));
    if($this->datos_form->isValid())
    {
      $this->datos_form->save();
      $this->getUser()->setAuthenticated(false);
      $this->redirect('@homepage');
    }
    else
    {
      $this->setTemplate('datos');
    }
  }
}
