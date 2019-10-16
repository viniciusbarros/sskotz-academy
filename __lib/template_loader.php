<?php
require_once 'xtemplate.php';

/**
 * Changes the default behavior of XTemplate class to send all pages using UTF8
 */
class TemplateLoader extends XTemplate {
	
	public function __construct($file, $tpldir = '', $files = null, $mainblock = 'main', $autosetup = true) {
		
		// Manda o charset=utf8
		header ( 'Content-Type: text/html; charset=utf-8' );
		
		// Constrói a classe normalmente
		parent::__construct ( $file, $tpldir, $files, $mainblock, $autosetup );
	}
}
?>