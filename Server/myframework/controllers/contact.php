<?php

class contact extends AppController{

    public function __construct(){

        $menu = array(
            "Home",
            "FurBabies",
            "About",
            "Contact"
        );
        
        $this->getView("header");
        $this->getView("contact", $menu);
        $this->getView("footer");

    }

}


?>