<?php

/**
 * video actions.
 *
 * @package    portal
 * @subpackage video
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12474 2008-10-31 10:41:27Z fabien $
 */
class videoActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $c = new Criteria();
    $c->add(VideoPeer::PROFESOR_ID,$this->getUser()->getAttribute('usuario_id'));
    $this->video_list = VideoPeer::doSelect($c);
  }

  public function executeNew(sfWebRequest $request)
  {
    $video = new Video();
    $video->setProfesorId($this->getUser()->getAttribute('usuario_id'));
    $this->form = new VideoForm($video);
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod('post'));

    $video = new Video();
    $video->setProfesorId($this->getUser()->getAttribute('usuario_id'));
    $this->form = new VideoForm($video);

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($video = VideoPeer::retrieveByPk($request->getParameter('id')), sprintf('Object video does not exist (%s).', $request->getParameter('id')));
    $this->forward404Unless($video->getProfesorId()== $this->getUser()->getAttribute('usuario_id'),"Acceso Restringido");
    $this->form = new VideoForm($video);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod('post') || $request->isMethod('put'));
    $this->forward404Unless($video = VideoPeer::retrieveByPk($request->getParameter('id')), sprintf('Object video does not exist (%s).', $request->getParameter('id')));
    $this->form = new VideoForm($video);
    
    $formulario = $this->getRequestParameter( $this->form->getName());
    $this->forward404Unless($formulario['id']==$video->getId(),"Prohibido");

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($video = VideoPeer::retrieveByPk($request->getParameter('id')), sprintf('Object video does not exist (%s).', $request->getParameter('id')));
    $this->forward404Unless($video->getProfesorId() == $this->getUser()->getAttribute('usuario_id'),"Prohibido");
    $video->delete();

    $this->redirect('video/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $video = $form->save();

      $this->redirect('video/edit?id='.$video->getId());
    }
  }
}
