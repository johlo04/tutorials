<?php 
if ( ! function_exists('fp')){
	function fp($array) {
		
		echo "<pre style='background: #000; color: #fff; font-size: 10px; width: 100%'>";
			print_r($array);
		echo "</pre>";
		
	}
}

if ( ! function_exists('fd')){
	function fd($array) {
		
		echo "<pre style='background: #000; color: #fff; font-size: 10px; width: 100%'>";
			print_r($array);
		echo "</pre>";
		exit();
		
	}
}

if ( ! function_exists('sanitize_output')){
	function sanitize_output($buffer) {
		
		$search = array(
			'/\>[^\S ]+/s',  // strip whitespaces after tags, except space
			'/[^\S ]+\</s',  // strip whitespaces before tags, except space
			'/(\s)+/s',       // shorten multiple whitespace sequences
		);
		
		$replace = array(
			'>',
			'<',
			'\\1',
		);
		
		$buffer = preg_replace($search, $replace, $buffer);
		
		return $buffer;
	}
}

if ( ! function_exists('replace_quote')){
	
	function replace_quote($sanitized_output) {
		
		$replaced = str_replace("'", "\'", $sanitized_output);
		
		return $replaced;
		
	}

}
	
?>
