<?php
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	
	$App 	= new App();	
	$Nav	= new Nav();	
	$Menu 	= new Menu();		
	include($App->getProjectCommon());
	
/*******************************************************************************
 * Copyright (c) 2009 Eclipse Foundation and others.
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 *
 * Contributors: Christopher Frost
 *               Mike Keith
 *    
 *******************************************************************************/

	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Gemini JPA - Downloads";
	$pageKeywords	= "Eclipse, EclipseRT, OSGi, JPA, Downloads";
	$pageAuthor		= "Mike Keith";

	$milestoneM1 = "1.2.0.M1";
	$milestoneM2 = "1.2.0.M2";
	$milestoneRC1 = "1.2.0.RC1";

	$latestMilestone = "1.2.0.M1";

	$latestRelease = "1.1.0.RELEASE";

	ob_start();
?>
	
	<div id="midcolumn">
		<h2>Gemini JPA - Downloads</h2>
		<p>
			All downloads are provided under the terms and conditions of the 
			<a href="/legal/epl/notice.php">Eclipse Foundation Software User Agreement</a> unless otherwise specified.
		</p>
        <h2>Latest Gemini JPA Release</h2>
		<br/>
        <h4>Gemini JPA 1.1</h4>
          <a href="http://www.eclipse.org/downloads/download.php?file=/gemini/jpa/r1.1/gemini-jpa-1.1.0.RELEASE.zip" target="_self">
            <img align="left" src="http://dev.eclipse.org/huge_icons/actions/go-bottom.png" alt="Download" />
            <br/><br/>
          <a href="http://www.eclipse.org/downloads/download.php?file=/gemini/jpa/r1.1/gemini-jpa-1.1.0.RELEASE.zip" target="_self"> Download Zip</a> 
             <br/><br/><br/>
		<p>
			Update site - http://download.eclipse.org/gemini/updates/jpa/1.1.0
		</p>
		<p>
			Maven repo - http://download.eclipse.org/gemini/mvn
		</p>

        <h2>Previous Gemini JPA Releases</h2>
		<br/>
	<h4>Gemini JPA 1.0</h4>
	        <br/>
		<p>
			<a href="http://www.eclipse.org/downloads/download.php?file=/gemini/jpa/r1.0/gemini-jpa-1.0.0.RELEASE.zip" target="_self">Download Zip</a>
		</p>
		<p>
			Update site - http://download.eclipse.org/gemini/updates/jpa/1.0.0
		</p>
		<p>
			Maven repo - http://download.eclipse.org/gemini/mvn
		</p>

        <h2>Latest Milestone of Gemini JPA: <?=$latestMilestone ?></h2>
		<br/>
		<p>
			<a href="http://www.eclipse.org/downloads/download.php?file=/gemini/jpa/r1.2/milestones/gemini-jpa-<?=$latestMilestone ?>.zip" target="_self">Download Zip</a>
		</p>
        <p>
            Gemini JPA milestone P2 update site - http://download.eclipse.org/gemini/jpa/updates
        </p>
<!--        <p>
            Gemini JPA milestone maven repo - http://download.eclipse.org/gemini/jpa/mvn
        </p>
-->
<!--
        <h4>Milestones of Gemini JPA</h4>
		<br/>
		<p>
			<a href="http://www.eclipse.org/downloads/download.php?file=/gemini/jpa/r1.0/milestones/gemini-jpa-<?=$milestoneRC3 ?>.zip" target="_self">1.0.0 RC3</a>
			<br/>
			<a href="http://www.eclipse.org/downloads/download.php?file=/gemini/jpa/r1.0/milestones/gemini-jpa-<?=$milestoneRC2 ?>.zip" target="_self">1.0.0 RC2</a>
			<br/>
			<a href="http://www.eclipse.org/downloads/download.php?file=/gemini/jpa/r1.0/milestones/gemini-jpa-<?=$milestoneRC1 ?>.zip" target="_self">1.0.0 RC1</a>
		</p>
        -->
	</div>

	<!-- remove the entire <div> tag to omit the right column! 
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Incubation</h6>
			<div id="incubation">
				<a href="/projects/what-is-incubation.php">
					<img align="center" src="/images/egg-incubation.png" border="0" alt="Incubation" />
				</a>
			</div>
		</div>
	</div>
    -->
<?
	$html = ob_get_clean();
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>