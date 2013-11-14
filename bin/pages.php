<?php

//===============================================
// Pages Initialization 
//===============================================

if( class_exists('Page') && method_exists(new Page(),'register')){ 
	// Register variables
	Page::register("1", "markdown", "");
}

?>