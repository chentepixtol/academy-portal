<?php

class Evaluacion extends BaseEvaluacion
{
  /**
   * Obtiene el total de evaluaciones que ha obtenido
   * @return int
   */
  public function getTotal()
  {
    return $this->getNumResp1() + $this->getNumResp2() + $this->getNumResp3() + $this->getNumResp4() + $this->getNumResp5();
  }
  
  /**
   * Obtiene el porccentaje de resp1 con respecto a las totales
   * @return int
   */
  public function getPorcentajeResp1()
  {
    return round((( $this->getNumResp1() / $this->getTotal() ) * 100),2);
  }
  
/**
   * Obtiene el porccentaje de resp1 con respecto a las totales
   * @return int
   */
  public function getPorcentajeResp2()
  {
    return round((( $this->getNumResp2() / $this->getTotal() ) * 100),2);
  }
  
/**
   * Obtiene el porccentaje de resp1 con respecto a las totales
   * @return int
   */
  public function getPorcentajeResp3()
  {
    return round((( $this->getNumResp3() / $this->getTotal() ) * 100),2);
  }
  
/**
   * Obtiene el porccentaje de resp1 con respecto a las totales
   * @return int
   */
  public function getPorcentajeResp4()
  {
    return round((( $this->getNumResp4() / $this->getTotal() ) * 100),2);
  }
/**
   * Obtiene el porccentaje de resp5 con respecto a las totales
   * @return int
   */
  public function getPorcentajeResp5()
  {
    return round((( $this->getNumResp5() / $this->getTotal() ) * 100),2);
  }
  
  /**
   * Incrementa Num de Respuesta en 1
   * @return unknown_type
   */
  public function incrementaNumResp1()
  {
    if(is_null($this->num_resp_1))
    {
      $this->setNumResp1(1);
    }
    else
    {
      $this->setNumResp1($this->getNumResp1()+1);
    }
  }

  /**
   * Incrementa Num de Respuesta en 1
   * @return unknown_type
   */
  public function incrementaNumResp2()
  {
    if(is_null($this->num_resp_2))
    {
      $this->setNumResp2(1);
    }
    else
    {
      $this->setNumResp2($this->getNumResp2()+1);
    }
  }

  /**
   * Incrementa Num de Respuesta en 1
   * @return unknown_type
   */
  public function incrementaNumResp3()
  {
    if(is_null($this->num_resp_3))
    {
      $this->setNumResp3(1);
    }
    else
    {
      $this->setNumResp3($this->getNumResp3()+1);
    }
  }

  /**
   * Incrementa Num de Respuesta en 1
   * @return unknown_type
   */
  public function incrementaNumResp4()
  {
    if(is_null($this->num_resp_4))
    {
      $this->setNumResp4(1);
    }
    else
    {
      $this->setNumResp4($this->getNumResp4()+1);
    }
  }
  
public function incrementaNumResp5()
  {
    if(is_null($this->num_resp_5))
    {
      $this->setNumResp5(1);
    }
    else
    {
      $this->setNumResp5($this->getNumResp5()+1);
    }
  }
}
