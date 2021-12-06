<?php




class Css {
    private $mobile;
    $mobile = "/assets/css/mobile.css";
    private $desktop;
    private $extralarge;
    public $choix;
}

function set_responsive($choix){
    $this->choix = $choix;
    if($choix == "samsung"){
      echo("<head><link src=".$mobile."></head>")
    }
}











?>
