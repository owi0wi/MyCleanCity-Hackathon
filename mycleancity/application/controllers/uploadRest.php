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

class UploadRest extends REST_Controller
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
        $this->load->model('uploadModel');
    }

   function upload_post(){
   	$destination = "c:/wamp/www/MCC/mycleancity/pictures/";
   	$insertDestination = 'http://localhost/MCC/mycleancity/pictures/clean';
   	$extension = ".png";
	$nbPictures = 0;
   		//if($_POST){
			// $ret = false;
			$img_blob = '';
			$img_taille = 0;
			$img_type = '';
			$img_nom = '';
			
			if($dossier = opendir($destination)){
				while(false !== ($fichier = readdir($dossier))){
					if($fichier != '.' && $fichier != '..'){
						$nbPictures +=1;
					}
				}	
			}
			$destination .= "clean".$nbPictures.$extension;
			$insertDestination .= $nbPictures.$extension;

			$_POST['data'].array_push("path" => $insertDestination);
			$img_taille = $_FILES['picture']['size'];
			$img_type = $_FILES['picture']['type'];
			$img_nom = $_FILES['picture']['name'];
			if(move_uploaded_file ( $_FILES['picture']['tmp_name'] ,$destination)){
				$nbPictures += 1;
				$this->uploadModel->insert(json_encode($_POST['data']));
				$this->response(json_encode(array('bonjour' => 'essai')), 200);
			}
   }
}