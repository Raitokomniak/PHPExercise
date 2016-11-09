<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Testi extends CI_Controller {
	public function index() {
		echo 'indexfunktio yee yee';
	}
	
	public function testfunc() {
		echo 'benis';
	}
	
	public function toka() {
		$nimi="the cook";
		$nimet=array(
			array("en"=>'Jussi',"sn"=>'Virta'),
			array("en"=>'Yee',"sn"=>'Mies'),
			array("en"=>'Mauste',"sn"=>'Ukko')
			);
		$data['nimi']=$nimi;
		$data['nimet']=$nimet;
		$this->load->view('testi/toka',$data);
	}
	
	public function kolmas() {
		$this->load->model('Testi');
		$data['nimet'] = $this->Testi_model->haeNimet();
		$this->load->view('testi/kolmas',$data);
	}
}