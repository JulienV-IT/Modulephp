<?php


class Heures {
  public $fuseau;
  public $heure;



  function set_fuseau($fuseau){
    $this->fuseau = $fuseau;
  }

  function get_fuseau(){
    return $this->fuseau;
  }

  function set_heure($heure){
    $this->heure = $heure;
  }

  function get_heure(){
    return $this->heure;
  }

  function get_All_Time(){

    $dateTime = new DateTime();

    foreach ([
       'ATOM',
       'COOKIE',
       'ISO8601',
       'RFC822',
       'RFC850',
       'RFC1036',
       'RFC1123',
       'RFC2822',
       'RFC3339',
       'RFC3339_EXTENDED',
       'RSS',
       'W3C',
       ] as $format) {
       eval("print 'DateTimeInterface::$format\t'.\$dateTime->format(DateTimeInterface::$format).\"\n\";");
    }
  }

}

?>
