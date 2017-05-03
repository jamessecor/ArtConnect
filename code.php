<?php
include "acHeader.php";
?>
<div class='container'>
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>Coding & Style</h1>
				<p>
				ArtConnect Vermont is a system built using HTML, CSS, JavaScript, and PHP. 
			    The PHP language is used to do all of the server-side processing. 
			    PHP gathers user information via the client-side user interface (UI).
				Information is sent to and retrieved from the database using PHP. 
				Once the processing is complete, PHP generates HTML, which it sends back to the client browser.
			    Detailed information on processing can be found in the "pages" tab.
			    </p>
				<p>
				Each page within ArtConnect Vermont includes the header/footer files. <a href="header.php">More info on header/footer.</a>
				</p>
				<p>
				Typically, pages will be comprised of interspersed blocks of PHP, HTML, and JavaScript code.
				</p>
				<div>
					<pre class="codeExample">
				
&lt;?php
    <span class="codeComment">// PHP code here</span>
?&gt;
<span class="codeComment">&lt;!-- HTML here --></span>
&lt;script&gt;
    <span class="codeComment">// JavaScript here</span>
&lt;/script&gt;
<span class="codeComment">&lt;!-- More HTML here --></span>
etc.
					</pre>
				</div>
		</div>
	</div>
</div>
