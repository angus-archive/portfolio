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
  <div id="wrapper" class="dracula">
    <div class="container section">
      <div class="has-text-centered mb-5">
        <!--Signiture-->
        <figure class="image mb-2">
          <img src="/assets/images/core/sign.svg"  style="max-width: 700px; margin: auto;">
        </figure>
        <div class="has-text-light my-5">
          <h1 class="title is-1 has-text-grey-lighter">Computer Science Student</h1>
          <h3 class="subtitle has-text-grey-light">University of Sheffield</h3>
        </div>
        <a href="/projects" class="button is-primary is-large mt-5">Projects</a>
      </div>
      <br>
      <div class="section box mt-5">
        <div class="container is-narrow">
          <div class="columns is-gapless">
            <!--Back End-->
            <div class="column is-4">
              <figure class="image is-128x128 mx-auto">
                <img src="/assets/images/icons/code.svg">
              </figure>
              <!--Title-->
              <div class="has-text-centered mt-5">
                <h3 class="title is-4 has-text-grey-dark">Back End Developer</h3>
              </div>
              <hr>
              <!--Skills-->
              <div class="skills py-4">
                <table class="table is-fullwidth is-striped has-text-centered">
                  <tbody>
                    <tr><td><strong>PHP</strong></td></tr>
                    <tr><td><strong>Python</strong></td></tr>
                    <tr><td><strong>Ruby</strong></td></tr>
                    <tr><td><strong>Java</strong></td></tr>
                  </tbody>
                </table>
              </div>
            </div>
            <!--Front End-->
            <div class="column is-4">
              <figure class="image is-128x128 mx-auto">
                <img src="/assets/images/icons/monitor.svg">
              </figure>
              <!--Title-->
              <div class="has-text-centered mt-5">
                <h3 class="title is-4 has-text-grey-dark">Front End Developer</h3>
              </div>
              <hr>
              <!--Skills-->
              <div class="skills py-4">
                <table class="table is-fullwidth is-striped has-text-centered">
                  <tbody>
                    <tr><td><strong>HTML</strong></td></tr>
                    <tr><td><strong>CSS</strong></td></tr>
                    <tr><td><strong>Javascript</strong></td></tr>
                    <tr><td><strong>Jquery</strong></td></tr>
                    <tr><td><strong>Bootstrap</strong></td></tr>
                    <tr><td><strong>Bulma</strong></td></tr>
                  </tbody>
                </table>
              </div>
            </div>
            <!--Designer-->
            <div class="column is-4">
              <figure class="image is-128x128 mx-auto">
                <img src="/assets/images/icons/design.svg">
              </figure>
              <!--Title-->
              <div class="has-text-centered mt-5">
                <h3 class="title is-4 has-text-grey-dark">Designer</h3>
              </div>
              <hr>
              <!--Skills-->
              <div class="skills py-4">
                <table class="table is-fullwidth is-striped has-text-centered">
                  <tbody>
                    <tr><td><strong>Affinity</strong></td></tr>
                    <tr><td><strong>Sketch</strong></td></tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer -->
  <? include_once include_local_file("/includes/footer.php");?>
</body>
</html>