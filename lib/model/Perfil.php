<?php

class Perfil extends BasePerfil
{
  /**
   * Obtiene El Nombre completo del Profesor empezando por Apellidos
   * @return string
   */
  public function getFullName()
  {
    return $this->getApellidoPaterno() . " " . $this->getApellidoMaterno() . " " . $this->getNombre(); 
  }
  
/**
   * Obtener la descripcion
   * @return string
   */
  public function getDescription()
  {
    sfApplicationConfiguration::getActive()->loadHelpers('Text');
    return truncate_text(strip_tags("Este es el perfil del profesor " . $this->getFullName() . " donde contiene su información personal" ),150);
  }
}
