<?php

/**
 * video actions.
 *
 * @package    portal
 * @subpackage video
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12479 2008-10-31 10:54:40Z fabien $
 */
class videoActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $c = new Criteria();
    $this->videos = VideoPeer::doSelect($c);
  }
  
  public function executeShow(sfWebRequest $request)
  {
    $this->video = $this->getRoute()->getObject();
  }
}
