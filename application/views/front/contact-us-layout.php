<?php $themes = "/public/themes/front/";?>
<?php $this->load->view('front/includes/header', array('themes' => $themes))?>
<body>

<!--======= Side Navigation =======-->
<?php $this->load->view('front/includes/side-nav', array('themes' => $themes))?>

<div class="page-wrapper">
<!--======= Logo, Main Navigation, Search and Side navigation button=======-->
<?php $this->load->view('front/includes/nav', array('themes' => $themes))?>


  <div class="page-title-map">
    <div class="map-center">
      <div class="map-circle">
        <div> <div class="logo-drk"><img alt="" src="<?php echo base_url($themes . 'img/logo-icon.png'); ?>">CBH</div>
        <h6>Orange County<br>
        California </h6>  <address><a href="mailto:contact@cloudberry.hosting" class="skin-color">contact@cloudberry.hosting</a></address> </div> </div>
   </div>
    <div class="map-overlay"></div>
    <div id="map"></div>
    <div class="page-title">
      <div class="container">
        <h1 class="title-center entry-title">Contact Us</h1>
      </div>
    </div>
  </div>


<?=@$_body?>

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

<script type="text/javascript" src="<?php echo base_url($themes . 'js/plugins.js'); ?>"></script>
<script src="<?php echo base_url($themes . 'js/forms.js'); ?>"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">
            google.maps.event.addDomListener(window, 'load', init);
            function init() {
            var mapOptions = {
            center: new google.maps.LatLng(33.7739004, -117.9764672),
			zoom: 12,
			panControl: false,
			zoomControl: false,
			scrollwheel: false,
			streetViewControl: false,
			mapTypeControl : false,
			scaleControl: false,
            styles: [{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#08151e"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#000000"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#08151e"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#08151e"},{"lightness":17},{"weight":1.2}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#08151e"},{"lightness":20}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#08151e"},{"lightness":21}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#08151e"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#08151e"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#08151e"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#08151e"},{"lightness":16}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#08151e"},{"lightness":19}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#08151e"},{"lightness":17}]}]
            };
            var mapElement = document.getElementById('map');
            var map = new google.maps.Map(mapElement, mapOptions);
			var officeLocation = new google.maps.LatLng(33.7739004, -117.9764672);
		    var marker = new google.maps.Marker({
			position: officeLocation,
			map: map,
			animation: google.maps.Animation.DROP,
			title: 'CBH'
		});
            }
        </script>

</body>
</html>
