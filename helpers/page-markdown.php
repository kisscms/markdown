<?php

use \Michelf\MarkdownExtra;

class PageMarkdown {

	public static function edit( &$data ){
		foreach( $data['body'] as $k => $body ){
			// fallback - copy markdown from content if empty
			if( !isset($data['body'][$k]['markdown']) ) $data['body'][$k]['markdown'] = "";
			// present markdown version
			$data['body'][$k]['content'] = $data['body'][$k]['markdown'];
		}
	}

	public static function save( &$data ){
		// convert markdown to markup
		$data['markdown'] = $data['content'];
		$data['content'] = MarkdownExtra::defaultTransform( $data['markdown'] );
	}

}

?>