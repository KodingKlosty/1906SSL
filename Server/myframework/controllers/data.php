<?php
    class data extends AppController
    {
        public function __construct($parent){
            $this->parent = $parent;
            $this->showList();
        }

        public function showList(){
            $data = $this->parent->getModel("fruits")->select("select * from fruit_table");
            $this->getView("header");
            $this->getView("database",$data);
            $this->getView("footer");
        }

        public function addFruit(){
            $this->parent->getModel("fruits")->add("insert into fruit_table (name) values(:name)",array(":name"=>$_POST["name"]));
            echo "<META HTTP-EQUIV ='Refresh' Content ='0; URL =/data'>";
        }

        public function remove(){
            $id = $_GET["id"];
            $this->parent->getModel("fruits")->delete("delete from fruit_table where id = :id", array(":id"=>$_GET["id"]));
            echo "<META HTTP-EQUIV ='Refresh' Content ='0; URL =/data'>";

            
        }

        public function edit(){
            $data = $this->parent->getModel("fruits")->select("select * from fruit_table where id = :id", array(":id"=>$_GET["id"]));
            $this->getView("header");
            $this->getView("editdb",$data);
            $this->getView("footer");
        }

        public function update(){
                $this->parent->getModel("fruits")->update("update fruit_table set name = :name where id = :id" ,array(":id"=>$_POST["id"],":name"=>$_POST["name"]));
                echo "<META HTTP-EQUIV ='Refresh' Content ='0; URL =/data'>";
        }
    }
   
?>