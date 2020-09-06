<?php

include("./includes/head.inc");
 if($live &&  wire('page')->template == 'live'){
 include("./includes/live.inc");
} else {
 include("./includes/offline.inc");
}
include("./includes/foot.inc");
?>