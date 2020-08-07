<?php
/**
 * 
 */
class AndroidJson extends CI_Controller
{
	
	function Index()
	{
		echo "sukses";
	}

	function GetDataModul()
	{
		$result = array();
		

		$query = $this->db->query("SELECT * FROM modul")->result();
		if(count($query)>0){

			array_push($result, array(
				'pesan'         =>'1',
			));

			foreach ($query as $a) {
				array_push($result, array(
					'judul'  => $a->judul,
					'url_qrcode'  => $a->url_qrcode,
				));
			}
		}else{
			array_push($result, array(
				'pesan'         =>'0',
			));
		}

		echo json_encode(array("result"=>$result));

	}
	
}
?>