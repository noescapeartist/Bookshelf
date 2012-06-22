<?php

class Shelf {
	
	public $stack = array();
	
	public function __construct(){
	}
	
	public function addToTop($book = null){
		// require object
		if (!is_object($book)) { return false; }

		// add to shelf
		if($this->stack[] = $book){
			return true;
		}
	}

	public function removeFromTop(){		
		// books exist in stack?
		if (!count($this->stack)){ return false; }

		// pop last book from the array
		$topBook = array_pop($this->stack);

		return $topBook;
	}

}