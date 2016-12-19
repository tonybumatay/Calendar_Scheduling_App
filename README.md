# Calendar_Scheduling_App
PHP based Calendar and Scheduling Webapp

Technologies utilized: PHP, MYSQL, Javascript, Ajax, HTML, CSS

Extras
-Jump to Month: We added a text field for month and another for year along with a "Jump Month" button
at the top of the page so users can jump straight to any month without scrolling through all months in between. Our back end logic makes the days realign so that the first day of the month starts on the correct day of the week. 

-Add Recurring Events: In every Add Event Modal, there is a Recurring event option. The User can make the event recur monthly or weekly up to 100 times. There is a check box for weekly and monthly, along with a text input field for the number of recurrences. 1 recurrence means the Event happens a total of two times. Our back end takes the date of the event and creates an event on the same day of the week for an additional number of times equal to the number specified by the user. 

-Bootstrap and Custom CSS: We implemented the bootstrap javascript Modal pluggin on our Login and Create Account buttons as well as all of the dayNumber links that link to a pop up modal prompting the user to add an event. Additionally, we made the create event modal have a default date of the date that the user clicks on. 
We Complimented the boostrap framework with custom css to style our calendar. Day numbers in the upper right-hand corner, 

-Description: Each event has an associated description that is stored in the table. The description can also be edited when the event is edited. 

