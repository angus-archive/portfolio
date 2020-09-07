<?php
//Import the global functions
include_once dirname($_SERVER["DOCUMENT_ROOT"])."/core/global-functions.php";
//Import config file
include_once include_local_file("/includes/a_config.php");
//Load the database
include_once include_private_file("/core/public-functions/setup/connect-to-public-database.php");
//Import Public Functions
include_once include_private_file("/core/public-functions/public-functions.php");
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
        <!--Written Logo-->
        <figure class="image mb-2">
          <img src="/assets/images/core/sign.svg"  style="max-width: 700px; margin: auto;">
        </figure>
        <div class="has-text-light my-5">
          <h1 class="title is-1 has-text-grey-lighter">Computer Science Student</h1>
          <h3 class="subtitle has-text-grey-light">University of Sheffield</h3>
        </div>
        <a style="width: 25%; min-width: 170px;" href="/projects" class="button is-primary is-large mt-5">Projects</a>
      </div>
      <br>
      <br> 
      <div class="section box mt-5">
        <div class="container is-narrow">
          
          <!--Skills columns-->
          <div class="columns is-gapless is-mobile is-multiline">
            <!--Back End-->
            <div class="column">
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
                <div class="columns is-centered is-multiline">
                  <?
                  //Get tags
                  $all_tags=array("PHP","Python","Java","Ruby");
                  foreach ($all_tags as $tag): ?>
                  <div class="column is-7">
                    <p class="notification is-primary has-text-centered"><?=$tag?></p>
                  </div>
                  <? endforeach; ?>
                </div>
              </div>
            </div>
            <!--Front End-->
            <div class="column">
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
                <div class="columns is-centered is-multiline">
                  <?
                  //Get tags
                  $all_tags=array("HTML","CSS","Javascript","jQuery","Bootstrap","Bulma");
                  foreach ($all_tags as $tag): ?>
                  <div class="column is-7">
                    <p class="notification is-info has-text-centered"><?=$tag?></p>
                  </div>
                  <? endforeach; ?>
                </div>
              </div>
            </div>
            <!--Designer-->
            <div class="column">
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
                <div class="columns is-centered is-multiline">
                  <?
                  //Get tags
                  $all_tags=array("Affinity","Sketch");
                  foreach ($all_tags as $tag): ?>
                  <div class="column is-7">
                    <p class="notification is-link has-text-centered"><?=$tag?></p>
                  </div>
                  <? endforeach; ?>
                </div>
              </div>
            </div>
          </div>
          <!--How made-->
          <hr>
          <div class="has-text-centered">
            <h3 class="title is-3 mb-0">This Website Uses...</h3>
          </div>
          <!--View website tags-->
          <div class="section">
            <div class="columns is-vcentered is-mobile is-multiline is-centered">
              <?
              //Get tags
              $all_tags=get_tags_by_name_list($pdo,array("Bulma","PHP","CSS","HTML","jQuery"));
              foreach ($all_tags as $tag): ?>
              <div class="column">
                <p style="background-color: <?=$tag["background"]?>;color: <?=$tag["foreground"]?>" class="notification has-text-centered"><strong><?=$tag["name"]?></strong></p>
              </div>
              <? endforeach;?>
            </div>
          </div>
          <!--Find out more -->
          <div class="has-text-centered">
            <a class="button is-link is-light">Find out more about this website</a>
          </div>
          <!--Downloads-->
          <hr>
          
        </div>
      </div>
    </div>
  </div>
  <!-- Footer -->
  <? include_once include_local_file("/includes/footer.php");?>
</body>
</html>