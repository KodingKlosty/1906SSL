<?php

    class apiGoogle {
        
        public function __construct($parent){
            $this->db = $parent->db;
        }

        public function googleBooks($term=''){
            $client = new Google_Client();
            $client->setApplicationName("1906SSLAPI");
            $client->setDeveloperKey("AIzaSyB9mh4UubsGkYu_ZBMtAkoPPs4NC0iidLQ");

            $service = new Google_Service_Books($client);

            $optParams = array("filter"=>"free-ebooks");
            $result = $service->volumes->listVolumes($term,$optParams);

            return $result;
        }

    }
?>