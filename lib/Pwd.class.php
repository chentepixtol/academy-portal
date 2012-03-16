<?php

class Pwd {

  function mixed($length){
    $pwd = "";
    for($x=0;$x<$length;$x++){
      $rnd = $this->randomize(3);
      if($rnd!=""){
        $pwd .= $rnd;
      }
      else{
        $rnd = $this->randomize(5);
        if($rnd!=""){
          $pwd .= chr(mt_rand(65,90));
        }
        else{
          $pwd .= chr(mt_rand(97,122));
        }
      }
    }
    return $pwd;
  }

  function randomize($limit){
    $var = mt_rand(0,9);
    if($var<$limit){
      return mt_rand(0,9);
    }
    return;
  }
}
?>
