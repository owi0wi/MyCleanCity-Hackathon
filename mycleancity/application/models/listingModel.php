<?php

class UploadModel extends CI_Model {

	protected $tables;
	function __construct() //constructeur
	{
		parent::__construct();
	}
	    
	function select($json){
	   	$tables = new couchClient('http://localhost:5984/','mycleancity');
	    	 
	 	try {
    		$list = $tables->getAllDocs();
    		print_r($list);
    		return $list;
		} catch (Exception $e) {
    		echo "ERROR: ".$e->getMessage()." (".$e->getCode().")<br>\n";
		}
		return null;
	}

	function update(){

	}

}
?>