<?php

class furbabies extends AppController{

    public function __construct(){

        $menu = array(
            "Home",
            "FurBabies",
            "About",
            "Contact"
        );

        $this->getView("header");
        $this->getView("furbabies", $menu);
        $this->getView("footer");

    }

}


?>