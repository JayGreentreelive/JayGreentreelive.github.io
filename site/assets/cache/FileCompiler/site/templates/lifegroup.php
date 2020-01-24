<?php

/**
 * Blog Post template
 *
 */

 include_once(\ProcessWire\wire('files')->compile(\ProcessWire\wire("config")->paths->root . "site/templates/includes/functions.inc",array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true)));



$thumb = $pages->get('/lifegroups')->images->first()->size(640,360)->url;

// add additional meta tags
 if( count($page->thumbnail) > 0)
 {
      $thumb = $page->thumbnail->url;
 }
 include(\ProcessWire\wire('files')->compile(\ProcessWire\wire("config")->paths->root . "site/templates/includes/head.inc",array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true)));
 include_once(\ProcessWire\wire('files')->compile(\ProcessWire\wire("config")->paths->root . "site/templates/includes/blog.inc",array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true)));
function renderNextPrevGroups($page) {
    $date = $page->getUnformatted('date');
    $nextPost = $page->parent->child("date>$date, sort=date");
    $prevPost = $page->parent->child("date<$date, sort=-date");
    $out = "<div class='next-prev-Groups'>";
    if($prevPost->id > 0) $out .= "<p class='prev-post'><span>&lt;</span> <a href='{$prevPost->url}'>{$prevPost->title}</a></p>";
    if($nextPost->id > 0) $out .= "<p class='next-post'><a href='{$nextPost->url}'>{$nextPost->title}</a> <span>&gt;</span></p>";
    $out .= "</div>";
    return $out;
}
// render our blog post and comments
$content = renderGroups($page);
// get date info for creating link to archives page in subnav
// $date = $page->getUnformatted('date');
// $year = date('Y', $date);
// $month = date('n', $date);
?>
<div class="container mg-t-lg mg-b-lg">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 page-content">
            <?php echo $content;?>
            <a class='btn btn-default btn-left' style='margin-top:20px;' href='<?php echo $page->parent->url;?>'><i class='icon-left-4'></i> View All LIFE Groups</a>
            </div>
    </div>
<?php include(\ProcessWire\wire('files')->compile(\ProcessWire\wire("config")->paths->root . "site/templates/includes/foot.inc",array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true)));?>