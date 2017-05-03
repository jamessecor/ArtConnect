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
			<!--
			<h1>Example</h1>
			<div class="codeExample">
				<div class="codeComment">
					// Boolean function which returns true if user is logged in<br>
				</div>
				isLoggedIn() {<br>
				<div class="codeComment">
					// Show contents of page<br>
				</div>
				} else {<br>
				<div class="codeComment">
					// Send user to login page<br>
				</div>
				}
			</div>
			-->
		</div>
	</div>
</div>
