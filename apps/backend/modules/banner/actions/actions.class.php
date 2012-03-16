<?php

/**
 * banner actions.
 *
 * @package    portal
 * @subpackage banner
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12474 2008-10-31 10:41:27Z fabien $
 */
class bannerActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->banner_list = BannerPeer::doSelect(new Criteria());
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($banner = BannerPeer::retrieveByPk($request->getParameter('id')), sprintf('Object banner does not exist (%s).', $request->getParameter('id')));
    $this->form = new BannerForm($banner);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod('post') || $request->isMethod('put'));
    $this->forward404Unless($banner = BannerPeer::retrieveByPk($request->getParameter('id')), sprintf('Object banner does not exist (%s).', $request->getParameter('id')));
    $this->form = new BannerForm($banner);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $banner = $form->save();

      $this->redirect('banner/edit?id='.$banner->getId());
    }
  }
}
