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
</head>
<body>
  <!-- Navbar -->
  <? include_once include_local_file("/includes/navbar.php");?>
  <!-- Content -->
  <div id="wrapper" style="background-color: #1E2C2A;">
    <div class="container section">
      <div class="has-text-centered mb-5">
        <!--Signiture-->
        <figure class="image mb-4">
          <img src="/assets/images/core/sign.svg"  style="max-width: 700px; margin: auto;">
        </figure>
        <div class="has-text-light">
          <h1 class="title is-1 has-text-grey-lighter">Computer Science Student</h1>
          <h3 class="subtitle">University of Sheffield</h3>
        </div>
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