<?php
$price['sb'] = 29.99;
$price['mb'] = 49.99;
$price['mw'] = 69.99;
?>
<?php $themes = "/public/themes/front/";?>
  <div class="third">
    <h2 class="section-title">Special Deals</h2>
    <div class="container">

      <div class="heading-box">
        <h2 class="box-title">Below are our great deals for you</h2>
        <p class="desc-lg">We also create customized web and mobile applications for your web site, helping you to efficiently interact with employees, customers, and vendors. Having developed a wide range of web-based applications for our clientele, we can easily modify our products for each customer's needs.
          <br><div class="col-md-offset-4 promo-btn"> <a class="btn btn-default" href="<?=site_url("contact-us");?>"> <img src="<?php echo base_url($themes . 'img/icons/bullhorn-icon.png'); ?>" alt=""> GET YOUR <strong class="text-info">CUSTOM QUOTE</strong> </a> </div>
        </p>
        <div class="clearfix"></div>
      </div>

      <div class="row">
        <div class="col-sm-6 col-md-4 bot-20">
          <div class="deal-boxed">
            <div class="icon-tag"> &#9729; <span>SB!</span> </div>
            <div class="box-content">
              <h4 class="box-title">Small Business</h4>
              <h5 class="box-title"><a href="#">Website + 1GB SSD</a></h5>
              <img class="deal-icons" alt="" src="<?php echo base_url($themes . 'img/icons/deal-icon2.png'); ?>">
              <p class="deal-t1">&#9728; Annual plan</p>
              <p class="deal-t1">&#9728; Your domain</p>
              <p class="deal-t1">&#9728; 99.9% Service Uptime</p>
              <p class="deal-t1">&#9728; FREE Enhanced Security</p>
              <p class="deal-t1">&#9728; Includes <a href="<?=site_url("hosting");?>">MIC</a> hosting plan</p>
              <p class="deal-t1">&#9728; 1 email account</p>
              <p class="deal-t1">&#9728; FREE 1-Click WordPress Install</p>
              <p class="deal-t1">&#9728; Limited website update services (5 times/mo)</p>
              <p class="deal-t1">&#9728; Cancel anytime</p>
              <div class="owl-pricing-switcher">
                <p class="fieldset">
                  <input type="radio" name="duration-1" value="monthly" id="monthly-1" checked>
                  <label for="monthly-1">Monthly</label>
                  <input type="radio" name="duration-1" value="yearly" id="yearly-1">
                  <label for="yearly-1">Yearly</label>
                  <span class="owl-switch"></span>
                </p>
              </div> <!-- .owl-pricing-switcher -->
              <p class="deal-p1">Starting at</p>
              <p class="deal-p2"> $ <span id="dur-1"><?=$price['sb'];?></span><em>/mo</em></p>
              <p class="deal-p3"> was <em>$ 99.00</em></p>
              <div class="promo-btn"> <a class="btn btn-default" href="<?=site_url("contact-us");?>"> <img src="<?php echo base_url($themes . 'img/icons/bullhorn-icon.png'); ?>" alt=""> GET YOUR <strong class="text-info">SB PLAN</strong> </a> </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 bot-20">
          <div class="deal-boxed d-blue">
            <div class="icon-tag"> &#9729; <span>MB!</span> </div>
            <div class="box-content">
              <h4 class="box-title">Midsize Business</h4>
              <h5 class="box-title"><a href="#">Domain + Website + 2GB SSD</a></h5>
              <img class="deal-icons" alt="" src="<?php echo base_url($themes . 'img/icons/deal-icon3.png'); ?>">
              <p class="deal-t1">&#9728; Annual plan</p>
              <p class="deal-t1">&#9728; Free 1st year domain</p>
              <p class="deal-t1">&#9728; 99.9% Service Uptime</p>
              <p class="deal-t1">&#9728; FREE Enhanced Security</p>
              <p class="deal-t1">&#9728; Includes <a href="<?=site_url("hosting");?>">MED</a> hosting plan</p>
              <p class="deal-t1">&#9728; 5 email accounts</p>
              <p class="deal-t1">&#9728; FREE 1-Click WordPress Install</p>
              <p class="deal-t1">&#9728; Limited website update services (10 times/mo)</p>
              <p class="deal-t1">&#9728; Cancel anytime</p>
              <div class="owl-pricing-switcher">
                <p class="fieldset">
                  <input type="radio" name="duration-2" value="monthly" id="monthly-2" checked>
                  <label for="monthly-2">Monthly</label>
                  <input type="radio" name="duration-2" value="yearly" id="yearly-2">
                  <label for="yearly-2">Yearly</label>
                  <span class="owl-switch"></span>
                </p>
              </div> <!-- .owl-pricing-switcher -->
              <p class="deal-p1">Starting at</p>
              <p class="deal-p2"> $ <span id="dur-2"><?=$price['mb'];?></span><em>/mo</em></p>
              <p class="deal-p3"> was <em>$ 119.00</em></p>
              <div class="promo-btn"> <a class="btn btn-default" href="<?=site_url("contact-us");?>"> <img src="<?php echo base_url($themes . 'img/icons/bullhorn-icon.png'); ?>" alt=""> GET YOUR <strong class="text-info">MB PLAN</strong> </a> </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 bot-20">
          <div class="deal-boxed d-green">
            <div class="icon-tag"> &#9729; <span>MW!</span> </div>
            <div class="box-content">
              <h4 class="box-title"><a href="#">Managed WordPress</a></h4>
              <h5 class="box-title"><a href="#">Domain + Website + 3GB SSD</a></h5>
              <img class="deal-icons" alt="" src="<?php echo base_url($themes . 'img/icons/deal-icon1.png'); ?>">
              <p class="deal-t1">&#9728; Annual plan</p>
              <p class="deal-t1">&#9728; Free 1st year domain</p>
              <p class="deal-t1">&#9728; 99.9% Service Uptime</p>
              <p class="deal-t1">&#9728; FREE Enhanced Security</p>
              <p class="deal-t1">&#9728; Includes <a href="<?=site_url("hosting");?>">ADV</a> hosting plan</p>
              <p class="deal-t1">&#9728; Unlimited email accounts</p>
              <p class="deal-t1">&#9728; FREE 1-Click WordPress Install</p>
              <p class="deal-t1">&#9728; Unlimited website update services</p>
              <p class="deal-t1">&#9728; Cancel anytime</p>
              <div class="owl-pricing-switcher">
                <p class="fieldset">
                  <input type="radio" name="duration-3" value="monthly" id="monthly-3" checked>
                  <label for="monthly-3">Monthly</label>
                  <input type="radio" name="duration-3" value="yearly" id="yearly-3">
                  <label for="yearly-3">Yearly</label>
                  <span class="owl-switch"></span>
                </p>
              </div> <!-- .owl-pricing-switcher -->
              <p class="deal-p1">Starting at</p>
              <p class="deal-p2"> $ <span id="dur-3"><?=$price['mw'];?></span><em>/mo</em></p>
              <p class="deal-p3"> was <em>$ 149.00</em></p>
              <div class="promo-btn"> <a class="btn btn-default" href="<?=site_url("contact-us");?>"> <img src="<?php echo base_url($themes . 'img/icons/bullhorn-icon.png'); ?>" alt=""> GET YOUR <strong class="text-info">MW PLAN</strong> </a> </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

<script type="text/javascript">
///duration-2
$( document ).ready(function() {

  $("input[name='duration-1']").click(function (){
    var val = $(this).val();
    if(val == "monthly") {
      $("#dur-1").text(<?=$price['sb'];?>);
      $("#dur-1").next("em").text("/mo");
    } else {
      $("#dur-1").text(<?=($price['sb']*12);?>);
      $("#dur-1").next("em").text("/yr");
    }
  });

  $("input[name='duration-2']").click(function (){
    var val = $(this).val();
    if(val == "monthly") {
      $("#dur-2").text(<?=$price['mb'];?>);
      $("#dur-2").next("em").text("/mo");
    } else {
      $("#dur-2").text(<?=($price['mb'] * 12 );?>);
      $("#dur-2").next("em").text("/yr");
    }
  });

  $("input[name='duration-3']").click(function (){
    var val = $(this).val();
    if(val == "monthly") {
      $("#dur-3").text(<?=$price['mw'];?>);
      $("#dur-3").next("em").text("/mo");
    } else {
      $("#dur-3").text(<?=($price['mw']*12);?>);
      $("#dur-3").next("em").text("/yr");
    }
  });


});
</script>
