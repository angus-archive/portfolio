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
<body class="has-background-backdrop">
  <!-- Navbar -->
  <? include_once include_local_file("/includes/navbar.php");?>
  <!-- Content -->
  <div id="wrapper">
    <div class="container section">  
      <!--Title-->
      <div class="has-text-centered mb-5">
        <!--Contact Sign-->
        <figure class="image mb-2">
          <img src="/assets/images/core/about.svg" class="title_logo" alt="About Title Handwritten">
        </figure>
      </div>
      <!--Box-->
      <div class="box">
        <div class="columns is-centered  is-vcentered is-multiline">
          <div class="column is-8 has-text-centered mt-3">
            <div class="mx-auto mw500">
              <h2 class="title is-4">Design</h2>
              <div class="justify-text content">
                <p>I designed all the resources and images for this website using the <a>Affinity</a> suite, including...</p>
                <div class="columns is-mobile is-multiline">
                  <?$myList=array("Logo","Favicon","Titles","Project Logos","Downloads")?>
                  <? foreach ($myList as $item):?>
                  <div class="column equal-height">
                    <div class="notification is-light is-info has-text-centered">
                      <strong><?=$item?></strong>
                    </div>
                  </div>
                  <? endforeach;?>
                </div>
              </div>
            </div>
          </div>
          <div class="column is-4">
            <figure class="image">
              <img src="/assets/images/meat/ipad.jpg">
            </figure>
          </div>
          <div class="column is-12">
            <hr>
          </div>
          <div class="column is-4">
            <figure class="image">
              <img src="/assets/images/meat/macbook.png">
            </figure>
          </div>
          <div class="column is-8 has-text-centered">
            <div class="mx-auto mw500">
              <h2 class="title is-4">Front End</h2>
              <div class="justify-text content">
                <p>This website was built using <a>Spacedeck</a> which is a PHP boilerplate I built for making dynamic websites quickly and efficiently.</p>
                <p>I used <a>Bumla</a> for the CSS Framework as It is very lightweight and customisable, Bulma does not have any Javascript dependancies which makes this site extremely fast</p>
              </div>
            </div>
          </div>

          <div class="column is-12">
            <hr>
          </div>
          <div class="column is-8 has-text-centered">
            <div class="mx-auto mw500">
              <h2 class="title is-4">Back End</h2>
              <div class="justify-text content">
                <p>This website is built dynamically using both PHP and MySQL, each project is stored in a database and then the code is generated when the user requests the page. I have made the source code for this website open source so you can check it out on <a>Github.</a> </p>
              </div>
            </div>
          </div>
          <div class="column is-4">
            <figure class="image">
              <img src="/assets/images/meat/dynamic.svg">
            </figure>
          </div>
          <div class="column is-12">
            <hr>
            <div class="mx-auto" style="max-width: 200px">
              <img src="/assets/images/bulma.png">
            </div>
          </div>


        </div>

        
      </div>      
    </div>
  </div>
  <!-- Footer -->
  <? include_once include_local_file("/includes/footer.php");?>
  <!--Scripts-->
  <script type="text/javascript">
    $(document).ready(function(){
        $(".req").hide();
    });
  </script>
</body>
</html>