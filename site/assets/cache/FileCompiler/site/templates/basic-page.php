<?php

/**
 * Page template
 *
 */
 include(\ProcessWire\wire('files')->compile(\ProcessWire\wire("config")->paths->root . "site/templates/includes/head.inc",array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true)));
?>


<div class='container mg-t-lg mg-b-lg serif'>
<div class="row">
<div class="col-lg-12">

<?php if($page->short_header == 1) echo "<h1 class='mg-b-md'>".$page->title."</h1>";?>


<?php echo $page->body; ?>



</div>
</div>
</div>


<?php
 include(\ProcessWire\wire('files')->compile(\ProcessWire\wire("config")->paths->root . "site/templates/includes/foot.inc",array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true)));
