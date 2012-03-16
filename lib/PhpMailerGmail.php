<?php
class PhpMailerGmail extends PHPMailer
{
  /**
   * Cuenta de Gmail
   * @param $user Usuario
   * @param $pass Password
   * @return unknown_type
   */

  public function setCuenta($user_str,$pass_str)
  {
    $this->IsSMTP();
    $this->SMTPAuth   = true;                  // enable SMTP authentication
    $this->SMTPSecure = "ssl";                 // sets the prefix to the servier
    $this->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
    $this->Port       = 465;                   // set the SMTP port for the GMAIL server

    $this->Username   = $user_str;  // GMAIL username
    $this->Password   = $pass_str;            // GMAIL password
  }

  /**
   *
   * @param $nom_str Nombre de la Persona que envia
   * @param $addr_str Direccion de la Persona que envia
   * @return unknown_type
   */

  public function setFromMail($nom_str,$addr_str)
  {
    $this->AddReplyTo($addr_str,$nom_str);

    $this->From       = $addr_str;
    $this->FromName   = $nom_str;
  }
  /**
   * Agrega Direcciones mediante un array
   * @param array $addrs Direcciones
   * @param array $noms Nombres
   * @return unknown_type
   */
  public function addDirecciones($addrs,$noms)
  {
    foreach($addrs as $i => $addr)
    {
      if(!empty($addr) && !empty($noms[$i]) )
      {
        $this->AddAddress($addr,$noms[$i]);
      }
    }
  }

}