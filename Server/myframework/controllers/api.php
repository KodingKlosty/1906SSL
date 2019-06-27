<?php
    class api extends AppController{

        public function __construct($parent){
            $this->parent = $parent;
        }

        public function getApi(){
            $this->getView('header');
            $this->getView('apiSearch');
            $this->getView('footer');
        }

        public function showApi(){
        
            $bookworm = $_POST["searchObj"];
            if(!empty($bookworm)){
                $this->getGoogle();   
                $this->getView('header');
                $data = $this->parent->getModel("apiGoogle")->googleBooks($bookworm);
                $this->getView('apiView',$data);
                $this->getView('footer');
            }
            else{
                echo "Please search for a topic.";
            }

        }
    }
?>