<?php

/**
 * materias_impartidas actions.
 *
 * @package    portal
 * @subpackage materias_impartidas
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12479 2008-10-31 10:54:40Z fabien $
 */
class materias_impartidasActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeEditar(sfWebRequest $request)
  {
    $this->form = new MateriasImpartidasForm();
  }
  
  public function executeVerifica(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod('post'));
    $this->form = new MateriasImpartidasForm();
    $materias = $request->getParameter('materias');
    $profesor_id = $this->getUser()->getAttribute('usuario_id');
    $this->form->bind($materias);
    if($this->form->isValid())
    {
      MateriaProfesorPeer::deleteAllMateriasFromProfesor($profesor_id);
      
      foreach($materias as $i => $materia )
      {
        $rel_mat = new MateriaProfesor();
        $rel_mat->setProfesorId($profesor_id);
        $rel_mat->setMateriaId($i);
        $rel_mat->save();
      }
      
      $this->redirect('materias_impartidas/index');
      
    }
    else
    {
      $this->setTemplate('editar');
    }  
  }
  
  public function executeIndex()
  {
    $c = new Criteria();
    $c->add(MateriaProfesorPeer::PROFESOR_ID,$this->getUser()->getAttribute('usuario_id'));
    $this->rel_mat =  MateriaProfesorPeer::doSelectJoinMateria($c);
  }
}
