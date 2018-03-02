<?php

$strPluginType = "CIOC Remote Search and Details WordPress Plug-in";
$strDownloadZipURL = "https://github.com/OpenCIOC/ciocwordpressfeed/blob/master/cioc-rsd.zip?raw=true";

$strTitle = "CIOC " . $strPluginType . " Reference";
$strSection = "Projects";
include( "includes/incHeader.php" );
?>

<div class="jumbotron">
	<div class="container">
		<h1>
			<?=$strTitle?>
		</h1>
		<p>
			<?php include("snippets/cms_desc.html")?>
		</p>
		<p>Below is documentation for configuring WordPress shortcodes for the
			<?=$strPluginType?>.</p>
		<p><a href="cms.php" class="btn btn-primary btn-lg">Learn More About CIOC CMS Plug-ins &raquo;</a>
		</p>
	</div>
</div>

<div class="container">
	<div class="callout callout-danger">
		This documentation is for the following versions:
		<ul>
			<li>CIOC Remote Search and Details 0.0.4 (Beta)</li>
		</ul>

		Please ensure you are using the most up-to-date version of the plug-in.
	</div>

	<div class="well">
		<h2>Contents</h2>
		<ul>
			<li><a href="#install">Installing the Plug-in</a>
			</li>
			<li><a href="#api-info">CIOC API Reference and Configuration</a>
			</li>
			<li><a href="#get-key">Obtaining an API ID and Password</a>
			</li>
			<li><a href="#api-settings">CIOC API Settings</a>
			</li>
			<li>
				<a href="#shortcode">Shortcode Reference</a>
				<ul>
					<li><a href="#shortcode-view-lang">Changing the View or Language</a>
					</li>
					<li><a href="#shortcode-countall">Count All Records</a>
					</li>
					<li><a href="#shortcode-quicklist-browse">Browse Categories</a>
					</li>
					<li><a href="#shortcode-searchform">Generate a Search Form</a>
					</li>
					<li><a href="#shortcode-searchform-elements">Generate Individual Search Form Elements</a>
					</li>
					<li><a href="#shortcode-displayresults">Search Results</a>
					</li>
					<li><a href="#shortcode-displayrecord">Record Details</a>
					</li>
				</ul>
			</li>
		</ul>
	</div>

	<a name="install"></a>
	<h2>Installing the Plug-in</h2>
	<p>Currently, the WordPress Plug-ins are available only through manual install by <a href="<?=$strDownloadZipURL?>">downloading the appropriate zip file(s)</a> from the project repository. Use the <em>Upload Plugin</em> option from within WordPress to install the zip file, then Activate the plug-in to begin using it. Information on manual plug-in installation is available from <a href="https://codex.wordpress.org/Managing_Plugins">codex.wordpress.org/Managing_Plugins</a>
	</p>
	<div class="callout callout-info">
		The code repositories for this project are available at:
		<ul>
			<li><a href="https://github.com/OpenCIOC/ciocwordpressfeed">https://github.com/OpenCIOC/ciocwordpressfeed</a>
			</li>
			<li>Some plug-ins are available through WordPress.org - search for available plug-ins within your WordPress application using the keyword "CIOC"</li>
		</ul>
	</div>

	<?php include("snippets/api-config.html")?>

	<a name="api-settings"></a>
	<h2>CIOC API Settings</h2>
	<p>After installing the plug-in, you should access the CIOC API Settings withing WordPress to configure the database URL, API ID and Password.</p>
	<div class="callout">WordPress Admin &gt; Settings &gt; CIOC API Settings</div>
	<p>The only mandatory settings are:</p>
	<ul>
		<li>the URL of the target CIOC database (e.g. <code>https://test.cioc.ca</code>)</li>
		<li>the API ID</li>
		<li>the API Password</li>
	</ul>
	<p>Each time you load the Settings page, including after submitting changes, the plug-in attempts to verify your settings by testing a basic login. Always look for a green success message at the top of the Settings page.</p>

	<p>The Plug-in requires access to the FontAwesome font library and a small portion of the BootStrap library. If you already include these libraries, you may choose to block the plug-in from adding them.</p>
	<p>If you wish to be able to display a Google Map of record address on your record details pages, you must register for a Google Maps API Key for your site and add it to the Settings. Information about obtaining a key can be found <a href="https://developers.google.com/maps/documentation/javascript/get-api-key">here</a>.</p>

	<a name="shortcode"></a>
	<h2>Shortcode Reference</h2>
	<p>Once the plug-in has been installed, and you have configured your settings with your CIOC <strong>API ID and Password</strong>, you can get started displaying data in your WordPress site. The following section outlines the options available for customizing the shortcodes for this plug-in. For reference, WordPress shortcodes follow a pattern such as <code>[shortcode attribute1="value 1" attribute2="value 2"]</code>.

		<a name="shortcode-view-lang"></a>
		<h3>Changing the View or Language</h3>
		<p>All Shortcodes described in later sections include the ability to change the default View or Language using two standard attributes.</p>
		<p>The language of records requested will default to whatever is the default for the site URL you provided. To explicitly change to another language, use <code>ln=&quot;en-CA&quot;</code> (English), <code>ln=&quot;fr-CA</code> (French), etc.</p>
		<p>Whenever possible, use a URL for the target database that already goes to the View (Portal) for records that you want to use. If a special URL is not available, you can switch to a different View # using <code>viewtype=&quot;123&quot;</code> where <em>123</em> is the View ID number. <strong>You cannot switch to Views that the CIOC Account tied to the API ID cannot access.</strong>.</p>

		<a name="shortcode-countall"></a>
		<h3>Count All Records</h3>
		<p>The <em>Count All</em> shortcode provides a total count of all records in the current View/Language. Access this shortcode with:</p>
		<div class="callout">
			[ciocrsd-countall]
		</div>

		<a name="shortcode-quicklist-browse"></a>
		<h3>Browse Categories</h3>
		<p>This shortcode generates a list of categories with an optional count and a link to execute a search based on that category. By default, this page will list whatever categories are part of the current View's "Quick List". Access this shortcode with:</p>
		<div class="callout">
			[ciocrsd-quicklist-browse]
		</div>
		<p>You can customize this shortcode with the following attributes:</p>
		<ul>
			<li><code>quicklist="PUBCODE"</code> - to show a specific list of General Headings, where PUBCODE is a Publication Code with General Headings that the API User has permission to access.</li>
			<?php include("snippets/wp-results-target-shortcodes.html")?>
			<li><code>count="off"</code> - by default, a count for each category is included, and zero-count categories are suppressed. You may choose to turn off the count of records next to each category; please note that this also removes the ability to filter out zero-result categories.</li>
		</ul>

		<?php include("snippets/wp-results-target-general.html")?>

		<a name="shortcode-searchform"></a>
		<h3>Generate a Search Form</h3>
		<p>Access this shortcode with:</p>
		<div class="callout">
			[ciocrsd-searchform]
		</div>
		<p>You can customize this shortcode with the following attributes:</p>
		<ul>
			<?php include("snippets/wp-results-target-shortcodes.html")?>
			<li><code>keywords="off"</code> - to <em>disable</em> the keyword search box</li>
			<li><code>agegroup="on"</code> - to include a drop-down list of age groups</li>
			<?php include("snippets/wp-search-quicklist.html")?>
			<li><code>community="off"</code> - to <em>disable</em> the search by community drop-down</li>
			<?php include("snippets/wp-search-limitcmtype.html")?>
			<?php include("snippets/wp-search-cmpromptunfilled.html")?>
			<?php include("snippets/wp-search-shortplaceholder.html")?>
			<li><code>clearbutton="on"</code> - add a "clear" button; this button will blank out search forms on pages that display both search results and search forms (where the current search criteria is pre-set on the form).</li>
			<li><code>multiformid="#"</code> - if you have multiple search forms shortcodes on the same page, give each a number to ensure that clear buttons etc. work properly.</li>
		</ul>

		<?php include("snippets/wp-results-target-general.html")?>

		<a name="shortcode-searchform-elements"></a>
		<h3>Generate individual Search Form Elements</h3>
		<p>If you need a more customized search form, you can generate your own form HTML and use shortcodes to generate specific elements such as drop-down lists and auto-suggest-ready keyword inputs.</p>

		<h4>Auto-suggest Keyword Input</h4>
		<p>Access this shortcode with:</p>
		<div class="callout">
			[ciocrsd-keyword]
		</div>
		<p>You can customize this shortcode with the following attributes:</p>
		<ul>
			<?php include("snippets/wp-search-shortplaceholder.html")?>
		</ul>

		<h4>Community Drop-down</h4>
		<p>Access this shortcode with:</p>
		<div class="callout">
			[ciocrsd-community]
		</div>
		<p>You can customize this shortcode with the following attributes:</p>
		<ul>
			<li><code>limitcmtype="on"</code> - for very narrow search forms, use placeholder text that is more brief.</li>
			<?php include("snippets/wp-search-limitcmtype.html")?>
			<?php include("snippets/wp-search-cmpromptunfilled.html")?>
			<?php include("snippets/wp-search-shortplaceholder.html")?>
		</ul>

		<h4>Quicklist / Category List Drop-down</h4>
		<p>Access this shortcode with:</p>
		<div class="callout">
			[ciocrsd-quicklist]
		</div>
		<p>You can customize this shortcode with the following attributes:</p>
		<ul>
			<?php include("snippets/wp-search-quicklist.html")?>
			<?php include("snippets/wp-search-shortplaceholder.html")?>
		</ul>

		<h4>Quicklist / Category List Buttons</h4>
		<p>Access this shortcode with:</p>
		<div class="callout">
			[ciocrsd-quicklistbuttons]
		</div>
		<p>You can customize this shortcode with the following attributes:</p>
		<ul>
			<?php include("snippets/wp-search-quicklist.html")?>
			<li><code>buttonclass="..."</code> - optional, provide css classes to apply to the "buttons".</li>
			<li><code>gridclass="..."</code> - bootstrap column classes indicating how many buttons across on the page at different screen sizes (e.g. "col-sm-6 col-md-4" does 2 across at small screen size, and 3 across for medium and larger screens).</li>
		</ul>

		<h4>Age Group Drop-down</h4>
		<p>Access this shortcode with:</p>
		<div class="callout">
			[ciocrsd-agegroup]
		</div>
		<p>You can customize this shortcode with the following attributes:</p>
		<ul>
			<?php include("snippets/wp-search-shortplaceholder.html")?>
		</ul>

		<a name="shortcode-displayresults"></a>
		<h3>Search Results</h3>
		<p>Access this shortcode with:</p>
		<div class="callout">
			[ciocrsd-displayresults]
		</div>

		<p>You can customize this shortcode with the following attributes:</p>
		<ul>
			<li><code>dosearch="on"</code> - for use when there is a search form on the same page as the search result, prevents a warning message about no search criteria when first visiting the page.</li>
			<li><code>ciocdetails="on"</code> - to make the target record details page be the source CIOC website</li>
			<li><code>targetdetails="URL"</code> - provide a full URL (including http:// or https://) to a page that can respond to a <mark>num=ABC1234</mark> parameter (where ABC1234 is the record number). This may be another page on your WordPress site with the Record Details shortcode, but it could also be an external site.</li>
			<li><code>nolink="on"</code> - if you include several key contact fields in a simple listing of records, you may choose not to provide any link at all to the full record details.</li>
			<li><code>nocount="on"</code> - turn off the display of the number of search results returned</li>
			<li><code>sterms="search terms"</code> - prefilter the results with specific search terms; this setting causes any incoming keyword search terms ot be ignored</li>
			<li><code>stype="A|S|O|T"</code> - optionally preset the search term keywords to a specific type of search such as Anywhere (<mark>A</mark>), Subjects (<mark>S</mark>), Organization Names (<mark>O</mark>), or Taxonomy (<mark>T</mark>); default is Anywhere</li>
			<li><code>pubcode="PUBCODE"</code> - prefliter the results to a specific publication; this setting causes any incoming publication search to be ignored</li>
		</ul>
		<div class="alert alert-warning">You must set one of two possible targets for search results:
			<ol type="a">
				<li>Turn on the CIOC Details shortcode attribute to have the record details link post to the source CIOC site, or ...</li>
				<li>Provide a specific URL, such as another page on your site with the record details shortcode, to which the results should be posted</li>
			</ol>
		</div>

		<a name="shortcode-displayrecord"></a>
		<h3>Display Record</h3>
		<p>Access this shortcode with:</p>
		<div class="callout">
			[ciocrsd-displayrecord]
		</div>
		<p>By default, this shortcode responds to a URL parameter to the current page containing a specific record number. For example if the page with the shortcode was http://mywordpresssite.com/record/, a specific number could be sent to that page with <code>http://mywordpresssite.com/record/<mark>?num=ABC1234</mark></code> (where ABC1234 is the record number). This empty shortcode is how you can create a target detail page for search results.</p>
		<p>If you would like to always display a <em>specific</em> record, add the shortcode attribute <code>num="ABC1234"</code> (where ABC1234 is the record number).</p>
</div>

<?php
include( "includes/incFooter.php" )
?>