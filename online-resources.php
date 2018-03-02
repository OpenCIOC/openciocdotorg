<?php
$strTitle = "Online Resources Software";
$strSection = "Projects";
include("includes/incHeader.php");
?>

	<div class="jumbotron">
		<div class="container">
        	<div class="row">
            	<div class="col-sm-6 col-md-8">
                    <h1><?=$strTitle?></h1>
                    <p>
                    <?php include("snippets/or-desc.html")?>
					It is comprised of a Community Resources module, <a href="online-resources-cr.php">Connecting Communities: communityinfo.online</a> and a Volunteer Opportunities module, <a href="online-resources-vo.php">Connecting Volunteers: volunteersearch.online</a>.
                    </p>
                </div>
                <div class="col-sm-6 col-md-4">
	                <img src="img/online-resources.png" class="img-responsive padding-top-bottom-20" alt="Online Resources: connecting people with services" style="display:block; margin:auto;"/>
                </div>
            </div>
        </div>
	</div>
	
	<hr>
	<div class="container">
			<div class="callout callout-info">The source code repository for this project is available at <a href="https://github.com/OpenCIOC/onlineresources">https://github.com/OpenCIOC/onlineresources</a></div>
		<div class="row">
			<div class="col-sm-6">
				<img src="img/community-info-online.png" alt="Community Resources: communityinfo.online" class="img-responsive padding-top-bottom-20"/>
				<p>
				<?php include("snippets/cr-mod-desc.html")?>
				</p>
				<p><a class="btn btn-default" href="online-resources-cr.php" role="button">View feature sheet &raquo;</a></p>
			</div>
			<div class="col-sm-6">
				<img src="img/volunteer-search-online.png" alt="Connecting Volunteers: volunteersearch.online" class="img-responsive padding-top-bottom-20"/>
				<p>
				<?php include("snippets/vo-mod-desc.html")?>
				</p>
				<p><a class="btn btn-default" href="online-resources-vo.php" role="button">View feature sheet &raquo;</a></p>
			</div>
		</div>
	</div>
<?php
include("includes/incFooter.php")
?>
