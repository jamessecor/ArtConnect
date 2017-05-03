<?php
include "acHeader.php";
?>
<div class='container'>
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>Calendar Page</h1>
			<p>
			The calendar page shows a subset of all activites that have been posted to ArtConnect Vermont. To add an event to the calendar,
			a user clicks <span class="codeExample">New Event</span>. The new event window contains several fields. 
			Events can be one-day events or multiple-day events. In the list below, date refers to a one-day event, and begin and end dates refer to a multi-day event.
			</p>
			<ul class="list-group">
				<li class="list-group-item list-group-item-info">
					<strong><span class="codeExample">Date</span></strong> This is the date for the one-day event.
				</li>
				<li class="list-group-item list-group-item-info">
					<strong><span class="codeExample">Begin Date</span></strong> This is the start date for the multi-day event.
				</li>
				<li class="list-group-item list-group-item-info">
					<strong><span class="codeExample">End Date</span></strong> This is the end date for the multi-day event.
				</li>
				<li class="list-group-item list-group-item-info">
					<strong><span class="codeExample">Event Title</span></strong> Events can be given a title. This is it.
				</li>
				<li class="list-group-item list-group-item-info">
					<strong><span class="codeExample">Description</span></strong> The event description allows a user to define event details, such as recommended apparel or 
					age range.
				</li>
				<li class="list-group-item list-group-item-info">
					<strong><span class="codeExample">Price</span></strong> The event's price goes here.
				</li>
				<li class="list-group-item list-group-item-info">
					<strong><span class="codeExample">Ticket URL</span></strong> If tickets are being sold online, a link to the ticketing website is provided.
				</li>
			</ul>
			<h1>Searching</h1>
			<p>
			Calendar activities can be searched based on the following criteria:
			</p>
			<ul class="list-group">
				<li class="list-group-item list-group-item-success">
					<strong><span class="codeExample">Location</span></strong> Calendar events have a location (city or town). Users can search based on the distance from
					a town. If a user inputs Brattleboro and distance 0, only events taking place in Brattleboro will be listed.
				</li>
				<li class="list-group-item list-group-item-success">
					<strong><span class="codeExample">Date Range</span></strong> Calendar listings have a start date and an end date. A search can include any date range.
				</li>
				<li class="list-group-item list-group-item-success">
					<strong><span class="codeExample">Event Type</span></strong> Events are listed under one or more types. A search can include any number of types.
				</li>
				<li class="list-group-item list-group-item-success">
					<strong><span class="codeExample">Price</span></strong> Users can search the calendar based on a price range. 
					A user can input only a lower bound, only an upper bound, or both lower and upper bounds.
				</li>
				
			</ul>
		</div>
	</div>
</div>
