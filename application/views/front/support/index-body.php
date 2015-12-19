<?php $themes = "/public/themes/front/";?>
  <div class="second">
    <h2 class="section-title">Support</h2>
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-md-offset-1">

          <div class="support-que"> <i class="fa fa-check"></i>
            <div class="sup-wrp">
              <h4>Hate waiting for the next available agent? So do we.</h4>
            </div>
          </div>
          <div class="support-que"> <i class="fa fa-check"></i>
            <div class="sup-wrp">
              <h4>In-house issue tracking and load balancing.</h4>
            </div>
          </div>
          <div class="support-que"> <i class="fa fa-check"></i>
            <div class="sup-wrp">
              <h4>One-click escalation.</h4>
            </div>
          </div>
          <hr class="color-light1">

          <!-- Form -->
          <article>
            <div class="heading-box">
              <h2 class="box-title">Help is just a few clicks away.</h2>
              <p class="desc-lg bot-40">We don't outsource. CBH-hosting employees are… CBH-hosting employees! <br>If you’re already a customer, contact support through your control panel.</p>
            </div>
            <!-- contact form -->
            <div id="confirm">
              <form id="contact-form" class="row form1" name="contact-form" method="post" action="<?php echo site_url("submission/index/contactUs/")?>">
                <div class="success">
                  <div class="success_txt">Contact form submitted!<br />
                    <strong> We will be in touch soon.</strong></div>
                </div>
                <fieldset>
                <label class="name col-md-6">
                <input type="text" placeholder="What's your name?" name="name">
                <span class="error">*This is not a valid name.</span> <span class="empty">*This field is required.</span> </label>
                <label class="email col-md-6">
                <input type="text" placeholder="What's your email address?" name="email">
                <span class="error">*This is not a valid email address.</span> <span class="empty">*This field is required.</span> </label>
                <label class="phone col-md-6">
                <input type="text" placeholder="What's the subject?" name="subject">
                <span class="error">*This is not a valid phone number.</span> <span class="empty">*Please enter Phone</span> </label>
                <label class="phone col-md-6">
                <input type="text" placeholder="Who would you like to contact?" name="phone">
                <span class="error">*This is not a valid phone number.</span> <span class="empty">*Please enter Phone</span> </label>
                <label class="message col-md-12">
                <textarea placeholder="What would you like to ask?" name="message"></textarea>
                <span class="error">*The message is too short.</span> <span class="empty">*This field is required.</span> </label>
                <div class="clear"></div>
                <div class="link-form col-md-12 center"> <a class="btn style4" href="#" data-type="reset">Clear</a> <a class="btn style1" href="#" data-type="submit" id="btn-submit">Submit</a> </div>
                </fieldset>
              </form>
            </div>
            <!-- end contact form -->
          </article>
        </div>
      </div>
    </div>
  </div>

<script type="text/javascript">

$( document ).ready(function() {
$("#btn-submit").click(function (){
    $("#contact-form").submit();
});
});

</script>