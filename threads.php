<?php
include "acHeader.php";
?>
<div class='container'>
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>Threads Page</h1>
			<p>
			The threads page is where a user sees all the threads that they have joined. 
			Threads are chains of public messages to which any user (provided they are not signed in as guest)
			can post. Threads have a title and an optional, brief (250-character) description. Any user can 
			view all threads. If users want to create a private message, they should use the message component of
			ArtConnect.
			</p>
			<p>
			By default, when the threads page is loaded, users only see the threads to which they subscribe.
			To join a new thread, the user must click <span class="codeExample">join thread</span>.
			Users can see all threads by clicking <br><span class="codeExample">show all threads</span>.
			</p>
			<p>
			Joining a thread simply means that the user, when logged in and accessing the threads page, will automatically
			see that thread in the list of their threads. That is, once a user has joined a thread, they need not search 
			for that thread using the search page.
			</p>
			<h1>Searching</h1>
			<p>
			Users can search threads based on the following criteria:
			</p>
			<ul class="list-group">
				<li class="list-group-item list-group-item-success">
					<strong><span class="codeExample">The Poster</span></strong>
				</li>
				<li class="list-group-item list-group-item-success">
					<strong><span class="codeExample">Keywords</span></strong>
				</li>
				<li class="list-group-item list-group-item-success">
					<strong><span class="codeExample">Attachment(s)</span></strong>
				</li>
			</ul>
		</div>
	</div>
</div>
