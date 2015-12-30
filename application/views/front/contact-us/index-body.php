    <div class="third cnt-pg">
      <h2 class="section-title">Get in touch</h2>
      <div class="container">
          <div class="row">
            <!-- Form -->
            <div class="col-md-8 col-md-offset-2 text-center">
        <div class="box-style cont-pad">
<h1>Who We Are</h1>
<h4>CloudBerry is a small group of dedicated Knights working hard around the table and the clock.</h4>

              <h4>We Use The Latest Technology to make Powerful Web sites and online applications which don't require labour instensive and error prone HTML entry for individual pages.</h4>
              <h2>Drop us a line to talk about your project </h2>
               <hr class="colorgraph">
              <!-- contact form -->
              <div id="confirm">
                <form id="contact-form" class="row form1" name="contact-form" method="post" action="/submission/index/contactUs/">
                  <fieldset>
                  <div class="success">
                    <div class="success_txt">status</div>
                  </div>
                  <label class="name col-md-4">
                  <input type="text" placeholder="Name:" name="name">
                  <span class="error">*This is not a valid name.</span> <span class="empty">*This field is required.</span> </label>
                  <label class="email col-md-4">
                  <input type="text" placeholder="E-mail:" name="email">
                  <span class="error">*This is not a valid email address.</span> <span class="empty">*This field is required.</span> </label>
                  <label class="phone col-md-4">
                  <input type="text" placeholder="Phone:" name="phone">
                  <span class="error">*This is not a valid phone number.</span> <span class="empty">*Please enter Phone</span> </label>
                  <label class="message col-md-12">
                  <textarea name="msg" placeholder="Message"></textarea>
                  <span class="error">*The message is too short.</span> <span class="empty">*This field is required.</span> </label>
                  <div class="clear"></div>
                  <div class="link-form col-md-12"> <a class="btn style4" data-type="reset">Clear</a> <a class="btn style1" data-type="submit" id="btn-submit">Submit</a> </div>
                  </fieldset>
                </form>
              </div>
              <!-- end contact form -->
            </div>
          </div>
        </div>
      </div>
    </div>
<script type="text/javascript">

$( document ).ready(function() {
//$(".success").show();
  $("#btn-submit").click(function (){
      $("#contact-form").submit();
  });

  $("#contact-form").submit(function(event){
      event.preventDefault();
      $.ajax({
        type: 'POST',
        url: $(this).attr("action"),
        data: $(this).serialize(),
        success: function(response) {
          var r = $.parseJSON(response);
            $(".success_txt").text(r.message);
            $( ".success" ).fadeIn( 1000, function() {
              $( ".success" ).fadeOut( 1000, function() {
                if(r.status == 0) {
                  $("#contact-form input").val("");
                }
              });
            });
        }
      });
      return false;

  });

});

</script>