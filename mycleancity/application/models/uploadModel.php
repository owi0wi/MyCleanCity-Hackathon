<?php

	class UploadModel extends CI_Model {

		protected $tables;
	    function __construct() //constructeur
	    {
	        parent::__construct();
		}
	    
	    function insert(){
	    	$new_doc = new stdClass();
	    	$new_doc->title = "test";
	    	$tables = new couchClient('http://localhost:5984/','mycleancity');
	    	 
	 try {
    $response = $tables->storeDoc($new_doc);
} catch (Exception $e) {
    echo "ERROR: ".$e->getMessage()." (".$e->getCode().")<br>\n";
}
			print_r($tables->listDatabases());

	    }
	    
    
	}
	
?>