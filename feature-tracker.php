<?php
$strTitle = "Feature Tracker Software";
$strSection = "Projects";
include("includes/incHeader.php");
?>

	<div class="jumbotron">
		<div class="container">
			<h1><?=$strTitle?></h1>
  			<p>
  			<?php include("snippets/ft-desc.html")?>
  			See it in action at <a href="https://features.cioc.ca/">features.cioc.ca</a>.
  			</p>
		</div>
	</div>

	<div class="container">
		<div class="callout callout-info">The source code repository for this project is available at <a href="https://github.com/OpenCIOC/featuretracker">https://github.com/OpenCIOC/featuretracker</a></div>
		<h2>About the Feature Tracker...</h2>
		<p>The Feature Tracker is intended to facilitate release planning and communication from a customer/end-user perspective. It is intended to help solicit feature ideas from end users and understand demand. It allows users to review features under various stages of consideration, see what is planned, understand the effort/costs of requests, and more. Features of the Feature Tracker include:</p>
		<ul>
			<li>Allow users / clients to submit feature requests and rank them</li>
    		<li>Ability to assign estimated cost/effort ranges to features</li>
    		<li>Store features status, assign features to releases</li>
    		<li>Search features by status, release, keyword, and more</li>
			<li>Ability to track multiple applications/products and assign features to multiple applications/products and multiple releases</li>
		</ul>
		<p>Although this software was purpose-built for CIOC's own needs, we would welcome external contributions to make this a more generic application more useful for any project.</p>
	</div>

	<div class="container">
	   	<div class="alert alert-info">
	 		<strong>Looking for Documentation?</strong> if there is demand for it, we'll consider making additional documentation available. <a href="http://www.kclsoftware.com/contact-us/">Let us know!</a>
		</div>
	</div>
	
<?php
include("includes/incFooter.php")
?>
