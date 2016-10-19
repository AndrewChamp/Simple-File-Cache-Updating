<?php

	class cache{

		private $siteRoot;
	
		public function __construct($_siteRoot){
			$this->siteRoot = $_siteRoot;
		}
	
		public function file($path){
			if(is_file($this->siteRoot.$path))
				return $path.'?version='.filemtime($this->siteRoot.$path);
			
			return false;
		}
		
	}
	
	
	// $cache = new cache(__DIR__);

?>


Example:
<link rel="stylesheet" href="<?=$cache->file('/styles/main.css');?>" type="text/css" />
