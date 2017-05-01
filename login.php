<?php
include "acHeader.php";
?>
<div class='container'>
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>Login Page</h1>
			<p>
			The login page shows inputs for a user's username and password. Users can also login as guest (with only guest previliges).
			Before a user logs in, they cannot access any other part of the ArtConnect application. Once logged in, the username session variable is
			set and is used on all pages to check if a user is logged in. If the check fails, they are redirected to the login page.			
			</p>
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
		</div>
	</div>
</div>
<?php
include "acFooter.php";
?>