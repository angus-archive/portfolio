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
          <img src="/assets/images/core/about.svg" class="title_logo" alt="About Title Handwritten">
        </figure>
      </div>
      <!--Box-->
      <div class="box">
        ye
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