<?php
class homeComponents extends sfComponents
{
  public function executeMaterias()
  {
    $c = new Criteria();
    $c->addAscendingOrderByColumn(MateriaPeer::NOMBRE);
    $this->materias =  MateriaPeer::doSelect($c);
  }
  
  public function executeProfesores()
  {
    $c = new Criteria();
    $c->addAscendingOrderByColumn(PerfilPeer::NOMBRE);
    $this->profesores = PerfilPeer::doSelect($c);
  }
  
  public function executeAvisos()
  {
    $c = new Criteria();
    $c->addDescendingOrderByColumn(AvisoPeer::FECHA);
    $this->avisos = AvisoPeer::doSelect($c);
  }
}