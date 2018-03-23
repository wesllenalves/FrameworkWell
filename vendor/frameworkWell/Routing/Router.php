<?php

namespace FrameworkWell\Routing;

use \Klein\Klein as Klein;


class Router extends Klein{

	public function get($route, $call){

			if(is_string($call)){
				$explode = explode("@", $call);

				$controller = "App\\controllers\\".$explode[0]."Controller";
				$action = $explode[1];
				
				$this->respond("GET",$route,function() use ($controller, $action){
					$class = new $controller();
					return $class->$action();
				});
			}else{

				$this->respond("GET", $route, $call);
			}

	}

	public function post(){


	}

}