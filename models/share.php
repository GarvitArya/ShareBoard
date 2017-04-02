<?php
class ShareModel extends Model{

	public function Index()
	{
		$this->query('SELECT * FROM shares LEFT JOIN users ON shares.user_id = users.id  ORDER BY create_date DESC');
		$rows = $this->resultSet();
		return $rows;
	}

	public function add()
	{
		// Sanitize POST
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		if($post['submit']){
			if($post['title'] == '' || $post['body'] == '' || $post['link'] == ''){
				Messages::setMsg('Please Fill In All Fields', 'error');
				return;
			}

			$this->query('SELECT id FROM users WHERE name=:name');
			$this->bind(':name', $post['name']);
			$result = $this->single();

			// Insert into MySQL
			$this->query('INSERT INTO shares (title, body, link, user_id) VALUES(:title, :body, :link, :user_id)');
			$this->bind(':title', $post['title']);
			$this->bind(':body', $post['body']);
			$this->bind(':link', $post['link']);
			$this->bind(':user_id', $result["id"]);
			$this->execute();
			// Verify
			if($this->lastInsertId()){
				// Redirect
				header('Location: '.ROOT_URL.'shares');
			}
		}
		return;
	}
}
