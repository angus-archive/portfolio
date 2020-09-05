<?php
//Import the global functions
include_once dirname($_SERVER["DOCUMENT_ROOT"])."/core/global-functions.php";
//Import config file
include_once include_local_file("/includes/a_config.php");
//Load the database
include_once include_private_file("/core/public-functions/setup/connect-to-public-database.php");
//Import Public Functions
include_once include_private_file("/core/public-functions/public-functions.php");

$all_projects=get_all_projects($pdo);
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
  <!--Title-->
  <section class="hero is-light">
    <div class="hero-body">
      <div class="container has-text-centered">
        <h1 class="title">
          My Projects
        </h1>
        <h2 class="subtitle">
          View my Projects
        </h2>
        <br>
        <!--Filter bar-->
        <div class="tabs is-centered is-toggle">
          <ul>
            <li class="is-active">
              <a>
                <span class="icon is-small"><i class="fas fa-th-large"></i></span>
                <span>All</span>
              </a>
            </li>
            <li>
              <a>
                <span class="icon is-small"><i class="fab fa-chrome"></i></span>
                <span>Web</span>
              </a>
            </li>
            <li>
              <a>
                <span class="icon is-small"><i class="fas fa-desktop"></i></span>
                <span>Desktop</span>
              </a>
            </li>
            <li>
              <a>
                <span class="icon is-small"><i class="fas fa-mobile-alt"></i></span>
                <span>Mobile</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- Content -->
  <div id="wrapper" style="background-color: #1E2C2A;">
    <div class="container section">    
      <!--Columns-->
      <div class="columns is-multiline is-mobile">
        <? foreach ($all_projects as $project): ?>
        <!--Card-->
        <div class="column is-12-mobile is-6-tablet is-3-fullhd is-4-desktop">
          <div class="card equal-height">
            <div class="card-image">
              <figure class="image">
                <img src="/assets/images/project-images/<?=$project["image_slug"]?>" alt="Project Image">
              </figure>
            </div>
            <!--Content-->
            <div class="card-content">
                <div class="media">
                  <!--Project Logo-->
                  <div class="media-left">
                    <figure class="image is-48x48">
                      <img src="/assets/images/project-images/<?=$project["logo_slug"]?>" alt="Project Logo">
                    </figure>
                  </div>
                  <div class="media-content">
                    <p class="title is-4"><?=$project["name"]?></p>
                    <p class="subtitle is-6"><?=$project["month_created"]?></p>
                  </div>
                </div>

                <div class="content mt-3">
                  <?=$project["desc_s"]?>
                  <div class="tags mt-5 has-text-centered">
                    <?
                    //Get tags for project
                    $project_tags=get_tags_for_project($pdo,$project["PID"]);
                    //Loop through each tag
                    ?>
                    <? foreach ($project_tags as $tag): ?>
                    <span style="background-color: <?=$tag["background"]?>; color: <?=$tag["foreground"]?>" class="tag"><?=$tag["name"]?></span>
                    <? endforeach; ?>
                  </div>

                </div>
            </div>
            <!--Footer for card-->
            <footer class="card-footer"> 
              <? if($project["is_web"] == 1):?>
              <p class="card-footer-item">
                <span>
                  <a href="#">Live demo</a>
                </span>
              </p>
              <? endif; ?>
              <p class="card-footer-item">
                <span>
                  <a href="#">Github</a>
                </span>
              </p>
              </footer>
          </div>
        </div>
        <? endforeach; ?>
      </div>
    </div>
  </div>
  <!-- Footer -->
  <? include_once include_local_file("/includes/footer.php");?>
</body>
</html>