<?php
$strTitle = "Online Resources Software";
$strSection = "Projects";
include("includes/incHeader.php");
?>

	<div class="jumbotron">
		<div class="container">
			<h1><?=$strTitle?></h1>
  			<p>
  			<?php include("snippets/or-desc.html")?>
			</p>
		</div>
	</div>

	<?php include("snippets/working-on-it.html")?>
	
	<hr>
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<h2>Community Resources Module</h2>
				<p>
				<?php include("snippets/cr-mod-desc.html")?>
				</p>
				<p><a class="btn btn-default" href="online-resources-cr.php" role="button">View feature sheet &raquo;</a></p>
			</div>
			<div class="col-sm-6">
				<h2>Volunteer Opportunities Module</h2>
				<p>
				<?php include("snippets/vo-mod-desc.html")?>
				</p>
				<p><a class="btn btn-default" href="online-resources-vo.php" role="button">View feature sheet &raquo;</a></p>
			</div>
		</div>
	</div>
<?php
include("includes/incFooter.php")
?>
