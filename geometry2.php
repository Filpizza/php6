<?php


interface CanCountPerimeter{
	function perimeter();
}

abstract class FlatFigure  implements CanCountPerimeter {
	abstract function perimeter();

	function __toString(){
		return get_class($this) . PHP_EOL .
		"perimeter is equal to " . $this -> perimeter() . PHP_EOL;
	}
}

/**
* Многоугольник
*/
class Polygon extends FlatFigure {

	public $size;

	function __construct($sizes = []){
		$this -> sizes = $sizes;
	}

	function perimeter () {
		return array_sum($this -> sizes);
	}
}

/**
* Прямоугольник
*/
class Rectangle extends Polygon {

	function perimeter () {
		return 2*($this -> sizes[0] + $this -> sizes[1]);
	}
}

/**
* Квадрат
*/
class Square extends Rectangle {

	function perimeter () {
		return 4*($this -> sizes[0]);
	}
}

/**
* Радиус круга
*/
class Round extends FlatFigure {
  
	public $radius;

	function __construct($radius = 0) {
    	$this -> radius = $radius[0];
	}

	function perimeter() {
		return $this -> radius * 2 * M_PI;
	}
}

/**
* Восьмиугольник
*/
class Octagon extends Square {
	
	function perimeter() {
		return array_sum($this -> sizes);
		//return $this -> sizes[0] + $this -> sizes[1] + $this -> sizes[2] + $this -> sizes[3] + $this -> sizes[4] + $this -> sizes[5] + $this -> sizes[6] + $this -> sizes[7];
		// return  8*($this -> sizes[0]);
	}
}

function createFigure($sizes){
	$ob1 = '';
	if (count($sizes) == 1){
		$ob1 = new Round($sizes);
		return 'This is ' . $ob1;
	}
	elseif (count($sizes) == 8) {
		$ob1 = new Octagon($sizes);
		return 'This is ' . $ob1;
	}
	elseif (count($sizes) != 4) {
		$ob1 = new Polygon($sizes);
		return 'This is  ' . $ob1;
	}
	elseif (count(array_unique($sizes)) == 1) {
		$ob1 = new Square($sizes);
		return 'This is  ' . $ob1;
	}
	elseif(count($sizes[0] == $sizes[2] && $sizes[1] == $sizes[3])) {
		$ob1 = new Rectangle($sizes);
		return 'This is  ' . $ob1;
	}
	echo $ob1 -> perimeter();
}

$new_obj1 = createFigure([4, 2, 4, 4, 3, 3, 3, 3]);
$new_obj2 = createFigure([3]);
$new_obj3 = createFigure([3, 7, 8]);
$new_obj4 = createFigure([7, 7, 7, 7]);
$new_obj5 = createFigure([3, 9, 2, 5]);
$masobj = [$new_obj1, $new_obj2, $new_obj3, $new_obj4, $new_obj5];
foreach ($masobj as $key) {
		echo $key . "|| ";
}




// $poly = new Square();
// $poly -> sizes = [4,2,1,4];
// echo $poly -> perimeter();
?>