<?php

class UploadModel extends CI_Model {

	protected $tables;
	function __construct() //constructeur
	{
		parent::__construct();
	}
	
	function insert($json){
		$new_doc = new stdClass();
		foreach($json as $key => $value){
			$new_doc->$key = $value;
		}
		$tables = new couchClient('http://localhost:5984/','mycleancity');
		
		try {
			$response = $tables->storeDoc($new_doc);
		} catch (Exception $e) {
			echo "ERROR: ".$e->getMessage()." (".$e->getCode().")<br>\n";
		}
	}
}
?>