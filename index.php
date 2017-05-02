<?php
include "acHeader.php";
?>


<div class='container'>
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>Introduction</h1>
			<p>
			The purpose of this low-level design document, is to describe the inner workings of the website design, 
			including what should be on each page, how pages are interconnected, how individual pages interact with the database,
			and what session variables will be accessible while a user is logged in.
			</p>
			<a id="extra">
			ArtConnect Vermont Background
			</a>
			<script>
			$(document).ready(function() {
				$("#extra").click(function() {
					$("#more").fadeToggle();
				});
			});
			</script>
			<div id="more" style="display:none">
				<p>
				Community is very important to Vermonters. 
				We often pride ourselves on the interconnected web that is Vermont’s citizenry. 
				The second fiddle player you see at an evening of baroque music could be your neighbor’s car mechanic. 
				Your child’s ski instructor could also be your state representative. 
				In addition to the fact that Vermont is a small state, these connections are possible because many, if not all, 
				Vermonters are multi-talented and spread their daily routines among various occupations and pursuits. 
				</p>
				<p>
				Included in the state’s population is a large subgroup of artists and makers. 
				ArtConnect Vermont deploys software that connects artists with other artists, with potential buyers, 
				with calendar listings throughout the various regions of the state for calls to artists, current and upcoming exhibitions, 
				and show receptions. There are also threads that can help organize ArtConnect communication. 
				Threads are artist-made, titled discussion forums. 
				Potential threads include a thread to share information about available studio space called Studio Space or 
				one to critique each other’s work called Critiques. Artists can also initiate individual or group conversations. 
				These conversations are useful as artists might be looking for ideas of where to show their work or what other artists 
				they could look at for inspiration. These types of conversation are better suited for smaller groups, or one-to-one. 
				</p>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>Page Design</h1>
			<img width="100%" src="pagesDesign.png" alt="Image Temporarily Unavailable">
			<p>
			The page design diagram indicates the dependency hierarchy within the page structure of ArtConnect Vermont.
			Dependency flows upward, such that elements below depend on elements above them.
			In order to access any user account, a user must first log in.
			</p>
		</div>
	</div>
</div>

