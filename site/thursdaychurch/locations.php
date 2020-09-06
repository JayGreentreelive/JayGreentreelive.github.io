<?php include("./includes/head.inc");?>

<div id='bar-green'></div>

<div class="section section-locations">
	<div class="container pd-t-lg pd-b-lg">
		<div class="row">
			<div class="col-md-12 pd-b-md text-center">
				<h1>Locations &amp; Times</h1>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-sm-4 col-md-4 ">
				<div class="pd-xs"><a href="#"><img class="img-responsive img-full-width" src="/site/assets/files/1/map1.jpg" style="width:343; height:156;" /></a>
					<h3>Vincennes</h3>
					<p class="campus-times"><?php echo $tcv_times;?></p>
					<ul class="fa-ul">
						<li><a href="http://thursday.church/tcvdirections" target="_blank">218 Main St<br />
						Vincennes, IN 47591</a></li>
						<li>812.882.2737</li>
					</ul>
					<div class='mg-t-sm2'><a href='#' class='btn btn-default btn-left '><i class='icon-right-4 icon-fw'></i> Campus Info</a></div></div>
				</div>

				<div class="col-xs-12 col-sm-4 col-md-4">
					<div class="pd-xs"><a href="#"><img class="img-responsive img-full-width" src="/site/assets/files/1/map2.jpg" style="width:343; height:156;" /></a>

						<h3>Bicknell</h3>
						<p class="campus-times"><?php echo $tcb_times;?></p>
						<ul class="fa-ul">
							<li><a href="" target="_blank">114 South Main St<br />Bicknell, IN, 47512</a></li>
							<li>812.502.2124</li>
						</ul>
						<div class="mg-t-sm2"><a class="btn btn-default btn-left" href="http://thursday.church/tcbdirections">Get Directions</a></div>
					</div>
				</div>

				<div class="col-xs-12 col-sm-4 col-md-4">
					<div class="pd-xs"><a href="#"><img class="img-responsive img-full-width" src="/site/assets/files/1/map3.jpg" style="width:343; height:156;" /></a>
						<h3>French (Creole)</h3>
						<p class="campus-times"><?php echo $tcf_times;?></p>
						<ul class="fa-ul">
							<li>218 Main St<br />Vincennes, IN 47591</li>
							<li>812.882.2737</li>
						</ul>
						<div class="mg-t-sm2"><a class="btn btn-default btn-left" href="http://thursday.church/tcfdirections">Get Directions</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php include("./includes/foot.inc");?>