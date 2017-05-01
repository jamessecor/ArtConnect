<?php
include "acHeader.php";
?>
<div class='container'>
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>Header/Footer</h1>
			<p>
			The header and footer files are included at the beginning and end, respectively,
			of other pages so that as users navigate ArtConnect Vermont, 
			certain aspects of the application are available from any page. 
			</p>
			<p>
			The header file includes the navbar. The elements in the navbar are
				<ul>
					<li><a href="login.php">Login</a></li>
					<li><a href="threads.php">Threads</a></li>
					<li><a href="messages.php">Messages</a></li>
					<li><a href="search.php">Search</a></li>
					<li><a href="profile.php">Profile</a></li>
					<li><a href="logout.php">Log Out</a></li>
				</ul>
			</p>
			<p>
			The footer file includes other information about ArtConnect: the logo and a link to the ArtConnect homepage
			</p>
		</div>
	</div>
</div>
<?php
include "acFooter.php";
?>