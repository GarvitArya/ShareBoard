<?php
/************************************************
* takes in URL-Requets
* processes controller and called actions
* example: localhost/php7website/users/regsiter
* action: register , controller:users
************************************************/

class Bootstrap{
	private $controller;
	private $action;
	private $request;

	public function __construct($request){
		$this->request = $request;
		/* if no controller : url = "localhost/php7website/"  load home controller*/
		if($this->request['controller'] == ""){
			$this->controller = 'home';
		} else {
			/* else give whatever is requestet */
			$this->controller = $this->request['controller'];
		}
		if($this->request['action'] == ""){
			$this->action = 'index';
		} else {
			$this->action = $this->request['action'];
		}
	}

	public function createController(){
		// Check if class has been defined
		if(class_exists($this->controller)){
			$parents = class_parents($this->controller);
			// Check Extend
			if(in_array("Controller", $parents)){
				/* cheacks if url "/users/register" is valid */
				if(method_exists($this->controller, $this->action)){
					return new $this->controller($this->action, $this->request); //for ex. (register, $_GET)
				} else {
					echo '<h1>Method does not exist</h1>';
					return;
				}
			} else {
				// Base Controller Does Not Exist
				echo '<h1>Base controller not found</h1>';
				return;
			}
		} else {
			echo '<h1>Controller class does not exist</h1>';
			return;
		}
	}
}
