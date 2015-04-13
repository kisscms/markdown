<?php

//===============================================
// Pages Initialization
//===============================================

if( class_exists('Page') && method_exists(new Page(),'register')){
	// Register variables
	Page::register("1", "markdown", "");
}

// add hooks
if( class_exists('Controller') && method_exists('Controller','on') ){

	Controller::on("admin:edit", 'PageMarkdown' );

	Controller::on("admin:save", 'PageMarkdown' );

}

?>