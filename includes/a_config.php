<?php
/*
 * This is the config file, this is the first script loaded for every web page
 * on your site, it will setup any global variables needed etc.
 *
 * -------- GLOBAL VARIABLES ---------
 *
 * NAV_PAGE: The global variable indicating the currently selected navigation link
 * CURRENT_PAGE: The currently loaded page (for use in code; not displayed)
 * PAGE_TITLE: The title which is displayed in the Browser tab
 * PAGE_DESCRIPTION: The description of the page (appears in search results)
 * PAGE_CANONICAL: The canonical tag that is used for page directs and SEO
 * 
 * -----------------------------------
 * 
 * The comment below will appear at the top of every page on your site
 */
?>
<!--Portfolio, created by Angus Goody 09/2020-->

<?php

//Setup Global defaults to avoid undefined errors (These will get overwritten)
$NAV_PAGE="index";
$CURRENT_PAGE="index";
$PAGE_TITLE="Angus Goody";
$PAGE_DESCRIPTION="Welcome to my Portfolio";


//Find the path of the current page
$full_path = $_SERVER["PHP_SELF"];
$first_parent = dirname($full_path);
$file_base = basename($full_path);

//Calculate Canonical
$can_header="https://";
if ($file_base != "index.php"){
    $withoutExt = preg_replace('/\\.[^.\\s]{3,4}$/', '', $full_path); //Remove PHP extension
}else{
  $withoutExt = preg_replace('/\\.[^.\\s]{3,4}$/', '', $first_parent);
}
$PAGE_CANONICAL=$can_header.$_SERVER['SERVER_NAME'].$withoutExt;


//Switch statement for pages
switch ($first_parent) {

	//Home page
	case '/index.php':
		$NAV_PAGE="index";
		$CURRENT_PAGE="index";
		$PAGE_TITLE="Home | Angus Goody";
		$PAGE_DESCRIPTION="View Angus Goody's Portfolio and find out about his projects";
		break;

	//Contact Page
	case '/contact.php':
		$NAV_PAGE="contact";
		$CURRENT_PAGE="contact";
		$PAGE_TITLE="Contact | Angus Goody";
		$PAGE_DESCRIPTION="Contact Me - Angus Goody";
		break;

	//About Page
	case '/about.php':
		$NAV_PAGE="about";
		$CURRENT_PAGE="about";
		$PAGE_TITLE="About | Angus Goody";
		$PAGE_DESCRIPTION="How I created this website - Angus Goody";
		break;

	//Projects Section
	case '/projects':
		$NAV_PAGE="projects";
		$CURRENT_PAGE="products";
		$PAGE_TITLE="Projects | Angus Goody";
		$PAGE_DESCRIPTION="View my Projects at Angus Goody";
		//A seperate switch for the subpages of this folder
		switch ($file_base) {
			case 'view.php':
				$CURRENT_PAGE="projects/view";
		}
		break;

	//If undefined
	default:
		$NAV_PAGE="undefined";
		$CURRENT_PAGE="undefined";
		$PAGE_TITLE="Angus Goody";
		$PAGE_DESCRIPTION="Welcome to my Portfolio";
		break;
}

?>
