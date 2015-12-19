
  <header id="header">
    <div class="header-inner">
      <div class="container">
        <div class="row">
          <!-- Logo -->
          <h1 class="logo"> <a href="<?=site_url("hosting");?>"><img src="<?php echo base_url($themes . 'img/logo-icon.png'); ?>" alt="">CBH</a> </h1>
          <!-- Main Navigation, Search and Side Navigation Button -->
          <nav>
            <div class="nav-sticky">
              <!-- Side Navigation Button -->
              <!--a id="owl-menu-trigger" href="#0"><span class="owl-menu-icon"></span></a-->
              <!-- Search -->
              <!--div class="tp-search">
                <div class="owl-header-buttons"> <a class="owl-search-trigger" href="#owl-search"><span></span></a> </div>
                <div id="owl-search" class="owl-search">
                  <form>
                    <input type="search" placeholder="Search...">
                  </form>
                </div>
                <div class="owl-search-overlay"></div>
              </div-->
              <!-- Main Navigation -->
              <div class="owl-contener clearfix">
                <div class="cat-title"></div>
                <ul class="owl-menu menu-content">
                  <!--=========== Single Menu ===============-->
                  <li class="single-dropdown"> <a class="<?php echo ($this->uri->segment(1) == 'hosting') ? 'active' : ''; ?>" href="<?=site_url("hosting");?>">Hosting</a></li>

                  <!--=========== Single Menu ===============-->
                  <li class="single-dropdown"> <a class="<?php echo ($this->uri->segment(1) == 'deal') ? 'active' : ''; ?>" href="<?=site_url("deal");?>">Deals</a></li>

                  <!--=========== Contact Menu ===============-->
                  <li class="single-dropdown"><a class="<?php echo ($this->uri->segment(1) == 'support') ? 'active' : ''; ?>" href="<?=site_url("support");?>">Support</a>

                  <!--=========== Contact Menu ===============-->
                  <li class="single-dropdown"><a class="<?php echo ($this->uri->segment(1) == 'contact-us') ? 'active' : ''; ?>" href="<?=site_url("contact-us");?>">Contact Us</a>

                </ul>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </header>
