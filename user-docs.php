<?php
$strTitle = "Data and Classifications";
$strSection = "Projects";
include("includes/incHeader.php");
?>

	<div class="jumbotron">
		<div class="container">
			<h1><?=$strTitle?></h1>
  			<p>
  			<?php include("snippets/ud-desc.html")?>
  			</p>
		</div>
	</div>

	<div class="container">
	   	<div class="alert alert-info">
	 		<strong>We're working on it!</strong> Only a small selection of documentation is currently available to the public. We'll update this page as more is available.
		</div>
	</div>

	<div class="container">
		<h2>About CIOC End-User Documentation...</h2>
		<p>Before the OpenCIOC Project, end-user documentation was avaialble only in private websites and within the applications themselves. As part fo the Open CIOC project, we will be gradually migrating these help files to publicly available documentation repositories.</p>
		<div class="callout callout-info">Published user manuals are available at:
			<ul>
				<li><a href="https://ciocapidocs.readthedocs.org">https://ciocapidocs.readthedocs.org (CIOC API Reference)</a></li>
				<li><a href="wordpress.php">http://www.opencioc.org/wordpress.php (WordPress Plugin References)</a></li>
			</ul>
		</div>
		
		
		<h2>Contributing to Documentation</h2>
		<p>All documentation is kept in source control. Our preferred documentation system is <a href="http://sphinx-doc.org/">Sphinx</a> which uses <a href="http://docutils.sourceforge.net/docs/user/rst/quickref.html">Restructured Text</a> for markup. Completed documentation is posted to <a href="https://readthedocs.org/">https://readthedocs.org/</a>.</p>
		<div class="callout callout-info">The source code repositories for this project are available at:
			<ul>
				<li><a href="https://bitbucket.org/cioc/ciocapidocs">https://bitbucket.org/cioc/ciocapidocs (CIOC API Reference)</a></li>
			</ul>
		</div>
		<p>As it is available, translation files for documentation will be posted to the OpenCIOC Transifex site at <a href="https://www.transifex.com/open-cioc/">https://www.transifex.com/open-cioc/</a>.</p>
	</div>
	
	
	
<?php
include("includes/incFooter.php")
?>
