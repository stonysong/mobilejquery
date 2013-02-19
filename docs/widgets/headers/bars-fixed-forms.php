<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>jQuery Mobile Framework - Fixed Toolbars</title>
    <link rel="stylesheet"  href="../../../css/themes/default/jquery.mobile.css">
    <link rel="stylesheet" href="../../_assets/css/jqm-demos.css">
    <link rel="shortcut icon" href="../../_assets/favicon.ico">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    <script src="../../../js/jquery.js"></script>
    <script src="../../_assets/js/"></script>
    <script src="../../../js/"></script>
</head>
<body>
<div data-role="page" class="jqm-demos">

	<div data-role="header" data-position="fixed" data-theme="f">

		<div class="ui-grid-a">

				<h1 style="font-size:19px; margin-left:12px;">2,146 Songs</h1>

		</div><!-- /grid-b -->

		<div class="ui-bar-d">
				<div class="ui-grid-a">
					<div class="ui-block-a" style="width:78%">
						<label for="text-mini" class="ui-hidden-accessible">Search Input:</label>
				        <input type="search" name="name" id="search-mini" value="" data-mini="true" placeholder="Search songs..."  />
					</div>
					<div class="ui-block-b" style="width:22%">
						<button type="submit" data-mini="true" style="float:right" data-theme="d">Go</button>
					</div>
				</div><!-- /grid-a -->
		</div><!-- /search bar -->
		</form>
	</div>

	<div data-role="content" class="jqm-content">

			<ul data-role="listview" data-split-icon="gear" data-split-theme="d" data-inset="false">
				<li><a href="#">
					<img src="../../_assets/img/album-bb.jpg" />
					<h2>Broken Bells</h2>
					<p>Broken Bells</p></a>
					<a href="#purchase" data-rel="popup" data-position-to="window" data-transition="pop">Purchase album</a>
				</li>
				<li><a href="#">
					<img src="../../_assets/img/album-hc.jpg" />
					<h2>Warning</h2>
					<p>Hot Chip</p></a>
					<a href="#purchase" data-rel="popup" data-position-to="window" data-transition="pop">Purchase album</a>
				</li>
				<li><a href="#">
					<img src="../../_assets/img/album-p.jpg" />
					<h2>Wolfgang Amadeus Phoenix</h2>
					<p>Phoenix</p></a>
					<a href="#purchase" data-rel="popup" data-position-to="window" data-transition="pop">Purchase album</a>
				</li>
				<li><a href="#">
					<img src="../../_assets/img/album-bb.jpg" />
					<h2>Broken Bells</h2>
					<p>Broken Bells</p></a>
					<a href="#purchase" data-rel="popup" data-position-to="window" data-transition="pop">Purchase album</a>
				</li>
				<li><a href="#">
					<img src="../../_assets/img/album-hc.jpg" />
					<h2>Warning</h2>
					<p>Hot Chip</p></a>
					<a href="#purchase" data-rel="popup" data-position-to="window" data-transition="pop">Purchase album</a>
				</li>
				<li><a href="#">
					<img src="../../_assets/img/album-p.jpg" />
					<h2>Wolfgang Amadeus Phoenix</h2>
					<p>Phoenix</p></a>
					<a href="#purchase" data-rel="popup" data-position-to="window" data-transition="pop">Purchase album</a>
				</li>
				<li><a href="#">
					<img src="../../_assets/img/album-bb.jpg" />
					<h2>Broken Bells</h2>
					<p>Broken Bells</p></a>
					<a href="#purchase" data-rel="popup" data-position-to="window" data-transition="pop">Purchase album</a>
				</li>
				<li><a href="#">
					<img src="../../_assets/img/album-hc.jpg" />
					<h2>Warning</h2>
					<p>Hot Chip</p></a>
					<a href="#purchase" data-rel="popup" data-position-to="window" data-transition="pop">Purchase album</a>
				</li>
				<li><a href="#">
					<img src="../../_assets/img/album-p.jpg" />
					<h2>Wolfgang Amadeus Phoenix</h2>
					<p>Phoenix</p></a>
					<a href="#purchase" data-rel="popup" data-position-to="window" data-transition="pop">Purchase album</a>
				</li>
			</ul>

			<div data-role="popup" id="purchase" data-theme="d" data-overlay-theme="b" class="ui-content" style="max-width:340px; padding-bottom:2em;">
				<h3>Purchase Album?</h3>
				<p>Your download will begin immediately on your mobile device when you purchase.</p>
				<a href="#" data-role="button" data-rel="back" data-theme="b" data-icon="check" data-inline="true" data-mini="true">Buy: $10.99</a>
				<a href="#" data-role="button" data-rel="back" data-inline="true" data-mini="true">Cancel</a>
			</div>

			</div><!-- /content -->

			<div data-role="footer" class="footer-docs" data-theme="a" data-position="fixed">
				<form action="#" method="get">
					<div data-role="fieldcontain">
						<label for="slider-2" style="margin-left:15px;">Volume:</label>
					 	<input type="range" name="slider" id="slider-2" value="50" min="0" max="100" data-highlight="true" data-mini="true"  class="ui-hidden-accessible" />
					</div>
				</form>

			</div>

			</div><!-- /page -->

			</body>
			</html>
