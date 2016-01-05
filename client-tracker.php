<?php
$strTitle = "Client Tracker Software";
$strSection = "Projects";
include("includes/incHeader.php");
?>

	<div class="jumbotron">
		<div class="container">
			<h1><?=$strTitle?></h1>
  			<p>
  			<?php include("snippets/ct-desc.html")?>
  			</p>
		</div>
	</div>

	<?php include("snippets/working-on-it.html")?>
	
	<div class="container">
		<h1>Feature Sheet</h1>

		<h2>Detailed Contact Tracking</h2>
		<ul>
		
		    <li>Follow-up tracking system</li>
		    <li>Automatically generated Time Logs, with the ability for administrators to perform manual error correction to help prevent statistical anomalies in reporting</li>
		    <li>The ability to pause and resume a request, or to close and re-open a request</li>
		    <li>Features to encourage client privacy, including reminders to clear private client data upon request completion</li>
		    <li>Detailed traceability of which users worked with a given request and when</li>
		    <li>Predefined &quot;Quick List&quot; searches to locate requests, as well as a custom search form for more detailed searches</li>
			<li>Option to create Client Profiles to track a client's needs across multiple requests</li>
		</ul>
		
		<h2>Highly Customizable Surveys</h2>
		<ul>
		    <li>Single or multi-part questions</li>
		    <li>Configure predefined or custom answers options for questions, including radio buttons, checkboxes, drop-down lists, multi-select lists, large and small text fields</li>
		    <li>Required and optional items</li>
		    <li>Easy one-click re-ordering of questions, question parts, and answer options</li>
		    <li>Ability to inactivate an entire survey or just one part</li>
		    <li>Ability to set which agencies can access a given survey</li>
		    <li>Ability to fill out multiple surveys per request</li>
		    <li>Ability to provide the user with custom help pop-outs for each part of the question</li>
		</ul>
		
		<h2>Resource Tracking</h2>
		<ul>
		    <li>The ability to easily identify and link to specific resources used to assist the client</li>
		    <li>Interoperability with <a href="online-resources.php">CIOC Online Resources Software</a> allows the user to identify community resources given to the client while performing a search or reviewing a record details page</li>
		    <li>Open, published protocol for configuring 3rd party systems to interact with the system</li>
		    <li>The ability to configure and track additional generic resources such as print publications, search engines, and websites</li>
		</ul> 
		
		<h2>Security</h2>
		<ul>
		    <li>Three user security types allow for delegation of tasks to appropriate level</li>
		    <li>Users passwords must conform to a basic level of password sophistication; User password data is stored in the system as an unreadable MD5 hash</li>
		    <li>All password-related changes require current password verification</li>
		    <li>Concurrent logins are not allowed</li>
		    <li>User logins exist as session cookies which are not stored to disk by most web browsers</li>
		    <li>Only one user can modify a given request at a time</li>
		    <li>Interaction with 3rd party systems (such as the CIOC Community Information software) uses a unique login identifier for each user that is regenerated with each login, and only allows operations on a request that the user is currently editing</li>
		    <li>System-wide checks to confirm that each member can only access and modify their own data</li>
		    <li>Supports HTTP Strict Transport Security (HSTS)</li>
		</ul>
		
		<h2>Multi-lingual Capacity</h2>
		<ul>
		    <li>Software is designed to fully support operation in many languages (translations work may be required for additional languages)</li>
		    <li>English and French languages will be available with initial installation (Some French translations pending)</li>
		    <li>Each user configures their preferred language from within their profile</li>
		</ul>
		
		<h2>Themes</h2>
		<ul>
		    <li>Ability to install custom &quot;Themes&quot; (stylesheets) for highly customizable design and layout control (4 pre-installed Themes are configured into the software by default)</li>
		    <li>Each user can select their own preferred Theme from available choices</li>
		</ul>
		
		<h2>Built-in Help System</h2>
		<ul>
		    <li>Software help system allows the user to view software help for each page.</li>
		</ul>
		
		<h2>Reporting</h2>
		<ul>
		    <li>Total # of Requests for a given date range, agency, and/or user</li>
		    <li>Average time per Request for a given date range, agency, and/or user</li>
		    <li>Total # of each Survey filled out for a given date range, agency, and/or user</li>
		    <li>Total # of resources given by type of Resource for a given date range, agency, and/or user</li>
		    <li>Survey response summaries for a given date range, agency, survey, and/or question</li>
		    <li>Ability to report on textual survey responses (most common answers or full reports)</li>
		    <li>Summary report # of individual Resource Items selected for a given Resource Type, by date range and/or agency</li>
		    <li>Survey search and report: retrieve a list of Requests based on their response (or lack of response) to specific surveys or questions; can limit to a specific date range, agency, and/or survey response, as well as enter multiple criteria in a single search</li>
		    <li>Add survey questions and responses into reporting groups, allowing you to report across multiple surveys with similar questions.</li>
		</ul>
	</div>
<?php
include("includes/incFooter.php")
?>
