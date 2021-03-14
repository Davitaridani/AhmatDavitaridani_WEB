<?php 
	include 'Circle.php';
	/**
	 * Author Ahmat Davit Ari Dani
	 */
	class Rectangle implements Shape
	{
		private $width;
		private $height;

		public function __construct($width,$height)
		{
			$this -> width = $width;
			$this -> height = $height;
		}

		public function calArea()
		{
			return $this -> width * $this -> height;
		}
	}

	$circ = new Circle(10);
	$rect = new Rectangle(10,7);

	echo $circ -> calArea();
	echo "<br>";
	echo $rect -> calArea();
 ?>