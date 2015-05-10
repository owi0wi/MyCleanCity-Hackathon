<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ModerationController extends CI_Controller {

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
		$data['numPage'] = 1;

		$this->load->view('header', $data);
		$this->load->view('moderationView', $data);
		$this->load->view('footer');
	}

function listing(){
		$list = $this->listingModel->selectAll();
		$listing = array();
		foreach (get_object_vars($list) as $fkey => $fvalue){
			if($fkey =='rows'){
				foreach ($fvalue as $key => $value) {
					$reponse = $this->listingModel->select($value->id);
					if(isset($reponse->priorite)){
						switch ($reponse->priorite) {
							case '0':
							$reponse->numPrio='0';
							$reponse->priorite='Faible';
							break;
							case '1':
							$reponse->numPrio='1';
							$reponse->priorite='Moyenne';
							break;
							case '2':
							$reponse->numPrio='2';
							$reponse->priorite='Forte';
							break;
							default:
							break;
						}
					}
					if(isset($reponse->type)){
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
	function updateVo($id){
				$id = $this->uri->segment(3, 0);
				$doc = $this->listingModel->select($id);
				$doc->validation = 0;

							if($doc->validation == '0'){
								$doc->oui +=1 ;
							}elseif($doc->validation =='1'){
								$doc->non +=1 ;
							}elseif($doc->validation == '2'){
								$doc->abus +=1 ;
							}
				print_r($doc);
				$this->listingModel->update($doc);
			}

				function updateVn($id){
				$id = $this->uri->segment(3, 0);
				$doc = $this->listingModel->select($id);
				$doc->validation = 1;
							if($doc->validation == '0'){
								$doc->oui +=1 ;
							}elseif($doc->validation =='1'){
								$doc->non +=1 ;
							}elseif($doc->validation == '2'){
								$doc->abus +=1 ;
							}
				$this->listingModel->update($doc);
			}






			function delete($id){
				$doc = $this->listingModel->select($id);
				$this->listingModel->delete($doc);
			}
}
?>