<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ListingController extends CI_Controller {

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
		$this->load->model('listingModel');
	}

	public function index()
	{
		$data['list'] = $this->listing();

		$this->load->view('header');
		$this->load->view('listingView', $data);
		$this->load->view('footer');

	}

	function listing(){
		$list = $this->listingModel->selectAll();
		$listing = array();
		foreach (get_object_vars($list) as $fkey => $fvalue){
			if($fkey =='rows'){
				foreach ($fvalue as $key => $value) {
					$reponse = $this->listingModel->select($value->id);
					if(isset($reponse->priorite))
						switch ($reponse->priorite) {
							case '0':
							$reponse->priorite='Faible';
							break;
							case '1':
							$reponse->priorite='Moyenne';
							break;
							case '2':
							$reponse->priorite='Forte';
							break;
							default:
							break;
						}
						if(isset($reponse->type))
							switch ($reponse->type) {
								case '0':
								$reponse->type='Dechet';
								break;
								case '1':
								$reponse->type='Nature';
								break;
								case '2':
								$reponse->type='Infrastructure';
								break;
								default:
								break;
							}
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

				return array_reverse($listing);
			}

			function update($id){
				$doc = $this->listingModel->select($id);
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
			}
			function delete($id){
				$doc = $this->listingModel->select($id);
				$this->listingModel->delete($doc);
			}

			function trierList() {
				
				if($_POST) {
					$data['list'] = $this->listing();
					//Faire le tri ici
					switch ($_POST["tri"]) {
						case 'plusRecent':
						//rien a faire deja au par recent
							break;
						case 'plusPrio':
						
							break;
						case 'moinsPrio':
						
							break;
						case 'parType':
						
							break;
						
						default:
							# code...
							break;
					}

					$this->load->view('header');
					$this->load->view('listingView', $data);
					$this->load->view('footer');
				}
			}
		}
		?>