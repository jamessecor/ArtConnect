<?php
include "acHeader.php";
?>
<div class='container'>
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>User Profile Page</h1>
			<p>
			The user profile page displays all information about a user. The user can update this information during any session. There is no limit to the number of updates.
			Users can upload a profile picture that is displayed next to any message or thread post. Elements of the profile page include
			</p>
			<ul class="list-group">
				<li class="list-group-item list-group-item-info">
					<strong><span class="codeExample">First and Last Name</span></strong> Users are encouraged to use their actual first and last name.
				</li>
				<li class="list-group-item list-group-item-info">
					<strong><span class="codeExample">Username</span></strong> The username is the name that will appear on all user posts, whether they be 
					images, messages, posts to threads. The username is also how the system identifies a user. It is through the username that the system 
					can load personalized pages.
				</li>
				<li class="list-group-item list-group-item-info">
					<strong><span class="codeExample">Email</span></strong> This field is hidden from other users. ArtConnect keeps your email so that important
					messages about the system or a user's account can be sent by email.
				</li>
				<li class="list-group-item list-group-item-info">
					<strong><span class="codeExample">Profile Picture</span></strong> This image is an additional way that users are identified when they 
					send messages, images, or post to a thread.
				</li>
				<li class="list-group-item list-group-item-info">
					<strong><span class="codeExample">Town</span></strong> Since ArtConnect's goal is to connect local artists, the town of residence is public.
				</li>
			</ul>
			<p>
			<!-- Users can see all threads by clicking <span class="codeExample">show all threads</span>.-->
			</p>
		</div>
	</div>
</div>
