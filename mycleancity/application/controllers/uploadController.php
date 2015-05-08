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
		if($_POST){
			// $ret = false;
			$img_blob = '';
			$img_taille = 0;
			$img_type = '';
			$img_nom = '';
			
			$image = $this->input->post('fic', true);
			 print_r($_POST);
			// $ret = is_uploaded_file ($_FILES['fic']['tmp_name']);
			
			// if ( !$ret ){
				// echo "Problème de transfert";
				// return false;
			// }else{
			// Le fichier a bien été reçu
				$img_taille = $_FILES['fic']['size'];
				$img_type = $_FILES['fic']['type'];
				$img_nom = $_FILES['fic']['name'];
				//echo "<a href='http://localhost/frames/CodeIgniter/index.php/main/view_image'>lister</a>";
				move_uploaded_file ( $_FILES['fic']['tmp_name'] ,$destination);
	//			$img_blob = file_get_contents ($_FILES['fic']['tmp_name']);
				// echo $img_nom;
				// echo $img_type;
				// echo $_FILES['fic']['tmp_name'];
				//$insert_img = $this->requete->insert_images($img_nom, $img_taille, $img_type, $img_blob);
				
				// if ( $img_taille > $taille_max ){
					// echo "Trop gros !";
					// return false;
				// }

			// }
			
			
			// $lunette =  $this->input->post('lunette', true);
			// $couleur =  $this->input->post('couleur', true);
			// $insert_lunettes = $this->requete->insert_lunettes($lunette, $couleur);
			// $lister_lunettes = $this->requete->lister_lunettes($lunette, $couleur);
			
			// foreach ( $lister_lunettes->result() as $row){
				// echo $row->monture."\n";
				// echo $row->couleur."\n";
				// echo $row->ID."\n";
			// }
		}
	}
}
?>