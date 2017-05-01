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
				Typically, pages will have blocks of PHP code interspersed with blocks of HTML and JavaScript.
				</p>
				<div class="codeExample">
					< ?php <br>
					// PHP code here<br>
					? ><br>
					HTML and JavaScript here<br>
					. . .
				</div>
		</div>
	</div>
</div>
<?php
include "acFooter.php";
?>