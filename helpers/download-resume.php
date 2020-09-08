<?
/*
 * Will allow the user to download the resume
 * Angus Goody 08/09/2020
 */

//Import the global functions
include_once dirname($_SERVER["DOCUMENT_ROOT"])."/core/global-functions.php";
//Import download Functions
include_once include_private_file("/core/download-functions.php");

//Download
download_resume();
//Redirect
