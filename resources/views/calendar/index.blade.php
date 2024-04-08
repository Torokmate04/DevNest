@extends('layouts.app')

@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <script src="
                        https://cdn.jsdelivr.net/npm/fullcalendar@6.1.11/index.global.min.js
                        "></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const calendarEl = document.getElementById('calendar')
                const calendar = new FullCalendar.Calendar(calendarEl, {
                    initialView: 'dayGridMonth'
                })
                calendar.render()
            })
        </script>
        <title>Document</title>
    </head>

    <body>
        <div id='calendar'></div>
    </body>

    </html>
@endsection
