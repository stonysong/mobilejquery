<!doctype HTML>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Grunticon Loader - jQuery Mobile Demos</title>
		<link rel="shortcut icon" href="../favicon.ico">
		<script id="grunticon-loader">
			/* grunticon Stylesheet Loader | https://github.com/filamentgroup/grunticon | (c) 2012 Scott Jehl, Filament Group, Inc. | MIT license. */
			// Selects the correct stylesheet based on feature detects
			window.grunticon=function(e){if(e&&3===e.length){var t=window,n=!(!t.document.createElementNS||!t.document.createElementNS("http://www.w3.org/2000/svg","svg").createSVGRect||!document.implementation.hasFeature("http://www.w3.org/TR/SVG11/feature#Image","1.1")||window.opera&&-1===navigator.userAgent.indexOf("Chrome")),o=function(o){var r=t.document.createElement("link"),a=t.document.getElementsByTagName("script")[0];r.rel="stylesheet",r.href=e[o&&n?0:o?1:2],a.parentNode.insertBefore(r,a)},r=new t.Image;r.onerror=function(){o(!1)},r.onload=function(){o(1===r.width&&1===r.height)},r.src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw=="}};

			// Point to style sheet locations
			grunticon( [ "../../css/themes/default/jquery.mobile.inline-svg.css", "../../css/themes/default/jquery.mobile.inline-png.css", "../../css/themes/default/jquery.mobile.external-png.css" ] );
		</script>
		<!-- Fall back style sheet incase javascript is turned off -->
		<noscript id="grunticon-fallback"><link href="../../css/themes/default/jquery.mobile.fallback.css" rel="stylesheet"></noscript>
		</span>
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
		<link rel="stylesheet" href="../../css/themes/default/jquery.mobile.css">
		<link rel="stylesheet" href="../_assets/css/jqm-demos.css">
		<script src="../../js/jquery.js"></script>
		<script src="../_assets/js/"></script>
		<script src="../../js/"></script>
		<script>
			$( document ).on( "pagecreate", function() {
				$( "#settings input" ).on( "change", function( event ) {
					if ( event.target.id === "opt-mini" ) {
						if ( $( "#opt-mini" ).prop( "checked" ) ) {
							$( "#test" ).addClass( "ui-mini" );
						} else {
							$( "#test" ).removeClass( "ui-mini" );
						}
					}
					if ( event.target.id === "opt-inline" ) {
						if ( $( "#opt-inline" ).prop( "checked" ) ) {
							$( "#test button" ).addClass( "ui-btn-inline" );
						} else {
							$( "#test button" ).removeClass( "ui-btn-inline" );
						}
					}
					if ( event.target.id === "opt-notext" ) {
						if ( $( "#opt-notext" ).prop( "checked" ) ) {
							$( "#test button" ).addClass( "ui-btn-icon-notext" ).removeClass( "ui-btn-icon-left" );
						} else {
							$( "#test button" ).removeClass( "ui-btn-icon-notext" ).addClass( "ui-btn-icon-left" );
						}
					}
					if ( event.target.id === "opt-alt" ) {
						if ( $( "#opt-alt" ).prop( "checked" ) ) {
							$( "#test" ).addClass( "ui-alt-icon" );
						} else {
							$( "#test" ).removeClass( "ui-alt-icon" );
						}
					}
					if ( event.target.id === "opt-nodisc" ) {
						if ( $( "#opt-nodisc" ).prop( "checked" ) ) {
							$( "#test" ).addClass( "ui-nodisc-icon" );
						} else {
							$( "#test" ).removeClass( "ui-nodisc-icon" );
						}
					}
					if ( event.target.id === "opt-iconshadow" ) {
						if ( $( "#opt-iconshadow" ).prop( "checked" ) ) {
							$( "#test" ).addClass( "ui-shadow-icon" );
						} else {
							$( "#test" ).removeClass( "ui-shadow-icon" );
						}
					}
					if ( event.target.name === "theme" ) {
						var themeClass = $( "#theme-setting input:checked" ).attr( "id" );

						$( "#icon-page" ).removeClass( "ui-page-theme-a ui-page-theme-b" ).addClass( themeClass );
					}
				});
				var stylesheet = $( "head" ).find( "link" ).eq( "1" ).attr( "href" ),
					svg = /svg/.test( "svg" ),
					external = /external/.test( stylesheet ),
					using = ( ( external? "External ":"Inline " ) + ( svg? "SVG's " : "PNG's" ) );

				$( "#grunticon-stylesheet" ).text( stylesheet );
				$( "#grunticon-icon-type" ).text( using );
			});
		</script>
	</head>
	<body>
		<div data-role="page" class="jqm-demos" data-quicklinks="true">
			<div data-role="header" class="jqm-header">
				<h2><a href="../" title="jQuery Mobile Demos home"><img src="../_assets/img/jquery-logo.png" alt="jQuery Mobile"></a></h2>
				<p><span class="jqm-version"></span> Demos</p>
				<a href="#" class="jqm-navmenu-link ui-btn ui-btn-icon-notext ui-corner-all ui-icon-bars ui-nodisc-icon ui-alt-icon ui-btn-left">Menu</a>
				<a href="#" class="jqm-search-link ui-btn ui-btn-icon-notext ui-corner-all ui-icon-search ui-nodisc-icon ui-alt-icon ui-btn-right">Search</a>
			</div><!-- /header -->

			<div role="main" class="ui-content jqm-content">
				<h1>Grunticon</h1>
				<p>Grunticon is a grunt plugin built by the filament group which takes svg's and creates stylesheets and png icons for use in your webpage see <a href="https://github.com/filamentgroup/grunticon">https://github.com/filamentgroup/grunticon</a></p>
				<h2>Grunticon Loader Script</h2>
				<span data-demo-html="#grunticon-fallback" data-demo-js="#grunticon-loader"></span>

				<p>jQuery Mobile uses grunticon to generate svg icons with png fall backs and the style sheets for these. By default the library uses inline svg's but falls back to individual png's if inline svg is not supported.</p>

				<p>However you can further optimize for a wider variety of devices by using a loader script for selecting the approriate style sheet this reduces data transfer and the length of the style sheet</p>

				<p>To use the grunticon loader place the script in the view source button below in the head of your page before all other stylesheets or scripts. In the script you will see a call to the grunticon function at the bottom which is being passed an array of three stylesheet url's you will want to change this to match your setup or to point at the corresponding stylesheets on the cdn</p>

				<span data-demo-js="#grunticon-loader"></span>

				<p>After this script you will want to place a fallback style sheet in a noscript tag incase javascript is disabled link in the view source button below</p>

				<span data-demo-html="#grunticon-fallback"></span>

				<h2>So what style sheet was loaded?</h2>
				<p>Based on your browsers abilities the style sheet loaded was</p>
				<h3 id="grunticon-stylesheet"></h3>
				<p> Which means you are seeing</p>
				<h3 id="grunticon-icon-type"></h3>

				<h2>Grunticon Icons</h2>
				<p> All the icons in the buttons below were loaded using the grunticon loader script use the toggle buttons to try all different options for icon style</p>
				<form id="settings" class="ui-mini">
					<div class="ui-field-contain">
						<fieldset data-role="controlgroup" data-type="horizontal" id="theme-setting">
							<legend>Theme:</legend>
							<label for="ui-page-theme-a">A</label>
							<input type="radio" name="theme" id="ui-page-theme-a" checked>
							<label for="ui-page-theme-b">B</label>
							<input type="radio" name="theme" id="ui-page-theme-b">
						</fieldset>
					</div>
					<div class="ui-field-contain">
						<fieldset data-role="controlgroup" data-type="horizontal">
							<legend>Style:</legend>
							<label for="opt-mini">Mini</label>
							<input type="checkbox" name="opt-mini" id="opt-mini">
							<label for="opt-inline">Inline</label>
							<input type="checkbox" name="opt-inline" id="opt-inline">
							<label for="opt-notext">Icon-only</label>
							<input type="checkbox" name="opt-notext" id="opt-notext">
							<label for="opt-alt">Alt (black)</label>
							<input type="checkbox" name="opt-alt" id="opt-alt">
							<label for="opt-nodisc">No disc</label>
							<input type="checkbox" name="opt-nodisc" id="opt-nodisc">
							<label for="opt-iconshadow">Icon shadow</label>
							<input type="checkbox" name="opt-iconshadow" id="opt-iconshadow">
						</fieldset>
					</div>
				</form>

				<div id="test">
					<form>
						<button class="ui-btn ui-shadow ui-corner-all ui-btn-icon-left ui-icon-action">action</button>
						<button class="ui-btn ui-shadow ui-corner-all ui-btn-icon-left ui-icon-arrow-d-l">arrow-d-l</button>
						<button class="ui-btn ui-shadow ui-corner-all ui-btn-icon-left ui-icon-arrow-d-r">arrow-d-r</button>
						<button class="ui-btn ui-shadow ui-corner-all ui-btn-icon-left ui-icon-arrow-d">arrow-d</button>
						<button class="ui-btn ui-shadow ui-corner-all ui-btn-icon-left ui-icon-arrow-l">arrow-l</button>
						<button class="ui-btn ui-shadow ui-corner-all ui-btn-icon-left ui-icon-arrow-r">arrow-r</button>
						<button class="ui-btn ui-shadow ui-corner-all ui-btn-icon-left ui-icon-arrow-u-l">arrow-u-l</button>
						<button class="ui-btn ui-shadow ui-corner-all ui-btn-icon-left ui-icon-arrow-u-r">arrow-u-r</button>
						<button class="ui-btn ui-shadow ui-corner-all ui-btn-icon-left ui-icon-arrow-u">arrow-u</button>
						<button class="ui-btn ui-shadow ui-corner-all ui-btn-icon-left ui-icon-audio">audio</button>
						<button class="ui-btn ui-shadow ui-corner-all ui-btn-icon-left ui-icon-calendar">calendar</button>
						<button class="ui-btn ui-shadow ui-corner-all ui-btn-icon-left ui-icon-camera">camera</button>
						<button class="ui-btn ui-shadow ui-corner-all ui-btn-icon-left ui-icon-carat-d">carat-d</button>
						<button class="ui-btn ui-shadow ui-corner-all ui-btn-icon-left ui-icon-carat-l">carat-l</button>
						<button class="ui-btn ui-shadow ui-corner-all ui-btn-icon-left ui-icon-carat-r">carat-r</button>
						<button class="ui-btn ui-shadow ui-corner-all ui-btn-icon-left ui-icon-carat-u">carat-u</button>
						<button class="ui-btn ui-shadow ui-corner-all ui-btn-icon-left ui-icon-check">check</button>
						<button class="ui-btn ui-shadow ui-corner-all ui-btn-icon-left ui-icon-clock">clock</button>
						<button class="ui-btn ui-shadow ui-corner-all ui-btn-icon-left ui-icon-cloud">cloud</button>
						<button class="ui-btn ui-shadow ui-corner-all ui-btn-icon-left ui-icon-grid">grid</button>
						<button class="ui-btn ui-shadow ui-corner-all ui-btn-icon-left ui-icon-mail">mail</button>
						<button class="ui-btn ui-shadow ui-corner-all ui-btn-icon-left ui-icon-eye">eye</button>
						<button class="ui-btn ui-shadow ui-corner-all ui-btn-icon-left ui-icon-gear">gear</button>
						<button class="ui-btn ui-shadow ui-corner-all ui-btn-icon-left ui-icon-heart">heart</button>
						<button class="ui-btn ui-shadow ui-corner-all ui-btn-icon-left ui-icon-home">home</button>
						<button class="ui-btn ui-shadow ui-corner-all ui-btn-icon-left ui-icon-info">info</button>
						<button class="ui-btn ui-shadow ui-corner-all ui-btn-icon-left ui-icon-bullets">bullets</button>
						<button class="ui-btn ui-shadow ui-corner-all ui-btn-icon-left ui-icon-bars">bars</button>
						<button class="ui-btn ui-shadow ui-corner-all ui-btn-icon-left ui-icon-navigation">navigation</button>
						<button class="ui-btn ui-shadow ui-corner-all ui-btn-icon-left ui-icon-lock">lock</button>
						<button class="ui-btn ui-shadow ui-corner-all ui-btn-icon-left ui-icon-search">search</button>
						<button class="ui-btn ui-shadow ui-corner-all ui-btn-icon-left ui-icon-location">location</button>
						<button class="ui-btn ui-shadow ui-corner-all ui-btn-icon-left ui-icon-minus">minus</button>
						<button class="ui-btn ui-shadow ui-corner-all ui-btn-icon-left ui-icon-forbidden">forbidden</button>
						<button class="ui-btn ui-shadow ui-corner-all ui-btn-icon-left ui-icon-edit">edit</button>
						<button class="ui-btn ui-shadow ui-corner-all ui-btn-icon-left ui-icon-user">user</button>
						<button class="ui-btn ui-shadow ui-corner-all ui-btn-icon-left ui-icon-phone">phone</button>
						<button class="ui-btn ui-shadow ui-corner-all ui-btn-icon-left ui-icon-plus">plus</button>
						<button class="ui-btn ui-shadow ui-corner-all ui-btn-icon-left ui-icon-power">power</button>
						<button class="ui-btn ui-shadow ui-corner-all ui-btn-icon-left ui-icon-recycle">recycle</button>
						<button class="ui-btn ui-shadow ui-corner-all ui-btn-icon-left ui-icon-forward">forward</button>
						<button class="ui-btn ui-shadow ui-corner-all ui-btn-icon-left ui-icon-refresh">refresh</button>
						<button class="ui-btn ui-shadow ui-corner-all ui-btn-icon-left ui-icon-shop">shop</button>
						<button class="ui-btn ui-shadow ui-corner-all ui-btn-icon-left ui-icon-comment">comment</button>
						<button class="ui-btn ui-shadow ui-corner-all ui-btn-icon-left ui-icon-star">star</button>
						<button class="ui-btn ui-shadow ui-corner-all ui-btn-icon-left ui-icon-tag">tag</button>
						<button class="ui-btn ui-shadow ui-corner-all ui-btn-icon-left ui-icon-back">back</button>
						<button class="ui-btn ui-shadow ui-corner-all ui-btn-icon-left ui-icon-video">video</button>
						<button class="ui-btn ui-shadow ui-corner-all ui-btn-icon-left ui-icon-alert">alert</button>
						<button class="ui-btn ui-shadow ui-corner-all ui-btn-icon-left ui-icon-delete">delete</button>
				</div>

				</div><!-- /content -->

		<?php include( '../jqm-navmenu.php' ); ?>

		<div data-role="footer" data-position="fixed" data-tap-toggle="false" class="jqm-footer">
			<p>jQuery Mobile Demos version <span class="jqm-version"></span></p>
			<p>Copyright 2013 The jQuery Foundation</p>
		</div><!-- /footer -->

	<?php include( '../jqm-search.php' ); ?>

	</body>
</html>