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
          <img src="/assets/images/core/sign.svg" class="title_logo" alt="Angus' Signiture">
        </figure>
        <div class="has-text-light my-5">
          <h1 class="title is-1 has-text-grey-lighter">Computer Science Student</h1>
          <h3 class="subtitle has-text-grey-light">University of Sheffield</h3>
        </div>
        <a style="width: 25%; min-width: 170px;" href="/projects" class="button is-primary is-large mt-5">Projects</a>
      </div>
      <br>
      <!--Skills Logo-->
      <figure class="image mb-2">
        <img src="/assets/images/core/skills.svg"  style="max-width: 250px; margin: auto;" alt="My Skills">
      </figure>
      <br> 
      <div class="section box mt-5">
        <div class="container is-narrow">
          
          <!--Skills columns-->
          <div class="columns is-gapless is-mobile is-multiline">
            <!--Back End-->
            <div class="column mt-2">
              <figure class="image is-128x128 mx-auto">
                <img src="/assets/images/icons/code.svg" alt="Coding Icon">
              </figure>
              <!--Title-->
              <div class="has-text-centered mt-5">
                <h3 class="title is-4 has-text-grey-dark">Back End</h3>
              </div>
              <hr>
              <!--Skills-->
              <div class="skills py-4">
                <div class="columns is-centered is-multiline">
                  <?
                  //Get tags
                  $all_tags=array("PHP","Python","Java","Ruby","MySQL");
                  foreach ($all_tags as $tag): ?>
                  <div class="column is-7">
                    <p class="notification is-primary has-text-centered mx-1"><?=$tag?></p>
                  </div>
                  <? endforeach; ?>
                </div>
              </div>
            </div>
            <!--Front End-->
            <div class="column mt-2">
              <figure class="image is-128x128 mx-auto">
                <img src="/assets/images/icons/monitor.svg" alt="Monitor Icon">
              </figure>
              <!--Title-->
              <div class="has-text-centered mt-5">
                <h3 class="title is-4 has-text-grey-dark">Front End</h3>
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
                    <p class="notification is-info has-text-centered mx-1"><?=$tag?></p>
                  </div>
                  <? endforeach; ?>
                </div>
              </div>
            </div>
            <!--Designer-->
            <div class="column mt-2">
              <figure class="image is-128x128 mx-auto">
                <img src="/assets/images/icons/design.svg" alt="Design Icon">
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
                    <p class="notification is-link has-text-centered mx-1"><?=$tag?></p>
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
              $all_tags=get_tags_by_name_list($pdo,array("Bulma","PHP","CSS","HTML","jQuery","MySQL"));
              foreach ($all_tags as $tag): ?>
              <div class="column">
                <p style="background-color: <?=$tag["background"]?>;color: <?=$tag["foreground"]?>" class="notification has-text-centered"><strong><?=$tag["name"]?></strong></p>
              </div>
              <? endforeach;?>
            </div>
          </div>
          <!--Find out more -->
          <div class="has-text-centered">
            <a href="/about" class="button is-link is-inverted">Find out more about this website</a>
          </div>
          <!--Downloads-->
          <hr>
          <div class="has-text-centered">
            <h3 class="title is-3 mb-0">Downloads...</h3>
            <div class="columns is-mobile is-centered mt-4">
              <div class="column is-8-mobile is-6-tablet is-3-desktop">
                <img src="/assets/images/meat/resume.svg" alt="Angus Goody Resume">
                <a href="/helpers/download-resume" class="button is-link is-outlined mt-3">Download Resume</a>
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