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

	<?php include("snippets/working-on-it.html")?>
	
<?php
include("includes/incFooter.php")
?>
