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
      <div class="columns is-multiline">
        <? for ($i=0; $i < 10; $i++): ?>
        <!--Card-->
        <div class="column is-4 is-3-fullhd">
          <div class="card">
            <div class="card-image">
              <figure class="image">
                <img src="/assets/images/project-images/default_image.svg" alt="Placeholder image">
              </figure>
            </div>
            <!--Content-->
            <div class="card-content">
                <div class="media">
                  <!--Project Logo-->
                  <div class="media-left">
                    <figure class="image is-48x48">
                      <img src="/assets/images/project-images/default_logo.svg" alt="Placeholder image">
                    </figure>
                  </div>
                  <div class="media-content">
                    <p class="title is-4">Project Name</p>
                    <p class="subtitle is-6">12/45/2022</p>
                  </div>
                </div>

                <div class="content mt-3">
                  Brief description of the project goes here
                  <div class="tags mt-5 has-text-centered">
                    <span class="tag">One</span>
                    <span class="tag">Two</span>
                    <span class="tag">Three</span>
                  </div>

                </div>
            </div>
            <!--Footer for card-->
            <footer class="card-footer">
                <p class="card-footer-item">
                  <span>
                    <a href="#">Live demo</a>
                  </span>
                </p>
                <p class="card-footer-item">
                  <span>
                    <a href="#">Github</a>
                  </span>
                </p>
              </footer>
          </div>
        </div>
        <? endfor; ?>
      </div>
    </div>
  </div>
  <!-- Footer -->
  <? include_once include_local_file("/includes/footer.php");?>
</body>
</html>