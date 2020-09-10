<?php
/*
 * This is the Head-Tags file, this is where you should place HTML tags
 * You want to appear on all your pages, such as Canonical, Stylesheets,
 * Descriptions, Viewports etc
 */
?>
<title><?=$PAGE_TITLE;?></title>
<!--Meta information-->
<meta name="description" content="<?php print $PAGE_DESCRIPTION;?>">
<meta name="keywords" content="Angus,Goody,Portfolio,Angus Goody">
<!--Canonical-->
<link rel="canonical" href="<?php echo $PAGE_CANONICAL ?>"/>
<?php include_once "static-tags.php" ?>

