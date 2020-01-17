<?php
include("./includes/head.inc");

 if(!$data = $cache->get("home_recent_message", 5000)) {

     $currentDate = date("Y-m-d");
     $recent_message = $pages->get("has_parent='/sermons/', template=media, sort=-media_date, youtube_id!=''");
     $pID = $recent_message->parent->id;
     $recent_series = $pages->get("id=".$pID."");
     if( count($recent_series->homepage_background)> 0 || $recent_series->homepage_background_cdn != '')
     {
       if( $recent_series->homepage_background_cdn != '')
       {
          $series_bg = $recent_series->homepage_background_cdn;
       }
       else
       {
          $series_bg = $recent_series->homepage_background->url;
       }

       if(  $recent_series->homepage_transparent_logo_cdn != '' )
       {
         $series_logo = $recent_series->homepage_transparent_logo_cdn;
       }
       else
       {
          $series_logo = $recent_series->homepage_transparent_logo->first()->url;
       }


     }
     $series_part_number = '';
     if( $recent_series->series_standalone_year == 0 )
     {
       $messages = $pages->find("template=media, sort=-media_date, parent=$recent_series");
       $countDown = count($messages);

       foreach($messages as $m) {

         if( $m->id == $recent_message->id )
         {
             $series_part_number = $countDown;
         }
         $countDown--;
       }
     }

     $speakers = '';
     if( count($recent_message->media_speaker) )
     {

       $speakerTotal = count($recent_message->media_speaker);
       $s = 0;
       foreach($recent_message->media_speaker as $speaker) {
            $speakers .= $speaker->title;
            $s++;
            if( $speakerTotal != $s ) $speakers .= ", ";
       }

     }

     $seriesTitle = $recent_series->title;
     if($recent_series->series_standalone_year == 1 ) $seriesTitle = '';


     $data .= "<div class='section section-series' style='background: #490b4d url(\"".$series_bg."\") no-repeat center center; -webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover; background-size: cover;height:auto; color: #ffffff;'>

<div class='container pd-t-lg pd-b-lg'>
<div class=\"row center-row-series\">
<div class='col-xs-12 col-sm-6 col-md-6 center-col-series' id='current-series-graphic'>
<div class='series-img-holder'>
 <img src='".$series_logo."' alt='".$recent_message->title."' class='img-responsive'/>
</div>
</div>
<div class='col-xs-12 col-sm-6 col-md-6 center-col-series' style='padding:0px 40px;'>
 <!-- recent message goes here -->
 <h4>RECENT MESSAGE</h4>
 <h2>".$recent_message->title."</h2>
 <h3>".$seriesTitle."";
  if( $series_part_number != '') $data .= " (Part ".$series_part_number.")";
 $data .= "</h3>
 <p>".$recent_message->media_date."";
 if($speakers != '')  $data .= " &middot; ".$speakers;
 $data .= "</p>
 <a class='btn btn-primary btn-clear btn-left mg-t-sm' href='".$recent_message->url."'>Watch Now</a>
          </div>
       </div>
     </div>

   </div>";
     $cache->save($data);
 }
 echo $data;
 include("./includes/foot.inc");?>