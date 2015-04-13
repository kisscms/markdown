<?php

//===============================================
// Pages Initialization
//===============================================

if( class_exists('Page') && method_exists(new Page(),'register')){
	// Register variables
	Page::register("1", "markdown", "");
}

// add hooks
if( class_exists('Event') && method_exists('Event','on') ){

	Event::on("admin:edit", 'PageMarkdown' );

	Event::on("admin:save", 'PageMarkdown' );

}

?>