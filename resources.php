<?php
$strTitle = "Links and Resources";
$strSection = "Resources";
include("includes/incHeader.php");
?>

<div class="jumbotron">
	<div class="container">
		<h1><?=$strTitle?></h1>
		<p>
			<?php include("snippets/res-desc.html")?>
		</p>
	</div>
</div>

<div class="container">
	<div class="list-group">
		<a href="#" class="list-group-item active">CIOC Open Source and Open Data Source Repositories</a>
		<a href="https://github.com/OpenCIOC/ciocwordpressfeed" class="list-group-item">WordPress Plug-ins (Source)</a>
		<a href="https://github.com/OpenCIOC/volunteerclassifications" class="list-group-item">Volunteer Classifications (Data)</a>
		<a href="https://github.com/OpenCIOC/communityinfoclassifications" class="list-group-item">Community Information Classifications (Data)</a>
		<a href="http://community-repository.cioc.ca" class="list-group-item">Geographic Taxonomy (Data)</a>
		<a href="https://bitbucket.org/cioc/communityrepository" class="list-group-item">Community Repository (Source)</a>
		<a href="https://www.transifex.com/open-cioc/" class="list-group-item">Internationalization Project (Transifex)</a>
	</div>
	
	<div class="list-group">
		<a href="#" class="list-group-item active">Presentations and Documents</a>
		<a href="docs/OpeningUp_Sept2015.pdf" class="list-group-item">Opening Up: Exploring Open Source, Open Data, and Open Referral (Sept 29, 2015) - PDF, Slides only</a>
		<a href="docs/OpeningUp_Sept2015.pptm" class="list-group-item">Opening Up: Exploring Open Source, Open Data, and Open Referral (Sept 29, 2015) - PPTM, Slides and Notes</a>
	</div>
	
	<div class="list-group">
		<a href="#" class="list-group-item active">Related Projects and Websites</a>
		<a href="http://www.cioc.ca" class="list-group-item">Community Information Online Consortium (CIOC)</a>
		<a href="http://www.openreferral.org" class="list-group-item">Open Referral</a>
		<a href="http://www.openeligibility.org" class="list-group-item">Open Eligibility</a>
		<a href="http://www.airs.org" class="list-group-item">Alliance of Information and Referral Specialists (AIRS)</a>
		<a href="http://www.211taxonomy.org" class="list-group-item">211 Taxonomy (INFO LINE LA)</a>
	</div>


</div>


<?php
include ("includes/incFooter.php")
?>
