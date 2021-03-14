<?php 
	include 'Shape.php';

	/**
	 * Author Ahmat Davit Ari Dani
	 */
	class Circle implements Shape
	{
		private $radius;
		private $pi;

		public function __construct($radius)
		{
			$this -> radius = $radius;
		}

		public function pi()
		{
			return $this -> pi = 3.14;
		}

		public  function calArea()
		{
			return $this -> radius * $this -> radius * pi();
		}
	}

	$circ = new Circle(10);
	echo $circ -> calArea();


?>