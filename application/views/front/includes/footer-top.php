
    <div class="callout-box style2">
      <div class="container">
        <div class="col-sm-7">
          <div class="social-icons">
            <a href="#" class="social-icon"><i class="fa fa-twitter has-circle"></i></a>
            <a href="https://www.facebook.com/cloudberrysoftware/" class="social-icon"><i class="fa fa-facebook has-circle"></i></a>
            <a href="#" class="social-icon"><i class="fa fa-google-plus has-circle"></i></a>
            <a href="#" class="social-icon"><i class="fa fa-linkedin has-circle"></i></a>
          </div>
        </div>
        <div class="col-sm-5">
          <div id="newsletter_signup">
            <form name="subscribe_frm" method="POST" action="/submission/index/subscribe/" id="subscribe-frm">
              <input type="email" required placeholder="Subscribe to our newsletter" class="form-control" name="email" id="subscribe_email">
              <input type="submit" name="subscribe_btn" value="SUBSCRIBE">
            </form>
          </div>
        </div>
      </div>
    </div>

<script type="text/javascript">

$( document ).ready(function() {

  $("#subscribe-frm").submit(function(event){
      event.preventDefault();
      $.ajax({
        type: 'POST',
        url: $(this).attr("action"),
        data: $(this).serialize(),
        success: function(response) {
          var r = $.parseJSON(response);
          if (r.status == 0) {
            //$("#subscribe_status").removeClass("hide");
            //$("#subscribe_email").addClass("hide");
            //$("#subscribe_email").attr("placeholder", r.message);
            $("#subscribe_email").prop('disabled', true);
            $("#subscribe_email").val(r.message);
          }
        }
      });
      return false;

  });

});

</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-71838001-1', 'auto');
  ga('send', 'pageview');

</script>