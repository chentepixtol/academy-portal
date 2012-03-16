<?php

/**
 * registro actions.
 *
 * @package    portal
 * @subpackage registro
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12474 2008-10-31 10:41:27Z fabien $
 */
class registroActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->forward('registro','new');
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new AlumnoForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod('post'));

    $this->form = new AlumnoForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }
  
  public function executeRegistrado(sfWebRequest $request)
  {
    
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $alumno = $form->save();

      $this->redirect('registro/registrado');
    }
  }
}
