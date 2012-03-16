<?php

/**
 * Wiki form.
 *
 * @package    portal
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormTemplate.php 10377 2008-07-21 07:10:32Z dwhittle $
 */
class WikiForm extends BaseWikiForm
{
  public function configure()
  {
    unset($this['profesor_id']);
    unset($this['fecha']);
  }
  
  public function setProfesorId($id)
  {
    $materias = MateriaProfesorPeer::getMateriasFromProfesor($id);
    $this->setWidget('materia_id', new sfWidgetFormChoice(array('choices' => $materias)));
    $this->setValidator('materia_id', new sfValidatorChoice(array('choices' => array_keys($materias))));
  }
  
}
