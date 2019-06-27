<?php

    class apiGoogle {
        
        public function __construct($parent){
            $this->db = $parent->db;
        }

        public function googleBooks($term=''){
            $client = new Google_Client();
            $client->setApplicationName("1906SSLAPI");
            $client->setDeveloperKey("Your_API_Here");

            $service = new Google_Service_Books($client);

            $optParams = array("filter"=>"free-ebooks");
            $result = $service->volumes->listVolumes($term,$optParams);

            return $result;
        }

    }
?>
