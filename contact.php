<?php
//Import the global functions
include_once dirname($_SERVER["DOCUMENT_ROOT"])."/core/global-functions.php";
//Import config file
include_once include_local_file("/includes/a_config.php");
//Load the database
include_once include_private_file("/core/public-functions/setup/connect-to-public-database.php");
//Import Email Functions
include_once include_private_file("/core/email-functions.php");

//Check for POST parameters
if (isset($_POST["name"],$_POST["email"],$_POST["message"])){
  echo "valid data";
  $name=$_POST["name"];
  $email=$_POST["email"];
  $message=$_POST["message"];
  //Parse the user data
  $html_data=generate_message_email($name,$email,$message);
  //Send
  $to   = 'Insert_reciever_email'; //TODO get mailbox details
  $from = 'Insert_sender_email';   //TODO get mailbox details
  $name = 'Angus Goody Website';
  $subj = 'New Message';
  $msg = $html_data;

  //Send email and get confirmation
  $email_sent=smtpmailer($to,$from, $name ,$subj, $msg);

}
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
            <form method="POST" action="/contact">
              <!--Name-->
              <div class="field">
                <label class="label">Name</label>
                <div class="control">
                  <input name="name" class="input" type="text" placeholder="Your Name" required>
                </div>
              </div>

              <!--Email-->
              <div class="field">
                <label class="label">Email</label>
                <div class="control has-icons-left has-icons-right">
                  <input name="email" class="input" type="email" placeholder="Email" required>
                  <span class="icon is-small is-left">
                    <i class="fas fa-envelope"></i>
                  </span>
                </div>
              </div>

              <!--Message-->
              <div class="field">
                <label class="label">Message</label>
                <div class="control">
                  <textarea required name="message" class="textarea" placeholder="Your Message..."></textarea>
                </div>
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