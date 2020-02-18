<?php
include("./includes/head.inc");
?>
<?php
 if($live &&  wire('page')->template == 'live'){
 include("./includes/live.inc");
} else {
 include("./includes/tclive.inc");
}
?>
<?php
include("./includes/foot.inc");
?>