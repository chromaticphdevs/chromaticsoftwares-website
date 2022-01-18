
<footer style="background:#10375c; padding:30px;">
  <div class="container">
    <div class="text-center">
      <p style="font-weight:bold; color:#fff; ">
        Let us hear your story ,<br>
        your visions , <br> your
        business challenges and
        make solutions
        with chromatic
      </p>
    </div>
  </div>
</footer>

<div id="fb-root"></div>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      xfbml            : true,
      version          : 'v7.0'
    });
  };

  (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Your Chat Plugin code -->
<div class="fb-customerchat"
  attribution=setup_tool
  page_id="496358773821479"
theme_color="#d92027"
logged_in_greeting="Hi! How can we help you?"
logged_out_greeting="Hi! How can we help you?">
</div>