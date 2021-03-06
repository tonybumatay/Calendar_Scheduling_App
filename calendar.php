<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Calendar</title>
    <link href='http://fonts.googleapis.com/css?family=Crimson+Text' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/calendar.css" rel="stylesheet">
</head>

<body>
    <h1 id = "greeting"></h1>
    <div class="jumpMonthDiv">
        <h4>Jump To:</h4>
		Month <input type="number" class="jumpMonth" placeholder="01" min="1" max="12" name="jumpMonth" id="newMonth" required>
		Year <input type="number" class="jumpMonth" placeholder="2015" min="0" max="3000"name="jumpYear" id="newYear" required>
		<button type="submit" id="jump-btn" value="Submit" class="btn btn-primary btn-lg jump-btn">Jump Month</button>
     </div>
    <button  type="button" id="outterLogin-btn" class="btn btn-primary btn-md top-btn" data-toggle="modal" data-target=".login">Login</button><br>
    <!-- Small modal -->
					<div class="modal fade login" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
					  <div class="modal-dialog modal-sm">
					    <div class="modal-content">
					      	<h3 class="modalHeader">Login</h3>
					      	<h4>Username</h4>
				            <input type="text" id="usernameLogin"name="username"required>
				         	<h4>Password</h4>
				            <input type="password" id="passwordLogin" name="password"required>
				            <br>
				            <button id="login-btn" type="submit" value="Submit" class="btn btn-primary btn-lg">Login</button>
					    </div>
					  </div>
					</div>
    <button  type="button" id="outterCA-btn" class="btn btn-primary btn-md top-btn" data-toggle="modal" data-target=".createAccount">Create Account</button>
    <!-- Small modal -->
					<div class="modal fade createAccount" id="createAccountModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
					  <div class="modal-dialog modal-sm">
					    <div class="modal-content">
					      	<h3 class="modalHeader">Create Account</h3>
					      	<h4>Username</h4>
				            <input id="usernameCreate" type="text" name="username"required>
				         	<h4>Password</h4>
				            <input id="passwordCreate" type="password" name="password" required>
				            <br>
				            <h4>Verify Password</h4>
				            <input id="passwordVerify" type="password" name="password" required><br>
				            <button id="createAccount-btn" type="submit" value="Submit" class="btn btn-primary btn-lg">Create Account</button>
					    </div>
					  </div>
					</div>
	<button  type="button" id="logout-btn" class="btn btn-primary btn-md top-btn">Logout</button>
			
    <div class="calendar">
        <h1 id="currentYear"></h1>
        <h2 id="currentMonth"></h2>
        <div class="changeMonth row">
        	<div >
	        	<a href="#"><h5 id="previousMonth"></h5></a>
	        </div>
	        <div >
	        	<a href="#"><h5 id="nextMonth"></h5></a>
	        </div>
        </div>
        
        <table>
        	<tr class="days">
        		<th>Sun</th>
        		<th>Mon</th>
        		<th>Tue</th>
        		<th>Wed</th>
        		<th>Thu</th>
        		<th>Fri</th>
        		<th>Sat</th>
        	</tr>
        	<tr>
        		<td><a href="#addEvent"><div class="dayNumber" data-toggle="modal" data-target=".addEvent1">1</div></a>
        		<!-- Small modal -->
					<div class="modal fade addEvent addEvent1" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
					  <div class="modal-dialog modal-sm">
					    <div class="modal-content">
					      	<h3 class="modalHeader">Add an Event</h3>
					      	<h4>Date and Time</h4>
				            <input type="datetime-local" name="eventTime"required>
				         	<h4>Event Name</h4>
				            <input type="text" name="eventName"required>
				            <h4>Description</h4>
				            <input type="text" name="eventDesc"><br>
				            <h4>Recurring Event</h4>
							<input type="checkbox" name="recurring" value="weekly" >Weekly<br>
							<input type="checkbox" name="recurring" value="monthly">Monthly<br>
							Number of Recurrences <input type="number" placeholder="1" name="numRecur" min="0" max="100" value="numRecur"><br>
				           	<button type="submit" value="Submit" class="btn btn-primary btn-lg addEvent-btn">Add Event</button>
					    </div>
					  </div>
					</div>
        		<ul class="eventsUL">
        			<li>Event 1</li>
        			<li>Event 2</li>
        			<li>Event 3</li>
        		</ul>
        		</td>
        		<td><a href="#addEvent"><div class="dayNumber" data-toggle="modal" data-target=".addEvent2">2</div></a>
        		<!-- Small modal -->
					<div class="modal fade addEvent addEvent2" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
					  <div class="modal-dialog modal-sm">
					    <div class="modal-content">
					      <h3 class="modalHeader">Add an Event</h3>
					      	<h4>Date and Time</h4>
				            <input type="datetime-local" name="eventTime"required>
				         	<h4>Event Name</h4>
				            <input type="text" name="eventName"required>
				            <h4>Description</h4>
				            <input type="text" name="eventDesc"><br>
				            <h4>Recurring Event</h4>
							<input type="checkbox" name="recurring" value="weekly" >Weekly<br>
							<input type="checkbox" name="recurring" value="monthly">Monthly<br>
							Number of Recurrences <input type="number" placeholder="1" name="numRecur" min="0" max="100" value="numRecur"><br>
				            <button type="submit" value="Submit" class="btn btn-primary btn-lg addEvent-btn">Add Event</button>
					    </div>
					  </div>
					</div>
        		<ul class="eventsUL">
        			<li>Event 1</li>
        			<li>Event 2</li>
        			<li>Event 3</li>
        		</ul>
        		</td>
        		<td><a href="#addEvent"><div class="dayNumber" data-toggle="modal" data-target=".addEvent3">3</div></a>
        		<!-- Small modal -->
					<div class="modal fade addEvent addEvent3" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
					  <div class="modal-dialog modal-sm">
					    <div class="modal-content">
					      <h3 class="modalHeader">Add an Event</h3>
					      	<h4>Date and Time</h4>
				            <input type="datetime-local" name="eventTime"required>
				         	<h4>Event Name</h4>
				            <input type="text" name="eventName"required>
				            <h4>Description</h4>
				            <input type="text" name="eventDesc"><br>
				            <h4>Recurring Event</h4>
							<input type="checkbox" name="recurring" value="weekly" >Weekly<br>
							<input type="checkbox" name="recurring" value="monthly">Monthly<br>
							Number of Recurrences <input type="number" placeholder="1" name="numRecur" min="0" max="100" value="numRecur"><br>
				            <button type="submit" value="Submit" class="btn btn-primary btn-lg addEvent-btn">Add Event</button>
					    </div>
					  </div>
					</div>
        		<ul class="eventsUL">
        			<li>Event 1</li>
        			<li>Event 2</li>
        			<li>Event 3</li>
        		</ul>
        		</td>
        		<td><a href="#addEvent"><div class="dayNumber" data-toggle="modal" data-target=".addEvent4">4</div></a>
        		<!-- Small modal -->
					<div class="modal fade addEvent addEvent4" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
					  <div class="modal-dialog modal-sm">
					    <div class="modal-content">
					      <h3 class="modalHeader">Add an Event</h3>
					      	<h4>Date and Time</h4>
				            <input type="datetime-local" name="eventTime"required>
				         	<h4>Event Name</h4>
				            <input type="text" name="eventName"required>
				            <h4>Description</h4>
				            <input type="text" name="eventDesc"><br>
				            <h4>Recurring Event</h4>
							<input type="checkbox" name="recurring" value="weekly" >Weekly<br>
							<input type="checkbox" name="recurring" value="monthly">Monthly<br>
							Number of Recurrences <input type="number" placeholder="1" name="numRecur" min="0" max="100" value="numRecur"><br>
				            <button type="submit" value="Submit" class="btn btn-primary btn-lg addEvent-btn">Add Event</button>
					    </div>
					  </div>
					</div>
        		<ul class="eventsUL">
        			<li>Event 1</li>
        			<li>Event 2</li>
        			<li>Event 3</li>
        		</ul>
        		</td>
        		<td><a href="#addEvent"><div class="dayNumber" data-toggle="modal" data-target=".addEvent5">5</div></a>
        		<!-- Small modal -->
					<div class="modal fade addEvent addEvent5" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
					  <div class="modal-dialog modal-sm">
					    <div class="modal-content">
					      <h3 class="modalHeader">Add an Event</h3>
					      	<h4>Date and Time</h4>
				            <input type="datetime-local" name="eventTime"required>
				         	<h4>Event Name</h4>
				            <input type="text" name="eventName"required>
				            <h4>Description</h4>
				            <input type="text" name="eventDesc"><br>
				            <h4>Recurring Event</h4>
							<input type="checkbox" name="recurring" value="weekly" >Weekly<br>
							<input type="checkbox" name="recurring" value="monthly">Monthly<br>
							Number of Recurrences <input type="number" placeholder="1" name="numRecur" min="0" max="100" value="numRecur"><br>
				            <button type="submit" value="Submit" class="btn btn-primary btn-lg addEvent-btn">Add Event</button>
					    </div>
					  </div>
					</div>
        		<ul class="eventsUL">
        			<li>Event 1</li>
        			<li>Event 2</li>
        			<li>Event 3</li>
        		</ul>
        		</td>
        		<td><a href="#addEvent"><div class="dayNumber" data-toggle="modal" data-target=".addEvent6">6</div></a>
        		<!-- Small modal -->
					<div class="modal fade addEvent addEvent6" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
					  <div class="modal-dialog modal-sm">
					    <div class="modal-content">
					      <h3 class="modalHeader">Add an Event</h3>
					      	<h4>Date and Time</h4>
				            <input type="datetime-local" name="eventTime"required>
				         	<h4>Event Name</h4>
				            <input type="text" name="eventName"required>
				            <h4>Description</h4>
				            <input type="text" name="eventDesc"><br>
				            <h4>Recurring Event</h4>
							<input type="checkbox" name="recurring" value="weekly" >Weekly<br>
							<input type="checkbox" name="recurring" value="monthly">Monthly<br>
							Number of Recurrences <input type="number" placeholder="1" name="numRecur" min="0" max="100" value="numRecur"><br>
				            <button type="submit" value="Submit" class="btn btn-primary btn-lg addEvent-btn">Add Event</button>
					    </div>
					  </div>
					</div>
        		<ul class="eventsUL">
        			<li>Event 1</li>
        			<li>Event 2</li>
        			<li>Event 3</li>
        		</ul>
        		</td>
        		<td><a href="#addEvent"><div class="dayNumber" data-toggle="modal" data-target=".addEvent7">7</div></a>
        		<!-- Small modal -->
					<div class="modal fade addEvent addEvent7" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
					  <div class="modal-dialog modal-sm">
					    <div class="modal-content">
					      <h3 class="modalHeader">Add an Event</h3>
					      	<h4>Date and Time</h4>
				            <input type="datetime-local" name="eventTime"required>
				         	<h4>Event Name</h4>
				            <input type="text" name="eventName"required>
				            <h4>Description</h4>
				            <input type="text" name="eventDesc"><br>
				            <h4>Recurring Event</h4>
							<input type="checkbox" name="recurring" value="weekly" >Weekly<br>
							<input type="checkbox" name="recurring" value="monthly">Monthly<br>
							Number of Recurrences <input type="number" placeholder="1" name="numRecur" min="0" max="100" value="numRecur"><br>
				            <button type="submit" value="Submit" class="btn btn-primary btn-lg addEvent-btn">Add Event</button>
					    </div>
					  </div>
					</div>
        		<ul class="eventsUL">
        			<li>Event 1</li>
        			<li>Event 2</li>
        			<li>Event 3</li>
        		</ul>
        		</td>
        	</tr>

        	<tr>
        		<td><a href="#addEvent"><div class="dayNumber" data-toggle="modal" data-target=".addEvent8">8</div></a>
        		<!-- Small modal -->
					<div class="modal fade addEvent addEvent8" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
					  <div class="modal-dialog modal-sm">
					    <div class="modal-content">
					      <h3 class="modalHeader">Add an Event</h3>
					      	<h4>Date and Time</h4>
				            <input type="datetime-local" name="eventTime"required>
				         	<h4>Event Name</h4>
				            <input type="text" name="eventName"required>
				            <h4>Description</h4>
				            <input type="text" name="eventDesc"><br>
				            <h4>Recurring Event</h4>
							<input type="checkbox" name="recurring" value="weekly" >Weekly<br>
							<input type="checkbox" name="recurring" value="monthly">Monthly<br>
							Number of Recurrences <input type="number" placeholder="1" name="numRecur" min="0" max="100" value="numRecur"><br>
				            <button type="submit" value="Submit" class="btn btn-primary btn-lg addEvent-btn">Add Event</button>
					    </div>
					  </div>
					</div>
        		<ul class="eventsUL">
        			<li>Event 1</li>
        			<li>Event 2</li>
        			<li>Event 3</li>
        		</ul>
        		</td>
        		<td><a href="#addEvent"><div class="dayNumber" data-toggle="modal" data-target=".addEvent9">9</div></a>
        		<!-- Small modal -->
					<div class="modal fade addEvent addEvent9" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
					  <div class="modal-dialog modal-sm">
					    <div class="modal-content">
					      <h3 class="modalHeader">Add an Event</h3>
					      	<h4>Date and Time</h4>
				            <input type="datetime-local" name="eventTime"required>
				         	<h4>Event Name</h4>
				            <input type="text" name="eventName"required>
				            <h4>Description</h4>
				            <input type="text" name="eventDesc"><br>
				            <h4>Recurring Event</h4>
							<input type="checkbox" name="recurring" value="weekly" >Weekly<br>
							<input type="checkbox" name="recurring" value="monthly">Monthly<br>
							Number of Recurrences <input type="number" placeholder="1" name="numRecur" min="0" max="100" value="numRecur"><br>
				            <button type="submit" value="Submit" class="btn btn-primary btn-lg addEvent-btn">Add Event</button>
					    </div>
					  </div>
					</div>
        		<ul class="eventsUL">
        			<li>Event 1</li>
        			<li>Event 2</li>
        			<li>Event 3</li>
        		</ul>
        		</td>
        		<td><a href="#addEvent"><div class="dayNumber" data-toggle="modal" data-target=".addEvent10">10</div></a>
        		<!-- Small modal -->
					<div class="modal fade addEvent addEvent10" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
					  <div class="modal-dialog modal-sm">
					    <div class="modal-content">
					      <h3 class="modalHeader">Add an Event</h3>
					      	<h4>Date and Time</h4>
				            <input type="datetime-local" name="eventTime"required>
				         	<h4>Event Name</h4>
				            <input type="text" name="eventName"required>
				            <h4>Description</h4>
				            <input type="text" name="eventDesc"><br>
				            <h4>Recurring Event</h4>
							<input type="checkbox" name="recurring" value="weekly" >Weekly<br>
							<input type="checkbox" name="recurring" value="monthly">Monthly<br>
							Number of Recurrences <input type="number" placeholder="1" name="numRecur" min="0" max="100" value="numRecur"><br>
				            <button type="submit" value="Submit" class="btn btn-primary btn-lg addEvent-btn">Add Event</button>
					    </div>
					  </div>
					</div>
        		<ul class="eventsUL">
        			<li>Event 1</li>
        			<li>Event 2</li>
        			<li>Event 3</li>
        		</ul>
        		</td>
        		<td><a href="#addEvent"><div class="dayNumber" data-toggle="modal" data-target=".addEvent11">11</div></a>
        		<!-- Small modal -->
					<div class="modal fade addEvent addEvent11" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
					  <div class="modal-dialog modal-sm">
					    <div class="modal-content">
					      <h3 class="modalHeader">Add an Event</h3>
					      	<h4>Date and Time</h4>
				            <input type="datetime-local" name="eventTime"required>
				         	<h4>Event Name</h4>
				            <input type="text" name="eventName"required>
				            <h4>Description</h4>
				            <input type="text" name="eventDesc"><br>
				            <h4>Recurring Event</h4>
							<input type="checkbox" name="recurring" value="weekly" >Weekly<br>
							<input type="checkbox" name="recurring" value="monthly">Monthly<br>
							Number of Recurrences <input type="number" placeholder="1" name="numRecur" min="0" max="100" value="numRecur"><br>
				            <button type="submit" value="Submit" class="btn btn-primary btn-lg addEvent-btn">Add Event</button>
					    </div>
					  </div>
					</div>
        		<ul class="eventsUL">
        			<li>Event 1</li>
        			<li>Event 2</li>
        			<li>Event 3</li>
        		</ul>
        		</td>
        		<td><a href="#addEvent"><div class="dayNumber" data-toggle="modal" data-target=".addEvent12">12</div></a>
        		<!-- Small modal -->
					<div class="modal fade addEvent addEvent12" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
					  <div class="modal-dialog modal-sm">
					    <div class="modal-content">
					      <h3 class="modalHeader">Add an Event</h3>
					      	<h4>Date and Time</h4>
				            <input type="datetime-local" name="eventTime"required>
				         	<h4>Event Name</h4>
				            <input type="text" name="eventName"required>
				            <h4>Description</h4>
				            <input type="text" name="eventDesc"><br>
				            <h4>Recurring Event</h4>
							<input type="checkbox" name="recurring" value="weekly" >Weekly<br>
							<input type="checkbox" name="recurring" value="monthly">Monthly<br>
							Number of Recurrences <input type="number" placeholder="1" name="numRecur" min="0" max="100" value="numRecur"><br>
				            <button type="submit" value="Submit" class="btn btn-primary btn-lg addEvent-btn">Add Event</button>
					    </div>
					  </div>
					</div>
        		<ul class="eventsUL">
        			<li>Event 1</li>
        			<li>Event 2</li>
        			<li>Event 3</li>
        		</ul>
        		</td>
        		<td><a href="#addEvent"><div class="dayNumber" data-toggle="modal" data-target=".addEvent13">13</div></a>
        		<!-- Small modal -->
					<div class="modal fade addEvent addEvent13" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
					  <div class="modal-dialog modal-sm">
					    <div class="modal-content">
					      <h3 class="modalHeader">Add an Event</h3>
					      	<h4>Date and Time</h4>
				            <input type="datetime-local" name="eventTime"required>
				         	<h4>Event Name</h4>
				            <input type="text" name="eventName"required>
				            <h4>Description</h4>
				            <input type="text" name="eventDesc"><br>
				            <h4>Recurring Event</h4>
							<input type="checkbox" name="recurring" value="weekly" >Weekly<br>
							<input type="checkbox" name="recurring" value="monthly">Monthly<br>
							Number of Recurrences <input type="number" placeholder="1" name="numRecur" min="0" max="100" value="numRecur"><br>
				            <button type="submit" value="Submit" class="btn btn-primary btn-lg addEvent-btn">Add Event</button>
					    </div>
					  </div>
					</div>
        		<ul class="eventsUL">
        			<li>Event 1</li>
        			<li>Event 2</li>
        			<li>Event 3</li>
        		</ul>
        		</td>
        		<td><a href="#addEvent"><div class="dayNumber" data-toggle="modal" data-target=".addEvent14">14</div></a>
        		<!-- Small modal -->
					<div class="modal fade addEvent addEvent14" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
					  <div class="modal-dialog modal-sm">
					    <div class="modal-content">
					      <h3 class="modalHeader">Add an Event</h3>
					      	<h4>Date and Time</h4>
				            <input type="datetime-local" name="eventTime"required>
				         	<h4>Event Name</h4>
				            <input type="text" name="eventName"required>
				            <h4>Description</h4>
				            <input type="text" name="eventDesc"><br>
				            <h4>Recurring Event</h4>
							<input type="checkbox" name="recurring" value="weekly" >Weekly<br>
							<input type="checkbox" name="recurring" value="monthly">Monthly<br>
							Number of Recurrences <input type="number" placeholder="1" name="numRecur" min="0" max="100" value="numRecur"><br>
				            <button type="submit" value="Submit" class="btn btn-primary btn-lg addEvent-btn">Add Event</button>
					    </div>
					  </div>
					</div>
        		<ul class="eventsUL">
        			<li>Event 1</li>
        			<li>Event 2</li>
        			<li>Event 3</li>
        		</ul>
        		</td>
        	</tr>
        	<tr>
        		<td><a href="#addEvent"><div class="dayNumber" data-toggle="modal" data-target=".addEvent15">15</div></a>
        		<!-- Small modal -->
					<div class="modal fade addEvent addEvent15" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
					  <div class="modal-dialog modal-sm">
					    <div class="modal-content">
					      <h3 class="modalHeader">Add an Event</h3>
					      	<h4>Date and Time</h4>
				            <input type="datetime-local" name="eventTime"required>
				         	<h4>Event Name</h4>
				            <input type="text" name="eventName"required>
				            <h4>Description</h4>
				            <input type="text" name="eventDesc"><br>
				            <h4>Recurring Event</h4>
							<input type="checkbox" name="recurring" value="weekly" >Weekly<br>
							<input type="checkbox" name="recurring" value="monthly">Monthly<br>
							Number of Recurrences <input type="number" placeholder="1" name="numRecur" min="0" max="100" value="numRecur"><br>
				            <button type="submit" value="Submit" class="btn btn-primary btn-lg addEvent-btn">Add Event</button>
					    </div>
					  </div>
					</div>
        		<ul class="eventsUL">
        			<li>Event 1</li>
        			<li>Event 2</li>
        			<li>Event 3</li>
        		</ul>
        		</td>
        		<td><a href="#addEvent"><div class="dayNumber" data-toggle="modal" data-target=".addEvent16">16</div></a>
        		<!-- Small modal -->
					<div class="modal fade addEvent addEvent16" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
					  <div class="modal-dialog modal-sm">
					    <div class="modal-content">
					      <h3 class="modalHeader">Add an Event</h3>
					      	<h4>Date and Time</h4>
				            <input type="datetime-local" name="eventTime"required>
				         	<h4>Event Name</h4>
				            <input type="text" name="eventName"required>
				            <h4>Description</h4>
				            <input type="text" name="eventDesc"><br>
				            <h4>Recurring Event</h4>
							<input type="checkbox" name="recurring" value="weekly" >Weekly<br>
							<input type="checkbox" name="recurring" value="monthly">Monthly<br>
							Number of Recurrences <input type="number" placeholder="1" name="numRecur" min="0" max="100" value="numRecur"><br>
				            <button type="submit" value="Submit" class="btn btn-primary btn-lg addEvent-btn">Add Event</button>
					    </div>
					  </div>
					</div>
        		<ul class="eventsUL">
        			<li>Event 1</li>
        			<li>Event 2</li>
        			<li>Event 3</li>
        		</ul>
        		</td>
        		<td><a href="#addEvent"><div class="dayNumber" data-toggle="modal" data-target=".addEvent17">17</div></a>
        		<!-- Small modal -->
					<div class="modal fade addEvent addEvent17" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
					  <div class="modal-dialog modal-sm">
					    <div class="modal-content">
					      <h3 class="modalHeader">Add an Event</h3>
					      	<h4>Date and Time</h4>
				            <input type="datetime-local" name="eventTime"required>
				         	<h4>Event Name</h4>
				            <input type="text" name="eventName"required>
				            <h4>Description</h4>
				            <input type="text" name="eventDesc"><br>
				            <h4>Recurring Event</h4>
							<input type="checkbox" name="recurring" value="weekly" >Weekly<br>
							<input type="checkbox" name="recurring" value="monthly">Monthly<br>
							Number of Recurrences <input type="number" placeholder="1" name="numRecur" min="0" max="100" value="numRecur"><br>
				            <button type="submit" value="Submit" class="btn btn-primary btn-lg addEvent-btn">Add Event</button>
					    </div>
					  </div>
					</div>
        		<ul class="eventsUL">
        			<li>Event 1</li>
        			<li>Event 2</li>
        			<li>Event 3</li>
        		</ul>
        		</td>
        		<td><a href="#addEvent"><div class="dayNumber" data-toggle="modal" data-target=".addEvent18">18</div></a>
        		<!-- Small modal -->
					<div class="modal fade addEvent addEvent18" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
					  <div class="modal-dialog modal-sm">
					    <div class="modal-content">
					      <h3 class="modalHeader">Add an Event</h3>
					      	<h4>Date and Time</h4>
				            <input type="datetime-local" name="eventTime"required>
				         	<h4>Event Name</h4>
				            <input type="text" name="eventName"required>
				            <h4>Description</h4>
				            <input type="text" name="eventDesc"><br>
				            <h4>Recurring Event</h4>
							<input type="checkbox" name="recurring" value="weekly" >Weekly<br>
							<input type="checkbox" name="recurring" value="monthly">Monthly<br>
							Number of Recurrences <input type="number" placeholder="1" name="numRecur" min="0" max="100" value="numRecur"><br>
				            <button type="submit" value="Submit" class="btn btn-primary btn-lg addEvent-btn">Add Event</button>
					    </div>
					  </div>
					</div>
        		<ul class="eventsUL">
        			<li>Event 1</li>
        			<li>Event 2</li>
        			<li>Event 3</li>
        		</ul>
        		</td>
        		<td><a href="#addEvent"><div class="dayNumber" data-toggle="modal" data-target=".addEvent19">19</div></a>
        		<!-- Small modal -->
					<div class="modal fade addEvent addEvent19" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
					  <div class="modal-dialog modal-sm">
					    <div class="modal-content">
					      <h3 class="modalHeader">Add an Event</h3>
					      	<h4>Date and Time</h4>
				            <input type="datetime-local" name="eventTime"required>
				         	<h4>Event Name</h4>
				            <input type="text" name="eventName"required>
				            <h4>Description</h4>
				            <input type="text" name="eventDesc"><br>
				            <h4>Recurring Event</h4>
							<input type="checkbox" name="recurring" value="weekly" >Weekly<br>
							<input type="checkbox" name="recurring" value="monthly">Monthly<br>
							Number of Recurrences <input type="number" placeholder="1" name="numRecur" min="0" max="100" value="numRecur"><br>
				            <button type="submit" value="Submit" class="btn btn-primary btn-lg addEvent-btn">Add Event</button>
					    </div>
					  </div>
					</div>
        		<ul class="eventsUL">
        			<li>Event 1</li>
        			<li>Event 2</li>
        			<li>Event 3</li>
        		</ul>
        		</td>
        		<td><a href="#addEvent"><div class="dayNumber" data-toggle="modal" data-target=".addEvent20">20</div></a>
        		<!-- Small modal -->
					<div class="modal fade addEvent addEvent20" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
					  <div class="modal-dialog modal-sm">
					    <div class="modal-content">
					      <h3 class="modalHeader">Add an Event</h3>
					      	<h4>Date and Time</h4>
				            <input type="datetime-local" name="eventTime"required>
				         	<h4>Event Name</h4>
				            <input type="text" name="eventName"required>
				            <h4>Description</h4>
				            <input type="text" name="eventDesc"><br>
				            <h4>Recurring Event</h4>
							<input type="checkbox" name="recurring" value="weekly" >Weekly<br>
							<input type="checkbox" name="recurring" value="monthly">Monthly<br>
							Number of Recurrences <input type="number" placeholder="1" name="numRecur" min="0" max="100" value="numRecur"><br>
				            <button type="submit" value="Submit" class="btn btn-primary btn-lg addEvent-btn">Add Event</button>
					    </div>
					  </div>
					</div>
        		<ul class="eventsUL">
        			<li>Event 1</li>
        			<li>Event 2</li>
        			<li>Event 3</li>
        		</ul>
        		</td>
        		<td><a href="#addEvent"><div class="dayNumber" data-toggle="modal" data-target=".addEvent21">21</div></a>
        		<!-- Small modal -->
					<div class="modal fade addEvent addEvent21" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
					  <div class="modal-dialog modal-sm">
					    <div class="modal-content">
					     <h3 class="modalHeader">Add an Event</h3>
					      	<h4>Date and Time</h4>
				            <input type="datetime-local" name="eventTime"required>
				         	<h4>Event Name</h4>
				            <input type="text" name="eventName"required>
				            <h4>Description</h4>
				            <input type="text" name="eventDesc"><br>
				            <h4>Recurring Event</h4>
							<input type="checkbox" name="recurring" value="weekly" >Weekly<br>
							<input type="checkbox" name="recurring" value="monthly">Monthly<br>
							Number of Recurrences <input type="number" placeholder="1" name="numRecur" min="0" max="100" value="numRecur"><br>
				            <button type="submit" value="Submit" class="btn btn-primary btn-lg addEvent-btn">Add Event</button>
					    </div>
					  </div>
					</div>
        		<ul class="eventsUL">
        			<li>Event 1</li>
        			<li>Event 2</li>
        			<li>Event 3</li>
        		</ul>
        		</td>
        	</tr>
        	<tr>
        		<td><a href="#addEvent"><div class="dayNumber" data-toggle="modal" data-target=".addEvent22">22</div></a>
        		<!-- Small modal -->
					<div class="modal fade addEvent addEvent22" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
					  <div class="modal-dialog modal-sm">
					    <div class="modal-content">
					      <h3 class="modalHeader">Add an Event</h3>
					      	<h4>Date and Time</h4>
				            <input type="datetime-local" name="eventTime"required>
				         	<h4>Event Name</h4>
				            <input type="text" name="eventName"required>
				            <h4>Description</h4>
				            <input type="text" name="eventDesc"><br>
				            <h4>Recurring Event</h4>
							<input type="checkbox" name="recurring" value="weekly" >Weekly<br>
							<input type="checkbox" name="recurring" value="monthly">Monthly<br>
							Number of Recurrences <input type="number" placeholder="1" name="numRecur" min="0" max="100" value="numRecur"><br>
				            <button type="submit" value="Submit" class="btn btn-primary btn-lg addEvent-btn">Add Event</button>
					    </div>
					  </div>
					</div>
        		<ul class="eventsUL">
        			<li>Event 1</li>
        			<li>Event 2</li>
        			<li>Event 3</li>
        		</ul>
        		</td>
        		<td><a href="#addEvent"><div class="dayNumber" data-toggle="modal" data-target=".addEvent23">23</div></a>
        		<!-- Small modal -->
					<div class="modal fade addEvent addEvent23" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
					  <div class="modal-dialog modal-sm">
					    <div class="modal-content">
					      <h3 class="modalHeader">Add an Event</h3>
					      	<h4>Date and Time</h4>
				            <input type="datetime-local" name="eventTime"required>
				         	<h4>Event Name</h4>
				            <input type="text" name="eventName"required>
				            <h4>Description</h4>
				            <input type="text" name="eventDesc"><br>
				            <h4>Recurring Event</h4>
							<input type="checkbox" name="recurring" value="weekly" >Weekly<br>
							<input type="checkbox" name="recurring" value="monthly">Monthly<br>
							Number of Recurrences <input type="number" placeholder="1" name="numRecur" min="0" max="100" value="numRecur"><br>
				            <button type="submit" value="Submit" class="btn btn-primary btn-lg addEvent-btn">Add Event</button>
					    </div>
					  </div>
					</div>
        		<ul class="eventsUL">
        			<li>Event 1</li>
        			<li>Event 2</li>
        			<li>Event 3</li>
        		</ul>
        		</td>
        		<td><a href="#addEvent"><div class="dayNumber" data-toggle="modal" data-target=".addEvent24">24</div></a>
        		<!-- Small modal -->
					<div class="modal fade addEvent addEvent24" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
					  <div class="modal-dialog modal-sm">
					    <div class="modal-content">
					      <h3 class="modalHeader">Add an Event</h3>
					      	<h4>Date and Time</h4>
				            <input type="datetime-local" name="eventTime"required>
				         	<h4>Event Name</h4>
				            <input type="text" name="eventName"required>
				            <h4>Description</h4>
				            <input type="text" name="eventDesc"><br>
				            <h4>Recurring Event</h4>
							<input type="checkbox" name="recurring" value="weekly" >Weekly<br>
							<input type="checkbox" name="recurring" value="monthly">Monthly<br>
							Number of Recurrences <input type="number" placeholder="1" name="numRecur" min="0" max="100" value="numRecur"><br>
				            <button type="submit" value="Submit" class="btn btn-primary btn-lg addEvent-btn">Add Event</button>
					    </div>
					  </div>
					</div>
        		<ul class="eventsUL">
        			<li>Event 1</li>
        			<li>Event 2</li>
        			<li>Event 3</li>
        		</ul>
        		</td>
        		<td><a href="#addEvent"><div class="dayNumber" data-toggle="modal" data-target=".addEvent25">25</div></a>
        		<!-- Small modal -->
					<div class="modal fade addEvent addEvent25" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
					  <div class="modal-dialog modal-sm">
					    <div class="modal-content">
					      <h3 class="modalHeader">Add an Event</h3>
					      	<h4>Date and Time</h4>
				            <input type="datetime-local" name="eventTime"required>
				         	<h4>Event Name</h4>
				            <input type="text" name="eventName"required>
				            <h4>Description</h4>
				            <input type="text" name="eventDesc"><br>
				            <h4>Recurring Event</h4>
							<input type="checkbox" name="recurring" value="weekly" >Weekly<br>
							<input type="checkbox" name="recurring" value="monthly">Monthly<br>
							Number of Recurrences <input type="number" placeholder="1" name="numRecur" min="0" max="100" value="numRecur"><br>
				            <button type="submit" value="Submit" class="btn btn-primary btn-lg addEvent-btn">Add Event</button>
					    </div>
					  </div>
					</div>
        		<ul class="eventsUL">
        			<li>Event 1</li>
        			<li>Event 2</li>
        			<li>Event 3</li>
        		</ul>
        		</td>
        		<td><a href="#addEvent"><div class="dayNumber" data-toggle="modal" data-target=".addEvent26">26</div></a>
        		<!-- Small modal -->
					<div class="modal fade addEvent addEvent26" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
					  <div class="modal-dialog modal-sm">
					    <div class="modal-content">
					      <h3 class="modalHeader">Add an Event</h3>
					      	<h4>Date and Time</h4>
				            <input type="datetime-local" name="eventTime"required>
				         	<h4>Event Name</h4>
				            <input type="text" name="eventName"required>
				            <h4>Description</h4>
				            <input type="text" name="eventDesc"><br>
				            <h4>Recurring Event</h4>
							<input type="checkbox" name="recurring" value="weekly" >Weekly<br>
							<input type="checkbox" name="recurring" value="monthly">Monthly<br>
							Number of Recurrences <input type="number" placeholder="1" name="numRecur" min="0" max="100" value="numRecur"><br>
				            <button type="submit" value="Submit" class="btn btn-primary btn-lg addEvent-btn">Add Event</button>
					    </div>
					  </div>
					</div>
        		<ul class="eventsUL">
        			<li>Event 1</li>
        			<li>Event 2</li>
        			<li>Event 3</li>
        		</ul>
        		</td>
        		<td><a href="#addEvent"><div class="dayNumber" data-toggle="modal" data-target=".addEvent27">27</div></a>
        		<!-- Small modal -->
					<div class="modal fade addEvent addEvent27" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
					  <div class="modal-dialog modal-sm">
					    <div class="modal-content">
					      <h3 class="modalHeader">Add an Event</h3>
					      	<h4>Date and Time</h4>
				            <input type="datetime-local" name="eventTime"required>
				         	<h4>Event Name</h4>
				            <input type="text" name="eventName"required>
				            <h4>Description</h4>
				            <input type="text" name="eventDesc"><br>
				            <h4>Recurring Event</h4>
							<input type="checkbox" name="recurring" value="weekly" >Weekly<br>
							<input type="checkbox" name="recurring" value="monthly">Monthly<br>
							Number of Recurrences <input type="number" placeholder="1" name="numRecur" min="0" max="100" value="numRecur"><br>
				            <button type="submit" value="Submit" class="btn btn-primary btn-lg addEvent-btn">Add Event</button>
					    </div>
					  </div>
					</div>
        		<ul class="eventsUL">
        			<li>Event 1</li>
        			<li>Event 2</li>
        			<li>Event 3</li>
        		</ul>
        		</td>
        		<td><a href="#addEvent"><div class="dayNumber" data-toggle="modal" data-target=".addEvent28">28</div></a>
        		<!-- Small modal -->
					<div class="modal fade addEvent addEvent28" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
					  <div class="modal-dialog modal-sm">
					    <div class="modal-content">
					      <h3 class="modalHeader">Add an Event</h3>
					      	<h4>Date and Time</h4>
				            <input type="datetime-local" name="eventTime"required>
				         	<h4>Event Name</h4>
				            <input type="text" name="eventName"required>
				            <h4>Description</h4>
				            <input type="text" name="eventDesc"><br>
				            <h4>Recurring Event</h4>
							<input type="checkbox" name="recurring" value="weekly" >Weekly<br>
							<input type="checkbox" name="recurring" value="monthly">Monthly<br>
							Number of Recurrences <input type="number" placeholder="1" name="numRecur" min="0" max="100" value="numRecur"><br>
				            <button type="submit" value="Submit" class="btn btn-primary btn-lg addEvent-btn">Add Event</button>
					    </div>
					  </div>
					</div>
        		<ul class="eventsUL">
        			<li>Event 1</li>
        			<li>Event 2</li>
        			<li>Event 3</li>
        		</ul>
        		</td>
        	</tr>
        	<tr>
        		<td><a href="#addEvent"><div class="dayNumber" data-toggle="modal" data-target=".addEvent29">29</div></a>
        		<!-- Small modal -->
					<div class="modal fade addEvent addEvent29" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
					  <div class="modal-dialog modal-sm">
					    <div class="modal-content">
					      <h3 class="modalHeader">Add an Event</h3>
					      	<h4>Date and Time</h4>
				            <input type="datetime-local" name="eventTime"required>
				         	<h4>Event Name</h4>
				            <input type="text" name="eventName"required>
				            <h4>Description</h4>
				            <input type="text" name="eventDesc"><br>
				            <h4>Recurring Event</h4>
							<input type="checkbox" name="recurring" value="weekly" >Weekly<br>
							<input type="checkbox" name="recurring" value="monthly">Monthly<br>
							Number of Recurrences <input type="number" placeholder="1" name="numRecur" min="0" max="100" value="numRecur"><br>
				            <button type="submit" value="Submit" class="btn btn-primary btn-lg addEvent-btn">Add Event</button>
					    </div>
					  </div>
					</div>
        		<ul class="eventsUL">
        			<li>Event 1</li>
        			<li>Event 2</li>
        			<li>Event 3</li>
        		</ul>
        		</td>
        		<td><a href="#addEvent"><div class="dayNumber" data-toggle="modal" data-target=".addEvent30">30</div></a>
        		<!-- Small modal -->
					<div class="modal fade addEvent addEvent30" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
					  <div class="modal-dialog modal-sm">
					    <div class="modal-content">
					      <h3 class="modalHeader">Add an Event</h3>
					      	<h4>Date and Time</h4>
				            <input type="datetime-local" name="eventTime"required>
				         	<h4>Event Name</h4>
				            <input type="text" name="eventName"required>
				            <h4>Description</h4>
				            <input type="text" name="eventDesc"><br>
				            <h4>Recurring Event</h4>
							<input type="checkbox" name="recurring" value="weekly" >Weekly<br>
							<input type="checkbox" name="recurring" value="monthly">Monthly<br>
							Number of Recurrences <input type="number" placeholder="1" name="numRecur" min="0" max="100" value="numRecur"><br>
				            <button type="submit" value="Submit" class="btn btn-primary btn-lg addEvent-btn">Add Event</button>
					    </div>
					  </div>
					</div>
        		<ul class="eventsUL">
        			<li>Event 1</li>
        			<li>Event 2</li>
        			<li>Event 3</li>
        		</ul>
        		</td>
        		<td><a href="#addEvent"><div class="dayNumber" data-toggle="modal" data-target=".addEvent31">31</div></a>
        		<!-- Small modal -->
					<div class="modal fade addEvent addEvent31" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
					  <div class="modal-dialog modal-sm">
					    <div class="modal-content">
					      <h3 class="modalHeader">Add an Event</h3>
					      	<h4>Date and Time</h4>
				            <input type="datetime-local" name="eventTime"required>
				         	<h4>Event Name</h4>
				            <input type="text" name="eventName"required>
				            <h4>Description</h4>
				            <input type="text" name="eventDesc"><br>
				            <h4>Recurring Event</h4>
							<input type="checkbox" name="recurring" value="weekly" >Weekly<br>
							<input type="checkbox" name="recurring" value="monthly">Monthly<br>
							Number of Recurrences <input type="number" placeholder="1" name="numRecur" min="0" max="100" value="numRecur"><br>
				            <button type="submit" value="Submit" class="btn btn-primary btn-lg addEvent-btn">Add Event</button>
					    </div>
					  </div>
					</div>
        		<ul class="eventsUL">
        			<li>Event 1</li>
        			<li>Event 2</li>
        			<li>Event 3</li>
        		</ul>
        		</td>
        		<td><a href="#addEvent"><div class="dayNumber" data-toggle="modal" data-target=".addEvent32">32</div></a>
        		<!-- Small modal -->
					<div class="modal fade addEvent addEvent32" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
					  <div class="modal-dialog modal-sm">
					    <div class="modal-content">
					      <h3 class="modalHeader">Add an Event</h3>
					      	<h4>Date and Time</h4>
				            <input type="datetime-local" name="eventTime"required>
				         	<h4>Event Name</h4>
				            <input type="text" name="eventName"required>
				            <h4>Description</h4>
				            <input type="text" name="eventDesc"><br>
				            <h4>Recurring Event</h4>
							<input type="checkbox" name="recurring" value="weekly" >Weekly<br>
							<input type="checkbox" name="recurring" value="monthly">Monthly<br>
							Number of Recurrences <input type="number" placeholder="1" name="numRecur" min="0" max="100" value="numRecur"><br>
				            <button type="submit" value="Submit" class="btn btn-primary btn-lg addEvent-btn">Add Event</button>
					    </div>
					  </div>
					</div>
        		<ul class="eventsUL">
        			<li>Event 1</li>
        			<li>Event 2</li>
        			<li>Event 3</li>
        		</ul>
        		</td>
        		<td><a href="#addEvent"><div class="dayNumber" data-toggle="modal" data-target=".addEvent33">33</div></a>
        		<!-- Small modal -->
					<div class="modal fade addEvent addEvent33" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
					  <div class="modal-dialog modal-sm">
					    <div class="modal-content">
					      <h3 class="modalHeader">Add an Event</h3>
					      	<h4>Date and Time</h4>
				            <input type="datetime-local" name="eventTime"required>
				         	<h4>Event Name</h4>
				            <input type="text" name="eventName"required>
				            <h4>Description</h4>
				            <input type="text" name="eventDesc"><br>
				            <h4>Recurring Event</h4>
							<input type="checkbox" name="recurring" value="weekly" >Weekly<br>
							<input type="checkbox" name="recurring" value="monthly">Monthly<br>
							Number of Recurrences <input type="number" placeholder="1" name="numRecur" min="0" max="100" value="numRecur"><br>
				            <button type="submit" value="Submit" class="btn btn-primary btn-lg addEvent-btn">Add Event</button>
					    </div>
					  </div>
					</div>
        		<ul class="eventsUL">
        			<li>Event 1</li>
        			<li>Event 2</li>
        			<li>Event 3</li>
        		</ul>
        		</td>
        		<td><a href="#addEvent"><div class="dayNumber" data-toggle="modal" data-target=".addEvent34">34</div></a>
        		<!-- Small modal -->
					<div class="modal fade addEvent addEvent34" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
					  <div class="modal-dialog modal-sm">
					    <div class="modal-content">
					      <h3 class="modalHeader">Add an Event</h3>
					      	<h4>Date and Time</h4>
				            <input type="datetime-local" name="eventTime"required>
				         	<h4>Event Name</h4>
				            <input type="text" name="eventName"required>
				            <h4>Description</h4>
				            <input type="text" name="eventDesc"><br>
				            <h4>Recurring Event</h4>
							<input type="checkbox" name="recurring" value="weekly" >Weekly<br>
							<input type="checkbox" name="recurring" value="monthly">Monthly<br>
							Number of Recurrences <input type="number" placeholder="1" name="numRecur" min="0" max="100" value="numRecur"><br>
				            <button type="submit" value="Submit" class="btn btn-primary btn-lg addEvent-btn">Add Event</button>
					    </div>
					  </div>
					</div>
        		<ul class="eventsUL">
        			<li>Event 1</li>
        			<li>Event 2</li>
        			<li>Event 3</li>
        		</ul>
        		</td>
        		<td><a href="#addEvent"><div class="dayNumber" data-toggle="modal" data-target=".addEvent35">35</div></a>
        		<!-- Small modal -->
					<div class="modal fade addEvent addEvent35" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
					  <div class="modal-dialog modal-sm">
					    <div class="modal-content">
					      <h3 class="modalHeader">Add an Event</h3>
					      	<h4>Date and Time</h4>
				            <input type="datetime-local" name="eventTime"required>
				         	<h4>Event Name</h4>
				            <input type="text" name="eventName"required>
				            <h4>Description</h4>
				            <input type="text" name="eventDesc"><br>
				            <h4>Recurring Event</h4>
							<input type="checkbox" name="recurring" value="weekly" >Weekly<br>
							<input type="checkbox" name="recurring" value="monthly">Monthly<br>
							Number of Recurrences <input type="number" placeholder="1" name="numRecur" min="0" max="100" value="numRecur"><br>
				            <button type="submit" value="Submit" class="btn btn-primary btn-lg addEvent-btn">Add Event</button>
					    </div>
					  </div>
					</div>
        		<ul class="eventsUL">
        			<li>Event 1</li>
        			<li>Event 2</li>
        			<li>Event 3</li>
        		</ul>
        		</td>
        	</tr>
        	<tr>
        		<td><a href="#addEvent"><div class="dayNumber" data-toggle="modal" data-target=".addEvent36">1</div></a>
        		<!-- Small modal -->
					<div class="modal fade addEvent addEvent36" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
					  <div class="modal-dialog modal-sm">
					    <div class="modal-content">
					      	<h3 class="modalHeader">Add an Event</h3>
					      	<h4>Date and Time</h4>
				            <input type="datetime-local" name="eventTime"required>
				         	<h4>Event Name</h4>
				            <input type="text" name="eventName"required>
				            <h4>Description</h4>
				            <input type="text" name="eventDesc"><br>
				            <h4>Recurring Event</h4>
							<input type="checkbox" name="recurring" value="weekly" >Weekly<br>
							<input type="checkbox" name="recurring" value="monthly">Monthly<br>
							Number of Recurrences <input type="number" placeholder="1" name="numRecur" min="0" max="100" value="numRecur"><br>
				            <button type="submit" value="Submit" class="btn btn-primary btn-lg addEvent-btn">Add Event</button>
					    </div>
					  </div>
					</div>
        		<ul class="eventsUL">
        			<li>Event 1</li>
        			<li>Event 2</li>
        			<li>Event 3</li>
        		</ul>
        		</td>
        		<td><a href="#addEvent"><div class="dayNumber" data-toggle="modal" data-target=".addEvent37">2</div></a>
        		<!-- Small modal -->
					<div class="modal fade addEvent addEvent37" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
					  <div class="modal-dialog modal-sm">
					    <div class="modal-content">
					      <h3 class="modalHeader">Add an Event</h3>
					      	<h4>Date and Time</h4>
				            <input type="datetime-local" name="eventTime"required>
				         	<h4>Event Name</h4>
				            <input type="text" name="eventName"required>
				            <h4>Description</h4>
				            <input type="text" name="eventDesc"><br>
				            <h4>Recurring Event</h4>
							<input type="checkbox" name="recurring" value="weekly" >Weekly<br>
							<input type="checkbox" name="recurring" value="monthly">Monthly<br>
							Number of Recurrences <input type="number" placeholder="1" name="numRecur" min="0" max="100" value="numRecur"><br>
				            <button type="submit" value="Submit" class="btn btn-primary btn-lg addEvent-btn">Add Event</button>
					    </div>
					  </div>
					</div>
        		<ul class="eventsUL">
        			<li>Event 1</li>
        			<li>Event 2</li>
        			<li>Event 3</li>
        		</ul>
        		</td>
        		<td><a href="#addEvent"><div class="dayNumber" data-toggle="modal" data-target=".addEvent38">3</div></a>
        		<!-- Small modal -->
					<div class="modal fade addEvent addEvent38" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
					  <div class="modal-dialog modal-sm">
					    <div class="modal-content">
					      <h3 class="modalHeader">Add an Event</h3>
					      	<h4>Date and Time</h4>
				            <input type="datetime-local" name="eventTime"required>
				         	<h4>Event Name</h4>
				            <input type="text" name="eventName"required>
				            <h4>Description</h4>
				            <input type="text" name="eventDesc"><br>
				            <h4>Recurring Event</h4>
							<input type="checkbox" name="recurring" value="weekly" >Weekly<br>
							<input type="checkbox" name="recurring" value="monthly">Monthly<br>
							Number of Recurrences <input type="number" placeholder="1" name="numRecur" min="0" max="100" value="numRecur"><br>
				            <button type="submit" value="Submit" class="btn btn-primary btn-lg addEvent-btn">Add Event</button>
					    </div>
					  </div>
					</div>
        		<ul class="eventsUL">
        			<li>Event 1</li>
        			<li>Event 2</li>
        			<li>Event 3</li>
        		</ul>
        		</td>
        		<td><a href="#addEvent"><div class="dayNumber" data-toggle="modal" data-target=".addEvent39">4</div></a>
        		<!-- Small modal -->
					<div class="modal fade addEvent addEvent39" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
					  <div class="modal-dialog modal-sm">
					    <div class="modal-content">
					      <h3 class="modalHeader">Add an Event</h3>
					      	<h4>Date and Time</h4>
				            <input type="datetime-local" name="eventTime"required>
				         	<h4>Event Name</h4>
				            <input type="text" name="eventName"required>
				            <h4>Description</h4>
				            <input type="text" name="eventDesc"><br>
				            <h4>Recurring Event</h4>
							<input type="checkbox" name="recurring" value="weekly" >Weekly<br>
							<input type="checkbox" name="recurring" value="monthly">Monthly<br>
							Number of Recurrences <input type="number" placeholder="1" name="numRecur" min="0" max="100" value="numRecur"><br>
				            <button type="submit" value="Submit" class="btn btn-primary btn-lg addEvent-btn">Add Event</button>
					    </div>
					  </div>
					</div>
        		<ul class="eventsUL">
        			<li>Event 1</li>
        			<li>Event 2</li>
        			<li>Event 3</li>
        		</ul>
        		</td>
        		<td><a href="#addEvent"><div class="dayNumber" data-toggle="modal" data-target=".addEvent40">5</div></a>
        		<!-- Small modal -->
					<div class="modal fade addEvent addEvent40" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
					  <div class="modal-dialog modal-sm">
					    <div class="modal-content">
					      <h3 class="modalHeader">Add an Event</h3>
					      	<h4>Date and Time</h4>
				            <input type="datetime-local" name="eventTime"required>
				         	<h4>Event Name</h4>
				            <input type="text" name="eventName"required>
				            <h4>Description</h4>
				            <input type="text" name="eventDesc"><br>
				            <h4>Recurring Event</h4>
							<input type="checkbox" name="recurring" value="weekly" >Weekly<br>
							<input type="checkbox" name="recurring" value="monthly">Monthly<br>
							Number of Recurrences <input type="number" placeholder="1" name="numRecur" min="0" max="100" value="numRecur"><br>
				            <button type="submit" value="Submit" class="btn btn-primary btn-lg addEvent-btn">Add Event</button>
					    </div>
					  </div>
					</div>
        		<ul class="eventsUL">
        			<li>Event 1</li>
        			<li>Event 2</li>
        			<li>Event 3</li>
        		</ul>
        		</td>
        		<td><a href="#addEvent"><div class="dayNumber" data-toggle="modal" data-target=".addEvent41">6</div></a>
        		<!-- Small modal -->
					<div class="modal fade addEvent addEvent41" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
					  <div class="modal-dialog modal-sm">
					    <div class="modal-content">
					      <h3 class="modalHeader">Add an Event</h3>
					      	<h4>Date and Time</h4>
				            <input type="datetime-local" name="eventTime"required>
				         	<h4>Event Name</h4>
				            <input type="text" name="eventName"required>
				            <h4>Description</h4>
				            <input type="text" name="eventDesc"><br>
				            <h4>Recurring Event</h4>
							<input type="checkbox" name="recurring" value="weekly" >Weekly<br>
							<input type="checkbox" name="recurring" value="monthly">Monthly<br>
							Number of Recurrences <input type="number" placeholder="1" name="numRecur" min="0" max="100" value="numRecur"><br>
				            <button type="submit" value="Submit" class="btn btn-primary btn-lg addEvent-btn">Add Event</button>
					    </div>
					  </div>
					</div>
        		<ul class="eventsUL">
        			<li>Event 1</li>
        			<li>Event 2</li>
        			<li>Event 3</li>
        		</ul>
        		</td>
        		<td><a href="#addEvent"><div class="dayNumber" data-toggle="modal" data-target=".addEvent42">7</div></a>
        		<!-- Small modal -->
					<div class="modal fade addEvent addEvent42" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
					  <div class="modal-dialog modal-sm">
					    <div class="modal-content">
					      <h3 class="modalHeader">Add an Event</h3>
					      	<h4>Date and Time</h4>
				            <input type="datetime-local" name="eventTime"required>
				         	<h4>Event Name</h4>
				            <input type="text" name="eventName"required>
				            <h4>Description</h4>
				            <input type="text" name="eventDesc"><br>
				            <h4>Recurring Event</h4>
							<input type="checkbox" name="recurring" value="weekly" >Weekly<br>
							<input type="checkbox" name="recurring" value="monthly">Monthly<br>
							Number of Recurrences <input type="number" placeholder="1" name="numRecur" min="0" max="100" value="numRecur"><br>
				            <button type="submit" value="Submit" class="btn btn-primary btn-lg addEvent-btn">Add Event</button>
					    </div>
					  </div>
					</div>
        		<ul class="eventsUL">
        			<li>Event 1</li>
        			<li>Event 2</li>
        			<li>Event 3</li>
        		</ul>
        		</td>
        	</tr>
        </table>
    </div>


    
    <!--<script src="calculator.js"></script>-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="ajax.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
