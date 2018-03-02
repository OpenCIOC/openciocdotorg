<?php
$strTitle = "Connecting Communities: communityinfo.online";
$strSection = "Projects";
include("includes/incHeader.php");
?>

	<div class="jumbotron">
		<div class="container">
        	<h1><?=$strTitle?></h1>
        	<div class="row">
				<div class="col-sm-6 col-md-8">
                    <p>
                    <?php include("snippets/cr-mod-desc.html")?>
                    This module is a feature of the CIOC <a href="online-resources.php">Online Resources</a> application.
                    </p>
                </div>
                <div class="col-sm-6 col-md-4">
	                <img src="img/community-info-online.png" class="img-responsive padding-top-bottom-20" alt="Connecting Communities: communityinfo.online" style="display:block; margin:auto;"/>
                </div>
			</div>
		</div>
	</div>

    <div class="container">
        <div class="alert alert-info">
            This module is part of the <a href="online-resources.php">Online Resources</a> application; please view the details of that project for information on the Open Source Project.
        </div>
    </div>
	
	<hr>
	<div class="container">
		<h1>Features...</h1>
		<h2>Numerous Customizable Search Options</h2>
		<ul>
		    <li>Simple and advanced full-text (keyword) search options</li>
			<li>Search and sort by by proximity to a selected location</li>
		    <li>Custom field and date searches</li>
			<li>Intelligent comunities searching using CIOC's Community hierarchy model</li>
		    <li>Search forms and tools optimized for various built-in Classification Systems</li>
		    <li>Save complex or frequently used searches for reuse later</li>
		    <li>Super Users may add or remove many elements from the Basic and Advanced search forms</li>
			<li>Mappable search results using the Google Maps API</li>
		</ul>
		<h2>Easy-to-Use Data Management Tools</h2>
		<ul>
		    <li>Request and process record change and new record suggestions directly from organizations, programs, and individuals listed in the database</li>
		    <li>Manage all core record information from a single, customizable form</li>
		    <li>Generate custom forms for mail or fax to agencies who cannot update their records online</li>
		    <li>Perform updates across many records at once using bulk data management tools</li>
		    <li>Multiple agencies owning different records can work together in the same database and share the data management</li>
		    <li>Separate areas for reviewing and managing deleted records and record change suggestions</li>
		</ul>
		<h2>Classification Systems</h2>
		<ul>
		    <li>Bilingual support for several industry-standard Classification systems</li>
		    <li>Integrated classification systems support all standard search methods and have built-in classification system management tools</li>
		    <li>AIRS / INFO LINE Taxonomy (211Taxonomy.org)</li>
		    <li>InformOntario Thesaurus</li>
		    <li>North American Classification System (NAICS)</li>
		</ul>
		<h2>Multi-language Support</h2>
		<ul>
			<li>Full interface support for English and/or French included</li>
			<li>Additional record languages or interface languages may be available on request (translation services may need to be provided).</li>
		</ul>
		<h2>Custom Portals / Views</h2>
		<ul>
		    <li>Create an unlimited number of custom &quot;Views" each with different records, search criteria, data fields, and more</li>
		    <li>Easily customize the design of each View using basic HTML and CSS</li>
		    <li>Create Views to target a specific geography or topic</li>
		    <li>Views can be public or accessible only to selected users</li>
		    <li>Each View can support its own custom web address</li>
		    <li>Create custom record inclusion policies for different datasets</li>
		</ul>
		<h2>Customizable Security Model</h2>
		<ul>
		    <li>Control which records users can access and modify, including which specific fields they can view or change</li>
		    <li>Create roles within the database, called &quot;User Types&quot;, which control access and permissions and can be applied to multiple users</li>
		</ul>
		<h2>Full Data Change History</h2>
		<ul>
			<li>Easily see all changes made to your records, with a full history of changes for each field.</li>
			<li>List all past changes to a record; see which fields were changed, when, and by whom.</li>
			<li>Compare two versions of a field, highlighting the specific changes made.</li>
		</ul>
		<h2>Print Publications</h2>
		<ul>
		    <li>Customized record templates for printing records, reports, and search results</li>
		    <li>Create custom directories complete with custom name, subject, phone, and e-mail indexes</li>
			<li>Create a printable map of records with accompanying map legend and record list (up to 99 record per map)</li>
		</ul>
		<h2>Import / Export and External Systems</h2>
		<ul>
		    <li>Basic flat XML export of records for use in external applications</li>
		    <li>Regular Microsoft Access database downloads of data and statistics</li>
		    <li>Import and Export of the <em>CIOC Sharing Format XML</em> format - share only the fields and records you choose</li>
		    <li>The <em>CIOC Sharing Format</em> schema is published and open for sharing with other groups for the purpose of information exchange between CIOC and other systems.</li>
			<li>Several built-in data feed formats for use in external searching services and/or data exchange (includes a search and record details API).</li>
			<li>AIRS 3.0/3.1 XML export</li>
		</ul>
		<h2>Mapping / GIS</h2>
		<ul>
		    <li>Integrate with an unlimited number of 3rd party mapping systems using a simple interface</li>
		    <li>Software comes pre-configured to work with Google Maps and MapQuest</li>
		</ul>
		<h2>Standards Support</h2>
		<ul>
		    <li>Supports the use of standardized data values while still respecting the need for local customizations</li>
		    <li>Supports several industry-standard Classification systems</li>
		</ul>
		<h2>Built-in Help System</h2>
		<ul>
		    <li>Online system help explains the purpose and function of elements on each page</li>
		    <li>Users can customize field help to meet local standards</li>
		</ul>
		<h2>Statistics</h2>
		<ul>
		    <li>Detailed record use statistics can be broken down by date, View, user, IP Address</li>
		    <li>General website statistics for all hosted databases</li>
		    <li>Data management statistics</li>
		</ul>
		<h2><a href="client-tracker.php">Client-Tracker</a> Integration</h2>
		<ul>
		    <li>Automatically track record referrals from the CIOC Community Resources module into an active Client request in the CIOC Client-Tracker</li>
		</ul>
		<h2><a href="offline-tools.php">Offline Tools</a> Integration</h2>
		<ul>
			<li>An important disaster preparedness tool! Install this tool on a local laptop, desktop or server to help referral specialists to continue to provide services when unable to connect to your Online Resources application due to power failure, internet connectivity issues, server downtime, etc.</li>
			<li>Automatically synchronizes with your CIOC database to download recent data and security changes.</li>
			<li>Automatically enforces CIOC security using the same logins and customizable control over who may access access which information offline.</li>
		</ul>
	</div>
<?php
include("includes/incFooter.php")
?>
