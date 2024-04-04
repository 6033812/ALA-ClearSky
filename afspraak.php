<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Appointment System</title>
  <link href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css' rel='stylesheet' />
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js'></script>
  <script>
$(document).ready(function() {
      $('#calendar').fullCalendar({
        dayClick: function(date, jsEvent, view) {
          // Triggered when a user clicks on a day in the calendar
          // Open a form here or perform any action you want
          var title = prompt('Enter Event Title:');
          if (title) {
            var eventData = {
              title: title,
              start: date,
              allDay: true // The event will be all day
            };
            $('#calendar').fullCalendar('renderEvent', eventData, true); // render event
          }
        },
        editable: true,
        eventLimit: true,
        events: [
          // Add your events here
          // Example: { title: 'Event 1', start: '2024-03-01' },
        ]
      });
    });  
  </script>
</head>
<body>
  <div id='calendar'></div>
</body>
</html>
