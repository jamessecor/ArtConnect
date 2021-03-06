<?php
include "acHeader.php";
?>
<div class='container'>
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>Images Page</h1>
			<p>
			The images page displays a selection of images that users have uploaded to ArtConnect Vermont. This page includes the ability to
			perform a search based on the following criteria:			
			</p>
			<ul class="list-group">
				<li class="list-group-item list-group-item-info">
					<strong><span class="codeExample">Artist</span></strong> Users can search images based on the artist by username, firstname, and/or lastname.
				</li>
				<li class="list-group-item list-group-item-info">
					<strong><span class="codeExample">Medium/Media</span></strong> Users can search images based on the medium or media used to create the artwork.
					Expected inputs include 
					<ul>
						<li>Mixed Media</li><li>Watercolor</li><li>Acrylic Paint</li><li>Charcoal</li><li>etc.</li>
					</ul>
				</li>
				<li class="list-group-item list-group-item-info">
					<strong><span class="codeExample">Price</span></strong> Users can search images based on a price range. 
					A user can input only a lower bound, only an upper bound, or both lower and upper bounds.
				</li>
				
			</ul>
			<p>
			The search functionality will be implemented using PHP. Queries are dynamically build, depending on user input. A different query
			is built depending on which search criteria the user included. Searches can include 1, 2, or all 3 of the criteria above.
			</p>
			<p>
			Users can search images based on the following criteria:
			</p>
			<ul class="list-group">
				<li class="list-group-item list-group-item-success">
					<strong><span class="codeExample">The User Who Posted</span></strong>
				</li>
				<li class="list-group-item list-group-item-success">
					<strong><span class="codeExample">The Artist</span></strong>
				</li>
				<li class="list-group-item list-group-item-success">
					<strong><span class="codeExample">The Medium/Media</span></strong>
				</li>
				<li class="list-group-item list-group-item-success">
					<strong><span class="codeExample">The Genre (landscape, still life, portrait, etc.</span></strong>
				</li>
			</ul>				
			
		</div>
	</div>
</div>
