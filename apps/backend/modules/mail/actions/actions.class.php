<?php

/**
 * mail actions.
 *
 * @package    portal
 * @subpackage mail
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12479 2008-10-31 10:54:40Z fabien $
 */
class mailActions extends sfActions
{
  /**
   * Executes index action
   *
   * @param sfRequest $request A request object
   */
  public function executeIndex(sfWebRequest $request)
  {
    $this->form = new MailForm();
  }

  public function executeProcesa(sfWebRequest $request)
  {
    $this->form = new MailForm();
    $this->form->bind($request->getParameter('mail'));
    if($this->form->isValid())
    {
      if($this->enviar($request->getParameter('mail')))
      {
        $this->redirect("mail/enviado");
      }
      else
      {
        $this->redirect("mail/index");
      }
    }
    else
    {
      $this->setTemplate('index');
    }
  }

  public function executeEnviado()
  {

  }

  protected function enviar($datos)
  {
    $mail = new PhpMailerGmail();

    $mail->setCuenta("academiacompu@gmail.com","adminesimez");
    $mail->setFromMail("Administrador del Portal de la Academia de Computacion","academiacompu@gmail.com");
       
    
    $mail->Subject    = $datos['asunto'];

    $mail->Body       = $datos['mensaje'];                      //HTML Body
    $mail->AltBody    = strip_tags($datos['mensaje']); // optional, comment out and test
    $mail->WordWrap   = 50; // set word wrap

    if( !empty( $datos['correo']))
    {
      $mail->AddAddress($datos['correo'],'Usuario Academia');
    }

    if(isset($datos['profesores']))
    {
      $addrs = PerfilPeer::getAllMails();
      $noms = PerfilPeer::getAllNombres();
      $mail->addDirecciones($addrs,$noms);
    }
    
    if(isset($datos['alumnos']))
    {
      $addrs2 = AlumnoPeer::getAllMails();
      $noms2 = AlumnoPeer::getAllNombres();
      $mail->addDirecciones($addrs2,$noms2);
    }
    
    $mail->IsHTML(true); // send as HTML
    
    if($mail->Send()){
      return true;
    }
    else
    {
      return false;
    }
  }

}
