<?php
$strTitle = "About the OpenCIOC Project...";
$strSection = "About";
include ("includes/incHeader.php");
?>

<div class="jumbotron">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<h1>
					<?=$strTitle?>
				</h1>
				<p>
					<?php include("snippets/basic-intro.html")?>
				</p>
			</div>
			<div class="col-md-4 text-center"> <img id="mainLogo" src="img/cioc_logo_open_sm.png"> </div>
		</div>
	</div>
</div>
<div class="container">
	<h2>About CIOC Software</h2>
	<p>CIOC software products connect people to information about Community Services, Businesses, Volunteer Opportunities, and more. The software supports the professionals who help to make those connections between people and the information they need, through effective tools for matching needs to information and tracking client requests. CIOC software products have been used to support the efforts of local Community Information Centres, 211 Call Centres, Volunteer Centres, Community Care Access Centres, Economic Development departments, and many others.</p>
	<p>The current CIOC Online Resources software has been used and updated continuously since its initial release in the spring of 2003. Other applications have been added through the years, including a Client Tracker, Offline Tools (for caching Online Resources data offline), Feature Tracking database for tracking and prioritizing community software change requests, and a Community Repository application for managing the maintenance and release of CIOC's geographic taxonomy.</p>
	<h2>History of the OpenCIOC Project</h2>
	<p>In late 2014, the CIOC Board of Directors and the software developers (KCL Software Solutions Inc.) began discussing the possibility of making CIOC an Open Platform. It was hoped that the move to an Open Platform would:</p>
	<ul>
		<li>Acknowledge past public contributions</li>
		<li>Encourage wider participation</li>
		<li>Provide current users with more options for using the software in the future</li>
	</ul>
	<p>In the spring of 2015, CIOC and KCL launched the first OpenCIOC products - the CIOC Community Repository and the geographic taxonomy that is managed within it. The initial release of Open Source applications, Open Data, and Documentation was completed in June 2016, including over 600,000 lines of software code. This is a living project, with frequent updates and new applications being added.</p>
	<h2>Licensing</h2>
	<p> Software projects are licensed under <a href="http://www.apache.org/licenses/LICENSE-2.0">Apache 2.0</a>. Data projects are licensed under <a href="https://creativecommons.org/publicdomain/zero/1.0/"> CC0 1.0 Universal (CC0 1.0) Public Domain Dedication</a> or <a href="https://creativecommons.org/licenses/by/4.0/">Creative Commons
		Attribution 4.0 International (CC BY 4.0)</a>. Please visit the individual project repositories for licensing information.</p>
	<h2>Becoming a User</h2>
	<p>Although we have some documentation available for each of the Open Source projects, <strong>these applications are not one-click installs and require significant technical expertise to use</strong>. We hope that in the future, we will be able to identify either funding partners or eager software development contributors who can help us add the extra infrastructure necessary to reduce the technical expertise required to run these applications. In the meantime, we are actively (if slowly!) working to make application hosting easier through both software and configuration changes. It is our long-term goal that these applications be easily available to a wide range of end-users.</p>
	<p>Note that all CIOC software applications require <b>Microsoft Windows Server</b> and <b>Microsoft SQL Server</b> to support the back-end database. Some front-end applications could be configured to run on either Windows or Linux. </p>
	<p>Those looking for a turn-key solution for using these applications can contact <a href="http://www.kclsoftware.com/contact-us/">KCL Software Solutions Inc.</a> for information about hosted services or application configuration support.</p>
	<h2>Becoming a Contributor</h2>
	<p> Are you interested in participating in the OpenCIOC project? Not all application projects are ready to accept contributions yet, but if you are interested in contributing please <a href="">be in touch</a>! If you would like your changes incorporated into the official software code, we strongly recommend that you talk to us before you start, so we can verify any requirements or special considerations.</p>
</div>
<?php
include ("includes/incFooter.php")?>
