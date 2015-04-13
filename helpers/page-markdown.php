<?php

use \Michelf\MarkdownExtra;

class PageMarkdown {

	public static function edit( &$data ){
		parent::retrieve( $id );
		// post read actions
		// fallback - copy markdown from content if empty
		if( !isset($data['markdown']) ) $data['markdown'] = "";
		$data['content'] = $data['markdown'];
	}

	public static function save( &$data ){
		// convert markdown to markup
		$data['markdown'] = $data['content'];
		$data['content'] = MarkdownExtra::defaultTransform( $data['markdown'] );
	}

}

?>