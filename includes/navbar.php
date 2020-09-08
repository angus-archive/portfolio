<?php
/*
 * This is the Navbar file, this will be your navbar
 * for the whole site, updating this file will change
 * the navbar for all pages
 */

/*
 ===============
 This function adds the "currentNavItem"
 to the approprirate page ID, ensuring the active
 page is displayed on the navigation bar ie. has the green colour
 ===============
 */
function isCurrent($pageName){
	global $NAV_PAGE;
	//If the global matches the argument set as current
	if ($NAV_PAGE == $pageName){
		echo "has-text-primary-dark";
	}
}

//Function to display Screenreader info
function isCurrentSR($pageName){
	global $NAV_PAGE;
	//If the global matches the argument set as current
	if ($NAV_PAGE == $pageName){
    echo "aria-current='page'";
	}
}


?>
<nav class="navbar" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="/">
      <img src="/assets/images/core/logo.svg" width="112" height="28">
      <h1></h1>
    </a>

    <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

  <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">
      <!--Home-->
      <a class="navbar-item <?=isCurrent("index")?>" href="/"  <?isCurrentSR("index")?>>
        Home
      </a>
      <!--Projects-->
      <a class="navbar-item <?=isCurrent("projects")?>" href="/projects" <?isCurrentSR("projects")?>>
        Projects
      </a>
      <!--Contact page-->
      <a class="navbar-item <?=isCurrent("contact")?>" href="/contact"  <?isCurrentSR("contact")?>>
        Contact
      </a>

    </div>

    <div class="navbar-end">
      <div class="navbar-item">
        <div class="buttons">
          <a class="button is-primary" target="_blank" href="https://github.com/angusgoody/portfolio">
            <span class="icon"><i class="fab fa-github"></i></span>
            <span>GitHub</span>
          </a>
          <a class="button is-info" target="_blank" href="https://www.linkedin.com/in/angus-goody">
            <span class="icon"><i class="fab fa-linkedin"></i></span>
            <span>Linkedin</span>
          </a>
        </div>
      </div>
    </div>
  </div>
</nav>

