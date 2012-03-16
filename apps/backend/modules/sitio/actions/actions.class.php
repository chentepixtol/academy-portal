<?php

/**
 * sitio actions.
 *
 * @package    portal
 * @subpackage sitio
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12474 2008-10-31 10:41:27Z fabien $
 */

class sitioActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $c = new Criteria();
    $c->add(SitioPeer::PROFESOR_ID,$this->getUser()->getAttribute('usuario_id'));
    $c->addAscendingOrderByColumn(SitioPeer::ORDEN);
    $this->sitio_list = SitioPeer::doSelect($c);
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->sitio = SitioPeer::retrieveByPk($request->getParameter('id'));
    $this->forward404Unless($this->sitio);
  }

  public function executeNew(sfWebRequest $request)
  {
    $sitio = new Sitio();
    $sitio->setProfesorId($this->getUser()->getAttribute('usuario_id'));
    $this->form = new SitioForm($sitio);
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod('post'));
    $sitio = new Sitio();
    $sitio->setProfesorId($this->getUser()->getAttribute('usuario_id'));

    $this->form = new SitioForm($sitio);

    $this->getUser()->setFlash('Mensaje',"Elemento Creado");
    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($sitio = SitioPeer::retrieveByPk($request->getParameter('id')), sprintf('Object sitio does not exist (%s).', $request->getParameter('id')));
    $this->forward404Unless($sitio->getProfesorId()==$this->getUser()->getAttribute('usuario_id'),"Acceso Restringido");
    $this->form = new SitioForm($sitio);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod('post') || $request->isMethod('put'));
    $this->forward404Unless($sitio = SitioPeer::retrieveByPk($request->getParameter('id')), sprintf('Object sitio does not exist (%s).', $request->getParameter('id')));
    
    $this->form = new SitioForm($sitio);
    $formulario = $request->getParameter($this->form->getName());
    
    $this->forward404Unless($sitio->getId()== $formulario['id'],"prohibido");
    
    $this->getUser()->setFlash('Mensaje',"Elemento Actualizado");

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');   
    
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($sitio = SitioPeer::retrieveByPk($request->getParameter('id')), sprintf('Object sitio does not exist (%s).', $request->getParameter('id')));
    $this->forward404Unless($sitio->getProfesorId()==$this->getUser()->getAttribute('usuario_id'),"Prohibido");
    $sitio->delete();
    if($request->isXmlHttpRequest())
    {
      $this->renderText("Elemento Borrado.");
      return sfView::NONE;
    }
    else
    {
      $this->redirect('sitio/index');
      $this->getUser()->setFlash('Mensaje',"Elemento Borrado");
    }
  }
  
  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $sitio = $form->save();

      $this->redirect('sitio/index');
    }
  }
}
