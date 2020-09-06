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
<body class="dracula">
  <!-- Navbar -->
  <? include_once include_local_file("/includes/navbar.php");?>
  <!-- Content -->
  <div id="wrapper">
    <div class="container section">  
      <!--Title-->
      <div class="has-text-centered mb-5">
        <!--Contact Sign-->
        <figure class="image mb-2">
          <img src="/assets/images/core/contact.svg"  style="max-width: 700px; margin: auto;">
        </figure>
      </div>
      <div class="columns">
        <div class="column is-5">
          <div class="box">
            <!--Title etc-->
            <div class="has-text-centered">
              <p class="title is-4">Social Links</p>
            </div>
            <hr>
            <!--Github-->
            <a class="panel-block"><span class="panel-icon"><i class="fab fa-github"></i></span>Github</a>
            <!--Linkedin-->
            <a class="panel-block"><span class="panel-icon"><i class="fab fa-linkedin-in"></i></span>Linkedin</a>
            <!--Email-->
            <a class="panel-block"><span class="panel-icon"><i class="fas fa-envelope"></i></span>example@gmail.com</a>

          </div>
        </div>
        <!--Form section-->
        <div class="column is-7">
          <div class="box">
            <!--Title etc-->
            <div class="has-text-centered">
              <p class="title is-4">Get in touch</p>
            </div>
            <hr>
            <!--Form-->
            <form>
              <!--Name-->
              <div class="field">
                <label class="label">Name</label>
                <div class="control">
                  <input name="name" class="input" type="text" placeholder="Your Name">
                </div>
              </div>

              <!--Email-->
              <div class="field">
                <label class="label">Email</label>
                <div class="control has-icons-left has-icons-right">
                  <input name="email" class="input" type="email" placeholder="Email">
                  <span class="icon is-small is-left">
                    <i class="fas fa-envelope"></i>
                  </span>
                </div>
              </div>

              <!--Message-->
              <div class="field">
                <label class="label">Message</label>
                <div class="control">
                  <textarea name="message" class="textarea" placeholder="Your Message..."></textarea>
                </div>
              </div>

              <!--Captcha-->
              <div class="field">
                <label class="label">Captcha</label>
              </div>

              <!--Submit-->
              <div class="control is-expanded">
                <button class="button is-fullwidth is-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      
    </div>
  </div>
  <!-- Footer -->
  <? include_once include_local_file("/includes/footer.php");?>
</body>
</html>