<?php
//Import the global functions
include_once dirname($_SERVER["DOCUMENT_ROOT"])."/core/global-functions.php";
//Import config file
include_once include_local_file("/includes/a_config.php");
?>
<!DOCTYPE html>
<html lang="en" class="">
<head>
  <!-- Head tags -->
  <? include_once include_local_file("/includes/head-tags.php");?>
  <style type="text/css">
    body{
      background-color: #1E2C2A;
    }
  </style>
</head>
<body>
  <!-- Navbar -->
  <? include_once include_local_file("/includes/navbar.php");?>
  <!-- Content -->
  <div id="wrapper">
    <div class="container section">
      <div class="has-text-centered mb-5">
        <h1 class="title is-1">Computer Science Student</h1>
        <h3 class="subtitle">Subtitle</h3>
      </div>
      <div class="columns is-centered is-mobile mt-5">
        <div class="column is-4-desktop is-7-tablet is-6-mobile is-centered">
        </div>
      </div>
    </div>
  </div>
  <!-- Footer -->
  <? include_once include_local_file("/includes/footer.php");?>
</body>
</html>