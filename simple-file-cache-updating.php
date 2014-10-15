<?php

	class cache{

		private $siteRoot;
	
		public function __construct($_siteRoot){
			$this->siteRoot = $_siteRoot;
		}
	
		public function file($path){
			return $path.'?version='.filemtime($this->siteRoot.$path);
		}
		
	}
	
	
	$cache = new cache('/home/user/public_html/yourwebsite.com');

?>


Example:
<link rel="stylesheet" href="<?=$cache->file('/styles/main.css');?>" type="text/css" />