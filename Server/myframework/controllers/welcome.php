<?php

class welcome extends AppController{

    public function __construct(){

        $menu = array(
            0 => "Home",
            1 => "About",
            2 => "Contact"
        );

        $this->getView("header", $menu);
        $this->getView("welcome");
        $this->getView("footer");

    }

}


?>