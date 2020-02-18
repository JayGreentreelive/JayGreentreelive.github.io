    </div>   <!-- end Main -->

     <div id='footer-social-bar'>
            <div class='container'>
                <div class='row'>
                  <div class='col-xs-6 col-md-10 col-sm-9' >

                          <div class='item'><a href='#'>Share Your Story</a></div>
                          <div class='item'><a href="#">716.555.1234</a></div>
                          <div class='item'><a href='#'>info@crosspointchurch.church</a></div>
                  </div>
                  <div class='col-xs-6 col-md-2 col-sm-3' >
                        <div class='pull-right'>
                           <a target="_blank" href='https://facebook.com' class='social-fb'><i class="icon-facebook  "></i></a>
                           <a target="_blank" href='https://twitter.com' class='social-tw'><i class="icon-twitter"></i></a>
                           <a target="_blank" href='https://instagram.com' class='social-in'><i class="icon-instagram "></i></a>
                           <a target="_blank" href='https://youtube.com' class='social-yt'><i class="icon-youtube "></i></a>
                        </div>
                  </div>
              </div>
          </div>
    </div>


    <!-- FOOTER -->
    <div id='footer'>
       <div class='container '>


              <div class='row mg-t-md mg-b-md'>
                  <div class='col-md-12'>

                    <p>&copy; <?php echo date("Y");?> Thursday Church

                      </p>
                  </div>
              </div>
          </div>
    </div>


    <!-- window resize helper -->
    <span id="mq-detector">
        <span class="visible-xs"></span>
        <span class="visible-sm"></span>
        <span class="visible-md"></span>
        <span class="visible-lg"></span>
    </span>



 </div> <!-- / wrapper -->

    <!-- Javascript ================================================== -->
<script src="/site/templates/js/plugins/modernizr/modernizr.min.js"></script>    
<script src="/site/templates/js/plugins/jquery/jquery.min.js"></script>
<script src='/site/templates/js/bootstrap.min.js'></script>
<script src='/site/templates/js/plugins/fastbutton/google.fastbutton.js'></script>
<script src='/site/templates/js/plugins/fastbutton/jquery.google.fastbutton.js'></script>
<script src='/site/templates/js/plugins/emailObfuscation/emo.min.js'></script>
<script src='/site/templates/js/plugins/fitvids/jquery.fitvids.min.js'></script>
<script src='/site/templates/js/plugins/validate/jquery.validate.js'></script>
<script src='/site/templates/css/ckeditor/ckeditor.js'></script>
<script src='/site/templates/css/ckeditor/samples/js/sample.js'></script>
<script src='/site/templates/js/popup.js'></script>
<script src='/site/templates/js/share.js'></script>
<script src='/site/templates/js/main.js'></script>
<script src="/site/templates/js/live.js"></script>
<?php if(isset($additionalJS)) echo '<script>'. $additionalJS .'</script>'; ?>

     <script src="/assets/js/jquery-3.1.0.min.js"></script>
    <script src="/assets/js/jquery-ui-custom.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/jquery.validate.min.js"></script>
    <script src="/assets/js/owl.carousel.min.js"></script>
    <script src="/assets/js/jquery.waypoints.min.js"></script>
    <script src="/assets/js/jquery.counterup.min.js"></script>
    <script src="/assets/js/jquery.ui.touch-punch.min.js"></script>
    <script src="/assets/js/retina.min.js"></script>
    <script src="/assets/js/main.js"></script>


    <?php if(isset($additionalJS)) echo '<script>'. $additionalJS .'</script>'; ?>

    <?php


    /* If the page is editable, then output a link that takes us straight to the page edit screen:
     if( !isset($external_page) ) {
      if(wire('page')->editable()) {
          echo "<a  id='editpage' href='".wire("config")->urls->admin."page/edit/?id=".wire('page')->id."'>Edit</a>";
      }
    }
*/
    ?>


  </body></html>