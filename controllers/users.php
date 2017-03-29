<?php
class Users extends Controller{
	protected function register(){
		$viewmodel = new UserModel();
		$this->returnView($viewmodel->register(), true);
	}

	protected function login(){
		$viewmodel = new UserModel();
		$this->returnView($viewmodel->login(), true);
	}

	protected function settings(){
		$viewmodel = new UserModel();
		$this->returnView($viewmodel->settings(), true);
	}

	protected function logout(){
		unset($_SESSION['is_logged_in']);
		unset($_SESSION['user_data']);
		session_destroy();
		// Redirect
		header('Location: '.ROOT_URL);
	}
/*
	protected function Index(){
		$viewmodel = new ShareModel();
		$this->returnView($viewmodel->Index(), true);
	}*/
}
