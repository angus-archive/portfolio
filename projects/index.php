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
<body class="dracula">
  <!-- Navbar -->
  <? include_once include_local_file("/includes/navbar.php");?>
  <!-- Content -->
  <div id="wrapper">
    <div class="container section">  
      <!--Title-->
      <div class="has-text-centered mb-5">
        <!--Projects Sign-->
        <figure class="image mb-2">
          <img src="/assets/images/core/projects.svg"  style="max-width: 700px; margin: auto;" alt="Projects Title Handwritten">
        </figure>
      </div> 
      <!--Filter Box-->
      <div class="box">
        <div id="filter_tabs" class="tabs is-centered">
          <ul>
            <li class="is-active">
              <a cat="all" class="active">
                <span class="icon is-small"><i class="fas fa-th-large"></i></span>
                <span>All</span>
              </a>
            </li>
            <li>
              <a cat="<?=get_cat_id_by_name($pdo,"web");?>" class="active" >
                <span class="icon is-small"><i class="fab fa-chrome"></i></span>
                <span>Web</span>
              </a>
            </li>
            <li>
              <a cat="<?=get_cat_id_by_name($pdo,"desktop");?>" class="active">
                <span class="icon is-small"><i class="fas fa-desktop"></i></span>
                <span>Desktop</span>
              </a>
            </li>
            <li>
              <a cat="<?=get_cat_id_by_name($pdo,"mobile");?>" class="active">
                <span class="icon is-small"><i class="fas fa-mobile-alt"></i></span>
                <span>Mobile</span>
              </a>
            </li>
          </ul>
        </div>
      </div>

      <!--Columns-->
      <div class="columns is-multiline is-mobile">
        <!--No results-->
        <div class="column is-12" id="not_found" style="display: none">
          <article class="notification is-link is-light">
            <p class="title">No Projects Found</p>
            <p class="subtitle">No projects could be found for this category</p>
          </article>
        </div>
        <? foreach ($all_projects as $project): ?>
        <!--Card-->
        <div class="project-col column is-12-mobile is-6-tablet is-3-fullhd is-4-desktop" cat=<?=get_project_category($pdo,$project["PID"])["CID"]?>>
          <div class="box equal-height">
            <div class="card-image">
              <figure class="image is-5by4">
                <a href="/projects/view?id=<?=$project["PID"]?>"><img src="/assets/images/project-images/<?=$project["image_slug"]?>" alt="Project Image For <?=$project["name"]?>"></a>
              </figure>
            </div>
            <!--Content-->
            <div class="card-content py-5 px-0">
                <div class="media">
                  <!--Project Logo-->
                  <div class="media-left">
                    <figure class="image is-48x48">
                      <img src="/assets/images/project-images/<?=$project["logo_slug"]?>" alt="Project Logo for <?=$project["name"]?>">
                    </figure>
                  </div>
                  <div class="media-content">
                    <a href="/projects/view?id=<?=$project["PID"]?>"><p class="title is-4"><?=$project["name"]?></p></a>
                    <p class="subtitle is-6"><?=$project["month_created"]?></p>
                  </div>
                </div>
                <hr>
                <div class="content mt-3">  
                  <!--Description-->
                  <?=$project["desc_s"]?>
                </div>
            </div>
            <!--Footer for card-->
            <div class="level is-mobile">
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
        <? endforeach; ?>
      </div>
    </div>
  </div>
  <!-- Footer -->
  <? include_once include_local_file("/includes/footer.php");?>
  <!--Custom script -->
  <script type="text/javascript">
    //On load
    $( document ).ready(function() {


      //Filter tab clicked
      $("#filter_tabs a").click(function(){
        this_link=$(this);
        //Prevent double click
        if(!this_link.parent().hasClass("is-active")){
          //Remove active from all
          $(".tabs li").removeClass("is-active");
          //Set this link as active
          this_link.parent().addClass("is-active");
          //Get CID
          cat_id=this_link.attr("cat");
          //Now Hide all the cards
          $(".project-col").hide(100);
          number_of_projects=0;
          if(cat_id !== "all"){
            //Unhide the cards that match
            query=$('.project-col[cat='+cat_id+']');
            query.show(200);
          }else{
            query=$(".project-col");
            query.show(200); 
          }
          //Get number of projects
          number_of_projects=query.length;
          if (number_of_projects < 1){
            $("#not_found").show(200);
          }else{
            $("#not_found").hide();
          }
        }
        
      });
    });




  </script>
</body>
</html>