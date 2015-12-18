<?php $themes = "/public/themes/front/";?>
<?php $this->load->view('front/includes/header', array('themes' => $themes))?>
<body>

<!--======= Side Navigation =======-->
<?php $this->load->view('front/includes/side-nav', array('themes' => $themes))?>

<div class="page-wrapper">
<!--======= Logo, Main Navigation, Search and Side navigation button=======-->
<?php $this->load->view('front/includes/nav', array('themes' => $themes))?>

  <div class="page-title-container">
    <div class="page-title">
      <div class="container">
        <h1 class="title-center entry-title">CloudBerry</h1>
      </div>
    </div>
    <!--ul class="breadcrumbs">
      <li><a href="<?php echo site_url("/");?>">Home</a></li>
      <li class="active">Shared Hosting</li>
    </ul-->
  </div>

<?=@$_body?>


<!-- Carousel Clients -->
<?php //$this->load->view('front/partials/our-awesome-clients', array('themes' => $themes))?>

<!-- customer-testitmonials -->
<?php //$this->load->view('front/partials/customer-testitmonials', array('themes' => $themes))?>

<!-- contact-popup -->
<?php $this->load->view('front/includes/contact-popup', array('themes' => $themes))?>


  <footer id="footer" class="style4">

<!-- footer-top -->
<?php $this->load->view('front/includes/footer-top', array('themes' => $themes))?>

<!-- footer-middle -->
<?php $this->load->view('front/includes/footer-middle', array('themes' => $themes))?>

<!-- footer-bottom -->
<?php $this->load->view('front/includes/footer-bottom', array('themes' => $themes))?>

  </footer>
</div>

<!-- Javascript -->
<?php $this->load->view('front/includes/js', array('themes' => $themes))?>

</body>
</html>
