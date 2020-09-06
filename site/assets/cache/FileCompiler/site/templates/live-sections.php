<?php

 include(\ProcessWire\wire('files')->compile(\ProcessWire\wire("config")->paths->root . "site/templates/includes/head.inc",array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true)));

    $sections = $pages->find('parent='.$page->id.',template=live-section, sort=sort');

    $bodySpacing = '';
    if(count($sections) == 0) {
        $bodySpacing = ' mg-b-lg ';
    }

    $topTwoColumn = false;
    if( $page->sidebar_content != '' || count($page->resource_links) > 0 ||  $page->ministry_website != '' || count($page->related_links) > 0 || count($page->related_events) > 0 )
    {
        $topTwoColumn = true;
    }

    $ministry_related_events = false;

    $num_events = 2;

    if( $page->number_of_events_to_show )
    {
      $num_events = $page->number_of_events_to_show;
    }

    if(count($page->ministry) > 0 ) {

      $ministry = $page->ministry->first();
      $ministry_events = $pages->find("template=event|event_repeater, ministry|parent.ministry=$ministry, numChildren=0, event_date>=today,  sort=event_date, limit=$num_events ");

      if(count($ministry_events) > 0)
      {
          $topTwoColumn = true;
          $ministry_related_events = true;
      }
    }

if($live &&  $page->template == 'live'){
  ?>
<script>
var live_streaming = true;
var need_countdown = false;
</script>
<?php } else { ?>
<script>
var live_streaming = false;
var need_countdown = true;
</script>
<?php } ?>

<div class="container mg-t-lg mg-b-lg serif" id="live-page">

    <div class="row header-area">
            <div class="col-lg-8 col-md-7 ">
            <h1><?php //echo $page->title; ?></h1>
            <h3 class="text-muted" id="service-times">
            </h3>
            </div>

            <div class="col-lg-4 col-md-5 ">



                <div class="share-live-service">
                    <span style="float:left;margin-right: 14px; margin-top: 12px;color:#787878;font-style: italic;">Share This</span><br />
                            
                            <div id="sharrre" class="share-live-service">
                              <div id="shareme" data-url="<?php echo $page->httpUrl?>" data-text="Share this page"></div>
                            </div>
                 </div>
                  <div class="clearfix clear"></div>

            </div>
    </div>

    <div class="row mg-t-xs">
        <div class="col-md-12 col-lg-7" id="section-video">

             <div class="video-holder" id="video-holder">
             	<div class="fluid-width-video-wrapper">
             	<img src="/site/assets/files/<?php echo $page->id;?>/<?php echo $page->images; ?>" alt="" width="100%" />
             	</div>                         
             </div>

            <div class="countdown-block" id="countdown-block">

                 <div class="countdown-holder pull-left">
                    <div class="defaultCountdown">

                    </div>
                  </div>

                <div class="next-service-outer pull-left">
                  <div class="next-service">

                  </div>
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
                   <h2> </h2>
                   <p> </p>
                   <h4> </h4>
                   
                   </div>
             </div>

            <div class="text-muted mg-b-sm2" id="live-message-body">
                  <p> </p>
            </div>



              <div class=" mg-b-lg  " id="review-questions-click-holder">
              <a href="#sermon-archives-popup" id="review-questions-click" class="inline-popup-link btn btn-left btn-sm-xs btn-default mg-r-sm "><i class="icon-document-1"></i> Sermon archives</a>
              <a href="#get-connected-popup"  class="inline-popup-link btn btn-left btn-sm-xs btn-default mg-r-sm"><i class="icon-right-2"></i> Connect</a>
              </div>

              <div id="review-content" class="hide mg-b-lg">
                  <div id="message-id" class="hide"> </div>
                  <div class="mg-b-sm"><h4>Review Questions</h4></div>
                  <ul><li>Why is the Scripture reliable? If you believe that the Scripture is reliable, 
              </div>


        </div>

 <!--div class="container page-section  mg-t-lg <?php //echo $bodySpacing;?>">
    <div class="row ">
         <div class='<?php //echo $topTwoColumn == true ? "col-md-8" : "col-md-12";?> '>
            <div class='serif'><?php //echo $page->body;?></div>

        </div -->
        
        <?php
/*
         if( $topTwoColumn ) { ?>


                 <div class='col-md-3 col-md-offset-1 sidebar-section'>

                    <?php if($page->sidebar_content != ''){
                      echo "<div class='sidebar_content'>";
                      echo $page->sidebar_content;
                      echo "</div>";
                    } ?>





                    <?php if(count($page->resource_links) > 0 || $page->ministry_website != '') {?>

                   <div class='sidebar_content'> <h3 ><?php echo $page->resources_title == '' ? "RESOURCES" : $page->resources_title;?></h3>
                    <?php if($page->ministry_website != ''){
                            $ext = " target='_blank' ";
                            if( $page->ministry_website_external == 1) $ext = "";
                             echo "<a ".$ext." class='btn btn-default btn-left'  href='{$page->ministry_website}'><i class='fa-fw icon-external-link'></i> Visit Ministry Website</a>";
                          }
                    ?>




                     <?php if(count($page->resource_links) > 0 ) {


                        print "<ul class='related-links'";

                        if( $page->ministry_website != '') print " style='margin-top:30px;' ";

                        print ">";
                        foreach ($page->resource_links as $link) {
                          $ext = '';
                          $videoClass = '';
                          if( $link->external_link == 1) $ext = " target='_blank' ";
                          if( $link->video_popup == 1) $videoClass = "  video-popup ";
                          print "<li><a class=' {$videoClass} ' {$ext} href='{$link->link}'>".$link->title."</a></li>";
                        }
                        print "</ul>";
                    } ?>
                  </div>
                    <?php } ?>

                    <?php if(count($page->related_links) > 0 ) {

                        print " <div class='sidebar_content'><h3 >";
                        print $page->related_links_title == '' ? "RELATED" : $page->related_links_title;
                        print "</h3>";

                        print "<ul class='related-links'>";
                        foreach ($page->related_links as $link) {
                           $ext = '';
                          if( $link->external_link == 1) $ext = " target='_blank' ";
                          print "<li><a {$ext} href='{$link->link}'>".$link->title."</a></li>";
                        }
                        print "</ul>";
                        print "</div>";
                    } ?>


                 <?php
                      // if ministry page is there, look for related events automatically

                        if($ministry_related_events ) {
                           print "<div class='sidebar_content'>";
                           print "<h3>UPCOMING EVENTS</h3>";
                           print "<ul class='related-links'>";
                            foreach ($ministry_events as $e) {
                              if($e->numChildren == 0){
                                    $url = $e->url;
                                    $title = $e->title;
                                    $location = $e->location;
                                    if( $e->template == 'event_repeater')
                                    {
                                      $url = $e->parent->url;
                                      $title = $e->parent->title;
                                      $location = $e->parent->location;
                                    }

                                    print "<li>";
                                    $date = date("F j, Y", strtotime($e->event_date));
                                    print "<a href='".$url."'>".$title."</a><br/>";
                                    print "<small class='text-muted serif-tisa'>{$date}</small><br/>";
                                    if( $location ) echo "<small class='text-muted serif-tisa'>{$location->title}</small>";
                                    print "</li>";
                                }

                            }
                            print "</ul>";
                            print "</div>";

                      }
                      ?>


                      <?php if(count($page->related_events) > 0 ) {
                        echo "<div class='sidebar_content'>";
                       print "<h3>UPCOMING EVENTS</h3>";
                       print "<ul class='related-links'>";
                        foreach ($page->related_events as $event) {

                          print "<li><a href='{$event->url}'>".$event->title."</a></li>";
                        }
                        print "</ul>";
                        print "</div>";
                      }
                      ?>

                </div>

        <?php } 
*/
        ?>


<div class="col-md-12 col-lg-5 page-section live-sidebar" id="section-sidebar">


       <?php if( count($page->tabbed_content) > 0 ){
                        print "<h1 style='margin-bottom:30px;'>{$section->title}</h1>";
                        $t = new \ProcessWire\TemplateFile(\ProcessWire\wire('files')->compile($config->paths->templates .'markup/live/tabbed_content.php',array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true)));
                        $t->set('content', $page->tabbed_content);
                        $out = $t->render();
                        echo $out;
                    }

            ?>


</div>

<?php
    foreach ($sections as $section) { ?>

    <div class='page-section mg-t-lg mg-b-lg'>

        <?php
          if( count($section->header_image) > 0 )
          {
            $img_url = $section->header_image->url;
          }
          if( $section->header_img_cdn != '' )
          {
            $img_url = $section->header_img_cdn;
          }

          $sectionTitle = $sanitizer->pageName("section-".$section->title);
        ?>

        <?php if( $img_url  != '' ){?>
           <img src='<?php echo $img_url;?>'  id='<?php echo $sectionTitle;?>'  class='header-image'>
         <?php } ?>

        <div class="container  mg-t-lg">
            <div class="row ">

                <div class='<?php echo $section->no_sidebar == 1 ? " col-md-12 " : " col-md-8 ";?> '>

                    <?php if( count($section->tabbed_content) > 0 ){
                        print "<h1 style='margin-bottom:30px;'>{$section->title}</h1>";
                        $t = new \ProcessWire\TemplateFile(\ProcessWire\wire('files')->compile($config->paths->templates .'markup/groups/tabbed_content.php',array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true)));
                        $t->set('content', $section->tabbed_content);
                        $out = $t->render();
                        echo $out;


                   } else { ?>
                          <h1 class='mg-b-md mg-t-none'> <?php echo $section->title;?></h1>
                          <div class='serif'><?php echo $section->body;?></div>
                    <?php } ?>
                </div>
                 <?php if($section->no_sidebar != 1){ ?>
                 <!--div class='col-md-3 col-md-offset-1 sidebar-section' -->
                 <div class="col-md-12 col-lg-5 page-section live-sidebar section-sidebar">


                    <?php if($section->sidebar_content != ''){
                      echo "<div class='sidebar_content'>";
                      echo $section->sidebar_content;
                      echo "</div>";
                    } ?>




                    <?php if(count($section->resource_links) > 0 || $section->ministry_website != '') {?>
                    <div class='sidebar_content'><h3 ><?php echo $section->resources_title == '' ? "RESOURCES" : $section->resources_title;?></h3>
                    <?php if($section->ministry_website != ''){
                              $ext = " target='_blank' ";
                              $external_icon = '<i class="fa-fw icon-external-link"></i> ';
                              if( $section->ministry_website_external == 1) {
                                $ext = "";
                                $external_icon = '<i class="fa-fw icon-right-4"></i> ';
                              }
                             echo "<a ".$ext." class='btn btn-default btn-left' href='{$section->ministry_website}'>{$external_icon}Visit Ministry Website</a>";
                        }
                    ?>

                     <?php if(count($section->resource_links) > 0 ) {


                        print "<ul class='related-links'";
                        if( $section->ministry_website != '') print " style='margin-top:30px;' ";
                        print ">";
                        foreach ($section->resource_links as $link) {
                          $ext = '';
                          $videoClass = '';
                          if( $link->external_link == 1) $ext = " target='_blank' ";
                          if( $link->video_popup == 1) $videoClass = "  video-popup ";
                          print "<li><a class=' {$videoClass} ' {$ext} href='{$link->link}'>".$link->title."</a></li>";
                        }
                        print "</ul>";
                    } ?>
                  </div>
                    <?php } ?>

                    <?php if(count($section->related_links) > 0 ) {

                        print "<div class='sidebar_content'><h3>";

                        print $section->related_links_title == '' ? "RELATED" : $section->related_links_title;
                        print "</h3>";
                        print "<ul class='related-links'>";
                        foreach ($section->related_links as $link) {
                          $ext = '';
                          if( $link->external_link == 1) $ext = " target='_blank' ";
                          print "<li><a {$ext} href='{$link->link}'>".$link->title."</a></li>";
                        }
                        print "</ul>";
                        print "</div>";
                    } ?>


                    <?php
                      // if ministry page is there, look for related events automatically

                        if(count($section->ministry) > 0 ) {

                            $ministry = $section->ministry->first();
                            $ministry_events = $pages->find("template=event|event_repeater, numChildren=0, ministry|parent.ministry=$ministry,  event_date>=today, sort=event_date, limit=2");
                            $xx = 0;
                            if(count($ministry_events) > 0)
                            {
                                echo "<div class='sidebar_content'>";
                               print "<h3>UPCOMING EVENTS</h3>";
                               print "<ul class='related-links'>";
                               foreach ($ministry_events as $e) {
                                //if($e->numChildren == 0){

                                        $url = $e->url;
                                        $title = $e->title;
                                        $location = $e->location;
                                        if( $e->template == 'event_repeater')
                                        {
                                          $url = $e->parent->url;
                                          $title = $e->parent->title;
                                          $location = $e->parent->location;
                                        }

                                        print "<li>";
                                        $date = date("F j, Y", strtotime($e->event_date));
                                        print "<a href='".$url."'>".$title."</a><br/>";
                                        print "<small class='text-muted serif-tisa'>{$date}</small><br/>";
                                        if( $location ) echo "<small class='text-muted serif-tisa'>{$location->title}</small>";
                                        print "</li>";

                                        $xx++;
                                  //  }

                                }
                                print "</ul>";
                                print "</div>";
                            }

                      }
                      ?>

                     <?php if(count($section->related_events) > 0 ) {

                       print "<div class='sidebar_content'><h3><i class='icon-calendar-3'></i> UPCOMING EVENTS</h3>";
                       print "<ul class='related-links' style='margin-bottom:30px;'>";
                        foreach ($section->related_events as $event) {

                          print "<li><a href='{$event->url}'>".$event->title."</a></li>";
                        }
                        print "</ul></div>";
                      }
                      ?>


                </div>
                <?php } ?>
            </div>
        </div>
    </div>

<?php } ?>
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
          <a href="/life-groups/" target="_blank" class="btn btn-left btn-default"><i class="icon-right-4"></i> Find a LIFE Group</a>
        </div>
          <div class="col-sm-4 text-center mg-b-md">
          <div class="icon-location-pin-4 fa-3x teal mg-b-md"></div>
          <p style="padding:0px 16px;">Ready to join us in person? Thursday Church is one church with multiple locations. We'd love to have you join
 us for service.</p>
          <a href="/locations/" target="_blank" class="btn btn-left btn-default"><i class="icon-right-4"></i> Find A Location</a>
        </div>
      </div>



          <div class="row">
        <div class="col-md-12 text-center text-muted mg-t-sm">
          <span class="mg-b-xs"><strong><a class="mg-l-xs  inline-popup-link" href="#tech-support-popup">Having trouble viewing this?</a></strong></span>
         <div class="visible-xs"><br></div><span class="mg-b-xs mg-l-md"><strong><a class=" inline-popup-link" href="#prayer-request-popup">Need prayer?</a></strong></span>
        </div>
      </div>

</div>
<?php include(\ProcessWire\wire('files')->compile(\ProcessWire\wire("config")->paths->root . "site/templates/includes/foot.inc",array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true)));?>