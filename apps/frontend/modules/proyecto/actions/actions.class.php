<?php

/**
 * proyecto actions.
 *
 * @package    portal
 * @subpackage proyecto
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12479 2008-10-31 10:54:40Z fabien $
 */
class proyectoActions extends sfActions
{
  /**
   * Executes index action
   *
   * @param sfRequest $request A request object
   */
  public function executeIndex(sfWebRequest $request)
  {
    $c = new Criteria();
    $this->proyectos = ProyectoPeer::doSelect($c);
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->proyecto = $this->getRoute()->getObject();
  }

  public function executePdf(sfWebRequest $request)
  {
    $c = new Criteria();
    $proyectos = ProyectoPeer::doSelect($c);
    
    $pdf = $this->creapdf();

    $htmlcontent = "<table border='1'> ";
    $pdf->writeHTML( $htmlcontent , false, 0, false, 0);
    foreach( $proyectos as $proyecto)
    {
      $htmlcontent = "<tr> ";
      $pdf->writeHTML( $htmlcontent , false, 0, false, 0);
      $htmlcontent = "<td width='190px'>";
      $pdf->writeHTML( $htmlcontent , false, 0, false, 0);
      $htmlcontent = (string)  $proyecto->getsfGuardUser() ;
      $pdf->writeHTML( $htmlcontent , false, 0, false, 0);
      $htmlcontent = "</td>";
      $pdf->writeHTML( $htmlcontent , false, 0, false, 0);
      $htmlcontent = "<td width='540px' bgcolor='#F1F1F1'>";
      $pdf->writeHTML( $htmlcontent , false, 0, false, 0);
      $htmlcontent =  $proyecto->getTitulo();
      $pdf->writeHTML( $htmlcontent , false, 0, false, 0);
      $htmlcontent = "</td>";
      $pdf->writeHTML( $htmlcontent , false, 0, false, 0);
      $htmlcontent = "</tr> ";
      $pdf->writeHTML( $htmlcontent , false, 0, false, 0);
    }
    $htmlcontent = " </table> ";
    $pdf->writeHTML( $htmlcontent , false, 0, false, 0);

    $pdf->Output("proyectos.pdf", "I", "I");

  }
  private function creapdf()
  {
    $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true);

    // set document information
    $pdf->SetCreator(PDF_CREATOR);
    $pdf->SetAuthor("Academia de Computacion");
    $pdf->SetTitle("Proyectos Curriculares");
    $pdf->SetSubject("ESIME Zacatenco");
    $pdf->SetKeywords("proyectos, IPN, ESIME, computacion, ICE");

    // set default header data
    $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);

    // set header and footer fonts
    $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
    $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

    //set margins
    $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
    $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
    $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

    //set auto page breaks
    $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

    //set image scale factor
    $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

    //set some language-dependent strings
    //$pdf->setLanguageArray($l);

    //initialize document
    $pdf->AliasNbPages();

    // add a page
    $pdf->AddPage();
    $pdf->SetFillColor(255,0,0);
    //$pdf->SetTextColor(255);
    $pdf->SetDrawColor(128,0,0);
    $pdf->SetLineWidth(.5);

    $pdf->SetFont("vera", "", 9);
    //$pdf->setCellHeightRatio(10);

    return $pdf;
  }
}
