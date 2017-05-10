<?php
include "acHeader.php";
?>


<div class='container'>
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>Introduction</h1>
			<p>
			This site is a low-level design to be used to implement the ArtConnect Vermont application. ArtConnect is a web-based system that
			allows users to connect with their local art community.
			</p>
			<p>
			Code samples and other keywords throughout the document will be formatted in the following way:
			<span class="codeExample">Code Example</span>
			</p>
			<p>
			Use the navbar to navigate through the various aspects of the system.
			</p>
			<ul class="list-group">
				<li class="list-group-item list-group-item-success">
					<a id="extra">&rarr; ArtConnect Vermont Background</a>
				</li>
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
				<li class="list-group-item list-group-item-success">
					<a id="influences">&rarr; Influences</a>
				</li>
				<div id="moreInfluences" style="display:none">
					<h2>Front Porch Forum</h2>
					<p>
					Vermonters across the state will realize the impact Front Porch Forum (FPF) has had on our communities. In Montpelier, the length of the daily postings grew so long that FPF decided to send out shorter postings more frequently so that email readers would not cut the messages short. ArtConnect Vermont borrows elements from FPF’s community-building platform such as allowing users to see each other’s address, name and email.
					</p>
					<h2>Slack</h2>
					<p>
					Slack is another software package that has influenced users looking for ways to connect. It allows users to form a team. Within a team, members can send messages, upload files, create messages within any subset of the team (including one-to-one), and create “threads”, which can be named and provide a way of organizing communications. All information sharing is limited to the team. ArtConnect uses many of these lines of communication but opens them to a broader group of people.
					</p>

					<h2>Etsy</h2>
					<p>
					Etsy is a platform for artists and other small-scale production groups or individuals to sell their artwork and/or products. Anyone with access to Etsy’s website can search through any vendor’s merchandise and buy it. Vendors pay a small fee to post items so that users can search and find them. ArtConnect members can sell their work on our platform.
					</p>
				</div>
				<li class="list-group-item list-group-item-success">
					<a id="diff">&rarr; How is ArtConnect Vermont Different?</a>
				</li>
				<div id="moreDiff" style="display:none">
					ArtConnect is a system that is most like Slack. The difference being that all users on the platform are, in a sense, part of the same team. That is, all users (depending on privilege – see User Roles below) can send messages to one another and follow all threads on ArtConnect. Within the system, any user can send a message to any other user, or any subset of users. Users can upload files (images [.jpg, .jpeg] and text [.txt, .pdf], for now) and share them with any group. As with FPF, when signing up, users will provide their address. This provides the community with a sense of where its members are located. Some of the above activity is not available to all ArtConnect users. For clarity on user roles, see the User Roles section below.
				</div>
			</ul>
			<script>
			$(document).ready(function() {
				$("#extra").click(function() {
					$("#more").fadeToggle();
				});
				$("#influences").click(function() {
					$("#moreInfluences").fadeToggle();
				});
				$("#diff").click(function() {
					$("#moreDiff").fadeToggle();
				});
			});
			</script>
		</div>
	</div>
</div>

