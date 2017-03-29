<?php
/*
* directory for home: "localhost/projectname/" */
class Home extends Controller{
	protected function Index(){
		/* homemodel.php is in models/home.php */
		$viewmodel = new HomeModel();
		$this->returnView($viewmodel->Index(), true);
	}
}
