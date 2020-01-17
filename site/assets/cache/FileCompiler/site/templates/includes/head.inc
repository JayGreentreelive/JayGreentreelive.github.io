<?php

$homepage = \ProcessWire\wire('pages')->get("/");

$root = realpath($_SERVER["DOCUMENT_ROOT"]);
 require_once(\ProcessWire\wire('files')->compile($root ."/site/templates/includes/functions.inc",array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true)));


$live = false;
if(\ProcessWire\wire('config')->live) $live = true;
// if you're on the live page, don't show the live top alert
if(\ProcessWire\wire('page')->id == 1369) $live = false;

$liveHome = false;

if( $live == true &&  \ProcessWire\wire('page')->template == 'home')
{
  $liveHome = true;
}


// page is short by DEFAULT
$shortHeader = ' top-short-header ';
$topStyle = '';
$curveDown = '';

// or you can force it if need be
if(\ProcessWire\wire('page')->short_header == 1)
{
   $shortHeader = ' top-short-header ';
}

// if header image exists, then its not a short header (simple, right?)
if(  count(\ProcessWire\wire('page')->header_image) > 0  || count(\ProcessWire\wire('page')->series_wide_graphic) > 0 || count(\ProcessWire\wire('page')->series_banner_graphic) > 0  )
{
  $shortHeader = '';
}

/*
if(\ProcessWire\wire('page')->template == 'home')
{
   $shortHeader = '';
   $top_images = \ProcessWire\wire('page')->home_topimage_rotation->getRandom();

   $top_imgURL = $top_images->header_image->url;


   $topStyle = '  background: #490b4d url("'.$top_imgURL.'") no-repeat center center; -webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover; ';
   if($live)  $topStyle .= " background-position:center 20px;";
}
*/

if(count(\ProcessWire\wire('page')->header_image) > 0 || \ProcessWire\wire('page')->template == 'series' || \ProcessWire\wire('page')->template == 'media_archive' && \ProcessWire\wire('page')->short_header == 0 ){


      if( count(\ProcessWire\wire('page')->series_wide_graphic) > 0)
      {
        $top_imgURL = \ProcessWire\wire('page')->series_wide_graphic->url;
      }

      if( count(\ProcessWire\wire('page')->series_banner_graphic) > 0)
      {
        $top_imgURL = \ProcessWire\wire('page')->series_banner_graphic->url;
      }

      if( count(\ProcessWire\wire('page')->header_image) > 0 )
      {
          $top_imgURL = \ProcessWire\wire('page')->header_image->url;
      }

        if( \ProcessWire\wire('page')->header_img_cdn != '' )
      {
          $top_imgURL = \ProcessWire\wire('page')->header_img_cdn;
      }


      $topStyle = ' background: #490b4d url("'.$top_imgURL.'") no-repeat center center; -webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover; ';
       if($live &&  \ProcessWire\wire('page')->template == 'home')  $topStyle .= " background-position:center 20px;";
}



$repositionHeaderImage = 0;
if( $shortHeader == '' && \ProcessWire\wire('page')->header_img_mobile_offset != '' ){
   $repositionHeaderImage = \ProcessWire\wire('page')->header_img_mobile_offset;
 }

if(\ProcessWire\wire('page')->template == 'home'){
    if( isset($top_images) && $top_images->header_img_mobile_offset != '') {
          $repositionHeaderImage = $top_images->header_img_mobile_offset;
    }
}

?>

<!DOCTYPE html>
<!--[if lt IE 9]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if !IE] -->
<html lang='en'>
  <!-- <![endif] -->
  <head>

    <title><?php echo \ProcessWire\wire('page')->get("headline|title"); ?></title>

          <?php $bodyText = \ProcessWire\wire("page")->summary;
            if($bodyText == ''){
               $bodyText = strip_tags(truncate(\ProcessWire\wire("page")->body, 200));
               $bodyText = str_replace(array("\r", "\n"), " ", $bodyText);
               $bodyText = str_replace('"',"&quot;", $bodyText);
               $bodyText = str_replace("","", $bodyText);
            }
      ?>

    <meta content='text/html; charset=utf-8' http-equiv='Content-Type'>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="description" content="<?php  echo $bodyText; ?>">
    <meta name="author" content="thursday.church">

    <?php $td = \ProcessWire\wire('config')->urls->templates;
          $rp = \ProcessWire\wire('config')->ssl_rootName;
    ?>

    <!--link href='//fonts.googleapis.com/css?family=Noticia+Text:400,400italic,700,700italic|Open+Sans:100,200,300,400,600,700,800,400italic&subset=latin,latin-ext' rel='stylesheet' type='text/css'-->
    <link rel="stylesheet" href="/site/templates/css/bootstrap.css">
    <link rel="stylesheet" href="/site/templates/css/magnific-popup.css">
    <link rel="stylesheet" href="/site/templates/css/audioplayer.css">
    <link rel="stylesheet" href="/site/templates/css/site-helpers.css">
    <link rel="stylesheet" href="/site/templates/css/icon-font.css">
    <link rel="stylesheet" href="/site/templates/css/events.css">
    <link rel="stylesheet" href="/site/templates/css/site.css">
    <link rel="stylesheet" href="/site/templates/css/font-awesome/css/font-awesome.css">
           <style>
          .top-home{<?php echo $topStyle;?>}
          <?php if( $repositionHeaderImage != 0 ){ $vpos = "0"; if($live &&  \ProcessWire\wire('page')->template == 'home') $vpos = "40";?>
          @media screen and (max-width: 480px) {
            .top-home{
             background-position: <?php echo $repositionHeaderImage;?>px <?php echo $vpos;?>px !important;
             -webkit-background-size: cover;
             -moz-background-size: cover;
             -o-background-size: cover;
             background-size: cover;
           }
         }
          <?php } ?>
                .template-home .header-banner h2 { font-size: 3.2em}

      @media (max-width: 480px) {
          .template-campus .top-home,.template-home .top-home{ height:433px !important;}
          .template-campus .header-banner, .template-home .header-banner { height:433px !important;}
          .template-campus .center-row, .template-home .center-row {margin-top:70px; height: 393px !important;}
          .header-banner h2{ font-size: 1.65em}
          .template-home .header-banner h2 { font-size: 1.82em}
      }
          </style>
    <!-- Javascript ================================================== -->
    <script src="/site/templates/js/plugins/modernizr/modernizr.min.js"></script>

      <!--[if lt IE 9]>
          <script type='text/javascript' src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
          <script type='text/javascript' src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
       <!--[if gte IE 9]>
        <style type="text/css">.gradient,.gradient:after {filter: none; } </style>
      <![endif]-->


  </head>
  <body>

<div id='wrapper' class='page-id-<?php echo \ProcessWire\wire('page')->id;?> template-<?php echo \ProcessWire\wire('page')->template;?>  <?php if($live  &&  \ProcessWire\wire('page')->template == 'home') echo " streaming-live ";?>'>

<div class='header <?php echo $curveDown;?>  ' id='chapel-header-bar'>
    <div id='search-area'>
       <div class='container'>
                <div class='row'>
                    <div class='col-md-8 col-md-offset-2'>
                          <div class="searchTop">
                            <?php
                              $searchPage = \ProcessWire\wire('pages')->get('template=search');
                              $searchQuery = htmlentities(\ProcessWire\wire('input')->whitelist('q'), ENT_QUOTES, "UTF-8");
                              if($searchQuery == '') $searchQuery = '';
                            ?>

                             <form id="search-form-top" class='clearfix' action='<?php echo $searchPage->url; ?>' method='get'>
                                    <input class="clear-click" id='search-site-input' placeholder='Search the site' type='text' name='q' value='<?php echo $searchQuery; ?>'>
                                    <a id="search_query_btn" href="javascript:void(0);" class="icon-right-4"></a>
                            </form>

                        </div>
                  </div>
                </div>
           </div>
  </div>

  <div id='floating-bar-nav'>
       <div id='top-quick-menu'>
         <div class='container'>
                <div class='row'>
                    <div class='col-lg-12'>
                          <div class="logo pull-left">
                            <a href="/" class="crosspoint_logo" title='Thursday Church'>
                             <img id="logo-mark"  src='/site/templates/css/img/logo-black.svg'>
                            </a>
                          </div>
                          <div class="top-nav-right pull-right">
                            <a id='menu-btn' title="Menu">
                              <span id='menu-btn-icon' class='icon-fw icon-menu-3'></span><span class='hidden-xs'> Menu</span></a>
                            <a id='search-btn' title="Search">
                              <span id='menu-search-btn-icon' class='icon-fw icon-zoom-2'></span><span class='hidden-xs'> Search</span></a>
                            <a id='give-btn' title="Give" href="/give/">
                              <span id='menu-give-btn-icon' class='icon-fw icon-credit-card-1'></span>
                              <span class='hidden-xs'> Give</span></a>
                          </div>
                    </div>
               </div>
         </div>
      </div>
      <div id='nav-main-menu' class='nav-content-holder <?php if($live &&  \ProcessWire\wire('page')->template == 'home') echo "has-top-live";?>' >
            <div class='nav-top-border'></div>
            <div class='container'>
                <div class='row'>
                    <div class='col-md-12'>
                            <ul id="nav-pullout">
                                <li id="nav_about" class='dropdown'><a  id='about-nav' >Who We Are</a>
                                  <ul >
                                    <li ><a href='/about/'>About Us</a></li>
                                    <li ><a href='/about/staff/'>Meet The Team</a></li>
                                    <li ><a href='/about/beliefs/'>What We Believe</a></li>
                                    <li ><a href='/about/contact/'>Contact Us</a></li>

                                  </ul>
                                </li>
                                <li id="nav_connect" class='dropdown'><a href='javascript:void(0);'>Ministries</a>
                                  <ul>
                                    <li><a href="/ministries/kids/">Kids Ministry</a></li>
                                    <li><a href="/ministries/students">Youth Ministry</a></li>
                                    <li><a href="/ministries/life-groups/">LIFE Groups</a></li>
                                    <li><a href="/ministries/global-missions/">Global Missions</a></li>
                                    <li><a href="/ministries/celebrate-recovery/">Celebrate Recovery</a></li>
                                    <li><a href="/ministries/mobile-food-pantry">Mobile Food Pantry</a></li>
                                  </ul>
                                </li>
                                <li id="nav_outreach" class='dropdown'><a href='#' >Give</a>
                                   <ul>
                                    <li ><a href='/give/why-we-give/' >Why We Give</a></li>
                                    <li ><a href='/give/'>Give Now</a></li>

                                  </ul>
                                </li>
                                <li id="nav_resources" class='dropdown'><a href='#' >Media</a>
                                  <ul>
                                     <li ><a href='/sermons/'>Sermons</a></li>
                                     <li ><a href='/live/'>Live</a></li>
                                     <li ><a href='/blog/'>Blog</a></li>
                                     <li ><a href='/stories/'>Stories</a></li>
                                  </ul>
                                </li>
                                <li id="nav_events" class="dropdown"><a href="#">Calendar</a>
                                <ul>
                                <li ><a href='/events/calendar' >Upcoming Events</a></li>
                              </ul>
                            </li>
                            <li id="nav_businesses" class="dropdown"><a href="javascript:void();"> Businesses</a>
                                      <ul>
                                    <li><a href="/businesses/fort-sackville-project/">Fort Sackville Project</a></li>
                                    <li><a href="/businesses/gracies-restaurant/">Gracie's Restaurant</a></li>
                                    <li><a href="/businesses/the-faith-store/">The Faith Store</a></li>
                                  </ul>
                                </li>
                              </ul>

                        </div>
                    </div>
                </div>
            </div>
          </div>

    <div id='top-area' class='top-home <?php echo $shortHeader;?> <?php if($liveHome) echo "has-top-live";?>' >

    <div class='top-cover-gradient-fromtop gradient'></div>
    <div class='top-cover-gradient-frombot gradient '></div>

      <?php if( \ProcessWire\wire('page')->header_title && \ProcessWire\wire('page')->header_title != ''){?>
      <div class='container  header-banner <?php if( \ProcessWire\wire('page')->header_description == '' &&  \ProcessWire\wire('page')->template != 'campus') echo ' no-subtitle '; ?>  <?php if( \ProcessWire\wire('page')->template == 'campus') echo ' header-campus ';?>  <?php if($liveHome) echo " has-top-live";?>'>

            <div class='row center-row'>
                <div class='col-lg-12 center-col  '>

                      <h1><?php echo \ProcessWire\wire('page')->header_title;?></h1>

                       <?php if( \ProcessWire\wire('page')->header_description != '' || \ProcessWire\wire('page')->template == 'campus') {?>

                       <div class='row'>
                         <div class='col-lg-10 col-lg-offset-1'>
                          <?php if( \ProcessWire\wire('page')->header_description != '') {?>
                            <h2><?php echo \ProcessWire\wire('page')->header_description;?></h2>
                          <?php } ?>
                          <?php if( \ProcessWire\wire('page')->template == 'campus') {?>
                            <h3>SERVICE TIMES</h3>
                            <p class='campus-times'><?php echo \ProcessWire\wire('page')->service_times;?></p>
                            <p class='campus-address'><?php echo \ProcessWire\wire('page')->address;?></p>
                           <?php } ?>
                         </div>
                        </div>

                        <?php } ?>

                </div>
            </div>
      </div>
      <?php } ?>

      </div> <!-- end top-area -->
</div> <!-- end header -->

<div id='main' role='main'>