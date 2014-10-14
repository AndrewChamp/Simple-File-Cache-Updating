<?php

	function version($serverPath, $browserPath=''){
		print (!$browserPath ? $serverPath : $browserPath.basename($serverPath)).'?version='.filemtime($serverPath);
	}

?>