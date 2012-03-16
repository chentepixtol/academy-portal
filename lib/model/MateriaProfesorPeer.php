<?php

class MateriaProfesorPeer extends BaseMateriaProfesorPeer
{
  /**
   * Obtener las materias de un profesor a traves de su ID
   * @param $id
   * @return Materias
   */
  public static function getMateriasFromProfesor($id)
  {
    $materias = array();
    $c = new Criteria();
    $c->add(self::PROFESOR_ID,$id);
    $materias_res = self::doSelectJoinMateria($c);
    foreach($materias_res as $mat)
    {
      $materias[$mat->getMateriaId()] = $mat->getMateria()->getNombre();
    }
    return $materias;
  }
  
  public  static function deleteAllMateriasFromProfesor($id)
  {
    $c = new Criteria();
    $c->add(MateriaProfesorPeer::PROFESOR_ID,$id);
    $rel_mat = MateriaProfesorPeer::doSelect($c);
    foreach($rel_mat as $mat)
    {
      $mat->delete();
    }
  }
}
