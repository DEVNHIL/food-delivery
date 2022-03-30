<?php
session_start();

//dummy content
function the_excerpt() {
	echo 'Lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum';
}

function the_permalink() {
	echo 'http://thedummyurl.com';
}

function the_title($arg1,$arg2) {	
	$var1 = $arg1;
	$var2 = $arg2;
	echo $var1 . 'Lorem ipsum lorem ipsum lorem ipsum' . $var2;
}

class WP_Query {
	
	public $post = "";
	
	public function __construct ( $post ) {
			
		$this->post = $post;
		
		$_SESSION['post']  = $this->post;
		
	}
		
	function have_posts() {
					
		if ( $_SESSION['post'] == 'p=12345' ) {
			
			$_SESSION['post'] = false;
			
			return true ; // check if the statement is True/False
				
		} 
		
		if ( $_SESSION['post'] == 'p=29' ) {
			
			$_SESSION['post'] = false;
			
			return true ; // check if the statement is True/False

		} 
		
	}
		
	function the_post() {
		
		$post = $this->post;
		
		//echo $post;
		
	}

}

?>