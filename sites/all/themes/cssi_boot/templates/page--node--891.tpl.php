<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Timeline</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="Timeline" />
		<meta name="copyright" content="Designed and built by Webalon in London, England." />
		<meta name="viewport" content="initial-scale=1, maximum-scale=1, width=device-width">
		<meta http-equiv="X-UA-Compatible" content="IE=7, IE=9">
		<meta http-equiv="imagetoolbar" content="no" />
		<meta name="MSSmartTagsPreventParsing" content="true" />
		<link rel="stylesheet" href="/<?php echo $directory; ?>/timeline-assets/assets/css/latest-stl.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="/<?php echo $directory; ?>/timeline-assets/assets/css/user-controls-stl.css" type="text/css" media="screen" />
		<!--[if IE 6]><link type="text/css" rel="stylesheet" href="/<?php echo $directory; ?>/timeline-assets/assets/css/screen.ie6.css" /><![endif]-->
		<!--[if IE 7]><link type="text/css" rel="stylesheet" href="/<?php echo $directory; ?>/timeline-assets/assets/css/screen.ie7.css" /><![endif]-->
		<!--[if IE 8]><link type="text/css" rel="stylesheet" href="/<?php echo $directory; ?>/timeline-assets/assets/css/screen.ie8.css" /><![endif]-->
		<!--[if IE 9]><link type="text/css" rel="stylesheet" href="/<?php echo $directory; ?>/timeline-assets/assets/css/screen.ie9.css" /><![endif]-->
		<script type="text/javascript" src="/<?php echo $directory; ?>/timeline-assets/assets/js/support.js"></script>
		<!--[if IE]><script type="text/javascript" src="/<?php echo $directory; ?>/timeline-assets/assets/js/excanvas.compiled.js"></script><![endif]-->
		<script type="text/javascript" src="/<?php echo $directory; ?>/timeline-assets/assets/js/latest-stl.js"></script>


	</head>

	<body class="tl-embedded-timeline">


		<div id="console"></div>
		<div id="tl-container">
			<div class="tl-data tl-data-userId">19</div>
			<div class="tl-data tl-data-secret-userId"></div>

			<div id="tl-image-preloader">
				<img src="/<?php echo $directory; ?>/timeline-assets/assets/ui/black-opacity-95.png" alt="" />
			</div>
			<div id="tl-header">

				<div class="main-logo"><a href="/"> </a></div>
				<h1 class="tl-main-title">Timeline</h1>
				<ul class="main-menu">
					<li class="last"><a id="menu-item-about-this-timeline" href="#">About this timeline</a></li>
				</ul>

			</div>

			<div class="tl-timeline-info">
				<h2></h2>
				<p class="tl-ah-about-text"></p>
			</div>

			<div id="tl-stage-holder">
				<!--<img src="/<?php echo $directory; ?>/timeline-assets/assets/ui/empty-image2.gif" alt="" id="tl-stage-image" />-->
				<div id="tl-stage-main-photo-credit"></div>
				<div id="tl-stage-scale-blackener"></div>
				<div class="tl-stage"></div>
				<div class="tl-stage-fixed-position-content"></div>
				<canvas id="tl-3d-view-canvas" width="100" height="100"></canvas>

				<div id="tl-stage-date-displayer"></div>
				<div class="tl-stage-border-top"></div>
				<div class="tl-stage-border-bottom"></div>

				<div id="tl-uc-controls">

					<div id="tl-uc-panel">
						<div class="tl-ucp-top-right">
							<div class="tl-ucp-top-left">
								<div class="tl-ucp-content">

									<div class="fp-carousel">
										<div class="fp-stage">
											<div id="tl-uc-search-block" class="fp-block fp-block-0">
												<h3 id="uc-text-search">Search</h3>
												<div class="ft-p1-input-holder">
													<input id="ft-fch-sp-input" type="text" value="Enter search term" />
													<a id="ft-fch-sp-button" href="#">Go</a>
												</div>
												<div id="ft-p1-filter-text">
													<h5 id="uc-text-displaying">Displaying:</h5> <span id="ft-fch-sp-everyone-message">All stories</span><span id="ft-fch-sp-filter-message"><span id="ft-fch-sp-num-stories">X1 stories</span> <span id="uc-text-matching">matching</span> '<strong id="ft-fch-sp-filter"></strong>' (<a id="ft-fch-sp-clear" href="#">clear</a>)</span>
												</div>
												<a href="#" class="close-panel">Close</a>
											</div>
											<div id="tl-uc-view-filter-block" class="fp-block fp-block-1 ajk-content-scroller">
												<h3 id="uc-text-category-filter">Category Filter</h3>
												<div class="ajk-cs-carousel">
													<div class="ajk-cs-carousel-stage">
														<ul class="tl-colour-checkbox-list"></ul>
													</div>
													<div class="ajk-cs-carousel-scroll-holder">
														<a href="#" class="ajk-cs-up-arrow"></a>
														<a href="#" class="ajk-cs-down-arrow"></a>
														<div class="ajk-cs-scroll-bar">
															<span></span>
														</div>
													</div>
												</div>
												<a href="#" class="close-panel">Close</a>
											</div>
											<div id="tl-uc-view-type-block" class="fp-block fp-block-2">
												<h3 id="uc-text-view-type">View Type</h3>
												<ul class="tl-image-select-list">
													<li class="tl-isl-standard" view="0">
														<div class="image-holder"><span></span></div>
														<p>Standard</p>
													</li>
													<li class="tl-isl-category" view="1">
														<div class="image-holder"><span></span></div>
														<p>Category Bands</p>
													</li>
													<li class="tl-isl-coloured" view="2">
														<div class="image-holder"><span></span></div>
														<p>Coloured Stories</p>
													</li>
													<li class="tl-isl-duration" view="3">
														<div class="image-holder"><span></span></div>
														<p>Duration</p>
													</li>
												</ul>
												<a href="#" class="close-panel">Close</a>
											</div>
											<div id="tl-uc-spacing-block" class="fp-block fp-block-3">
												<h3 id="uc-text-story-spacing">Story Spacing</h3>

												<select>
													<option value="0">Standard</option>
													<option value="1">Equal Spacing 1</option>
													<option value="2">Equal Spacing 2</option>
													<option value="3">Top to Bottom - 3 rows</option>
													<option value="4">Top to Bottom - 4 rows</option>
													<option value="5">Top to Bottom - 5 rows</option>
													<option value="6">Top to Bottom - 6 rows</option>
													<option value="7">Top to Bottom - 7 rows</option>
													<option value="8">Top to Bottom - 8 rows</option>
													<option value="9">Top to Bottom - 9 rows</option>
													<option value="10">Top to Bottom - 10 rows</option>
												</select>
												<a href="#" class="close-panel">Close</a>
											</div>
											<div id="tl-uc-zoom-block" class="fp-block fp-block-4">
												<h3 id="uc-text-zoom">Zoom</h3>
												<select>
													<option></option>
												</select>
												<div class="zoom-buttons">
													<a href="#" class="zoom-in">+</a>
													<a href="#" class="zoom-out">-</a>
												</div>
												<a href="#" class="close-panel">Close</a>
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>
						<div class="tl-ucp-bottom-right">
							<div class="tl-ucp-bottom-left"></div>
						</div>
					</div>

					<div class="menu-holder">
						<ul>
							<li class="selected" fppos="0"><a href="#">Search</a></li>
							<li fppos="1"><a href="#">Categories</a></li>
							<li fppos="2"><a href="#">View Type</a></li>
							<li fppos="3"><a href="#">Spacing</a></li>
							<li fppos="4"><a href="#">Zoom</a></li>
						</ul>
					</div>
					<a href="#" class="launch">Launch</a>
				</div>

				<a href="#" id="tl-timeline-3d-launch">View<br> in 3D</a>

				<div class="tl-main-intro-block">
					<div class="tl-mib-inner">
						<div class="tl-mib-image-holder">
							<img src="/<?php echo $directory; ?>/timeline-assets/assets/ui/empty-image.gif" alt="" />
							<div class="tl-mib-image-mask"><span></span></div>
						</div>
						<h3 class="tl-mib-headline"></h3>
						<div class="tl-mib-content">
							<p></p>
						</div>
					</div>
				</div>

			</div>
			<div id="tl-slider-holder">
				<div id="tl-slider-scale-holder">
					<div id="tl-slider-scale">
						<canvas class="tl-scale-canvas" width="5000" height="52"></canvas>
						<div id="tl-slider-scale-times-holder">
						</div>
						<div id="tl-slider-markers-holder">
						</div>
					</div>
				</div>
				<div id="tl-slider-dragger">
					<div class="tlsd-inner">
						<div class="tlsd-inner-inner">
							<div class="tlsd-corner tlsd-c-tl"></div>
							<div class="tlsd-corner tlsd-c-tr"></div>
							<div class="tlsd-corner tlsd-c-bl"></div>
							<div class="tlsd-corner tlsd-c-br"></div>
						</div>
					</div>
				</div>
			</div>
			<div id="tl-footer"></div>

			<div id="tl-content-holder" class="tl-main-content-block-holder tl-font">
				<div class="tl-mc-fade"></div>
				<div class="tl-mc-coloured-border"></div>
				<div class="tl-main-content-block">
					<div class="tl-mc-top-right">
						<div class="tl-mc-top-left">
							<div class="tl-mc-carousel">
								<div class="tl-mc-carousel-stage">

									<div class="tl-mc-content">

										<div class="tl-mc-content-images-and-text">

											<div class="tl-ch-top-content">
												<ul class="tl-ch-media-list">
													<li rel="images" class="tl-ch-selected"><a href="#"><em>Images</em> (<span>7</span>)</a></li>
													<li rel="videos"><a href="#"><em>Videos</em> (<span>2</span>)</a></li>
													<li rel="audio"><a href="#"><em>Audio</em> (<span>1</span>)</a></li>
												</ul>
												<span class="tl-ch-close-content">Close</span>
												<h5 class="tl-ch-panel-date-display">10th August 2035</h5>
											</div>

											<div class="tl-ch-content-block tl-ch-gallery-block">
												<div class="tl-gallery ak-gallery">
													<div class="tl-g-main-content ak-gallery-stage-holder">
														<div class="ak-gallery-image-storage"></div>
														<div class="tl-g-main-stage ak-gallery-stage">
														</div>
														<div class="tl-g-content-mask">
															<div class="tl-g-content-mask-inner"></div>
															<div class="tl-g-gallery-controls">
																<a class="tl-g-gallery-control-left" href="#"></a>
																<a class="tl-g-gallery-control-right" href="#"></a>
															</div>
														</div>
													</div>
													<div class="tl-g-thumb-holder">
														<div class="tl-g-thumb-stage">
														</div>
														<a class="tl-g-thumb-control-left" href="#"></a>
														<a class="tl-g-thumb-control-right" href="#"></a>
													</div>
												</div> <!-- /tl-gallery -->
											</div>

											<div class="tl-ch-content-block tl-ch-content-block-text">
												<div class="tl-ch-content-block-inner ajk-content-scroller">
													<div class="tl-ch-content-intro-block ajk-cs-carousel">
														<div class="ajk-cs-carousel-stage">
															<h3 class="tl-font-head"></h3>
															<p class="tl-ch-standfirst tl-font-body"></p>
															<p class="tl-ch-author"></p>
															<div class="tl-ch-extra-info-text tl-font-body"></div>
															<a href="#" class="tl-ch-full-story-link rt-button-medium rt-button-medium-long" target="_top">Read full story</a>
														</div>
														<div class="ajk-cs-carousel-scroll-holder">
															<a href="#" class="ajk-cs-up-arrow"></a>
															<a href="#" class="ajk-cs-down-arrow"></a>
															<div class="ajk-cs-scroll-bar">
																<span></span>
															</div>
														</div>
													</div>
												</div>
											</div>

										</div>

										<div class="tl-ch-video-content">
											<div class="tl-ch-vc-inner">

											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tl-mc-bottom-right">
						<div class="tl-mc-bottom-left">
							<div class="tl-mc-footer-content">
								<div class="tl-ch-bc-inner tl-ch-next-prev-story">
									<p class="tl-ch-selected-story-num">x1 of x2 stories</p>
									<a class="tl-ch-prev-story" href="#"></a>
									<a class="tl-ch-next-story" href="#"></a>
								</div>
								<a class="tl-ch-close-video rt-button-3 rt-button-3-long" href="#">Close video</a>
								<a href="#" id="tl-ch-start-timeline-button" class="tl-ch-start-timeline rt-button-3">Continue</a>
							</div>
						</div>
					</div>

				</div>
			</div>


			<div id="tl-cp-image-viewer">
				<div class="tl-cpiv-main-item"></div>
				<div class="tl-cpiv-caption-holder">
					<p></p>
				</div>
				<div class="tl-cpiv-content-mask">
					<div class="tl-cpiv-content-mask-inner"></div>
					<a href="#"></a>
				</div>
			</div>
		</div>

<?php print render($page['content']); ?>

	</body>
</html>

