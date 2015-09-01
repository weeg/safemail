<?php

kirbytext::$tags['safemail'] = array(
	'attr' => array(
		'text',
		'title',
		'class'
	),
	'html' => function($tag) {

		$email   = $tag->attr('email');
		$text    = $tag->attr('text');
		$title   = $tag->attr('title');
		$class   = $tag->attr('class');

		return safemail($email, $text, $title, $class);
	}
);

// Email tag support
kirbytext::$tags['email'] = kirbytext::$tags['safemail'];

// Safemail on fields
field::$methods['safemail'] = function($field, $text = '', $title = '', $class = '') {
	$email = $field->value;
	
	return safemail($email, $text, $title, $class);
};

function safemail($email, $text = '', $title = '', $class = '') {
	
	// Make email address as default text
	$text   = $text == '' ? $email : $text; 

	return '<a href="'._encode('mailto:'.$email).'" '.($title ? 'title="'._encode($title).'"' : '').' '.($class ? 'class="'.$class.'"' : '').' style="unicode-bidi:bidi-override;direction:rtl">'.strrev($text).'</a>';
}

function _encode($text) {
	$output = '';
	for ($i = 0; $i < strlen($text); $i++) { 
		$output .= '&#'.ord($text[$i]).';'; 
	} 

	return $output;
}