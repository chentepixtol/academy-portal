<?php

class AlumnoPeer extends BaseAlumnoPeer
{
  /**
   * Obtiene todos los E-mail de los Alumnos
   * @return unknown_type
   */
  public static function getAllMails()
  {
    $addrs = array();
    $c = new Criteria();
    $alumnos = self::doSelect($c);
    foreach($alumnos as $alumno)
    {
      $addrs[] = $alumno->getEmail();
    }
    return $addrs;
  }
  
  /**
   * Obtiene todos los nombres de los alumnos
   * @return unknown_type
   */
  public static function getAllNombres()
  {
    $noms = array();
    $c = new Criteria();
    $alumnos = self::doSelect($c);
    foreach($alumnos as $alumno)
    {
      $noms[] = $alumno->getNombre();
    }
    return $noms;
  }
}
