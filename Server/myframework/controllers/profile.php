<?php

class profile extends AppController{

    public function __construct(){

            if (@$_SESSION["loggedin"] && @$_SESSION["loggedin"]=="1"){

            
            }else{
            header("Location:/welcome/signInReq");
            
            }
            

    }

    public function index(){

        $menu = array(
            "Home",
            "FurBabies",
            "About",
            "Contact"
        );

        $this->getView("header");
        $this->getView("profile",$menu);
        $this->getView("footer");
    }

    public function contact(){
        $menu = array(
            "Home",
            "FurBabies",
            "About",
            "Contact"
        );

        $this->getView("header");
        $random = substr( md5(rand()), 0, 7);
        $this->getView("contact",array("cap"=>$random));
        $this->getView("footer");
    }

    public function about(){
        $menu = array(
            "Home",
            "FurBabies",
            "About",
            "Contact"
        );

        $this->getView("header");
        $this->getView("About",$menu);
        $this->getView("footer");
    }

    public function furbabies(){
        $menu = array(
            "Home",
            "FurBabies",
            "About",
            "Contact"
        );

        $this->getView("header");
        $this->getView("furbabies",$menu);
        $this->getView("footer");
    }

    public function contactSubmit(){
        $menu = array(
            "Home",
            "FurBabies",
            "About",
            "Contact"
        );
        $this->getView("header");
        $this->getView("contactSubmit", $menu);
        
    }

    public function signInReq(){
        $menu = array(
            "Home",
            "FurBabies",
            "About",
            "Contact"
        );
        $this->getView("header");
        $this->getView("signon",$menu);

    }

    public function ajaxParms(){
        if(@$_REQUEST["inputEmail"]=="tester@test.com"){
            echo"Welcome";
        }
        else{
            echo"Bad login";
        }
    }

    public function update(){
        if($_FILES["img"]["name"] != ''){
            $imageFileType = pathinfo("/assets/".$_FILES["img"]["name"],PATHINFO_EXTENSION);

            if(file_exists("/assets/".$_FILES["img"]["name"])){
                echo "Sorry, file exists";
            }
            else{
                if($imageFileType != "jpg" && $imageFileType != "png")
                {
                    echo "File Type is not supported";
                }
                else
                {
                    if(move_uploaded_file($_FILES["img"]["tmp_name"],"/assets/".$_FILES["img"]["name"]))
                    {
                        echo "File Uploaded";
                    }
                    else
                    {
                        echo "Error Uploading";
                    }

                }
            }
        }
        header("location:/profile?msg=File Uploaded");
    }

}