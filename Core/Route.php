
<?php 
	class Route {
		protected $routes=[];

		/**
		 * for set route in controller function
		 * @param [string] $route // string
		 * @param [array] $params // array
		 * @return void 
		 */
		public function add($route,$params){
			$this->routes[$route]=$params;
		}

		/**
		 * return all route function
		 * @return void
		 */
		public function getRoute()
		{
			# code...
			return $this->routes;
		}
	}
?>