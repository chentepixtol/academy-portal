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
  }

  public function executeBuscar(sfWebRequest $request)
  {
    $query = $request->getParameter('query');
    if(!$query)
    {
      $this->forward('home','index');
    }
    $this->avisos = AvisoPeer::getLuceneQuery($query);
    $this->proyectos = ProyectoPeer::getLuceneQuery($query);
    $this->videos = VideoPeer::getLuceneQuery($query);
    $this->sitios = SitioPeer::getLuceneQuery($query);
    $this->wikis = WikiPeer::getLuceneQuery($query);
  }

  public function executeAbout()
  {
  }
  public function executeVicente()
  {
  }
  public function executeRicardo()
  {
  }
  public function executeAres()
  {
  }
}
