<?php 
require('DAL/PhotosDAO.php');
	
class photoService {
		
	public function add($guid, $data, $description) {
		$photosDAO = new PhotosDAO;

		$photosDAO->add($guid, $data, $description);
	}

	public function get() {
		$photosDAO = new PhotosDAO;

		return $photosDAO->get();
	}
}
?>