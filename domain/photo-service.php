<?php 
require('DAL/PhotosDAO.php');
	
class photoService {
		
	public function add($guid, $data, $title, $description) {
		$photosDAO = new PhotosDAO;

		$photosDAO->add($guid, $data, $title, $description);
	}

	public function get() {
		$photosDAO = new PhotosDAO;

		$photos = $photosDAO->get();

		foreach ($photos as $photo)
			$photo->data = base64_encode($photo->data);

		return $photos;
	}
}
?>