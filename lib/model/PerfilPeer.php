<?php

class PerfilPeer extends BasePerfilPeer
{

  /**
   * Obtiene todos los Correos Electronicos
   * @return array
   */
  public static function getAllMails()
  {
    $mails = array();
    $perfiles = PerfilPeer::doSelect(new Criteria());
    foreach( $perfiles as $perfil )
    {
      $mails[] = $perfil->getEmail();
    }
    return $mails;
  }
  /**
   * Obtiene todos los nombres de los Profesores
   * @return unknown_type
   */
  public static function getAllNombres()
  {
    $nombres = array();
    $perfiles = PerfilPeer::doSelect(new Criteria());
    foreach ( $perfiles as $perfil)
    {
      $nombres[] = $perfil->getNombre();
    }
    return $nombres;
  }

  /**
   * Obtiene todos los Nombres con Apellido PAterno y su ID como indice
   * @return array
   */
  public static function getAllFullName()
  {
    $profesores = array();
    $cri = new Criteria();
    $profs = self::doSelect($cri);
    foreach($profs as $prof)
    {
      $profesores[$prof->getUserId()] = $prof->getApellidoPaterno() . " " . $prof->getNombre();
    }
    return $profesores;
  }
}
