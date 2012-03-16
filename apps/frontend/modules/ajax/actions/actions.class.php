<?php

/**
 * ajax actions.
 *
 * @package    portal
 * @subpackage ajax
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12479 2008-10-31 10:54:40Z fabien $
 */
class ajaxActions extends sfActions
{
  /**
   * Executes index action
   *
   * @param sfRequest $request A request object
   */
  public function executeIndex(sfWebRequest $request)
  {
    $this->banner_derecho = BannerPeer::retrieveByPK(1);
    $this->banner_izquierdo = BannerPeer::retrieveByPK(2);
    $this->banner_central = BannerPeer::retrieveByPK(3);
  }

  public function executeAvisos(sfWebRequest $request)
  {
    $c = new Criteria();
    $c->addDescendingOrderByColumn(AvisoPeer::FECHA);
    $this->avisos = AvisoPeer::doSelect($c);
  }

  public function executeMaterias(sfWebRequest $request)
  {
    $c = new Criteria();
    $this->materias = MateriaPeer::doSelect($c);
  }

  public function executeSitios(sfWebRequest $request)
  {
    $c = new Criteria();
    $this->profesores = PerfilPeer::doSelect($c);
  }

  public function executeInfo(sfWebRequest $request)
  {
    $c = new Criteria();
    $this->profesores = PerfilPeer::doSelect($c);
  }

  public function executeVideo(sfWebRequest $request)
  {
    $c = new Criteria();
    $this->videos = VideoPeer::doSelect($c);
  }

  public function executeProyectos(sfWebRequest $request)
  {
    if($request->getRequestFormat() == "xml")
    {
      $c = new Criteria();
      $this->proyectos = ProyectoPeer::doSelect($c);
    }
  }

}
