<?php require_once("inc/init.php"); ?>
<div class="row">
	<div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
		<h1 class="page-title txt-color-blueDark"><i class="fa fa-desktop fa-fw "></i> 
			UI Elements 
			<span>>
			 Icons > Font Awesome
			</span>
		</h1>
	</div>
	<div class="col-xs-12 col-sm-5 col-md-5 col-lg-8">
		<ul id="sparks" class="">
			<li class="sparks-info">
				<h5> My Income <span class="txt-color-blue">$47,171</span></h5>
				<div class="sparkline txt-color-blue hidden-mobile hidden-md hidden-sm">
					1300, 1877, 2500, 2577, 2000, 2100, 3000, 2700, 3631, 2471, 2700, 3631, 2471
				</div>
			</li>
			<li class="sparks-info">
				<h5> Site Traffic <span class="txt-color-purple"><i class="fa fa-arrow-circle-up" data-rel="bootstrap-tooltip" title="Increased"></i>&nbsp;45%</span></h5>
				<div class="sparkline txt-color-purple hidden-mobile hidden-md hidden-sm">
					110,150,300,130,400,240,220,310,220,300, 270, 210
				</div>
			</li>
			<li class="sparks-info">
				<h5> Site Orders <span class="txt-color-greenDark"><i class="fa fa-shopping-cart"></i>&nbsp;2447</span></h5>
				<div class="sparkline txt-color-greenDark hidden-mobile hidden-md hidden-sm">
					110,150,300,130,400,240,220,310,220,300, 270, 210
				</div>
			</li>
		</ul>
	</div>
</div>

<!-- widget grid -->
<section id="widget-grid" class="">

	<div class="well well-sm">
		<div class="input-group">
			<input class="form-control input-lg" type="text" id="fa-icon-search" placeholder="Search for an icon...">
			<span class="input-group-addon"><i class="fa fa-fw fa-lg fa-search"></i></span>
		</div>
	</div>

	<!-- row -->
	<div class="row">

		<!-- NEW WIDGET START -->
		<article class="col-sm-12">

			<!-- Widget ID (each widget will need unique ID)-->
			<div class="jarviswidget jarviswidget-color-blue" id="wid-id-0" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-togglebutton="false" data-widget-deletebutton="false" data-widget-sortable="false">
				<!-- widget options:
				usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">

				data-widget-colorbutton="false"
				data-widget-editbutton="false"
				data-widget-togglebutton="false"
				data-widget-deletebutton="false"
				data-widget-fullscreenbutton="false"
				data-widget-custombutton="false"
				data-widget-collapsed="true"
				data-widget-sortable="false"

				-->
				<header>
					<span class="widget-icon"> <i class="fa fa-comments"></i> </span>
					<h2>Font Awesome</h2>

				</header>

				<!-- widget div-->
				<div>

					<!-- widget edit box -->
					<div class="jarviswidget-editbox">
						<!-- This area used as dropdown edit box -->

					</div>
					<!-- end widget edit box -->

					<!-- widget content -->
					<div class="widget-body" id="all-icons-demo">

					
							<div class="alert alert-info">
								<i class="fa fa-exclamation"></i> Please note: As of the of Font Awesome version 4.0. All icons now require a base class of <code>
									fa</code> as well as individual icon classes. For example <code> fa fa-adjust</code>
									<br>
									<div class="margin-top-5">View the full icon list by going to <a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">//fortawesome.github.io/Font-Awesome/icons/</a></div>
							</div>

							<div class="alert alert-warning"> <strong>NOTE</strong>: FontAwesome version 4.2 is blurry on some resolutions, therefore we did not upgrade (the included FontAwesome version is 4.1). Hopefully this issue will be resolved in later versions of FontAwesome and will be safer to upgrade</div>
							
							<!--<h2>40 NEW icons with 4.2</h2>
							
							<div class="row">

								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-angellist"></i> fa-angellist
								</div>
	
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-area-chart"></i> fa-area-chart
								</div>
	
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-at"></i> fa-at
								</div>
	
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-bell-slash"></i> fa-bell-slash
								</div>
	
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-bell-slash-o"></i> fa-bell-slash-o
								</div>
	
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-bicycle"></i> fa-bicycle
								</div>
	
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-binoculars"></i> fa-binoculars
								</div>
	
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-birthday-cake"></i> fa-birthday-cake
								</div>
	
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-bus"></i> fa-bus
								</div>
	
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-calculator"></i> fa-calculator
								</div>
	
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-cc"></i> fa-cc
								</div>
	
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-cc-amex"></i> fa-cc-amex
								</div>
	
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-cc-discover"></i> fa-cc-discover
								</div>
	
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-cc-mastercard"></i> fa-cc-mastercard
								</div>
	
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-cc-paypal"></i> fa-cc-paypal
								</div>
	
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-cc-stripe"></i> fa-cc-stripe
								</div>
	
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-cc-visa"></i> fa-cc-visa
								</div>
	
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-copyright"></i> fa-copyright
								</div>
	
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-eyedropper"></i> fa-eyedropper
								</div>
	
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-futbol-o"></i> fa-futbol-o
								</div>
	
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-google-wallet"></i> fa-google-wallet
								</div>
	
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-ils"></i> fa-ils
								</div>
	
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-ioxhost"></i> fa-ioxhost
								</div>
	
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-lastfm"></i> fa-lastfm
								</div>
	
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-lastfm-square"></i> fa-lastfm-square
								</div>
	
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-line-chart"></i> fa-line-chart
								</div>
	
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-meanpath"></i> fa-meanpath
								</div>
	
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-newspaper-o"></i> fa-newspaper-o
								</div>
	
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-paint-brush"></i> fa-paint-brush
								</div>
	
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-paypal"></i> fa-paypal
								</div>
	
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-pie-chart"></i> fa-pie-chart
								</div>
	
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-plug"></i> fa-plug
								</div>
	
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-shekel"></i> fa-shekel <span class="text-muted">(alias)</span>
								</div>
	
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-sheqel"></i> fa-sheqel <span class="text-muted">(alias)</span>
								</div>
	
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-slideshare"></i> fa-slideshare
								</div>
	
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-soccer-ball-o"></i> fa-soccer-ball-o <span class="text-muted">(alias)</span>
								</div>
	
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-toggle-off"></i> fa-toggle-off
								</div>
	
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-toggle-on"></i> fa-toggle-on
								</div>
	
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-trash"></i> fa-trash
								</div>
	
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-tty"></i> fa-tty
								</div>
	
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-twitch"></i> fa-twitch
								</div>
	
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-wifi"></i> fa-wifi
								</div>
	
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-yelp"></i> fa-yelp
								</div>
	
							</div>-->
														
							<h2>70 new icons was introduced in 4.1</h2>

							<div class="row">

								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-automobile"></i> fa-automobile <span class="text-muted">(alias)</span>
								</div>

								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-bank"></i> fa-bank <span class="text-muted">(alias)</span>
								</div>

								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-behance"></i> fa-behance
								</div>

								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-behance-square"></i> fa-behance-square
								</div>

								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-bomb"></i> fa-bomb
								</div>

								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-building"></i> fa-building
								</div>

								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-cab"></i> fa-cab <span class="text-muted">(alias)</span>
								</div>

								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-car"></i> fa-car
								</div>

								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-child"></i> fa-child
								</div>

								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-circle-o-notch"></i> fa-circle-o-notch
								</div>

								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-circle-thin"></i> fa-circle-thin
								</div>

								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-codepen"></i> fa-codepen
								</div>

								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-cube"></i> fa-cube
								</div>

								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-cubes"></i> fa-cubes
								</div>

								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-database"></i> fa-database
								</div>

								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-delicious"></i> fa-delicious
								</div>

								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-deviantart"></i> fa-deviantart
								</div>

								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-digg"></i> fa-digg
								</div>

								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-drupal"></i> fa-drupal
								</div>

								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-empire"></i> fa-empire
								</div>

								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-envelope-square"></i> fa-envelope-square
								</div>

								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-fax"></i> fa-fax
								</div>

								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-file-archive-o"></i> fa-file-archive-o
								</div>

								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-file-audio-o"></i> fa-file-audio-o
								</div>

								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-file-code-o"></i> fa-file-code-o
								</div>

								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-file-excel-o"></i> fa-file-excel-o
								</div>

								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-file-image-o"></i> fa-file-image-o
								</div>

								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-file-movie-o"></i> fa-file-movie-o <span class="text-muted">(alias)</span>
								</div>

								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-file-pdf-o"></i> fa-file-pdf-o
								</div>

								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-file-photo-o"></i> fa-file-photo-o <span class="text-muted">(alias)</span>
								</div>

								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-file-picture-o"></i> fa-file-picture-o <span class="text-muted">(alias)</span>
								</div>

								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-file-powerpoint-o"></i> fa-file-powerpoint-o
								</div>

								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-file-sound-o"></i> fa-file-sound-o <span class="text-muted">(alias)</span>
								</div>

								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-file-video-o"></i> fa-file-video-o
								</div>

								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-file-word-o"></i> fa-file-word-o
								</div>

								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-file-zip-o"></i> fa-file-zip-o <span class="text-muted">(alias)</span>
								</div>

								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-ge"></i> fa-ge <span class="text-muted">(alias)</span>
								</div>

								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-git"></i> fa-git
								</div>

								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-git-square"></i> fa-git-square
								</div>

								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-google"></i> fa-google
								</div>

								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-graduation-cap"></i> fa-graduation-cap
								</div>

								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-hacker-news"></i> fa-hacker-news
								</div>

								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-header"></i> fa-header
								</div>

								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-history"></i> fa-history
								</div>

								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-institution"></i> fa-institution <span class="text-muted">(alias)</span>
								</div>

								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-joomla"></i> fa-joomla
								</div>

								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-jsfiddle"></i> fa-jsfiddle
								</div>

								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-language"></i> fa-language
								</div>

								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-life-bouy"></i> fa-life-bouy <span class="text-muted">(alias)</span>
								</div>

								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-life-ring"></i> fa-life-ring
								</div>

								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-life-saver"></i> fa-life-saver <span class="text-muted">(alias)</span>
								</div>

								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-mortar-board"></i> fa-mortar-board <span class="text-muted">(alias)</span>
								</div>

								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-openid"></i> fa-openid
								</div>

								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-paper-plane"></i> fa-paper-plane
								</div>

								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-paper-plane-o"></i> fa-paper-plane-o
								</div>

								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-paragraph"></i> fa-paragraph
								</div>

								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-paw"></i> fa-paw
								</div>

								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-pied-piper"></i> fa-pied-piper
								</div>

								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-pied-piper-alt"></i> fa-pied-piper-alt
								</div>

								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-pied-piper-square"></i> fa-pied-piper-square <span class="text-muted">(alias)</span>
								</div>

								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-qq"></i> fa-qq
								</div>

								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-ra"></i> fa-ra <span class="text-muted">(alias)</span>
								</div>

								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-rebel"></i> fa-rebel
								</div>

								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-recycle"></i> fa-recycle
								</div>

								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-reddit"></i> fa-reddit
								</div>

								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-reddit-square"></i> fa-reddit-square
								</div>

								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-send"></i> fa-send <span class="text-muted">(alias)</span>
								</div>

								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-send-o"></i> fa-send-o <span class="text-muted">(alias)</span>
								</div>

								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-share-alt"></i> fa-share-alt
								</div>

								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-share-alt-square"></i> fa-share-alt-square
								</div>

								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-slack"></i> fa-slack
								</div>

								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-sliders"></i> fa-sliders
								</div>

								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-soundcloud"></i> fa-soundcloud
								</div>

								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-space-shuttle"></i> fa-space-shuttle
								</div>

								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-spoon"></i> fa-spoon
								</div>

								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-spotify"></i> fa-spotify
								</div>

								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-steam"></i> fa-steam
								</div>

								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-steam-square"></i> fa-steam-square
								</div>

								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-stumbleupon"></i> fa-stumbleupon
								</div>

								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-stumbleupon-circle"></i> fa-stumbleupon-circle
								</div>

								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-support"></i> fa-support <span class="text-muted">(alias)</span>
								</div>

								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-taxi"></i> fa-taxi
								</div>

								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-tencent-weibo"></i> fa-tencent-weibo
								</div>

								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-tree"></i> fa-tree
								</div>

								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-university"></i> fa-university
								</div>

								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-vine"></i> fa-vine
								</div>

								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-wechat"></i> fa-wechat <span class="text-muted">(alias)</span>
								</div>

								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-weixin"></i> fa-weixin
								</div>

								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-wordpress"></i> fa-wordpress
								</div>

								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-yahoo"></i> fa-yahoo
								</div>

							</div>		
								
							<!-- new sets -->
								
							<h2>Web Application Icons</h2>

							<div class="row">
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-adjust"></i> fa-adjust
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-anchor"></i> fa-anchor
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-archive"></i> fa-archive
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-asterisk"></i> fa-asterisk
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-ban"></i> fa-ban
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-bar-chart-o"></i> fa-bar-chart-o
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-barcode"></i> fa-barcode
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-beer"></i> fa-beer
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-bell"></i> fa-bell
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-bell-o"></i> fa-bell-o
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-bolt"></i> fa-bolt
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-book"></i> fa-book
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-bookmark"></i> fa-bookmark
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-bookmark-o"></i> fa-bookmark-o
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-briefcase"></i> fa-briefcase
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-bug"></i> fa-bug
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-building"></i> fa-building
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-bullhorn"></i> fa-bullhorn
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-bullseye"></i> fa-bullseye
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-calendar"></i> fa-calendar
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-calendar-o"></i> fa-calendar-o
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-camera"></i> fa-camera
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-camera-retro"></i> fa-camera-retro
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-caret-square-o-down"></i> fa-caret-square-o-down
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-caret-square-o-left"></i> fa-caret-square-o-left
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-caret-square-o-right"></i> fa-caret-square-o-right
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-caret-square-o-up"></i> fa-caret-square-o-up
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-certificate"></i> fa-certificate
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-check"></i> fa-check
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-check-circle"></i> fa-check-circle
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-check-circle-o"></i> fa-check-circle-o
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-check-square"></i> fa-check-square
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-check-square-o"></i> fa-check-square-o
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-circle"></i> fa-circle
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-circle-o"></i> fa-circle-o
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-clock-o"></i> fa-clock-o
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-cloud"></i> fa-cloud
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-cloud-download"></i> fa-cloud-download
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-cloud-upload"></i> fa-cloud-upload
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-code"></i> fa-code
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-code-fork"></i> fa-code-fork
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-coffee"></i> fa-coffee
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-cog"></i> fa-cog
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-cogs"></i> fa-cogs
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-plus-square-o"></i> fa-plus-square-o
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-comment"></i> fa-comment
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-comment-o"></i> fa-comment-o
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-comments"></i> fa-comments
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-comments-o"></i> fa-comments-o
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-compass"></i> fa-compass
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-credit-card"></i> fa-credit-card
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-crop"></i> fa-crop
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-crosshairs"></i> fa-crosshairs
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-cutlery"></i> fa-cutlery
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-dashboard"></i> fa-dashboard <span class="text-muted">(alias)</span>
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-desktop"></i> fa-desktop
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-dot-circle-o"></i> fa-dot-circle-o
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-download"></i> fa-download
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-edit"></i> fa-edit <span class="text-muted">(alias)</span>
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-ellipsis-horizontal"></i> fa-ellipsis-horizontal
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-ellipsis-vertical"></i> fa-ellipsis-vertical
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-envelope"></i> fa-envelope
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-envelope-o"></i> fa-envelope-o
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-eraser"></i> fa-eraser
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-exchange"></i> fa-exchange
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-exclamation"></i> fa-exclamation
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-exclamation-circle"></i> fa-exclamation-circle
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-exclamation-triangle"></i> fa-exclamation-triangle
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-minus-square-o"></i> fa-minus-square-o
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-external-link"></i> fa-external-link
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-external-link-square"></i> fa-external-link-square
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-eye"></i> fa-eye
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-eye-slash"></i> fa-eye-slash
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-female"></i> fa-female
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-fighter-jet"></i> fa-fighter-jet
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-film"></i> fa-film
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-filter"></i> fa-filter
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-fire"></i> fa-fire
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-fire-extinguisher"></i> fa-fire-extinguisher
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-flag"></i> fa-flag
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-flag-checkered"></i> fa-flag-checkered
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-flag-o"></i> fa-flag-o
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-flash"></i> fa-flash <span class="text-muted">(alias)</span>
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-flask"></i> fa-flask
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-folder"></i> fa-folder
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-folder-o"></i> fa-folder-o
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-folder-open"></i> fa-folder-open
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-folder-open-o"></i> fa-folder-open-o
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-frown-o"></i> fa-frown-o
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-gamepad"></i> fa-gamepad
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-gavel"></i> fa-gavel
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-gear"></i> fa-gear <span class="text-muted">(alias)</span>
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-gears"></i> fa-gears <span class="text-muted">(alias)</span>
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-gift"></i> fa-gift
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-glass"></i> fa-glass
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-globe"></i> fa-globe
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-group"></i> fa-group
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-hdd-o"></i> fa-hdd-o
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-headphones"></i> fa-headphones
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-heart"></i> fa-heart
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-heart-o"></i> fa-heart-o
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-home"></i> fa-home
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-inbox"></i> fa-inbox
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-info"></i> fa-info
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-info-circle"></i> fa-info-circle
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-key"></i> fa-key
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-keyboard-o"></i> fa-keyboard-o
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-laptop"></i> fa-laptop
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-leaf"></i> fa-leaf
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-legal"></i> fa-legal <span class="text-muted">(alias)</span>
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-lemon-o"></i> fa-lemon-o
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-level-down"></i> fa-level-down
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-level-up"></i> fa-level-up
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-lightbulb-o"></i> fa-lightbulb-o
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-location-arrow"></i> fa-location-arrow
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-lock"></i> fa-lock
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-magic"></i> fa-magic
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-magnet"></i> fa-magnet
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-mail-forward"></i> fa-mail-forward <span class="text-muted">(alias)</span>
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-mail-reply"></i> fa-mail-reply <span class="text-muted">(alias)</span>
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-mail-reply-all"></i> fa-mail-reply-all
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-male"></i> fa-male
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-map-marker"></i> fa-map-marker
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-meh-o"></i> fa-meh-o
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-microphone"></i> fa-microphone
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-microphone-slash"></i> fa-microphone-slash
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-minus"></i> fa-minus
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-minus-circle"></i> fa-minus-circle
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-minus-square"></i> fa-minus-square
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-minus-square-o"></i> fa-minus-square-o
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-mobile"></i> fa-mobile
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-mobile-phone"></i> fa-mobile-phone <span class="text-muted">(alias)</span>
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-money"></i> fa-money
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-moon-o"></i> fa-moon-o
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-move"></i> fa-move
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-music"></i> fa-music
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-pencil"></i> fa-pencil
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-pencil-square"></i> fa-pencil-square
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-pencil-square-o"></i> fa-pencil-square-o
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-phone"></i> fa-phone
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-phone-square"></i> fa-phone-square
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-picture-o"></i> fa-picture-o
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-plane"></i> fa-plane
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-plus"></i> fa-plus
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-plus-circle"></i> fa-plus-circle
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-plus-square"></i> fa-plus-square
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-power-off"></i> fa-power-off
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-print"></i> fa-print
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-puzzle-piece"></i> fa-puzzle-piece
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-qrcode"></i> fa-qrcode
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-question"></i> fa-question
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-question-circle"></i> fa-question-circle
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-quote-left"></i> fa-quote-left
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-quote-right"></i> fa-quote-right
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-random"></i> fa-random
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-refresh"></i> fa-refresh
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-reorder"></i> fa-reorder
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-reply"></i> fa-reply
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-reply-all"></i> fa-reply-all
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-resize-horizontal"></i> fa-resize-horizontal
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-resize-vertical"></i> fa-resize-vertical
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-retweet"></i> fa-retweet
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-road"></i> fa-road
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-rocket"></i> fa-rocket
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-rss"></i> fa-rss
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-rss-square"></i> fa-rss-square
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-search"></i> fa-search
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-search-minus"></i> fa-search-minus
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-search-plus"></i> fa-search-plus
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-share"></i> fa-share
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-share-square"></i> fa-share-square
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-share-square-o"></i> fa-share-square-o
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-shield"></i> fa-shield
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-shopping-cart"></i> fa-shopping-cart
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-sign-in"></i> fa-sign-in
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-sign-out"></i> fa-sign-out
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-signal"></i> fa-signal
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-sitemap"></i> fa-sitemap
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-smile-o"></i> fa-smile-o
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-sort"></i> fa-sort
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-sort-alpha-asc"></i> fa-sort-alpha-asc
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-sort-alpha-desc"></i> fa-sort-alpha-desc
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-sort-amount-asc"></i> fa-sort-amount-asc
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-sort-amount-desc"></i> fa-sort-amount-desc
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-sort-asc"></i> fa-sort-asc
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-sort-desc"></i> fa-sort-desc
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-sort-down"></i> fa-sort-down <span class="text-muted">(alias)</span>
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-sort-numeric-asc"></i> fa-sort-numeric-asc
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-sort-numeric-desc"></i> fa-sort-numeric-desc
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-sort-up"></i> fa-sort-up <span class="text-muted">(alias)</span>
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-spinner"></i> fa-spinner
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-square"></i> fa-square
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-square-o"></i> fa-square-o
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-star"></i> fa-star
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-star-half"></i> fa-star-half
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-star-half-empty"></i> fa-star-half-empty <span class="text-muted">(alias)</span>
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-star-half-full"></i> fa-star-half-full <span class="text-muted">(alias)</span>
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-star-half-o"></i> fa-star-half-o
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-star-o"></i> fa-star-o
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-subscript"></i> fa-subscript
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-suitcase"></i> fa-suitcase
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-sun-o"></i> fa-sun-o
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-superscript"></i> fa-superscript
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-tablet"></i> fa-tablet
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-tachometer"></i> fa-tachometer
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-tag"></i> fa-tag
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-tags"></i> fa-tags
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-tasks"></i> fa-tasks
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-terminal"></i> fa-terminal
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-thumb-tack"></i> fa-thumb-tack
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-thumbs-down"></i> fa-thumbs-down
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-thumbs-o-down"></i> fa-thumbs-o-down
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-thumbs-o-up"></i> fa-thumbs-o-up
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-thumbs-up"></i> fa-thumbs-up
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-ticket"></i> fa-ticket
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-times"></i> fa-times
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-times-circle"></i> fa-times-circle
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-times-circle-o"></i> fa-times-circle-o
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-tint"></i> fa-tint
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-toggle-down"></i> fa-toggle-down <span class="text-muted">(alias)</span>
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-toggle-left"></i> fa-toggle-left <span class="text-muted">(alias)</span>
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-toggle-right"></i> fa-toggle-right <span class="text-muted">(alias)</span>
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-toggle-up"></i> fa-toggle-up <span class="text-muted">(alias)</span>
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-trash-o"></i> fa-trash-o
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-trophy"></i> fa-trophy
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-truck"></i> fa-truck
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-umbrella"></i> fa-umbrella
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-unlock"></i> fa-unlock
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-unlock-alt"></i> fa-unlock-alt
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-unsorted"></i> fa-unsorted <span class="text-muted">(alias)</span>
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-upload"></i> fa-upload
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-user"></i> fa-user
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-video-camera"></i> fa-video-camera
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-volume-down"></i> fa-volume-down
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-volume-off"></i> fa-volume-off
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-volume-up"></i> fa-volume-up
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-warning"></i> fa-warning <span class="text-muted">(alias)</span>
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-wheelchair"></i> fa-wheelchair
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-wrench"></i> fa-wrench
								</div>
							</div>
						
							<!-- new sets -->
					
							<h2>Form Control Icons</h2>

							<div class="row">
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-check-square"></i> fa-check-square
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-check-square-o"></i> fa-check-square-o
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-circle"></i> fa-circle
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-circle-o"></i> fa-circle-o
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-dot-circle-o"></i> fa-dot-circle-o
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-minus-square"></i> fa-minus-square
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-minus-square-o"></i> fa-minus-square-o
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-square"></i> fa-square
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-square-o"></i> fa-square-o
								</div>
							</div>
						
							<!-- new sets -->
						
							<h2>Currency Icons</h2>
							
							<div class="row">
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-bitcoin"></i> fa-bitcoin <span class="text-muted">(alias)</span>
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-btc"></i> fa-btc
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-cny"></i> fa-cny <span class="text-muted">(alias)</span>
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-dollar"></i> fa-dollar <span class="text-muted">(alias)</span>
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-eur"></i> fa-eur
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-euro"></i> fa-euro <span class="text-muted">(alias)</span>
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-gbp"></i> fa-gbp
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-inr"></i> fa-inr
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-jpy"></i> fa-jpy
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-krw"></i> fa-krw
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-money"></i> fa-money
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-rmb"></i> fa-rmb <span class="text-muted">(alias)</span>
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-rouble"></i> fa-rouble <span class="text-muted">(alias)</span>
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-rub"></i> fa-rub
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-ruble"></i> fa-ruble <span class="text-muted">(alias)</span>
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-rupee"></i> fa-rupee <span class="text-muted">(alias)</span>
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-try"></i> fa-try
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-turkish-lira"></i> fa-turkish-lira <span class="text-muted">(alias)</span>
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-usd"></i> fa-usd
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-won"></i> fa-won <span class="text-muted">(alias)</span>
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-yen"></i> fa-yen <span class="text-muted">(alias)</span>
								</div>
							</div>
						
							<!-- new sets -->
						
							<h2>Text Editor Icons</h2>

							<div class="row">
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-align-center"></i> fa-align-center
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-align-justify"></i> fa-align-justify
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-align-left"></i> fa-align-left
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-align-right"></i> fa-align-right
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-bold"></i> fa-bold
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-chain"></i> fa-chain <span class="text-muted">(alias)</span>
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-chain-broken"></i> fa-chain-broken
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-clipboard"></i> fa-clipboard
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-columns"></i> fa-columns
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-copy"></i> fa-copy <span class="text-muted">(alias)</span>
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-cut"></i> fa-cut <span class="text-muted">(alias)</span>
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-dedent"></i> fa-dedent <span class="text-muted">(alias)</span>
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-eraser"></i> fa-eraser
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-file"></i> fa-file
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-file-o"></i> fa-file-o
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-file-text"></i> fa-file-text
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-file-text-o"></i> fa-file-text-o
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-files-o"></i> fa-files-o
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-floppy-o"></i> fa-floppy-o
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-font"></i> fa-font
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-indent"></i> fa-indent
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-italic"></i> fa-italic
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-link"></i> fa-link
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-list"></i> fa-list
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-list-alt"></i> fa-list-alt
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-list-ol"></i> fa-list-ol
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-list-ul"></i> fa-list-ul
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-outdent"></i> fa-outdent
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-paperclip"></i> fa-paperclip
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-paste"></i> fa-paste <span class="text-muted">(alias)</span>
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-repeat"></i> fa-repeat
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-rotate-left"></i> fa-rotate-left <span class="text-muted">(alias)</span>
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-rotate-right"></i> fa-rotate-right <span class="text-muted">(alias)</span>
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-save"></i> fa-save <span class="text-muted">(alias)</span>
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-scissors"></i> fa-scissors
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-strikethrough"></i> fa-strikethrough
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-table"></i> fa-table
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-text-height"></i> fa-text-height
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-text-width"></i> fa-text-width
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-th"></i> fa-th
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-th-large"></i> fa-th-large
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-th-list"></i> fa-th-list
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-underline"></i> fa-underline
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-undo"></i> fa-undo
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-unlink"></i> fa-unlink <span class="text-muted">(alias)</span>
								</div>
							</div>
						
							<!-- new sets -->
						
							<h2>Directional Icons</h2>

							<div class="row">
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-angle-double-down"></i> fa-angle-double-down
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-angle-double-left"></i> fa-angle-double-left
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-angle-double-right"></i> fa-angle-double-right
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-angle-double-up"></i> fa-angle-double-up
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-angle-down"></i> fa-angle-down
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-angle-left"></i> fa-angle-left
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-angle-right"></i> fa-angle-right
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-angle-up"></i> fa-angle-up
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-arrow-circle-down"></i> fa-arrow-circle-down
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-arrow-circle-left"></i> fa-arrow-circle-left
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-arrow-circle-o-down"></i> fa-arrow-circle-o-down
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-arrow-circle-o-left"></i> fa-arrow-circle-o-left
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-arrow-circle-o-right"></i> fa-arrow-circle-o-right
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-arrow-circle-o-up"></i> fa-arrow-circle-o-up
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-arrow-circle-right"></i> fa-arrow-circle-right
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-arrow-circle-up"></i> fa-arrow-circle-up
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-arrow-down"></i> fa-arrow-down
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-arrow-left"></i> fa-arrow-left
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-arrow-right"></i> fa-arrow-right
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-arrow-up"></i> fa-arrow-up
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-caret-down"></i> fa-caret-down
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-caret-left"></i> fa-caret-left
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-caret-right"></i> fa-caret-right
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-caret-square-o-down"></i> fa-caret-square-o-down
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-caret-square-o-left"></i> fa-caret-square-o-left
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-caret-square-o-right"></i> fa-caret-square-o-right
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-caret-square-o-up"></i> fa-caret-square-o-up
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-caret-up"></i> fa-caret-up
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-chevron-circle-down"></i> fa-chevron-circle-down
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-chevron-circle-left"></i> fa-chevron-circle-left
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-chevron-circle-right"></i> fa-chevron-circle-right
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-chevron-circle-up"></i> fa-chevron-circle-up
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-chevron-down"></i> fa-chevron-down
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-chevron-left"></i> fa-chevron-left
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-chevron-right"></i> fa-chevron-right
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-chevron-up"></i> fa-chevron-up
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-hand-o-down"></i> fa-hand-o-down
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-hand-o-left"></i> fa-hand-o-left
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-hand-o-right"></i> fa-hand-o-right
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-hand-o-up"></i> fa-hand-o-up
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-long-arrow-down"></i> fa-long-arrow-down
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-long-arrow-left"></i> fa-long-arrow-left
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-long-arrow-right"></i> fa-long-arrow-right
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-long-arrow-up"></i> fa-long-arrow-up
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-toggle-down"></i> fa-toggle-down <span class="text-muted">(alias)</span>
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-toggle-left"></i> fa-toggle-left <span class="text-muted">(alias)</span>
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-toggle-right"></i> fa-toggle-right <span class="text-muted">(alias)</span>
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-toggle-up"></i> fa-toggle-up <span class="text-muted">(alias)</span>
								</div>
							</div>
						
							<!-- new sets -->
						
							<h2>Video Player Icons</h2>

							<div class="row">
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-backward"></i> fa-backward
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-eject"></i> fa-eject
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-fast-backward"></i> fa-fast-backward
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-fast-forward"></i> fa-fast-forward
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-forward"></i> fa-forward
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-arrows-alt"></i> fa-arrows-alt
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-pause"></i> fa-pause
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-play"></i> fa-play
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-play-circle"></i> fa-play-circle
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-play-circle-o"></i> fa-play-circle-o
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-expand"></i> fa-expand
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-compress"></i> fa-compress
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-step-backward"></i> fa-step-backward
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-step-forward"></i> fa-step-forward
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-stop"></i> fa-stop
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-youtube-play"></i> fa-youtube-play
								</div>
							</div>
						
							<!-- new sets -->
						
							<h2>Brand Icons</h2>
							
							<div class="alert alert-success">
								<ul class="margin-bottom-none padding-left-lg">
									<li>
										All brand icons are trademarks of their respective owners.
									</li>
									<li>
										The use of these trademarks does not indicate endorsement of the trademark holder by Font Awesome, nor vice versa.
									</li>
								</ul>
							</div>

							<div class="row">
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-adn"></i> fa-adn
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-android"></i> fa-android
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-apple"></i> fa-apple
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-bitbucket"></i> fa-bitbucket
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-bitbucket-square"></i> fa-bitbucket-square
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-bitcoin"></i> fa-bitcoin <span class="text-muted">(alias)</span>
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-btc"></i> fa-btc
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-css3"></i> fa-css3
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-dribbble"></i> fa-dribbble
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-dropbox"></i> fa-dropbox
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-facebook"></i> fa-facebook
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-facebook-square"></i> fa-facebook-square
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-flickr"></i> fa-flickr
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-foursquare"></i> fa-foursquare
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-github"></i> fa-github
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-github-alt"></i> fa-github-alt
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-github-square"></i> fa-github-square
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-gittip"></i> fa-gittip
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-google-plus"></i> fa-google-plus
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-google-plus-square"></i> fa-google-plus-square
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-html5"></i> fa-html5
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-instagram"></i> fa-instagram
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-linkedin"></i> fa-linkedin
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-linkedin-square"></i> fa-linkedin-square
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-linux"></i> fa-linux
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-maxcdn"></i> fa-maxcdn
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-pagelines"></i> fa-pagelines
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-pinterest"></i> fa-pinterest
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-pinterest-square"></i> fa-pinterest-square
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-renren"></i> fa-renren
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-skype"></i> fa-skype
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-stack-exchange"></i> fa-stack-exchange
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-stack-overflow"></i> fa-stack-overflow
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-trello"></i> fa-trello
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-tumblr"></i> fa-tumblr
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-tumblr-square"></i> fa-tumblr-square
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-twitter"></i> fa-twitter
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-twitter-square"></i> fa-twitter-square
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-vimeo-square"></i> fa-vimeo-square
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-vk"></i> fa-vk
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-weibo"></i> fa-weibo
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-windows"></i> fa-windows
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-xing"></i> fa-xing
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-xing-square"></i> fa-xing-square
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-youtube"></i> fa-youtube
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-youtube-play"></i> fa-youtube-play
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-youtube-square"></i> fa-youtube-square
								</div>
							</div>
						
							<!-- new sets -->
						
							<h2>Medical Icons</h2>

							<div class="row">
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-ambulance"></i> fa-ambulance
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-h-square"></i> fa-h-square
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-hospital-o"></i> fa-hospital-o
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-medkit"></i> fa-medkit
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-plus-square"></i> fa-plus-square
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-stethoscope"></i> fa-stethoscope
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-user-md"></i> fa-user-md
								</div>
								<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
									<i class="fa fa-wheelchair"></i> fa-wheelchair
								</div>
							</div>
						
							<!-- END sets -->
					</div>
					<!-- end widget content -->

				</div>
				<!-- end widget div -->

			</div>
			<!-- end widget -->

		</article>
		<!-- WIDGET END -->

	</div>

	<!-- end row -->

	<!-- row -->

	<div class="row">

	</div>

	<!-- end row -->

</section>
<!-- end widget grid -->

<script type="text/javascript">

	/* DO NOT REMOVE : GLOBAL FUNCTIONS!
	 *
	 * pageSetUp(); WILL CALL THE FOLLOWING FUNCTIONS
	 *
	 * // activate tooltips
	 * $("[rel=tooltip]").tooltip();
	 *
	 * // activate popovers
	 * $("[rel=popover]").popover();
	 *
	 * // activate popovers with hover states
	 * $("[rel=popover-hover]").popover({ trigger: "hover" });
	 *
	 * // activate inline charts
	 * runAllCharts();
	 *
	 * // setup widgets
	 * setup_widgets_desktop();
	 *
	 * // run form elements
	 * runAllForms();
	 *
	 ********************************
	 *
	 * pageSetUp() is needed whenever you load a page.
	 * It initializes and checks for all basic elements of the page
	 * and makes rendering easier.
	 *
	 */

	pageSetUp();
	
	/*
	 * ALL PAGE RELATED SCRIPTS CAN GO BELOW HERE
	 * eg alert("my home function");
	 * 
	 * var pagefunction = function() {
	 *   ...
	 * }
	 * loadScript("js/plugin/_PLUGIN_NAME_.js", pagefunction);
	 * 
	 */
	
	// PAGE RELATED SCRIPTS
	
	// pagefunction
	
	var pagefunction = function() {
		
		function hide_divs(search) {
		    $(".demo-icon-font").hide(); // hide all divs
		    $("#all-icons-demo h2").hide();
		    $("#all-icons-demo .alert").hide();
			$('.demo-icon-font > i[class*="'+search+'"]').parent().show(); // show the ones that match
		}
		
		function show_all() {
		    $(".demo-icon-font").show()
		    $("#all-icons-demo h2").show();
		    $("#all-icons-demo .alert").show();
		}
		
		
		$("#fa-icon-search").keyup(function() {
			var search = $.trim(this.value);
			if (search === "") {
				show_all();
			}
			else {
				hide_divs(search);
			}
		});
			
	};
	
	// end pagefunction
	
	// run pagefunction on load
	pagefunction();
		


</script>