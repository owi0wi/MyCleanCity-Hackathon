<?php

class ListingModel extends CI_Model {

	protected $tables;
	function __construct() //constructeur
	{
		parent::__construct();
	}
	    
	function selectAll(){
	   	$tables = new couchClient('http://localhost:5984/','mycleancity');
	    	 
	 	try {
    		$list = $tables->getAllDocs();
    		return $list;
		} catch (Exception $e) {
    		echo "ERROR: ".$e->getMessage()." (".$e->getCode().")<br>\n";
		}
		return null;
	}
	function select($id){
		$tables = new couchClient('http://localhost:5984/','mycleancity');
	    	 
	 	try {
    		$list = $tables->getDoc($id);
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