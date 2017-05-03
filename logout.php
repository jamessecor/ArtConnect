<?php
include "acHeader.php";
?>

<div class='container'>

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>Log Out Page</h1>
			<p>
			The log out page displays a message to the user that they have successfully logged out of ArtConnect Vermont.
			The code simply unsets the user's session name and displays the message.
			</p>
			<h1>Example</h1>
			<pre class="codeExample">
		
&lt;?php
<span class="codeComment">// logout.php code example</span>

<span class="codeComment">// Navbar</span>
include "header.php";

if(isset($_SESSION['username'])) {
	unset($_SESSION['username']);
	header('Location: logout.php');
}

print "&lt;h1&gt;Log Out Successful&lt;/h1&gt;";
print "&lt;p>You are currently logged out. 
    &lt;br&gt;Please use this link to &lt;a href='login.php'&gt;Login&lt;/a&gt;&lt;/p&gt;";
print "&lt;/div&gt;";

<span class="codeComment">// Logo, contact info, and link to about page</span>
include "footer.php";

?>
			</pre>
		</div>
	</div>
</div>
