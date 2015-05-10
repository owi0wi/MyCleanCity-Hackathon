<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Example
 *
 * This is an example of a few basic user interaction methods you could use
 * all done with a hardcoded array.
 *
 * @package		CodeIgniter
 * @subpackage	Rest Server
 * @category	Controller
 * @author		Phil Sturgeon
 * @link		http://philsturgeon.co.uk/code/
*/

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
require APPPATH.'/libraries/REST_Controller.php';

class ListRest extends REST_Controller
{
	
	function __construct()
    {
        // Construct our parent class
        parent::__construct();
        
        // Configure limits on our controller methods. Ensure
        // you have created the 'limits' table and enabled 'limits'
        // within application/config/rest.php
        $this->methods['user_get']['limit'] = 500; //500 requests per hour per user/key
        $this->methods['user_post']['limit'] = 100; //100 requests per hour per user/key
        $this->methods['user_delete']['limit'] = 50; //50 requests per hour per user/key
        $this->load->model('listingModel');
        $this->load->model('uploadModel');
       
    }

  function listing_post(){
  	$list = $this->listingModel->selectAll();
  	$listing = array();
	foreach (get_object_vars($list) as $fkey => $fvalue){
		if($fkey =='rows'){
			foreach ($fvalue as $key => $value) {
				$reponse = $this->listingModel->select($value->id);
				if(isset($reponse->abus)){
					if($reponse->abus >= 5){

					}else{
						array_push($listing, $reponse);
					}
				}else{
					array_push($listing, $reponse);
				}
			}
		}
	}
  
  $this->response(array('reponse' => array_reverse($listing)), 200);
}

  function update_post(){
  	$doc = $this->listingModel->select($_POST['id']);
  	foreach ($_POST as $key => $value) {
  		if($key != 'id'){
  			if($key == 'validation'){
  				if($value == '0'){
  					$doc->oui +=1 ;
  				}elseif($value =='1'){
  					$doc->non +=1 ;
  				}elseif($value == '2'){
  					$doc->abus +=1 ;
  				}
  			}
  			$doc->$key = $_POST[$key];
  		}
  	}

  	$this->listingModel->update($doc);
  	$this->response(array('reponse' => select($this->listingModel->select($_POST['id']))), 200);
  }
  function delete_post(){
  	$doc = $this->listingModel->select($_POST['id']);
  	$this->listingModel->delete($doc);
  	$this->response(array('reponse' => 'success !'), 200);
  }
 }