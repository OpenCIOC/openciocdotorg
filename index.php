<?php
$strTitle = "Welcome...";
$strSection = "Home";
include("includes/incHeader.php");
?>

    <div class="jumbotron">
      <div class="container">
      	<h1><?=$strTitle?></h1>
      	<div class="row">
      		<div class="col-md-8">
      			<p>
      			<?php include("snippets/basic-intro.html")?> 
      			The CIOC Software and Data Suite supports information and referral services, volunteer matching, human services and business directories, and even tools for community collaboration on software development and classification systems.</p>
       			<p><a class="btn btn-primary btn-lg" href="about.php" role="button">Learn more &raquo;</a></p>
			</div>
			<div class="col-md-4 text-center">
				<img id="mainLogo" src="img/cioc_logo_open_sm.png" class="img-responsive">
       		</div>
       	</div>
      </div>
    </div>

<div class="container">
	<div class="row">
		<div class="col-md-4 col-sm-6">
			<h2>Online Resources</h2>
			<p>
			<?php include("snippets/or-desc.html")?>
			</p>
			<p><a class="btn btn-default" href="online-resources.php" role="button">View details &raquo;</a></p>
		</div>
		<div class="col-md-4 col-sm-6">
			<h2>Client Tracker</h2>
			<p>
			<?php include("snippets/ct-desc.html")?>
			</p>
			<p><a class="btn btn-default" href="client-tracker.php" role="button">View details &raquo;</a></p>
		</div>
		<div class="clearfix visible-sm-block"></div>
		<div class="col-md-4 col-sm-6">
			<h2>WordPress Plug-ins</h2>
			<p>
			<?php include("snippets/wp-desc.html")?>
			</p>
			<p><a class="btn btn-default" href="wordpress.php" role="button">View details &raquo;</a></p>
		</div>
		<div class="clearfix visible-md-block visible-lg-block"></div>
		<div class="col-md-4 col-sm-6">
			<h2>Offline Tools</h2>
			<p>
			<?php include("snippets/ot-desc.html")?>
			</p>
			<p><a class="btn btn-default" href="open-data.php" role="button">View details &raquo;</a></p>
		</div>
		<div class="clearfix visible-sm-block"></div>
		<div class="col-md-4 col-sm-6">
			<h2>Community Repository</h2>
			<p>
			<?php include("snippets/cm-desc.html")?>
			</p>
			<p><a class="btn btn-default" href="community-repo.php" role="button">View details &raquo;</a></p>
		</div>
		<div class="col-md-4 col-sm-6">
			<h2>Feature Tracker</h2>
			<p>
			<?php include("snippets/ft-desc.html")?>
			</p>
			<p><a class="btn btn-default" href="feature-tracker.php" role="button">View details &raquo;</a></p>
		</div>
		<div class="clearfix"></div>
		<div class="col-md-4 col-sm-6">
			<h2>Data &amp; Classifications</h2>
			<p>
			<?php include("snippets/od-desc.html")?>
			</p>
			<p><a class="btn btn-default" href="open-data.php" role="button">View details &raquo;</a></p>
		</div>
		<div class="col-md-4 col-sm-6">
			<h2>Internationalization</h2>
			<p>
			<?php include("snippets/i18n-desc.html")?>
			</p>
			<p><a class="btn btn-default" href="i18n.php" role="button">View details &raquo;</a></p>
		</div>
		<div class="clearfix visible-sm-block"></div>
		<div class="col-md-4 col-sm-6">
			<h2>User / API Documentation</h2>
			<p>
			<?php include("snippets/ud-desc.html")?>
			</p>
			<p><a class="btn btn-default" href="user-docs.php" role="button">View details &raquo;</a></p>
		</div>
		<div class="clearfix visible-md-block visible-lg-block"></div>
		<div class="col-md-4 col-sm-6">
			<h2>More Resources...</h2>
			<p>
			<?php include("snippets/res-desc.html")?>
			</p>
			<p><a class="btn btn-default" href="resources.php" role="button">View details &raquo;</a></p>
		</div>
	</div>
</div>


<?php
include("includes/incFooter.php")
?>
