<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class UploadController extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	 public function __construct()
	 {
	 	parent::__construct();
	 	$this->load->model('uploadModel');
	 }
	 
	public function index()
	{
		$this->load->view('header');
		$this->load->view('envoi_img');
		$this->load->view('footer');
	}
	
	public function upload()
	{

	$destination = "C:/wamp/www/mycleancity-hackathon/mycleancity/pictures/";
   	$insertDestination = 'http://192.168.43.166/mycleancity-hackathon/mycleancity/pictures/clean';
   	//$destination = "C:/wamp/www/MCC/mycleancity/pictures/";
   	//$insertDestination = 'c:/wamp/www/MCC/mycleancity/pictures/clean';
   	$extension = ".png";
	$nbPictures = 0;
   	if($_POST && $_FILES){	
		if($dossier = opendir($destination)){
			while(false !== ($fichier = readdir($dossier))){
				if($fichier != '.' && $fichier != '..'){
					$nbPictures +=1;
				}
			}	
		}
		$destination .= "clean".$nbPictures.$extension;
		$insertDestination .= $nbPictures.$extension;

		$_POST["path"] = $insertDestination;

		$img_taille = $_FILES['picture']['size'];
		$img_type = $_FILES['picture']['type'];
		$img_nom = $_FILES['picture']['name'];
		if(move_uploaded_file ( $_FILES['picture']['tmp_name'] ,$destination)){
			$nbPictures += 1;
			$this->uploadModel->insert($_POST);
		}
	}
}
}
?>