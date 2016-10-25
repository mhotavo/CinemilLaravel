	<html>
	<head>
		@extends('layouts.head')
	</head>
	<body>
		@extends('layouts.nav')
		<div class="container-fluid text-center">
			<div class="row content">
				<div class="col-lg-2 well" style="text-align: left;" id="categorias">
					<h4>Categorias</h4>
				</div>
				<div class="col-lg-8"  style="">				
					<div class="row">
						<div class="estrenosBanner" >
							Estrenos
						</div>
						<div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 809px; height: 220px; overflow: hidden; visibility: hidden;">
							<!-- Loading Screen -->
							<div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
								<div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
								<div style="position:absolute;display:block;background:url('images/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
							</div>
							<div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 809px; height: 220px; overflow: hidden;">
								<div style="display: none;">
									<img data-u="image" src="images/005.jpg" />  
								</div>
								<div style="display: none;">
									<img data-u="image" src="images/005.jpg" />
								</div>
								<div style="display: none;">
									<img data-u="image" src="images/005.jpg" />
								</div>
								<div style="display: none;">
									<img data-u="image" src="images/005.jpg" />
								</div>
								<div style="display: none;">
									<img data-u="image" src="images/005.jpg" />
								</div>
								<div style="display: none;">
									<img data-u="image" src="images/005.jpg" />
								</div>
								<div style="display: none;">
									<img data-u="image" src="images/005.jpg" />
								</div>
								
							</div>
							<!-- Bullet Navigator -->
							<div data-u="navigator" class="jssorb03" style="bottom:10px;right:10px;">
								<!-- bullet navigator item prototype -->
								<div data-u="prototype" style="width:21px;height:21px;">
									<div data-u="numbertemplate"></div>
								</div>
							</div>
							<!-- Arrow Navigator -->
							<span data-u="arrowleft" class="jssora03l" style="top:0px;left:8px;width:55px;height:55px;" data-autocenter="2"></span>
							<span data-u="arrowright" class="jssora03r" style="top:0px;right:8px;width:55px;height:55px;" data-autocenter="2"></span>
						</div>
					</div>
					<!-- #endregion Jssor Slider End -->
					<div class="row">
						<div class="estrenosBanner" >
							Peliculas mas valoradas
						</div>

					</div>

					<div class="row">
						<div class="col-lg-3">
							<img data-u="image" width="180" src="images/006.jpg" />
						</div>
						<div class="col-lg-3">
							<img data-u="image" width="180" src="images/006.jpg" />
						</div>
						<div class="col-lg-3">
							<img data-u="image" width="180" src="images/006.jpg" />
						</div>
						<div class="col-lg-3">
							<img data-u="image" width="180" src="images/006.jpg" />
						</div>
					</div>
					<div class="row">
						<div class="col-lg-3">
							<img data-u="image" width="180" src="images/006.jpg" />
						</div>
						<div class="col-lg-3">
							<img data-u="image" width="180" src="images/006.jpg" />
						</div>
						<div class="col-lg-3">
							<img data-u="image" width="180" src="images/006.jpg" />
						</div>
						<div class="col-lg-3">
							<img data-u="image" width="180" src="images/006.jpg" />
						</div>
					</div>
					<button type="button" class="show-modal">Show YoutTube Video</button>
				</div>

				<div class="col-lg-2 ">
					<div class="">
						
						<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
						<!-- cinemil.com -->
						<ins class="adsbygoogle"
						style="display:block"
						data-ad-client="ca-pub-9070965818920845"
						data-ad-slot="2088257012"
						data-ad-format="auto"></ins>
						<script>
							(adsbygoogle = window.adsbygoogle || []).push({});
						</script>
					</div>
					<div class="well">
						<p>ADS</p>
					</div>
				</div>
			</div>
		</div>

		@extends('layouts.footer')

		<script>
			jQuery(document).ready(function ($) {

				var jssor_1_options = {
					$AutoPlay: true,
					$AutoPlaySteps: 4,
					$SlideDuration: 180,
					$SlideWidth: 160,
					$SlideSpacing: 3,
					$Cols: 4,
					$ArrowNavigatorOptions: {
						$Class: $JssorArrowNavigator$,
						$Steps: 4
					},
					$BulletNavigatorOptions: {
						$Class: $JssorBulletNavigator$,
						$SpacingX: 1,
						$SpacingY: 1
					}
				};

				var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizing
            function ScaleSlider() {
            	var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
            	/*if (refSize) {
            		refSize = Math.min(refSize, 865);
            		jssor_1_slider.$ScaleWidth(refSize);
            	}
            	else {
            		window.setTimeout(ScaleSlider, 30);
            	} */
            }
            ScaleSlider();
            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
    </script>
    <script>
    	//$(document).ready(cargarCategorias);
    </script>
</body>
</html>		