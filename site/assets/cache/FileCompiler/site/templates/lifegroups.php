<?php

/**
 * lifegroup posts template
 *
 */

 include_once(\ProcessWire\wire('files')->compile(\ProcessWire\wire("config")->paths->root . "site/templates/includes/blog.inc",array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true)));


if($input->urlSegment1) {
    // check for rss feed
    if($input->urlSegment1 != 'rss') throw new \ProcessWire\Wire404Exception();
    $homepage = $pages->get('/');


    $modules->get('LibGoogleAnalytics');
    $ssga = new ssga( $config->googleAnalyticsID ,'thursdaychurch.org');
    $ssga->set_event('RSS Feed', 'RSS Feed');
    $ssga->send();
    $ssga->reset();


    renderRSS($page->children("limit=20"), $homepage->get('headline|title'), $homepage->get('summary|meta_description'));

} else {
    // display paginated lifegroups list
    $headline = $page->get('headline|title');
 include(\ProcessWire\wire('files')->compile(\ProcessWire\wire("config")->paths->root . "site/templates/includes/head.inc",array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true)));
    ?>


<div class='section ' style='background-color:#efefef;'>

            <div class="container serif">
                <div class="row">
                    <div class="col-md-12 mg-t-lg mg-b-md">

                              <h1><?php echo $page->title;?></h1>



                    </div>
                </div>
            </div>




        <div class="container pd-t-md pd-b-lg ">
            <div class="row multi-columns-row ">

                <?php
                    $posts =  $pages->find("parent=/ministries/life-groups/,  sort=-date, template=lifegroup, limit=12");


                    $pagination =  $posts->renderPager(array(
                    'nextItemLabel' => "&raquo;",
                    'numPageLinks' => 5,
                    'previousItemLabel' => "&laquo;",
                    'listMarkup' => "<div class='text-center '><ul class='pagination'>{out}</ul></div>",
                    'itemMarkup' => "<li class='{class}'>{out}</li>",
                    'linkMarkup' => "<a href='{url}'>{out}</a>",
                    'currentItemClass' => 'active',
                    'separatorItemLabel' => "<a href='#'>&hellip;</a>"
                ));


                    $t = new \ProcessWire\TemplateFile(\ProcessWire\wire('files')->compile(\ProcessWire\wire('config')->paths->templates . 'markup/blog/posts-loop-grid.php',array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true)));
                    $t->set('posts', $posts);
                    $out = $t->render();
                    echo $out;

                  ?>
        <div class='clearfix clear'></div>
    </div>

    <div class='container  pd-b-lg'>
        <div class='row'>
            <div class='col-md-12'>
            <?php

             echo $pagination;
            ?>
        </div>
        </div>

    </div>



</div> <!-- end section -->


<div class='container'>
 <div class='row mg-t-lg mg-b-lg'>

     <?php
                                  $searchPage = \ProcessWire\wire('pages')->get('template=blog-search');
                                  $searchQuery = htmlentities(\ProcessWire\wire('input')->whitelist('q'), ENT_QUOTES, "UTF-8");

                                ?>
                                <div class='col-md-8 col-md-offset-2 mg-b-sm2'>
                               <div id='search-content-form' class='search-series'>
                                 <form  id='search-content' action='<?php echo $searchPage->url; ?>' method='get'>
                                        <input  type='text' id='search-blog-input' placeholder='Search the lifegroups' name='q' value='<?php echo $searchQuery; ?>' >
                                        <a id="search_content_query_btn" href="javascript:void(0);" class="icon-right-4"></a>
                                </form>
                              </div>
                          </div>


                      <?php
                        $cache = $modules->get("MarkupCache");
                        if(!$data = $cache->get("blog_topics", 29990)) {
                            $categories = $pages->find("template=categories, sort=title");

                            $data .= " <div class='col-md-8 col-md-offset-2 mg-b-sm2 '><h4 class='mg-b-sm2'>Filter by Topics</h4>";

                            foreach($categories as $category)
                            {
                                $lifegroups_count = $pages->count("parent=/ministries/life-groups/,  category=$category, template=lifegroup");
                                if( $blog_count  > 0 ){
                                  $data .= "<a class='badge' href='".$category->url."'>".$category->title."</a>";
                                }

                            }
                            $data .= "</div></div>";
                            $cache->save($data);
                        }
                        echo $data;
                    ?>


    </div>
</div>

<?php include(\ProcessWire\wire('files')->compile(\ProcessWire\wire("config")->paths->root . "site/templates/includes/foot.inc",array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true))); }?>