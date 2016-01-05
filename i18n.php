<?php
$strTitle = "Internationalization (Translations)";
$strSection = "Projects";
include("includes/incHeader.php");
?>

	<div class="jumbotron">
		<div class="container">
			<h1><?=$strTitle?></h1>
  			<p>
  			<?php include("snippets/i18n-desc.html")?>
  			</p>
		</div>
	</div>

	<div class="container">
		<div class="callout callout-info">As projects are released, their related translations projects will be made avialable on the OpenCIOC Transifex site at <a href="https://www.transifex.com/open-cioc/">https://www.transifex.com/open-cioc/</a></div>
		<h2>About CIOC Internationalization</h2>
		<p>The default language for all CIOC Applications and data is <em>Canadian English</em>, and almost all resources are also available with a Canadian French translation. Those wishing to begin a translation to another language can submit their translations via the applicable Transifex project(s). Transifex is a tool for managing internationalization projects (translations), and it works with the .po/.pot files used by most CIOC applications. Some data projects use simple text files for managing translations. Because Transifex includes a friendly user interface for translation management, there is no technical knowledge required to contribute to this project, but contributors must be pre-approved.</p> 
	</div>
	
<?php
include("includes/incFooter.php")
?>
