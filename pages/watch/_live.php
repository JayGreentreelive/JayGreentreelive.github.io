<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<script>
var live_streaming = false;
var need_countdown = true;
</script>
<div class="container mg-t-lg mg-b-lg serif" id="live-page">

    <div class="row header-area">
            <div class="col-lg-8 col-md-7 ">
            <h1>
            </h1>

            <h3 class="text-muted" id="service-times">
            	
            </h3>

            </div>

            <div class="col-lg-4 col-md-5 ">

                <div class="share-live-service">
                	<span style="float:left;margin-right: 14px; margin-top: 12px;color:#787878;">Share This</span>
                	<div class="share-series-facebook icon-facebook-square sharrre" data-url="http://thursdaychurch.org/live" data-text="Watch Thursday Church live on Sunday mornings via @thursdaychurch2008"><div class="box"><a class="count  count-zero " href="#"></a><a class="share" href="#"></a></div></div>
                  <div class="share-series-twitter icon-twitter-square sharrre" data-url="http://thursdaychurch.org/live" data-text="Watch Thursday Church live on Sunday mornings via @thursdaychurch"><div class="box"><a class="count  count-zero " href="#"></a><a class="share" href="#"></a></div></div>
                  <div class="share-series-email icon-mail-2 sharrre" data-url="http://thursdaychurch.org/live" data-text="Watch Thursday Church live on Sunday mornings"><div class="box"><a href="javascript:void(0);"></a></div></div>
                </div>
                <div class="clearfix clear"></div>

            </div>
    </div>

    <div class="row mg-t-xs">
        <div class="col-md-12 col-lg-7" id="section-video">

             <div class="video-holder" id="video-holder">
             	<div class="fluid-width-video-wrapper">
             	<img src="/site/assets/files/1369/offline_image_16x9.jpg" alt="" width="100%" />
             	</div>
             </div>
            <div class="countdown-block" id="countdown-block">

                 <div class="countdown-holder pull-left">
                    <div id="defaultCountdown" class="is-countdown">

                    </div>
                  </div>
                <div class="next-service-outer pull-left">
                  <div class="next-service" id="next-service">
                  	
                  </div>
                </div>
                <div class="clearfix"></div>

             </div>

             <div class="takeaway-block " id="takeaway-block"></div>

             <div class="live-sermon-info mg-t-md ">
             <div class="pull-right hidden-xs hidden-sm hidden-md mg-b-sm">
                 <a href="javascript:void(0);" class=" mg-r-sm2" id="expand"><i class="fa-lg  icon-maximize-4"></i></a>

                 <a href="javascript:void(0);" class="size-control-disabled" id="contract"><i class="fa-lg icon-minimize-1"></i></a>

               </div>

               <div id="live-message-details">
                   <h2>Sermon Title</h2>
                    <p>Sermon desceiptins</p>
                     <h4>

                     </h4>
                     <p>

                     </p>
              </div>
             </div>

               <div class="text-muted mg-b-sm2" id="live-message-body">
                  <p>

                  </p>              </div>



              <div class=" mg-b-lg  " id="review-questions-click-holder">
              <a href="javascript:void(0):" id="review-questions-click" class="btn btn-left btn-sm-xs btn-default mg-r-sm "><i class="icon-document-1"></i> Review Questions</a>
              <a href="javascript:void(0);" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#connect-Modal"><i class="icon-right-2"></i> Connect</a>
              </div>

              <div id="review-content" class="hide mg-b-lg">
                  <div id="message-id" class="hide">31003</div>
                  <div class="mg-b-sm"><h4>Review Questions</h4></div>
                  
              </div>


        </div>

        <div class="col-md-12 col-lg-5 page-section live-sidebar " id="section-sidebar">

                        <ul class="nav nav-tabs nav-justified">

                          <li class="active"><a href="#welcome-tab" data-toggle="tab">Chat</a></li>

                          <li class=" "><a href="#notes-tab" data-toggle="tab">Notes</a></li>

                          <li class=" "><a href="#response-tab" data-toggle="tab">Schedule</a></li>
                          <li class=" "><a href="#bible-tab" data-toggle="tab">Bible</a></li>
                        </ul>



                        <div class="tab-content" id="tabbed-content">

                           <!-- Tab panes -->
                             <div class="tab-pane active form-tab unavailable" id="welcome-tab">
                               <p>Chat currently offline</p>
                             </div>

                          <div class="tab-pane " id="notes-tab">
                         <textarea name="editor1" id="Inputfield_body" class="FieldtypeTextarea InputfieldCKEditorNormal InputfieldMaxWidth" name="body" rows="10" data-configName="InputfieldCKEditor_body">
                         	
                         </textarea>
                          </div>

                          <div class="tab-pane form-tab" id="response-tab">
                          	<div class="service-times">
                            <h3 class="text-muted" id="service-times">Thursdays at 6:40pm </h3>
                            <h3 class="text-muted" id="service-times">Sundays at 10:40am </h3>
                          	</div>
                          </div>

                          <div class="tab-pane" id="bible-tab">
                          	<iframe frameborder="0" allowtransparency="true" src="https://www.bible.com/bible/111/gen.1.nlt" class="bible-iframe"></iframe>
                          </div>





            </div>
        </div>
    </div>


     <div class="row mg-t-md">
        <div class="col-sm-4 text-center mg-b-md">
          <div class="icon-heart fa-3x teal mg-b-md"></div>
          <p style="padding:0px 16px;">Give to Thursday Church and take part in helping us reach every man, woman and child with the Gospel of Jesus Christ.<!--br><strong>Text any amount to 716.333.5511</strong --></p>
          <a href="/give/" target="_blank" class="btn btn-left btn-default"><i class="icon-right-4"></i> Give Now</a>
        </div>
         <div class="col-sm-4 text-center mg-b-md">
          <div class="icon-group fa-3x teal mg-b-md"></div>
          <p style="padding:0px 16px;">Come join other people like you who want to grow in faith and learn more about what it means to follow Jesus.</p>
          <a href="/ministries/life-groups/" target="_blank" class="btn btn-left btn-default"><i class="icon-right-4"></i> Find a LIFE Group</a>
        </div>
          <div class="col-sm-4 text-center mg-b-md">
          <div class="icon-location-pin-4 fa-3x teal mg-b-md"></div>
          <p style="padding:0px 16px;">Ready to join us in person? Thursday Church is one church with multiple locations. We'd love to have you join
 us for a Sunday service!</p>
          <a href="/locations" target="_blank" class="btn btn-left btn-default"><i class="icon-right-4"></i> Find a Location</a>
        </div>
      </div>



      <div class="row">
        <div class="col-md-12 text-center text-muted mg-t-sm">
          <span class="mg-b-xs"><strong><a class="mg-l-xs  inline-popup-link" href="#tech-support-popup">Having trouble viewing this?</a></strong></span>
         <div class="visible-xs"><br></div><span class="mg-b-xs mg-l-md"><strong><a class=" inline-popup-link" href="#prayer-request-popup">Need prayer?</a></strong></span>
        </div>
      </div>


