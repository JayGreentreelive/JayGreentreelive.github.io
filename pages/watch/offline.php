<script>
var live_streaming = false;
var need_countdown = true;
</script>
<div class="container mg-t-lg mg-b-lg serif" id="live-page">

    <div class="row header-area">
            <div class="col-lg-8 col-md-7 ">
            <h1><?php //echo $title; ?></h1>
            <h3 class="text-muted" id="service-times">
            </h3>
            </div>

            <div class="col-lg-4 col-md-5 ">



                <div class="share-live-service">
                <span style="float:left;margin-right: 14px; margin-top: 12px;color:#787878;font-style: italic;">Share This</span>
                <div class="share-series-facebook sharrre" data-url="http://thursdaychurch.org/live" data-text="Watch Thursday Church live on Sunday mornings via @thursdaychurch2008">
                <div class="box"><a class="count  count-zero " href="#"></a><a class="share" href="#"></a></div>
              </div>
              
              <div class="share-series-twitter sharrre" data-url="http://thursdaychurch.org/live" data-text="Watch Thursday Church live on Sunday mornings via @chapelbuffalo">
              <div class="box"><a class="count  count-zero " href="#"></a><a class="share" href="#"></a></div>
            </div>
            
            <div class="share-series-email sharrre"><div class="box"><a class="share icon-email-1" href="javascript:void(0);"></a></div></div></div><div class="clearfix clear"></div>

            </div>
    </div>

    <div class="row mg-t-xs">
        <div class="col-md-12 col-lg-7" id="section-video">

             <div class="video-holder" id="video-holder">
             	<div class="fluid-width-video-wrapper">
             	<img src="/site/assets/files/<?php echo $title;?>.png" alt="" width="100%" />
             	</div>

                                         
             </div>
            <div class="countdown-block" id="countdown-block">

                 <div class="countdown-holder pull-left">
                    <div class="defaultCountdown is-countdown">

                    </div>
                  </div>
                <div class="next-service-outer pull-left">
                  <div class="next-service" id="next-service"></div>
                </div>
                <div class="clearfix"></div>

             </div>

             <div class="takeaway-block" id="takeaway-block"></div>

             <div class="live-sermon-info mg-t-md ">
             <div class="pull-right hidden-xs hidden-sm hidden-md mg-b-sm" style="display: none;">
                 <a href="javascript:void(0);" class=" mg-r-sm2" id="expand"><i class="fa-lg  icon-maximize-4"></i></a>
                 <a href="javascript:void(0);" class="size-control-disabled" id="contract"><i class="fa-lg icon-minimize-1"></i></a>
               </div>

               <div id="live-message-details">
               </div>
             </div>

            <div class="text-muted mg-b-sm2" id="live-message-body">
                  
            </div>



              <div class=" mg-b-lg  " id="review-questions-click-holder">
              <a href="#sermon-archives-popup" id="review-questions-click" class="inline-popup-link btn btn-left btn-sm-xs btn-default mg-r-sm "><i class="icon-document-1"></i> Sermon archives</a>
              <a href="#get-connected-popup"  class="inline-popup-link btn btn-left btn-sm-xs btn-default mg-r-sm"><i class="icon-right-2"></i> Connect</a>
              </div>

              <div id="review-content" class="hide mg-b-lg">
                  <div id="message-id" class="hide"></div>
                  <div class="mg-b-sm"><h4>Review Questions</h4></div>
                  <ul>
                  <li></li>
                  <li></li>
                  <li></li>
                  </ul>
                  <hr>
                  <div class="mg-b-sm">
                  <h4>Daily Readings</h4></div>
                  <div class="row">
                  <div class="col-xs-2 col-sm-1"><strong>Mon:</strong></div>
                  <div class="col-xs-10 col-sm-11">
                  <a target="_blank" href="https://www.biblegateway.com/passage/?search=2+Peter+1%3A1-2%3A3&amp;version=niv#bga-gt-top">2 Peter 1:1-2:3</a></div></div>
	<div class="row"><div class="col-xs-2 col-sm-1"><strong>Tue:</strong></div><div class="col-xs-10 col-sm-11"><a target="_blank" href="https://www.biblegateway.com/passage/?search=Psalm+119%3A1-88&amp;version=niv#bga-gt-top">Psalm 119:1-88</a></div></div><div class="row"><div class="col-xs-2 col-sm-1"><strong>Wed:</strong></div><div class="col-xs-10 col-sm-11"><a target="_blank" href="https://www.biblegateway.com/passage/?search=Psalm+119%3A89-176&amp;version=niv#bga-gt-top">Psalm 119:89-176</a></div></div><div class="row"><div class="col-xs-2 col-sm-1"><strong>Thu:</strong></div><div class="col-xs-10 col-sm-11"><a target="_blank" href="https://www.biblegateway.com/passage/?search=2+Timothy+2%3A14-26&amp;version=niv#bga-gt-top">2 Timothy 2:14-26</a></div></div><div class="row"><div class="col-xs-2 col-sm-1"><strong>Fri:</strong></div><div class="col-xs-10 col-sm-11"><a target="_blank" href="https://www.biblegateway.com/passage/?search=2+Timothy+3%3A1-17&amp;version=niv#bga-gt-top">2 Timothy 3:1-17</a></div></div><div class="row"><div class="col-xs-2 col-sm-1"><strong>Sat:</strong></div><div class="col-xs-10 col-sm-11"><a target="_blank" href="https://www.biblegateway.com/passage/?search=2+Timothy+4%3A1-8&amp;version=niv#bga-gt-top">2 Timothy 4:1-8</a></div></div><hr><div class="mg-b-sm"><h4>Memory Verse</h4></div><p></p>
              </div>


        </div>

        <div class="col-md-12 col-lg-5 page-section live-sidebar " id="section-sidebar">

                        <ul class="nav nav-tabs nav-justified">
                          <li class="active"><a href="#welcome-tab" data-toggle="tab">Chat</a></li>
                          <li class=" "><a href="#notes-tab" data-toggle="tab">Notes</a></li>
                          <li class=" "><a href="#response-tab" data-toggle="tab">Schedule</a></li>
                          <li class=" "><a href="#sermons-tab" data-toggle="tab">Sermons</a></li>
                          <li class=" "><a href="#bible-tab" data-toggle="tab">Bible</a></li>
                        </ul>



                        <div class="tab-content" id="tabbed-content">

                           <!-- Tab panes -->
                             <div class="tab-pane active form-tab" id="welcome-tab">
                             <P>Chat unavailble between services</p>
                             </div>

                             <div class="tab-pane sermons-tab" id="sermons-tab">

                             </div>

                          <div class="tab-pane " id="notes-tab">
                          	<textarea name="editor1" id="message-date-notes" rows="10" style="visibility: hidden; display: none;">
                              <?php echo $live_notes; ?>
                              </textarea>
                          	<div>
                                
                            </div>

                          </div>

                          <div class="tab-pane form-tab" id="response-tab">
                          	<div class="service-times text-muted">
                              <p>
                              <b>Thursday</b> 6:45pm<br />
                              <b>Sunday</b> 10:45am
                              </p>
                          	</div>
                          </div>

                          <div class="tab-pane" id="bible-tab">
                            <iframe frameborder="0" allowtransparency="true" src="https://www.bible.com/bible/111/gen.1.niv" class="bible-iframe"></iframe>
                          </div>

            </div>
        </div>
    </div>


     <div class="row mg-t-md">
        <div class="col-sm-4 text-center mg-b-md">
          <div class="icon-heart fa-3x teal mg-b-md"></div>
          <p style="padding:0px 16px;">Give to Thursday Church and take part in helping us reach every man, woman and child with the Gospel of Jesus Christ.<!--br><strong>Text any amount to 716.333.5511</strong--></p>
          <a href="#online-giving-popup" id="review-questions-click" class="inline-popup-link btn btn-left btn-sm-xs btn-default mg-r-sm "><i class="icon-document-1"></i> online giving</a>
        </div>
         <div class="col-sm-4 text-center mg-b-md">
          <div class="icon-group fa-3x teal mg-b-md"></div>
          <p style="padding:0px 16px;">Come join other people like you who want to grow in faith and learn more about what it means to follow Jesus.</p>
          <a href="http://thursdaychurch.org/connect/small-groups/" target="_blank" class="btn btn-left btn-default"><i class="icon-right-4"></i> Find a LIFE Group</a>
        </div>
          <div class="col-sm-4 text-center mg-b-md">
          <div class="icon-location-pin-4 fa-3x teal mg-b-md"></div>
          <p style="padding:0px 16px;">Ready to join us in person? Thursday CHurch is one church with multiple locations. We'd love to have you join
 us for a Sunday service!</p>
          <a href="http://thursdaychurch.org/about/im-new/" target="_blank" class="btn btn-left btn-default"><i class="icon-right-4"></i> Find A Location</a>
        </div>
      </div>



          <div class="row">
        <div class="col-md-12 text-center text-muted mg-t-sm">
          <span class="mg-b-xs"><strong><a class="mg-l-xs  inline-popup-link" href="#tech-support-popup">Having trouble viewing this?</a></strong></span>
         <div class="visible-xs"><br></div><span class="mg-b-xs mg-l-md"><strong><a class=" inline-popup-link" href="#prayer-request-popup">Need prayer?</a></strong></span>
        </div>
      </div>

</div>