var months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
var currentMonth;		//these are global variables used in multiple different functions
var currentYear;
var offset;				// the day of the wee (0-6) the month starts on
var token;
var monthDays = [31,28,31,30,31,30,31,31,30,31,30,31];

function login(event){ //a function that is called when the login button is pressed. Checks to make sure the fields arent null and then calls the login.php
	if(document.getElementById("usernameLogin").value === "" || document.getElementById("passwordLogin").value === ""){
		document.getElementsByClassName("modalHeader")[0].innerHTML = "Login<br>Please fill in all fields";		
		return;
	}
	var username = document.getElementById("usernameLogin").value;
	var password = document.getElementById("passwordLogin").value;
	var dataString = "username=" + encodeURIComponent(username) + "&password=" + 
		encodeURIComponent(password);
	var xmlHttp = new XMLHttpRequest();
	xmlHttp.open("POST", "login.php", true);
	xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); //what does this do
	xmlHttp.addEventListener("load", function(event){
		var jsonData = JSON.parse(event.target.responseText);
		if(jsonData.success){
			$('#loginModal').modal('toggle');
			token = jsonData.token.value;
			buttonsShow();
			getEvents();
			document.getElementById("usernameLogin").value = "";
			document.getElementById("passwordLogin").value = "";
			} else {
			alert("you did not log in " + jsonData.message);
		}
	}, false);
	xmlHttp.send(dataString);

}


//the event listeners for all of our buttons
document.getElementById("login-btn").addEventListener("click", login, false);
document.getElementById("logout-btn").addEventListener("click", logout, false);
document.getElementById("nextMonth").addEventListener("click", nextMonth, false);
document.getElementById("previousMonth").addEventListener("click", prevMonth, false);
document.getElementById("createAccount-btn").addEventListener("click", createAccount, false);


function checkLogin(event){ //a small function to check if a person is logged in returns true if yes
	var xmlHttp = new XMLHttpRequest();
	var dataString = "token=" + encodeURIComponent(token);
	xmlHttp.open("POST", "checkLogin.php", true);
	xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); //what does this do
	xmlHttp.addEventListener("load", function(event){
		var jsonData = JSON.parse(event.target.responseText);
		if(jsonData.success){
			return true;
		} else {
			return false;
		}
	}, false);
	xmlHttp.send(dataString);
}

//a function that is called at the beginning of the page and when a person logs in or logs out to show which buttons are available to them
function buttonsShow(event){
	var xmlHttp = new XMLHttpRequest();
	xmlHttp.open("POST", "checkLogin.php", true);
	xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); //what does this do
	xmlHttp.addEventListener("load", function(event){
		var jsonData = JSON.parse(event.target.responseText);
		if(jsonData.success){
			$('#greeting').empty();
			document.getElementById("greeting").appendChild(document.createTextNode("Hello, " + jsonData.username + "!"));
			document.getElementById("greeting").appendChild(document.createElement("br"));
			document.getElementById("greeting").appendChild(document.createTextNode("Welcome to your Super Snazzy Schedule."));
			$('#outterLogin-btn').hide();
			$('#outterCA-btn').hide();
			$('#logout-btn').show();
			//document.getElementsByClassName("modal fade login in").setAttribute("stlye", "display:none");
			} else {
			$('#greeting').empty();
			document.getElementById("greeting").appendChild(document.createTextNode("Hello, Friend!"));	
			document.getElementById("greeting").appendChild(document.createElement("br"));
			document.getElementById("greeting").appendChild(document.createTextNode("Sign in or create an account to edit Calendar."));
			$('#outterLogin-btn').show();
			$('#outterCA-btn').show();
			$('#logout-btn').hide();
		}
	}, false);
	xmlHttp.send(null);

}

//event listeners for functions that run on startup
document.addEventListener("DOMContentLoaded", buttonsShow, false);
document.addEventListener("DOMContentLoaded", setPresentDate, false);
document.addEventListener("DOMContentLoaded", getEvents, false);
document.addEventListener("DOMContentLoaded", setAddEvent, false);

//sets the default date of each add event button
function setAddEvent(event){
	var monthString = String(currentMonth + 1);
	if(currentMonth < 10){
		monthString = "0" + monthString;
	}
	for(i = 0; i<42; i++){
		var dayString = String(i - offset + 1);
		if (dayString < 10){
			dayString = "0" + dayString;
		}
		var dateString = currentYear + "-" + monthString + "-" + dayString + "T" + "00:00";
		document.getElementsByName("eventTime")[i].value = dateString;
	}
}

//the functionality for the logout button. destroys the session
function logout(event){
	var xmlHttp = new XMLHttpRequest();
	xmlHttp.open("POST", "logout.php", true);
	xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); //what does this do
	xmlHttp.addEventListener("load", function(event){
		getEvents();
		buttonsShow();
	}, false);
	xmlHttp.send(null);
 
 }
 

//creates an account if the usernames match
function createAccount(event){
	if(document.getElementById("usernameCreate").value === "" || document.getElementById("passwordCreate").value === "" || document.getElementById("passwordVerify").value === ""){
		document.getElementsByClassName("modalHeader")[1].innerHTML = "Create Account<br>Please fill in all fields";
		return;
	}
	var username = document.getElementById("usernameCreate").value;
	var password = document.getElementById("passwordCreate").value;
	var verify = document.getElementById("passwordVerify").value;
	var dataString = "username=" + encodeURIComponent(username) + "&password=" + 
		encodeURIComponent(password) + "&verify=" + encodeURIComponent(verify);
	var xmlHttp = new XMLHttpRequest();
	xmlHttp.open("POST", "createAccount.php", true);
	xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); //what does this do
	xmlHttp.addEventListener("load", function(event){
		var jsonData = JSON.parse(event.target.responseText);

		if(jsonData.success){
			$('#createAccountModal').modal('toggle');
			token = jsonData.token.value;
			buttonsShow();
			getEvents();
			document.getElementById("usernameCreate").value = "";
			document.getElementById("passwordCreate").value = "";
			document.getElementById("passwordVerify").value = "";
		} else {
			alert("you did not create an account " + jsonData.message);
		}
	}, false);
	xmlHttp.send(dataString);
}


//gets all of the events associated with the current month and displays them on the calendar with edit and delete buttons
function getEvents(event){
	var dataString = "currentMonth=" + encodeURIComponent(currentMonth + 1) + "&currentYear=" + encodeURIComponent(currentYear);
	var xmlHttp = new XMLHttpRequest();
	xmlHttp.open("POST", "getEvents.php", true);
	xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); //what does this do
	xmlHttp.addEventListener("load", function(event){
		var jsonData = JSON.parse(event.target.responseText);
		if(jsonData.success){
			for(i = 0; i<42; i++){
				$(document.getElementsByClassName("eventsUL")[i]).empty();
			}
			for(i = 0; i < jsonData.events.length; i++){
				//if(jsonData.events[e].date.month == currentMonth)  //checks to make sure the events are of the current month
				var date= new Date(jsonData.events[i].dateTime);
				var time = date.getHours()+":"+date.getMinutes();
				if(date.getMinutes() < 10){
					time = date.getHours()+":"+"0" + date.getMinutes();//FIXME this is adding a zero to the front of the time; ex. 012:0
				}
				var hiddenID = document.createElement("input");
				hiddenID.setAttribute("type", "hidden");
				hiddenID.setAttribute("value", jsonData.events[i].false_id);

				var hiddenID2 = document.createElement("input");
				hiddenID2.setAttribute("type", "hidden");
				hiddenID2.setAttribute("value", jsonData.events[i].false_id);

				var oldName = document.createElement("input");
				oldName.setAttribute("type", "hidden");
				oldName.setAttribute("value", jsonData.events[i].name);
				
				var oldDesc = document.createElement("input");
				oldDesc.setAttribute("type", "hidden");
				oldDesc.setAttribute("value", jsonData.events[i].description);

				var timeName = document.createTextNode(time + ": " + jsonData.events[i].name);
				var li = document.createElement("li");
				editButton = document.createElement("BUTTON");
				editImg = document.createElement("img");
				editImg.setAttribute("src", "img/glyphicons-151-edit.png");
				editImg.setAttribute("width", "10");
				editImg.setAttribute("alt", "Edit");
				editButton.appendChild(editImg);
				editButton.appendChild(oldName);
				editButton.appendChild(oldDesc);
				editButton.appendChild(hiddenID);
				editButton.addEventListener("click", editEvent, false);
				deleteButton = document.createElement("BUTTON");
				deleteImg = document.createElement("img");
				deleteImg.setAttribute("src", "img/glyphicons-257-delete.png");
				deleteImg.setAttribute("width", "10");
				deleteImg.setAttribute("alt", "Delete");
				deleteButton.appendChild(deleteImg);
				deleteButton.appendChild(hiddenID2);
				deleteButton.addEventListener("click", deleteEvent, false);

				li.appendChild(timeName);
				li.appendChild(editButton);
				li.appendChild(deleteButton);
				document.getElementsByClassName("eventsUL")[date.getDate() - 1 + offset].appendChild(li);
			}
 		} else {
			for(i = 0; i<42; i++){
				$(document.getElementsByClassName("eventsUL")[i]).empty();
			}
		}
	}, false);
	xmlHttp.send(dataString);
}

//adds event listeners for each of the 42 event buttons
 for(i=0;i<42;i++){
	document.getElementsByClassName("addEvent-btn")[i].addEventListener("click", recur, false);
}

//functionality to add events based on each of the fields in the modal
// function addEvent(event){
// 	if(!checkLogin){
// 		alert("You are not logged in");
// 		return;
// 	}
// 	for(i=0;i<42;i++){
// 		if(document.getElementsByName("eventName")[i].value != ""){
// 			var x = i;
// 		}
// 	}
// 	var date = document.getElementsByName("eventTime")[x].value;
// 	var name = document.getElementsByName("eventName")[x].value;
// 	var description = document.getElementsByName("eventDesc")[x].value;
// 	var dataString = "date=" + encodeURIComponent(date) + "&name=" + encodeURIComponent(name) + "&description=" +
// 	encodeURIComponent(description) + "&recur=" + encodeURIComponent(recur) + "&recurNumber=" + encodeURIComponent(recurNumber);
// 	var xmlHttp = new XMLHttpRequest();
// 	xmlHttp.open("POST", "addEvent.php", true);
// 	xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); //what does this do
// 	xmlHttp.addEventListener("load", function(event){
// 		$(document.getElementsByClassName('addEvent')[x]).modal('toggle');
// 		document.getElementsByName("eventName")[x].value = "";
// 		document.getElementsByName("eventDesc")[x].value = "";
// 		getEvents();
// 	}, false);
// 	xmlHttp.send(dataString);
// }

function recur(event){
	if(recurWeek && recurMonth){
		alert("Please only check one recur box.");
		return;
	}
	else if((recurWeek && recurNumber ==="") || (recurMonth && recurNumber ==="")){
		alert("Please enter a number of times you would like the event to recur");
		return;
	}
	for(i=0;i<42;i++){
		if(document.getElementsByName("eventName")[i].value != ""){
			var x = i;
		}
	}
	var recurWeek = document.getElementsByName("recurring")[2*x].checked;
	var recurMonth = document.getElementsByName("recurring")[2*x+1].checked;
	var recurNumber = document.getElementsByName("numRecur")[x].value;
	if(recurWeek){
		for(j = 0; j<=recurNumber; j++){
			addEvent();
			var oldDateString = document.getElementsByName("eventTime")[x].value;
			var splitOne = oldDateString.split("-");
			var splitTwo = splitOne[2].split("T");
			var monthNum = parseFloat(splitOne[1]);
			var daysNum = parseFloat(splitTwo[0]) + 7;
			var yearNum = parseFloat(splitOne[0]);
			if(daysNum > monthDays[monthNum]){
				daysNum = daysNum - monthDays[monthNum-1];
				monthNum +=1;
			}
			if(monthNum > 11){
				monthNum = 1;
				yearNum += 1;
			}
			if(monthNum < 10){
				monthNum = "0" + monthNum;
			}
			if(daysNum < 10){
				daysNum = "0" + daysNum;
			}
			var dateString = yearNum + "-" + monthNum + "-" + daysNum + "T" + "00:00";
			document.getElementsByName("eventTime")[x].value = dateString;
		}
	} else if(recurMonth){
		for(k = 0; k<=recurNumber; k++){
			addEvent();
			var oldDateString = document.getElementsByName("eventTime")[x].value;
			var splitOne = oldDateString.split("-");
			var splitTwo = splitOne[2].split("T");
			var daysNum = parseFloat(splitTwo[0]);
			var monthNum = parseFloat(splitOne[1]) + 1;
			var yearNum = parseFloat(splitOne[0]);
			if(monthNum > 11){
				monthNum = 1;
				yearNum += 1;
			}
			if(monthNum < 10){
				monthNum = "0" + monthNum;
			}
			if(daysNum < 10){
				daysNum = "0" + daysNum;
			}
			var dateString = yearNum + "-" + monthNum + "-" + daysNum + "T" + "00:00";
			document.getElementsByName("eventTime")[x].value = dateString;
		}
	} else {
		addEvent();
	}

	$(document.getElementsByClassName('addEvent')[x]).modal('toggle');
	document.getElementsByName("eventName")[x].value = "";
	document.getElementsByName("eventDesc")[x].value = "";
	getEvents();
}

function addEvent(event){
	if(!checkLogin){
		alert("You are not logged in");
		return;
	}
	for(i=0;i<42;i++){
		if(document.getElementsByName("eventName")[i].value != ""){
			var x = i;
		}
	}
	var date = document.getElementsByName("eventTime")[x].value;
	var name = document.getElementsByName("eventName")[x].value;
	var description = document.getElementsByName("eventDesc")[x].value;
	var dataString = "date=" + encodeURIComponent(date) + "&name=" + encodeURIComponent(name) + "&description=" +
	encodeURIComponent(description);
	var xmlHttp = new XMLHttpRequest();
	xmlHttp.open("POST", "addEvent.php", true);
	xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); //what does this do
	xmlHttp.send(dataString);
}


//deletes the event for which the button is pressed
function deleteEvent(event){
	var x = event.currentTarget.lastChild.defaultValue;
	var dataString = "false_id=" + encodeURIComponent(x);
	var xmlHttp = new XMLHttpRequest();
	xmlHttp.open("POST", "deleteEvent.php", true);
	xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); //what does this do
	xmlHttp.addEventListener("load", function(event){
		var jsonData = JSON.parse(event.target.responseText);

		if(jsonData.success){
			getEvents();
		} else {
			alert("the event was not  deleted  " + jsonData.message);			
		}
	}, false);
	xmlHttp.send(dataString);
}

//functionality for jumping to an inputed momnth/year
function jumpToDate(event){
	var newYear = document.getElementById("newYear").value;
	var newMonth = document.getElementById("newMonth").value;

	if((newYear === "") || (newYear <= 0) || (newYear >=3001) || (newYear%1 !=0)){
		alert("Please enter a valid year");
		return;
	}
	if((newMonth === "") || (newMonth < 1) || (newMonth > 13) || (newMonth%1 !=0)){
		alert("Please enter a valid month");
		return;
	}

	currentYear = newYear;
	currentMonth = newMonth - 1;
	setCalendarDays();
	getEvents();
	setAddEvent();
}

document.getElementById('jump-btn').addEventListener("click", jumpToDate, false);

//shows the user popups that ask them what new name and description they want
function editEvent(event){
	var x = event.currentTarget.lastChild.defaultValue;
	var oldDesc = event.currentTarget.children[2].value;
	var oldName = event.currentTarget.children[1].value;
	var newName = prompt("Please enter a new name, the old name was: " + oldName);
	var newDesc = prompt("Please enter a new description, the old one was: " + oldDesc);

	if(newName != null && newDesc != null){
		var dataString = "false_id=" + encodeURIComponent(x) + "&newName=" + encodeURIComponent(newName) + "&newDesc=" + encodeURIComponent(newDesc);
		var xmlHttp = new XMLHttpRequest();
		xmlHttp.open("POST", "editEvent.php", true);
		xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); //what does this do
		xmlHttp.addEventListener("load", function(event){
		var jsonData = JSON.parse(event.target.responseText);
		var dialog;
		if(jsonData.success){
			getEvents();
		} else {
			alert("the event was not available  ");				
		}
	}, false);
	xmlHttp.send(dataString);
	}
}

//a function called only on startup to set the current month that is displayed initially
function setPresentDate(event){
	var d = new Date();
	var m = d.getMonth();
	var y = d.getFullYear();
	var pm = m;
	var nm =m;
	currentMonth = m;
	currentYear = y;
	if (m===0){
		pm=11;
	}
	else{
		pm=m-1;
	}
	if(m===11){
		nm=0;
	}
	else{
		nm=m+1;
	}

	document.getElementById("currentMonth").appendChild(document.createTextNode(months[m]));
	document.getElementById("currentYear").appendChild(document.createTextNode(y));
	document.getElementById("previousMonth").appendChild(document.createTextNode(months[pm]));
	document.getElementById("nextMonth").appendChild(document.createTextNode(months[nm]));
	setCalendarDays();
}

function setShowDate(event){
	var d = new Date(currentYear, currentMonth);
	var m = d.getMonth();
	var y = d.getFullYear();
	var pm = m;
	var nm =m;
	currentMonth = m;
	currentYear = y;
	if (m===0){
		pm=11;
	}
	else{
		pm=m-1;
	}
	if(m===11){
		nm=0;
	}
	else{
		nm=m+1;
	}

	document.getElementById("currentMonth").innerHTML = "";
	document.getElementById("currentYear").innerHTML = "";
	document.getElementById("previousMonth").innerHTML = "";
	document.getElementById("nextMonth").innerHTML = "";

	document.getElementById("currentMonth").appendChild(document.createTextNode(months[m]));
	document.getElementById("currentYear").appendChild(document.createTextNode(y));
	document.getElementById("previousMonth").appendChild(document.createTextNode(months[pm]));
	document.getElementById("nextMonth").appendChild(document.createTextNode(months[nm]));
}



//a function to make each moth start on the correct day and end on the correct day.
function setCalendarDays(){
	var firstDay = new Date(currentYear, currentMonth, 1);
	var lastDay;

	if(currentYear%4 === 0 && currentMonth === 1){ //leap day logic: if a year divisible by 4 and february:
		if(currentYear%100 === 0){	//if year divisible by 100 then not leap year
			if(currentYear%400 === 0){	//if year is also divisible by 400 then actually is leap year
				lastDay = new Date(currentYear, currentMonth, monthDays[currentMonth] + 1);
			} else {
				lastDay = new Date(currentYear, currentMonth, monthDays[currentMonth]);
			}
		} else {
			lastDay = new Date(currentYear, currentMonth, monthDays[currentMonth] + 1);
		}
	} else {
		lastDay = new Date(currentYear, currentMonth, monthDays[currentMonth]);
	}		//leap day logic ends here


	for(i = 0; i<42; i++){ //start clearing days
		$(document.getElementsByClassName("dayNumber")[i]).empty();
	}
	offset = firstDay.getDay(); //num days to the right the month starts.
	for(i = firstDay.getDate(); i < lastDay.getDate() + 1; i++){ //setting the correct day number
		document.getElementsByClassName("dayNumber")[i - 1 + offset].innerHTML = i;			//subtract 1 because getdate returns 1 to 31 rather than 0 to 30
	}
	setShowDate();
}

//next month button functionality that increments the currentmonht variables
function nextMonth(event){
	var pm = currentMonth;
	var nm =currentMonth;
	if(currentMonth === 11){
		currentYear += 1;
		currentMonth = 0;
	} else {
		currentMonth += 1;	
	}
	if(currentMonth === 0){
		pm =11;
	} else {
		pm= currentMonth-1;
	
	}
	if(currentMonth ===11){
		nm = 0;
	} else {
		nm = currentMonth +1;
	}

	var d = new Date(currentYear, currentMonth);
	var m = d.getMonth();
	var y = d.getFullYear();

	$('#currentMonth').empty();
	$('#currentYear').empty();
	document.getElementById("currentMonth").appendChild(document.createTextNode(months[m]));
	document.getElementById("currentYear").appendChild(document.createTextNode(y));
	$('#previousMonth').empty();
	$('#nextMonth').empty();
	document.getElementById("previousMonth").appendChild(document.createTextNode(months[pm]));
	document.getElementById("nextMonth").appendChild(document.createTextNode(months[nm]));
	setCalendarDays();
	getEvents();
	setAddEvent();
}

//same as next month but decrement.
function prevMonth(event){
	var pm = currentMonth;
	var nm =currentMonth;
	if(currentMonth === 0){
		currentYear -= 1;
		currentMonth = 11;
	} else {
		currentMonth -= 1;
	
	}
	if(currentMonth === 11){
		nm =0;
	} else {
		nm= currentMonth+1;
	
	}
	if(currentMonth === 0){
		pm = 11;
	} else {
		pm = currentMonth-1;
	}

	var d = new Date(currentYear, currentMonth);
	var m = d.getMonth();
	var y = d.getFullYear();
	$('#currentMonth').empty();
	$('#currentYear').empty();
	document.getElementById("currentMonth").appendChild(document.createTextNode(months[m]));
	document.getElementById("currentYear").appendChild(document.createTextNode(y));
	$('#previousMonth').empty();
	$('#nextMonth').empty();
	document.getElementById("previousMonth").appendChild(document.createTextNode(months[pm]));
	document.getElementById("nextMonth").appendChild(document.createTextNode(months[nm]));
	setCalendarDays();
	getEvents();
	setAddEvent();
}