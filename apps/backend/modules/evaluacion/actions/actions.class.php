<?php

/**
 * evaluacion actions.
 *
 * @package    portal
 * @subpackage evaluacion
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12479 2008-10-31 10:54:40Z fabien $
 */
class evaluacionActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $this->profesor_id = $this->getUser()->getAttribute('usuario_id');
    $c = new Criteria();
    $c->add(EvaluacionPeer::PROFESOR_ID,$this->profesor_id);
    $this->evals = EvaluacionPeer::doSelectJoinPregunta($c);
  }
}
