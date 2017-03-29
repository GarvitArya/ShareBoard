<?php
class HomeModel extends Model{
	public function Index(){
		$this->query('SELECT * FROM users ORDER BY id DESC');
		$rows = $this->resultSet();
		return $rows;
	}
}
