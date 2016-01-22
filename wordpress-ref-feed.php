<?php
$reference_types = array (
		'cicbasic',
		'volbasic' 
);

$domain = $_REQUEST ['type'];

if (! in_array ( $domain, $reference_types )) {
	$domain = $reference_types [0];
}

switch ($domain) {
	case 'cicbasic' :
		$strPluginType = "Community Information Feed Plug-in";
		$strDownloadZipURL = "https://github.com/OpenCIOC/ciocwordpressfeed/blob/master/cioc-communityinfo.zip?raw=true";
		$strShortCodeStart = "cioccominfo";
		break;
	case 'volbasic' :
		$strPluginType = "Volunteer Opportunities Feed Plug-in";
		$strDownloadZipURL = "https://github.com/OpenCIOC/ciocwordpressfeed/blob/master/cioc-volunteer.zip?raw=true";
		$strShortCodeStart = "ciocvolunteer";
		break;
}
$strTitle = "CIOC " . $strPluginType . " Reference";
$strSection = "Projects";
include ("includes/incHeader.php");
?>

<div class="jumbotron">
	<div class="container">
		<h1><?=$strTitle?></h1>
		<p>
  			<?php include("snippets/wp-desc.html")?>
  		</p>
		<p>Below is documentation for configuring WordPress shortcodes for the <?=$strPluginType?>. In addition to the included reference, the <a href="online-resources.php">Online Resources Software</a> includes a built-in shortcode generator tool to facilitate easy creation of shortcodes.</p>
		<p><a href="wordpress.php" class="btn btn-primary btn-lg">Learn More About CIOC WordPress Plug-ins &raquo;</a></p>
	</div>
</div>

<div class="container">
	<div class="callout callout-danger">
		This documentation is for the following versions:
		<ul>
			<li>CIOC Volunteer Opportunities Feed 1.0.2</li>
			<li>CIOC Community Information Feed 1.0.1</li>
		</ul>
		
		Please ensure you are using the most up-to-date version of the plug-in.
	</div>

	<div class="well">
	<h2>Contents</h2>
    <ul><li><a href="#install">Installing the Plug-in</a></li>
      <li><a href="#get-key">Obtaining an API Key</a></li>
      <li><a href="#shortcode">Shortcode Reference</a>
        <ul>
          <li><a href="#shortcode-basic">The Basic Shortcode</a></li>
		  <li><a href="#shortcode-view-lang">Changing the View or Language</a>
          <li><a href="#shortcode-type">Choosing the Listing Type</a></li>
          <li><a href="#shortcode-fields">Choosing the Fields to Display</a></li>
          <li><a href="#shortcode-style">Styling the List</a></li>
          <li><a href="#shortcode-icon">Enabling Icons</a></li>
          <li><a href="#shortcode-debug">Debug Mode</a></li>
        </ul>
      </li>
    </ul>
	</div>

	<a name="install"></a>
	<h2>Installing the Plug-in</h2>
	<p>Currently, the WordPress Plug-ins are available only through manual install by <a href="<?=$strDownloadZipURL?>">downloading the appropriate zip file(s)</a> from the project repository. Use the <em>Upload Plugin</em> option from within WordPress to install the zip file, then Activate the plug-in to begin using it. Information on manual plug-in installation is available from  <a href="https://codex.wordpress.org/Managing_Plugins">codex.wordpress.org/Managing_Plugins</a></p>
	<div class="callout callout-info">
		The repositories for this project are available at:
		<ul>
			<li><a href="https://github.com/OpenCIOC/ciocwordpressfeed">https://github.com/OpenCIOC/ciocwordpressfeed</a></li>
			<li><em>Coming Soon...</em> these plug-ins will be submitted to <a href="https://wordpress.org">WordPress.org</a> to allow for direct download from within WordPress sites.</li>
		</ul>
	</div>


    <a name="get-key"></a>
	<h2>Obtaining an API Key</h2>
	<p>To use the plug-in, you must have an active API Key from the target database. A Super User in the target Online Resources database can configure a new API Key by going to:</p>
	<div class="callout">Setup &gt; APIs, Sharing, and Export &gt; Basic Data Feed API Keys</div>
	<p>Best Practices for configuring API Keys:</p>
	<ul>
		<li>When configured, API Keys should be named in a way that clearly indicates their purpose.</li>
		<li>Remember to indicate which module(s) will be used. Keys may be configured for the Community Information Module, the Volunteer Opportunities Module, or both.</li>
		<li>In general, Keys should be for one purpose and not shared; in that way, a key can be deactivated due to problem use without impacting others. There is no limit on the number of KKeys that can be generated.</li>
		<li>When no longer in use, API Keys should be deactivated.</li>
		<li>It is possible to access data from multiple target databases from the same page or post in WordPress. For example, you may want to source data from different regional databases for presentation on the same page. This is possible because the token is set in the shortcode, rather than being configured globally for the plug-in.</li>
	</ul>

	<a name="shortcode"></a>
	<h2>Shortcode Reference</h2>
	<p>The following section outlines the options available for customizing the shortcodes for this plug-in. However, the easiest way to accurately configure a shortcode is by using the shortcode generator available from the target Online Resources database. You must already have an API Key to use the shortcode generator tool.</p>
	<div class="callout">
	Access the shortcode generator for your site at <em>https://<mark>yoursite.cioc.ca</mark>/shortcodes</em>
	<br>Make life easier for partners you are sending a key to with a link that already includes their key:
	<br>
	</div>
	<p>Make life easier for partners you are sending an API Key to with a link that already includes their Key:</p>
	<div class="callout">
	<em>https://<mark>yoursite.cioc.ca</mark>/shortcodes?key=<mark>01234567-89AB-CDEF-0123-456789ABCDEF</mark></em> (Substitute your Key)
	</div>

	<a name="shortcode-basic"></a>
	<h3>The Basic Shortcode</h3>
	<p>Once the plug-in has been installed and you have been given an <strong>API Key</strong>, you can get started displaying data in your WordPress site. Below is an example of the basic shortcode that you can place on any Page or Post in your site; subsitute your own API Key (e.g. <code>key=&quot;01234567-89AB-CDEF-0123-456789ABCDEF&quot;</code>) and the URL of the target CIOC Online Resources database (e.g. <code>url=&quot;https://test.cioc.ca&quot;</code>). The order in which the shortcode options occur does not matter.</p>
	<div class="callout">[<?=$strShortCodeStart?>
		url=&quot;<mark>https://test.cioc.ca</mark>&quot;
		key=&quot;<mark>01234567-89AB-CDEF-0123-456789ABCDEF</mark>&quot;
        ]
	</div>
	<p>If no other settings are provided, &quot;Newest Records&quot; is chosen as the default listing type (see Listing Type information below).</p>
		
	<a name="shortcode-view-lang"></a>
	<h3>Changing the View or Language</h3>
	<p>The language of records requested will default to whatever is the default for the site URL you provided. To explicitly change to another language, use <code>ln=&quot;en-CA&quot;</code> (English), <code>ln=&quot;fr-CA</code> (French), etc.</p>
	<p>Whenever possible, use a URL for the target database that already goes to the View (Portal) for records that you want to use. If a special URL is not available, you can switch to a different View # using <code>viewtype=&quot;123&quot;</code> where <em>123</em> is the View ID number. <strong>You cannot switch to Views that are not public.</strong></p>

	<a name="shortcode-type"></a>
	<h3>Choosing the Listing Type</h3>
	<div class="alert alert-info" role="alert">
		Do you need another kind of listing that isn't covered below? The &quot;Basic Data Feeds&quot; in CIOC which this plug-in uses are intended to be simple, and have limited available criteria. You may find the full <a href="http://ciocapidocs.readthedocs.org/en/latest/or-stdsearchapi.html" target="_blank">CIOC Remote Search and Details API</a> is more appropriate for your needs
		if you need advanced searching and record display capabilities. Please <a href="http://www.kclsoftware.com/contact-us/">contact us</a> if you would like to discuss or commission new listing types. 
	</div>

	<h4>Newest Records</h4>
	<p>This is the default listing type. You can choose it explicitly using <code>type=&quot;newest&quot;</code>, but it is not necessary. By default, the newest <?=$domain == 'volbasic'? 5 : 15 ?> records are shown and include
		<?php if($domain == 'volbasic') : ?>
    	the title of the Position, the posting Agency,
		<?php elseif($domain == 'cicbasic') : ?>
		the name of the record, 
		<?php endif; ?>
		the update or creation date, and link to the record in the source database is provided.</p>

	<div class="callout">[<?=$strShortCodeStart?>
		url=&quot;https://test.cioc.ca&quot;
		key=&quot;01234567-89AB-CDEF-0123-456789ABCDEF&quot;
		type=&quot;<mark>newest</mark>&quot;
		]
	</div>
	
	<?php if($domain == 'volbasic') : ?>
	
	<h4>Popular Categories</h4>
	<p>Retrieve a list of the top 9 categories for Volunteer Opportunity postings (&quot;Areas of Interest&quot; in the Online Resources software) using <code>type=&quot;popular_interests&quot;</code>. Categories show a count of current Opportunities in that category, and link to a search to retrieve the list of Opportunities in the target Online Resources database.</p>

	<div class="callout">[<?=$strShortCodeStart?>
		url=&quot;https://test.cioc.ca&quot;
		key=&quot;01234567-89AB-CDEF-0123-456789ABCDEF&quot;
		type=&quot;<mark>popular_interests</mark>&quot;
		]
	</div>

	<h4>Popular Organizations</h4>
	<p>Retrieve a list of the top 9 posting Agencies (organizations) with new or popular Volunteer Opportunity postings using <code>type=&quot;popular_orgs&quot;</code>. The list of Agencies will include the number of current Opportunities they have, and link to a search to retrieve the list of Opportunities for that Agency in the target Online Resources database.</p>

	<div class="callout">[<?=$strShortCodeStart?>
		url=&quot;https://test.cioc.ca&quot;
		key=&quot;01234567-89AB-CDEF-0123-456789ABCDEF&quot;
		type=&quot;<mark>popular_orgs</mark>&quot;
		]
	</div>

	<h4>Specific Organanization</h4>
	<p>To list up to 30 Opportunities from a specific organization, you must have the Record Number (&quot;NUM&quot;) of the posting Agency (organization) from the Online Resources database. Use <code>type=&quot;org&quot;</code> and <code>num=&quot;AAA1111&quot;</code> (where <em>AAA1111</em> is the Record Number).</p>
	
	<div class="callout">[<?=$strShortCodeStart?>
		url=&quot;https://test.cioc.ca&quot;
		key=&quot;01234567-89AB-CDEF-0123-456789ABCDEF&quot;
		type=&quot;<mark>org</mark>&quot;
		num=&quot;<mark>ABC0123</mark>&quot;
		]
	</div>
	
	<h4>Specific Category</h4>
	<p>To list up to 30 Opportunities that fall under a specific category (&quot;Area of Interest&quot;) you must have the special <em>Code</em> for that category - the name will not work. Super Users in the Online Resources can find the Code listing, or change the Codes for each Area of Interest, from <strong>Setup &gt; Classification Systems &gt; Specific Areas of Interest</strong>. If the database is using the standard list of Categories, the Code can be found from the <a href="https://github.com/OpenCIOC/volunteerclassifications/blob/master/csv/interest.csv" target="_blank">Open Data Listing of Interests</a></p>
	
	<div class="callout">[<?=$strShortCodeStart?>
		url=&quot;https://test.cioc.ca&quot;
		key=&quot;01234567-89AB-CDEF-0123-456789ABCDEF&quot;
		type=&quot;<mark>interest</mark>&quot;
		code=&quot;<mark>ADVOCACY</mark>&quot;
		]
	</div>
	
	<?php elseif($domain == 'cicbasic') : ?>
	
	<h4>Specific Taxonomy Code (Service Category)</h4>
	<p>Select a group of up to 50 records based on the type of service they provide using <code>type=&quot;taxonomy&quot;</code> and <code>code=&quot;BD-1800&quot;</code> where the code is a valid Taxonomy Code from <a href="https://211taxonomy.org/">211taxonomy.org</a>. Any level of the Taxonomy may be used, but there must be a record at or below this branch of the Taxonomy to return results. Availability of this feature depends on the target database being configured to use this Taxonomy. This query does not current support linked Terms or multiple Terms.</p>

	<div class="callout">[<?=$strShortCodeStart?>
		url=&quot;https://test.cioc.ca&quot;
		key=&quot;01234567-89AB-CDEF-0123-456789ABCDEF&quot;
		type=&quot;<mark>taxonomy</mark>&quot;
		code=&quot;<mark>BD-1800</mark>&quot;
		]
	</div>

	<h4>Specific Publication Code</h4>
	<p>In databases using Publication Codes to create lists of records, listings of up to 50 records by Publication Code are made using <code>type=&quot;pub&quot;</code> and <code>code=&quot;MY-CODE&quot;</code> (substituting the appropriate Publication Code). There is no way to search by a Publication's General Headings at this time.</p>
	
	<div class="callout">[<?=$strShortCodeStart?>
		url=&quot;https://test.cioc.ca&quot;
		key=&quot;01234567-89AB-CDEF-0123-456789ABCDEF&quot;
		type=&quot;<mark>pub</mark>&quot;
		code=&quot;<mark>MY-CODE</mark>&quot;
		]
	</div>
	
	<h4>Adding a Community Search</h4>
	<p>Communities can't be searched on their own, but can be added to Taxonomy Code or Publication Code Listing Types using <code>location=&quot;Community Name&quot;</code> or <code>servicearea=&quot;Community Name&quot;</code>. You cannot use both Location and Service Area criteria in the same request.</p>
	<p>You must know the <em>exact name</em> of the Community in the target database to create a working search. Where there are multiple Communities with the same name in the database, you can add the Province/State/Country Code for clarity; for example <code>location=&quot;Burlington|ON&quot;</code> would allow you to distinguish it from <code>location=&quot;Burlington|VT&quot;</code></p>
	
	<?php endif; ?>

	<a name="shortcode-fields"></a>
    <h3>Choosing the Fields to Display</h3>
    <p>You can add additional fields to your list display by adding any or all of the following shortcode options:</p>
    
    <?php if($domain == 'volbasic') : ?>
	<ul>
		<li>Location: <code>location=&quot;on&quot;</code></li>
		<li>Duties: <code>duties=&quot;on&quot;</code></li>
	</ul>
	<p>The name of the posting Agency is shown by default. Turn this off using <code>org=&quot;off&quot;</code>.</p>
	
	<?php elseif($domain == 'cicbasic') : ?>
	<ul>
        <li>Shortened Description: <code>desciption=&quot;on&quot;</code></li>
		<li>Site Address (or Community name, if no Site Address): <code>address=&quot;on&quot;</code></li>
		<li>Office Phone: <code>office_phone=&quot;on&quot;</code></li>
		<li>Email: <code>email=&quot;on&quot;</code></li>
        <li>Website: <code>web=&quot;on&quot;</code></li>
        <li>Hours of Operation: <code>hours=&quot;on&quot;</code></li>
	</ul>
	
	<?php endif; ?>

	<a name="shortcode-style"></a>
    <h3>Styling the List</h3>
    <p>There are several options available to help you style your list. You can use any combination of these options, or none.</p>
    <p>Don't know anything about HTML or CSS? Add the <code>style_me=&quot;on&quot;</code> option to benefit from some pre-defined styles.</p>
    
    <div class="callout">[<?=$strShortCodeStart?>
		url=&quot;https://test.cioc.ca&quot;
		key=&quot;01234567-89AB-CDEF-0123-456789ABCDEF&quot;
		style_me=&quot;<mark>on</mark>&quot;
		]
	</div>
    
    <p>Do you want to be very specific about how the list is styled, to match your existing site? Trying using one of the following...</p>
    <ul>
    	<li>Give the list an <strong>id</strong> for applying styles in your CSS using <code>list_id=&quot;name-of-your-id&quot;</code>.  This allows you to change the style of one specific instance of the list.</li>
        <li>Give the list a <strong>class</strong> for applying styles in your CSS using <code>list_class=&quot;name-of-your-class&quot;</code>. This allows you to change the style of all instances of similar lists, for consistent formatting.</li>
    </ul>
    </p>Note: the list may be a <strong>dl</strong> or <strong>ul</strong> depending on the Listing Type.</p>
       
    <a name="shortcode-icon"></a>
    <h3>Enabling Icons</h3>
    <p>If your WordPress site includes the <a href="https://fortawesome.github.io/Font-Awesome/">FontAwesome Icon Library</a>, you can further style your list through the use of icons that will appear next to each included field. Turn on icons using <code>has_fa=&quot;on&quot;</code>.</p>
	<p>Icons used include:</p>
	
    <?php if($domain == 'volbasic') : ?>
	<ul class="fa-ul">
		<li><i class="fa-li fa fa-institution"></i>Organization</li>
		<li><i class="fa-li fa fa-map-marker"></i>Location</li>
	</ul>
	<p>The name of the posting Agency is shown by default. Turn this off using <code>org=&quot;off&quot;</code>.</p>
	
	<?php elseif($domain == 'cicbasic') : ?>
	<ul class="fa-ul">
		<li><i class="fa-li fa fa-map-marker"></i>Site Address / Community name</li>
		<li><i class="fa-li fa fa-phone"></i>Office Phone</li>
		<li><i class="fa-li fa fa-envelope"></i>Email</li>
        <li><i class="fa-li fa fa-link"></i>Website</li>
        <li><i class="fa-li fa fa-calendar-o"></i>Hours of Operation</li>
	</ul>
	
	<?php endif; ?>

	<a name="shortcode-debug"></a>
	<h3>Debug Mode (for Website Developers)</h3>
	<p>
		If you are testing out your Plug-in, you can use
		<code>debug=&quot;on&quot;</code>
		to be provided with a direct link to the JSON data provided by the API
		using the current settings. This will also allow you to view any error
		messages coming from the API.
	</p>
</div>

<?php
include ("includes/incFooter.php")?>
