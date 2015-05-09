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
		//$data['list'] = 'lolilol';

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
					array_push($listing, $reponse);
				}
			}
		}
		return $listing;
	}

	function update($id){
		$doc = $this->listingModel->select($id);
		foreach ($_POST as $key => $value) {
			if($key != 'id'){
				$doc->$key = $_POST[$key];
			}
		}
		$this->listingModel->update($doc);
	}
	function delete($id){
		$doc = $this->listingModel->select($id);
		$this->listingModel->delete($doc);
	}
}
?>