<?php
$strTitle = "Connecting Volunteers: volunteersearch.online";
$strSection = "Projects";
include("includes/incHeader.php");
?>

	<div class="jumbotron">
		<div class="container">
        	<h1><?=$strTitle?></h1>
        	<div class="row">
				<div class="col-sm-6 col-md-8">
                    <p>
                    <?php include("snippets/vo-mod-desc.html")?>
                    This module is a feature of the CIOC <a href="online-resources.php">Online Resources</a> application.
                    </p>
                </div>
                <div class="col-sm-6 col-md-4">
	                <img src="img/volunteer-search-online.png" class="img-responsive padding-top-bottom-20" alt="Connecting Volunteers: volunteersearch.online" style="display:block; margin:auto;"/>
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
		    <li>Easy step-by-step search option for matching Volunteers to Opportunities</li>
		    <li>&quot;What's New&quot; page documents new and changed Opportunities</li>
		    <li>&quot;Browse by Organization&quot; lists all Organizations / Programs offering Opportunities</li>
		    <li>Simple and advanced full-text (keyword) search options</li>
		    <li>Custom field and date searches</li>
			<li>Intelligent comunities searching using CIOC's Community hierarchy model</li>
		    <li>Save complex or frequently used searches for reuse later</li>
		    <li>Super Users may add or remove many elements from the Basic and Advanced search forms</li>
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
		<h2>Multi-language Support</h2>
		<ul>
			<li>Full interface support for English and/or French included</li>
			<li>Additional record languages or interface languages may be available on request (translation services may need to be provided).</li>
		</ul>
		<h2>Volunteer Profiles</h2>
		<p>Potential Volunteers can:</p>
		<ul>
		    <li>... create a <em>private</em> profile in the system
		    <li>... track positions they've applied to, whether they had a successful placement, and notes about the position</li>
		    <li>... create a search profile, and choose to be notified of new or updated Opportunities that match their criteria</li>
		    <li>... have the system automatically fill out referral request forms using information from their profile</li>
		</ul>
		<h2>Volunteer Centre Membership Management</h2>
		<ul>
		    <li>Create an internal listing of Volunteer Centre members</li>
		    <li>Track invoices issued and payments received for membership dues</li>
		    <li>Create reports for members on their Opportunity listings and referral requests</li>
		</ul>
		<h2>Referral Tracking</h2>
		<ul>
		    <li>Track referral requests from potential Volunteers who want to request more information or apply for a position</li>
		    <li>Flag requests for follow-up, identify successful or unsuccessful placements, record internal notes about the request, and track the last date and method of contact with the agency and potential Volunteer</li>
		    <li>Generate various statistical reports about referral requests by date, organization, and more</li>
		</ul>
		<h2>Classification Systems</h2>
		<ul>
		    <li>Customizable &quot;Areas of Interest&quot; for categorizing Volunteer Opportunities</li>
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
		</ul>
		<h2>Standards Support</h2>
		<ul>
		    <li>Supports the use of standardized data values while still respecting the need for local customizations</li>
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
		    <li>Automatically track record referrals from the CIOC Volunteer Opportunties module into an active Client request in the CIOC Client-Tracker</li>
		</ul>
	</div>
<?php
include("includes/incFooter.php")
?>
