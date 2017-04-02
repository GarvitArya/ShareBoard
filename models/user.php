<?php
class UserModel extends Model{
	public function register(){
		// Sanitize POST
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		$password = md5($post['password']);

		if($post['submit']){
			if($post['name'] == '' || $post['email'] == '' || $post['password'] == ''){
				Messages::setMsg('Please Fill In All Fields', 'error');
				return;
			}

			// Insert into MySQL
			$this->query('INSERT INTO users (name, email, image, password) VALUES(:name, :email, :image, :password)');
			$this->bind(':name', $post['name']);
			$this->bind(':email', $post['email']);
			/*default picture is set by registration*/
			$this->bind(':image', "/img/profile_images/default.png");
			$this->bind(':password', $password);
			$this->execute();
			// Verify
			if($this->lastInsertId()){
				// Redirect
				header('Location: '.ROOT_URL.'users/login');
			}
		}
		return;
	}

	public function login(){
		// Sanitize POST
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		$password = md5($post['password']);

		if($post['submit']){
			// Compare Login
			$this->query('SELECT * FROM users WHERE email = :email AND password = :password');
			$this->bind(':email', $post['email']);
			$this->bind(':password', $password);

			$row = $this->single();

			if($row){
				$_SESSION['is_logged_in'] = true;
				$_SESSION['user_data'] = array(
					"id"	=> $row['id'],
					"name"	=> $row['name'],
					"email"	=> $row['email']
				);
				header('Location: '.ROOT_URL.'shares');
			} else {
				Messages::setMsg('Incorrect Login', 'error');
			}
		}
		return;
	}

	public function settings(){
		/* in setting user can change his name, email,profile picture and set a new password */
		// Sanitize POST
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		if($post['submit'])
		{
			$password = md5($post['password']);
			//email cannot be changed
			$this->query('SELECT * FROM users WHERE email = :email AND password = :password');
			$this->bind(':email', $post['email']);
			$this->bind(':password', $password);

			$row = $this->single();

			/*if wrong old password*/
			if(!($row)){
				Messages::setMsg('Wrong or Empty Password. Please type in Your old Password to save all changes.', 'error');
				return;
			}

			/* new and confirm new passwords have to be the same*/
			if( ($post['newpassword'] == $post['confirmpassword']) &&
			 (isset($post['newpassword']) && isset($post['confirmpassword'])) )
			{
				$password = md5($post['newpassword']);
			} else{
				Messages::setMsg('Passwords don\'t match', 'error');
				return;
			}

			/* ************
			* image upload
			***************/

			$upload_folder = 'img/profile_images/';
			$filename = $_FILES['file']['name'];
			$extension = strtolower(pathinfo($filename,PATHINFO_EXTENSION));


			//check extentions
			$allowed_extensions = array('png', 'jpg', 'jpeg', 'gif');
			if(!in_array($extension, $allowed_extensions)) {
				Messages::setMsg('Only png, jpg, jpeg allowed', 'error');
 			 	return;
			}

			$max_size = 1000*1024; //1000 KB
			if($_FILES['file']['size'] > $max_size) {
				Messages::setMsg('Your image file must be smaller than 1MB', 'error');
				return;
			}

			//Upload folder path
			$imgpath = $upload_folder.$filename;

			//new file name in case file already exists
			if(file_exists($imgpath)) {
			 $id = 1;
			 do {
				 $imgpath = $upload_folder.$filename.'_'.$id.'.'.$extension;
				 $id++;
			 } while(file_exists($imgpath));
			}

			move_uploaded_file($_FILES['file']['tmp_name'], $imgpath);

			/* endof image upload */

			$this->query('UPDATE users  SET email=:email, password=:password, image=:image, name=:name WHERE email =:email;');
			$this->bind(':image',$imgpath);
			$this->bind(':email',$post['email']);
			$this->bind(':name',$post['name']);
			$this->bind(':password',$password);
			$this->execute();
			header('Location: '.ROOT_URL.'shares');
		}

		return;
	}
}
