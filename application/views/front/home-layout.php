<?php $themes = "/public/themes/front/";?>
<?php $this->load->view('front/includes/header', array('themes' => $themes))?>
<body>

<!--======= Side Navigation =======-->
<?php $this->load->view('front/includes/side-nav', array('themes' => $themes))?>

<div class="page-wrapper">
<!--======= Logo, Main Navigation, Search and Side navigation button=======-->
<?php $this->load->view('front/includes/nav', array('themes' => $themes))?>

<?=@$_body?>

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
