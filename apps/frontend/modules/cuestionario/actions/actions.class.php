<?php

/**
 * cuestionario actions.
 *
 * @package    portal
 * @subpackage cuestionario
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12479 2008-10-31 10:54:40Z fabien $
 */
class cuestionarioActions extends sfActions
{
  /**
   * Executes index action
   *
   * @param sfRequest $request A request object
   */
  public function executeIndex(sfWebRequest $request)
  {
    $this->form = new CuestionarioForm();
  }

  public function executeProcesa(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod('post'));
    $this->form = new CuestionarioForm();
    $this->form->bind($request->getParameter('cuestionario'));
    if($this->form->isValid())
    {
      $this->guardar($this->form->getValues());
      $this->redirect('@homepage');
    }
    else
    {
      $this->setTemplate('index');
    }
  }

  protected function guardar($datos)
  {

    $profesor_id = $datos['profesor_id'];
    unset($datos['profesor_id']);

    foreach($datos as $pregunta_id => $dato)
    {

      $eval = EvaluacionPeer::retrieveOrCreate($profesor_id, $pregunta_id);
      switch ($dato)
      {
        case 0:
          $eval->incrementaNumResp1();
          break;
        case 1:
          $eval->incrementaNumResp2();
          break;
        case 2:
          $eval->incrementaNumResp3();
          break;
        case 3:
          $eval->incrementaNumResp4();
          break;
        case 4:
          $eval->incrementaNumResp5();
      }

      $eval->save();
    }
  }

}
