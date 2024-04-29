@extends('layouts.app')

@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Calendar Demo</title>
        <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.11/index.global.min.js"></script>
    </head>

    <body>
        <div id="calendar"></div>


        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const calendarEl = document.getElementById('calendar');
                var calendar = new FullCalendar.Calendar(calendarEl, {
                    initialView: 'dayGridMonth',
                });

                // Function to add event with today's date and tomorrow's date
                function addDynamicEvent() {
                    // var today = today().format('YYYY-MM-DD'); // Today's date
                    // var tomorrow = today().add(1, 'day').format('YYYY-MM-DD'); // Tomorrow's date

                    var newEvent = {
                        id: "xd",
                        start: "2024-04-26",
                        end: "2024-04-27",
                        display: "background",
                        backgroundColor: "red"
                    };

                    calendar.addEvent(newEvent);
                }

                // Call addDynamicEvent when the user logs in or interacts with the page
                // For demonstration purposes, this will be triggered by clicking a button
                document.getElementById('addEventButton').addEventListener('click', function() {
                    addDynamicEvent();
                    var xddd = calendar.getEventById( "xd" );
                    console.log(xddd);
                });

                calendar.render();
            });
        </script>

        <!-- Button to trigger adding dynamic event -->
        <button id="addEventButton">Add Dynamic Event</button>
    </body>

    </html>
@endsection
