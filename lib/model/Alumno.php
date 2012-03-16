<?php

class Alumno extends BaseAlumno
{
  public function setPassword($v)
  {
    $v = md5($v);
    return parent::setPassword($v);
  }
}
