<?php
//Import the global functions
include_once dirname($_SERVER["DOCUMENT_ROOT"])."/core/global-functions.php";
//Import config file
include_once include_local_file("/includes/a_config.php");
//Load the database
include_once include_private_file("/core/public-functions/setup/connect-to-public-database.php");
//Import Public Functions
include_once include_private_file("/core/public-functions/public-functions.php");

if(isset($_GET["id"])){
  $pid=$_GET["id"];
  $validProject=0;
  $project=get_project_by_id($pdo,$pid);
  if(isset($project["name"])){
    $validProject=1;
  }

}else{
  //header("location: /projects");
  echo "nope";
}
$all_projects=get_all_projects($pdo);
?>
<!DOCTYPE html>
<html lang="en" class="">
<head>
  <!-- Head tags -->
  <? include_once include_local_file("/includes/head-tags.php");?>
</head>
<body class="dracula">
  <!-- Navbar -->
  <? include_once include_local_file("/includes/navbar.php");?>
  <!-- Content -->
  <div id="wrapper">
    <div class="container section">  
      <!--White box-->  
      <div class="box">
        <!--Back button-->
        <a href="/projects" class="button is-primary is-inverted mb-4"><span class="icon"><i class="fas fa-chevron-left"></i></span><span>Projects</span></a>
        <!--Basic details-->
        <div class="columns">
          <!--Left Side -->
          <div class="column is-6-tablet is-5-desktop is-4-widescreen">
            <!--Image -->
            <div class="has-background-grey-lighter">
              <figure class="image">
                <img src="/assets/images/project-images/<?=$project["image_slug"]?>">
              </figure>
            </div>
          </div>
          <!--Right Side -->
          <div class="column is-6-tablet is-7-desktop is-8-widescreen">
            <div class="is-flex" style="flex-direction: column; height: 100%;">
              <div style="flex-grow: 1">
                <!--Title -->
                <h1 class="title"><?=$project["name"]?></h1>
                <!--Date created -->
                <h4 class="subtitle subtitle is-6"><span><?=$project["month_created"]?></span></h4>
                <!--Tags-->
                <div class="tags mb-5">
                  <?
                  //Get tags for project
                  $project_tags=get_tags_for_project($pdo,$project["PID"]);
                  //Loop through each tag
                  ?>
                  <? foreach ($project_tags as $tag): ?>
                  <span style="background-color: <?=$tag["background"]?>; color: <?=$tag["foreground"]?>" class="tag"><?=$tag["name"]?></span>
                  <? endforeach; ?>
                </div>
                <!--Description -->
                <div class="columns is-gapless">
                  <div class="column is-6">
                    <div class="py-2 px-2"style="background-color: #F7F6F9; border-radius: 3px;">
                        <p><?=$project["desc_s"]?></p>
                    </div>
                  </div>
                </div>

              </div>
              <div style="flex-grow: 0">
                <div class="columns is-gapless">
                  <div class="column is-6">
                    <? if($project["is_live"] == 1):?>
                    <div class="level-item">
                      <a class="button is-fullwidth is-primary is-outlined" target="_blank" href="<?=$project["live_link"]?>">Visit</a>
                    </div>
                    <? endif; ?>
                    <? if($project["is_git"] == 1):?>
                    <div class="level-item">
                      <a class="button is-fullwidth is-link is-outlined" target="_blank" href="<?=$project["git_link"]?>">Github</a>
                    </div>
                    <? endif; ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--More details-->
        <hr>
        <div class="level is-mobile">
          <div class="level-left">
            <div>
              <h2 class="title is-4">Details</h2>
              <p><?=$project["desc_l"]?></p>
            </div>
          </div>
          <div class="level-right">
            <figure class="image is-48x48">
              <img src="/assets/images/project-images/<?=$project["logo_slug"]?>" alt="Project Logo">
            </figure>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer -->
  <? include_once include_local_file("/includes/footer.php");?>
</body>
</html>