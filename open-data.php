<?php
$strTitle = "Data and Classifications";
$strSection = "Projects";
include("includes/incHeader.php");
?>

	<div class="jumbotron">
		<div class="container">
			<h1><?=$strTitle?></h1>
  			<p>
  			<?php include("snippets/od-desc.html")?>
  			These simple data lists been developed over years of collaboration with CIOC users and developers, and are now avaialble for all to promote standards and consistency.
  			</p>
		</div>
	</div>

	<div class="container">
		<div class="callout callout-info">The repositories for this project are available at:
			<ul>
				<li><a href="https://github.com/OpenCIOC/volunteerclassifications">https://github.com/OpenCIOC/volunteerclassifications</a></li>
				<li><a href="https://github.com/OpenCIOC/communityinfoclassifications">https://github.com/OpenCIOC/communityinfoclassifications</a></li>
			</ul>
		</div>
		<h2>About the CIOC Open Data Lists...</h2>
		<p>CIOC open data lists are provided as .csv, .txt, and .sql (INSERT INTO) files. For those using SQL Server databases, scripts are included to generate tables that exactly match the provided .csv and .sql files. See the project sites for more information and details of the data avaialble.</p> 
	</div>
	
<?php
include("includes/incFooter.php")
?>
