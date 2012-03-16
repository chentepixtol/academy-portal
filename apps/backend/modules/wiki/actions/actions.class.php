<?php

/**
 * wiki actions.
 *
 * @package    portal
 * @subpackage wiki
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12474 2008-10-31 10:41:27Z fabien $
 */
class wikiActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $c = new Criteria();
    $c->add(WikiPeer::PROFESOR_ID,$this->getUser()->getAttribute('usuario_id'));
    $this->wiki_list = WikiPeer::doSelectJoinMateria($c);
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->wiki = WikiPeer::retrieveByPk($request->getParameter('id'));
    $this->forward404Unless($this->wiki);
  }

  public function executeNew(sfWebRequest $request)
  {
    $wiki = new Wiki();
    $wiki->setProfesorId($this->getUser()->getAttribute('usuario_id'));
    $this->form = new WikiForm($wiki);
    $this->form->setProfesorId($this->getUser()->getAttribute('usuario_id'));
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod('post'));
    
    $wiki = new Wiki();
    $wiki->setProfesorId($this->getUser()->getAttribute('usuario_id'));

    $this->form = new WikiForm($wiki);
    $this->form->setProfesorId($this->getUser()->getAttribute('usuario_id'));

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($wiki = WikiPeer::retrieveByPk($request->getParameter('id')), sprintf('Object wiki does not exist (%s).', $request->getParameter('id')));
    $this->form = new WikiForm($wiki);
    $this->form->setProfesorId($this->getUser()->getAttribute('usuario_id'));
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod('post') || $request->isMethod('put'));
    $this->forward404Unless($wiki = WikiPeer::retrieveByPk($request->getParameter('id')), sprintf('Object wiki does not exist (%s).', $request->getParameter('id')));
    $this->form = new WikiForm($wiki);
    $this->form->setProfesorId($this->getUser()->getAttribute('usuario_id'));

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($wiki = WikiPeer::retrieveByPk($request->getParameter('id')), sprintf('Object wiki does not exist (%s).', $request->getParameter('id')));
    $wiki->delete();

    $this->redirect('wiki/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $wiki = $form->save();

      $this->redirect('wiki/edit?id='.$wiki->getId());
    }
  }
}
