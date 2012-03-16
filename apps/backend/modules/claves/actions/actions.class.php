<?php

/**
 * claves actions.
 *
 * @package    portal
 * @subpackage claves
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12474 2008-10-31 10:41:27Z fabien $
 */
class clavesActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->clave_list = ClavePeer::doSelect(new Criteria());
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new ClaveRegistroForm();
  }

  public function executeProcesa(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod('post'));

    $this->form = new ClaveRegistroForm();

    $this->form->bind($request->getParameter('clave'));

    if($this->form->isValid())
    {
      $num_claves = $request->getParameter("clave[num]",1);

      $this->generate($num_claves);

      $this->redirect("claves/index");

    }
    else
    {
      $this->setTemplate("new");
    }
  }

  protected function generate($num_claves)
  {
    $pwd = new Pwd();

    for($i=0;$i<$num_claves;$i++)
    {
      $clave = new Clave();
      $clave->setClave($pwd->mixed(20));
      $clave->save();
    }
  }

}
