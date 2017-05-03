<?php
include "acHeader.php";
?>
<div class='container'>
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>Messages Page</h1>
			<p>
			The messages page is where a user sees all the messages sent to or from their account.
			Messages appear in chronological order, with the most recent message first. Messages cannot be sent from a
			guest login session. To create a new message, a user clicks <span class="codeExample">New Message</span>.
			The new message window contains several fields. 
			<ul class="list-group">
				<li class="list-group-item list-group-item-info">
					<strong>The <span class="codeExample">To</span> field:</strong> This field can include one or many (up to 9) other ArtConnect users.
					To include another user in the message, the other user's username must be entered.
				</li>
				<li class="list-group-item list-group-item-info">
					<strong>The <span class="codeExample">Subject</span> field:</strong> This field can include up to 30 chararcters of plain (ASCII) text.
				</li>
				<li class="list-group-item list-group-item-info">
					<strong>The <span class="codeExample">Body</span> field:</strong> This field can include up to 5000 chararcters of plain (ASCII) text.
				</li>
				<li class="list-group-item list-group-item-info"><strong>The <span class="codeExample">Attachments</span> field:</strong> This field can include up to three attachments. Accepted file extensions are
					<ul>
						<li>jpg</li>
						<li>jpeg</li>
						<li>png</li>
						<li>PDF</li>
						<li>txt</li>
						<li>doc</li>
					</ul>
				</li>
				<li class="list-group-item list-group-item-info">
					<strong>The <span class="codeExample">Send</span> button:</strong> This button sends the message to each of the recipients found in the 
					To: field. 
				</li>
			</ul>
			</p>
			<p>
			By default, when the messages page is loaded, users only see the first 10 messages in their pile.
			Users can see all messages by clicking <span class="codeExample">show all messages</span>.
			</p>
			<h1>Searching</h1>
			<p>
			Messages can be searched based on the following criteria:
			</p>
			<ul class="list-group">
				<li class="list-group-item list-group-item-success">
					<strong><span class="codeExample">The Sender</span></strong>
				</li>
				<li class="list-group-item list-group-item-success">
					<strong><span class="codeExample">The Subject</span></strong>
				</li>
				<li class="list-group-item list-group-item-success">
					<strong><span class="codeExample">The Attachment(s)</span></strong>
				</li>
				<li class="list-group-item list-group-item-success">
					<strong><span class="codeExample">The Message Body</span></strong>
				</li>
			</ul>
		</div>
	</div>
</div>
