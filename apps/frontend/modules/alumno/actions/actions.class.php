<?php

/**
 * alumno actions.
 *
 * @package    portal
 * @subpackage alumno
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12479 2008-10-31 10:54:40Z fabien $
 */
class alumnoActions extends sfActions
{
  /**
   * Executes index action
   *
   * @param sfRequest $request A request object
   */
  public function executeIndex(sfWebRequest $request)
  {
    $this->nombre = $this->getUser()->getAttribute('nombre');
  }

  public function executeInicio(sfWebRequest $request)
  {
    if($this->getUser()->hasAttribute('alumno_id'))
    {
      $this->redirect('alumno/index');
    }
    else
    {
      $this->notice = $this->getUser()->getFlash('notice');
      $this->form = new AlumnoSesionForm();
    }
  }

  public function executeVerifica(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod('post'));
    $this->form = new AlumnoSesionForm();
    $this->form->bind($request->getParameter('alumno'));
    $usename = $this->form->getValue('username');
    $password = md5($this->form->getValue('password'));
    if($this->form->isValid())
    {
      $c = new Criteria();
      $c->add(AlumnoPeer::USERNAME,$usename);
      $alumno = AlumnoPeer::doSelectOne($c);
      if(!empty($alumno))
      {
        if($alumno->getPassword() == $password)
        {
          $this->getUser()->setAttribute('nombre',$alumno->getNombre());
          $this->getUser()->setAttribute('alumno_id',$alumno->getId());
          $this->getUser()->setAuthenticated(true);
          $this->getUser()->addCredential('alumno');
          $this->redirect('alumno/index');
        }
      }
      $this->getUser()->setFlash('notice',"El Usuario y/o el Password son Incorrectos ");
      $this->redirect('alumno/inicio');
    }
    else
    {
      $this->setTemplate('inicio');
    }
  }
}
