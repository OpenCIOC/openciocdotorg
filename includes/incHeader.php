<!DOCTYPE html>
<html>
<head>
	<title>OpenCIOC Project : <?=$strTitle?></title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="styles/base_style.css">
</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">OpenCIOC</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li<?php if ($strSection=='Home'): ?> class="active"<?php endif ?>><a href="./">Home</a></li>
            <li<?php if ($strSection=='About'): ?> class="active"<?php endif ?>><a href="about.php">About</a></li>
            <li class="dropdown<?php if ($strSection=='Projects'): ?> active<?php endif ?>">
            	<a class="dropdown-toggle" aria-expanded="false" aria-haspopup="true" role="button" data-toggle="dropdown" href="#">
            	Projects<span class="caret"></span>
				</a>
				<ul class="dropdown-menu">
					<li>
					<a href="online-resources.php">Online Resources</a>
					</li>
					<li>
					<a href="client-tracker.php">Client Tracker</a>
					</li>
					<li>
					<a href="wordpress.php">WordPress Plug-ins</a>
					</li>
					<li>
					<a href="offline-tools.php">Offline Tools</a>
					</li>
					<li>
					<a href="community-repo.php">Community Repository</a>
					</li>
					<li>
					<a href="feature-tracker.php">Feature Tracker</a>
					</li>
					<li>
					<a href="open-data.php">Data &amp; Classifications</a>
					</li>
					<li>
					<a href="i18n.php">Internationaliziation</a>
					</li>
					<li>
					<a href="user-docs.php">User / API Documentation</a>
					</li>
				</ul>
			</li>
			<li<?php if ($strSection=='Resources'): ?> class="active"<?php endif ?>><a href="resources.php">Resources</a></li>
            <li><a href="http://www.kclsoftware.com/contact-us/">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

