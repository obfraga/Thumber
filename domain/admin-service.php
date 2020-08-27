<?php 
require('DAL/AdminDAO.php');

class adminService {
		
	public function validate($user, $pass) {
		$adminDAO = new AdminDAO;
		$admin = $adminDAO->get();
		
		$guid = $admin->guid;
		$name = $admin->name;
		$email = $admin->email;
		$password = $admin->password;
					
		if ($admin->email == $user && password_verify($pass, $admin->password))
			return true;
		return false;
	}
}
?>