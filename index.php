<?php
//Import the global functions
include_once dirname($_SERVER["DOCUMENT_ROOT"])."/core/global-functions.php";
$error_file_location="/views/public/util/invalid404.php";
$path=parse_url($_SERVER['REQUEST_URI'])["path"];
$elements = preg_split('@/@', $path, NULL, PREG_SPLIT_NO_EMPTY);
//If no parameters - Go home
if(empty($elements))                       
    include_once include_private_file("/views/public/home.php");
else 
switch(array_shift($elements))// Pop off first item and switch
{

  //About page
  case 'about':
    if (count($elements) > 0){include_once include_private_file($error_file_location);}else{include_once include_private_file("/views/public/about.php");}
    break;

  //Contact page
  case 'contact':
    if (count($elements) > 0){include_once include_private_file($error_file_location);}else{include_once include_private_file("/views/public/contact.php");}
    break;

  //Download Resume
  case 'download-resume':
    if (count($elements) > 0){include_once include_private_file($error_file_location);}else{include_once include_private_file("/views/public/util/download-resume.php");}
    break;

  //Case to view projects
  case 'projects':
      if (count($elements) > 0){
        $pid=end($elements); //Update var to use
        include_once include_private_file("/views/public/view_project.php");
      }else{
        //Load projects homepage
        include_once include_private_file("/views/public/view_all_projects.php");
      }
      break;


  //Default - Go to error page
  default:
      include_once include_private_file($error_file_location);
}

?>