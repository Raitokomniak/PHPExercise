<?php
class Testi_model extends CI_Model {
	public function haeNimet() {
		$nimi="kivijäbä";
		$nimet=array(
			array("en"=>'Jussi',"sn"=>'Virta'),
			array("en"=>'Yee2',"sn"=>'Mies4'),
			array("en"=>'Mauste',"sn"=>'Ukko')
			);
		$data['nimi']=$nimi;
		$data['nimet']=$nimet;
		return $nimet;
	}
}
?>