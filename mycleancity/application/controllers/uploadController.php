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
	 	
	 }
	 
	public function index()
	{
		$this->load->view('envoi_img');
	
	}
	
	public function reponse()
	{

		$destination = "c:/wamp/www/mycleancity-hackathon/mycleancity/pictures/test.jpg";

		if(isset($_POST)){
			// $ret = false;
			$img_blob = '';
			$img_taille = 0;
			$img_type = '';
			$img_nom = '';
			
			$image = $this->input->post('fic', true);
			echo "files:";
			 print_r($_FILES);
			 echo "post:";
			 print_r($_POST);
			// Le fichier a bien été reçu
			$img_taille = $_FILES['fic']['size'];
			$img_type = $_FILES['fic']['type'];
			$img_nom = $_FILES['fic']['name'];
			move_uploaded_file ( $_FILES['fic']['tmp_name'] ,$destination);
		}
	}
}
?>