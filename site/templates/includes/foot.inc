    </div>  

     <div id='footer-social-bar'>
            <div class='container'>
                <div class='row'>
                  <div class='col-xs-6 col-md-10 col-sm-9' >

                          <div class='item'><a href="/stories/share-your-story  ">Share Your Story</a></div>
                          <div class='item'><a href="Javascript:void(0);">812.882.2737</a></div>
                          <div class='item'><a href="/about/contact">Email Us</a></div>
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
    <div id='footer'>
      <div class='container'>
        <div class='row mg-t-md mg-b-md'>
          <div class='col-md-12'>
            <p>&copy; 2008-<?php echo date("Y");?> Thursday Church</p>
          </div>
        </div>
      </div>
    </div>

    <span id="mq-detector">
        <span class="visible-xs"></span>
        <span class="visible-sm"></span>
        <span class="visible-md"></span>
        <span class="visible-lg"></span>
    </span>
 </div>



    <div id="email-popup" class="white-popup mfp-hide">

        <h2>Email Notes</h2>
        <div class="form-group">
            <label>Your Email Address</label>
            <input id="send_email" name="send_email" type="email" class="form-control email">
        </div>

        <a href="javascript:void(0)" id="send_note_email" class="btn btn-default btn-left mg-t-sm"><i class="icon-send-1"></i> Send Email</a>
        <span id="email_status"></span>

    </div>

    <div id="share-email-popup" class="white-popup mfp-hide">

         <h2>Share This With A Friend</h2>
        <div class="form-group">
            <label>Your Email Address</label>
            <input id="send_email_friend" name="send_email_friend" type="text" class="form-control email">
        </div>
        <div class="form-group">
            <label>Your Friend's Email Address</label>
            <input id="send_email_friend_friendname" name="send_email_friend_friendname" type="text" class="form-control email">
        </div>
           <div class="form-group">
          <p class=" mg-b-xs"><strong>Subject:</strong> The Chapel Live</p>
          <label>Your Message</label>
           <textarea class="form-control" placeholder="Come join me in watching The Chapel live!" id="send_email_friend_message" name="send_email_friend_message"></textarea>

            <p class="mg-t-sm"><strong>Sharing URL:</strong> http://thursdaychurch.org/live/</p>
        </div>

         <input name="website" type="hidden" id="send_website" value="">

        <a href="javascript:void(0)" id="send_note_email_friend" class="btn btn-default btn-left mg-t-sm"><i class="icon-send-1"></i> Send Email</a>
        <span id="email_friend_status"></span>

    </div>


    <div id="prayer-request-popup" class="white-popup mfp-hide">

        <h2>Prayer Request</h2>

        <p>Please know that your requests and praises are emailed out daily to a group of
diligent Chapel prayer partners.</p>

<p><small>If you would like to be contacted personally, please include your
phone number or email address in the space provided. To assure confidentiality, your
contact information will only be made available to The Chapel ministry team and will
not be included in the outgoing email as part of your prayer request.</small></p>

        <form id="prayer-request-form">
          <div class="form-group">
              <label>Your First Name</label>
              <input id="prayer_name" name="prayer_name" type="text" class="form-control">
          </div>
          <div class="form-group">
              <label>Your Email</label>
              <input id="prayer_email" name="prayer_email" type="email" class="form-control email">
          </div>
          <div class="form-group">
              <label>Your Phone Number</label>
              <input id="prayer_phone" name="prayer_phone" type="text" class="form-control phone">
          </div>
          <div class="form-group">
              <label>Your Prayer Request (required)</label>
              <textarea id="p_request" name="p_request" rows="7" class="form-control"></textarea>
          </div>

           <input name="website" type="hidden" id="send_prayer_website" value="">


          <a href="javascript:void(0)" id="send_prayer_email" class="btn btn-default btn-left mg-t-sm"><i class="icon-send-1"></i> Send Prayer Request</a>
          <span id="prayer_email_status"></span>
      </form>

    </div>

     <div id="tech-support-popup" class="white-popup mfp-hide">

        <h2>Technical Support Request</h2>

        <p>If you're having trouble viewing the live stream, <a href="http://youtube.com/thursdaychurchvin/live" target="_blank">visit our Livestream page</a>. For additional support, contact us below.</p>

        <form id="tech-support-form">
          <div class="form-group">
              <label>Your Name</label>
              <input id="tech_name" name="name" type="text" class="form-control">
          </div>
          <div class="form-group">
              <label>Your Email Address</label>
              <input id="tech_email" name="email" type="text" class="form-control email">
          </div>
          <div class="form-group">
              <label>Please tell us the issues you are experiencing.</label>
              <textarea id="tech_issues" name="issues" rows="7" class="form-control"></textarea>
          </div>


          <a href="javascript:void(0)" id="send_tech_support_email" class="btn btn-default btn-left mg-t-sm"><i class="icon-send-1"></i> Send Request</a>
          <span id="tech_email_status"></span>
      </form>

    </div>
    <script src="/site/templates/js/plugins/jquery/jquery.min.js"></script>
    <script src='/site/templates/js/plugins/fastbutton/google.fastbutton.js'></script>
    <script src='/site/templates/js/plugins/fastbutton/jquery.google.fastbutton.js'></script>
    <script src='/site/templates/js/bootstrap.min.js'></script>
    <script src='/site/templates/js/plugins/emailObfuscation/emo.min.js'></script>
    <script src='/site/templates/js/plugins/fitvids/jquery.fitvids.min.js'></script>
    <script src='/site/templates/js/plugins/validate/jquery.validate.js'></script>
    <script src='/site/templates/js/main.js'></script>
    <script src='/site/templates/js/popup.js'></script>
    <script src='/site/templates/js/share.js'></script>
    <script src="/site/templates/js/live.js"></script>
    <script src='/site/templates/css/ckeditor/ckeditor.js'></script>
    <script src='/site/templates/css/ckeditor/samples/js/sample.js'></script>

    <?php if(isset($additionalJS)) echo '<script>'. $additionalJS .'</script>'; ?>
  </body>
 </html>