<?php
$strTitle = "CIOC WordPress Plug-ins";
$strSection = "Projects";
include ("includes/incHeader.php");
?>

<div class="jumbotron">
	<div class="container">
		<h1><?=$strTitle?></h1>
		<p>
  			<?php include("snippets/wp-desc.html")?>
  			Don't use WordPress? Re-use the Open Source PHP Code from these plug-ins to do integration in any PHP-based website or CMS.
  		</p>
  		<p><a href="wordpress-ref-feed.php?type=cicbasic" class="btn btn-primary btn-lg">User Reference - Community Information Feed Plug-in &raquo;</a></p>
		<p><a href="wordpress-ref-feed.php?type=volbasic" class="btn btn-primary btn-lg">User Reference - Volunteer Opportunities Feed Plug-in &raquo;</a></p>
		<p><a href="wordpress-ref-full.php" class="btn btn-primary btn-lg">User Reference - CIOC Remote Search and Details Plug-in &raquo;</a></p>
	</div>
</div>

<div class="container">
	<div class="callout callout-info">
		The repositories for this project are available at:
		<ul>
			<li><a href="https://github.com/OpenCIOC/ciocwordpressfeed">https://github.com/OpenCIOC/ciocwordpressfeed</a></li>
			<li><em>Coming Soon...</em> these plug-ins will be submitted to <a
				href="https://wordpress.org">WordPress.org</a> to allow for direct
				download from within WordPress sites.</li>
		</ul>
	</div>
	<h2>About the CIOC WordPress Plug-ins...</h2>
	<p>
		The currently available CIOC WordPress plug-ins are designed to allow
		for small amounts of publicly-accessible data from a CIOC database to
		be integrated easily into an external WordPress-based site. This uses
		the CIOC <strong>Basic Data Feed</strong> capabilities of the <a
			href="online-resources.php">Online Resources Software</a>. Basic Data
		Feeds are ideal for small lists of records and categories, but do not
		have the full customization capabilities of the full <strong>CIOC
			Remote Search &amp; Details API</strong>.
	</p>
	<div class="alert alert-info" role="alert">Are you interested in the development of a CIOC WordPress plug-in
		for the full CIOC Remote Search &amp; Details API? This project is
		entering the planning phase in January 2016. Please <a href="http://www.kclsoftware.com/contact-us/">contact us</a> if you would like to participate.</div>
</div>

<?php
include ("includes/incFooter.php")?>
