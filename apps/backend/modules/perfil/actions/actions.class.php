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
    $c = new Criteria();
    $c->add(PerfilPeer::USER_ID,$this->getUser()->getAttribute('usuario_id'));
    $this->perfil_list = PerfilPeer::doSelect($c);
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($perfil = PerfilPeer::retrieveByPk($request->getParameter('id')), sprintf('Object perfil does not exist (%s).', $request->getParameter('id')));
    $this->forward404Unless($perfil->getUserId()==$this->getUser()->getAttribute('usuario_id'),"Acceso Restringido");
    $this->form = new PerfilForm($perfil);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod('post') || $request->isMethod('put'));
    $this->forward404Unless($perfil = PerfilPeer::retrieveByPk($request->getParameter('id')), sprintf('Object perfil does not exist (%s).', $request->getParameter('id')));
    
    $this->form = new PerfilForm($perfil);
    
    $formulario = $request->getParameter($this->form->getName());
    
    $this->forward404Unless($perfil->getId()== $formulario['id'],"prohibido");
    

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  
  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $perfil = $form->save();

      $this->redirect('perfil/edit?id='.$perfil->getId());
    }
  }
}
