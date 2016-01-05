<?php
$strTitle = "Community Repository Software";
$strSection = "Projects";
include("includes/incHeader.php");
?>

	<div class="jumbotron">
		<div class="container">
			<h1><?=$strTitle?></h1>
  			<p>
  			<?php include("snippets/cm-desc.html")?>
  			See it in action at <a href="https://community-repository.cioc.ca/">community-repository.cioc.ca</a>.
  			</p>
		</div>
	</div>

	<div class="container">
		<div class="callout callout-info">The source code repository for this project is available at <a href="https://bitbucket.org/cioc/communityrepository">https://bitbucket.org/cioc/communityrepository</a></div>
		<h2>About the Community Repository...</h2>
		<p>The Community Repository software provides the following features:</p>
		<ul>
			<li>Communities Taxonomy searching tools</li>
    		<li>Editorial tools for repository managers</li>
    		<li>A list of, and download files for, the Communities Taxonomy data</li>
    		<li>A log of changes made to the data in the repository for each official release, as well as recent changes not yet incorporated into a release</li>
		</ul>
		<p>Interested in the Community Repository <b>geographic taxonomy data</b>? It is free for use under a Creative Commons Attribution-only license, and available direct from CIOC's instance of the Repository application at <a href="https://community-repository.cioc.ca/">community-repository.cioc.ca</a>.</p>
	</div>
	
	<div class="container">
	   	<div class="alert alert-info">
	 		<strong>Looking for Documentation?</strong> if there is demand for it, we'll consider making additional documentation available. <a href="http://www.kclsoftware.com/contact-us/"></a>Let us know!
		</div>
	</div>
	
<?php
include("includes/incFooter.php")
?>
