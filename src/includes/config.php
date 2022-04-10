
<?php
	if (empty($_SERVER["PATH_INFO"])){
		$CURRENT_TAB = "Homepage";
		$PAGE_TITLE = "Welcome to my homepage!";
	}else if (stripos($_SERVER["PATH_INFO"], 'games')){
		$CURRENT_TAB = "Games"; 
		$PAGE_TITLE = "Play Games";
		$CURRENT_PAGE = "";
		if (stripos($_SERVER["PATH_INFO"], 'wordle')){
			$CURRENT_PAGE = "wordle";
		}

	}else if (stripos($_SERVER["PATH_INFO"], 'about')){
		$CURRENT_TAB = "About"; 
		$PAGE_TITLE = "About Us";
	}else {
		$CURRENT_TAB = "Homepage";
		$PAGE_TITLE = "Welcome to my homepage!";
	}
?>