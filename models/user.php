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
			$this->query('INSERT INTO users (name, email, password) VALUES(:name, :email, :password)');
			$this->bind(':name', $post['name']);
			$this->bind(':email', $post['email']);
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
				 var_dump($password);
				 if("5f4dcc3b5aa765d61d8327deb882cf99" == md5($post['password'])){
					 echo "passt";
				 }
				 else{ echo "5f4dcc3b5aa765d61d8327deb882cf99"." == ".md5($post['password']); }
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
			if($post['name'])
			// Compare Login
			//username cannot be changed
			$this->query('SELECT * FROM users WHERE name = :name AND password = :password');
			$this->bind(':name', $post['name']);
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

			$this->query('UPDATE users  SET email=:email, password=:password, name=:name WHERE name =:name;');
			$this->bind(':email',$post['email']);
			$this->bind(':name',$post['name']);
			$this->bind(':password',$password);
			$this->execute();
		}
		return;
	}
}
