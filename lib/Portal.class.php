<?php
// lib/Portal.class.php
class Portal
{
  /**
   *
   * @param string $text
   * @return string
   */
  static public function slugify($text)
  {
    if (empty($text))
    {
      return 'n-a';
    }

    // replace all non letters or digits by -
    $text = preg_replace('/\W+/', '-', $text);

    // trim and lowercase
    $text = strtolower(trim($text, '-'));

    return $text;
  }
  
}