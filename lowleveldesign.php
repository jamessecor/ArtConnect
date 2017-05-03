<?php
include "acHeader.php";
?>


<div class='container'>
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>Low-Level Design</h1>
			<p>
			The purpose of this low-level design document, is to describe the inner workings of the website design, 
			including what should be on each page, how pages are interconnected, how individual pages interact with the database,
			and what session variables will be accessible while a user is logged in.
			</p>
			<p>
			<a href="index.php">To view information on ArtConnect Vermont's Background, click here.</a>
			
			<h1>Page Design</h1>
			<img src="pagesDesign.png" alt="Image Temporarily Unavailable">
			<p>
			The page design diagram indicates the dependency hierarchy within the page structure of ArtConnect Vermont.
			Dependency flows upward, such that elements below depend on elements above them.
			In order to access any user account, a user must first log in. To send messages, a user must be logged in as either 
			<span class='codeExample'>Buyer</span> or <span class='codeExample'>Member</span>.
			</p>
			<p>
			If the clusters of arrows between account types and the lower pages are confusing, simply put, guests have access to 
			the calendar, threads, and images pages, whereas members and buyers have access to all pages.
			</p>
			<h1>User/System Interaction Example</h1>
			<img src="interactions.png" alt="Image Temporarily Unavailable">
			<p>
			This diagram shows potential interactions between a user and the ArtConnect Vermont system.
			Recognize that the user cannot perform any actions within the system before logging in.
			Once logged in, other actions can occur regardless of whether the system has responded.
			</p>
			<h1>Searching</h1>
			<p>
			Searches performed within the ArtConnect application will be implemented using PHP. 
			Queries are dynamically build, depending on user input. A different query is built depending on which search criteria the user included. 
			Searches can include one or multiple criteria.
			</p>
			<p>
			The following is an example of a query build in PHP.
			</p>
			<pre class="codeExample">

<span class="codeComment">// Process search inputs from user</span>

$query = "SELECT i.filename, i.media, i.price, i.title, u.firstname, u.lastname
          FROM imagesTable i 
          JOIN users u ON i.artistID = u.userID
          WHERE u.username = '$username';";
		  
<span class="codeComment">// Send query to the database and display results to the user</span>
			
			</pre>
		</div>
	</div>
</div>

