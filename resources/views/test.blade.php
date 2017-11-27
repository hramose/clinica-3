<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8' />
<link href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.6.1/fullcalendar.min.css' rel='stylesheet' />
<link href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.6.1/fullcalendar.print.min.css' rel='stylesheet' media='print' />
<script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.19.1/moment.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.6.1/fullcalendar.min.js'></script>
<script>

    $(document).ready(function() {

        $('#calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay,listWeek'
            },
            defaultDate: '2017-10-12',
            navLinks: true, // can click day/week names to navigate views
            editable: true,
            eventLimit: true, // allow "more" link when too many events
            events: [
                {
                    title: 'All Day Event',
                    start: '2017-10-01',
                },
                {
                    title: 'Long Event',
                    start: '2017-10-07',
                    end: '2017-10-10'
                },
                {
                    id: 999,
                    title: 'Repeating Event',
                    start: '2017-10-09T16:00:00'
                },
                {
                    id: 999,
                    title: 'Repeating Event',
                    start: '2017-10-16T16:00:00'
                },
                {
                    title: 'Conference',
                    start: '2017-10-11',
                    end: '2017-10-13'
                },
                {
                    title: 'Meeting',
                    start: '2017-10-12T10:30:00',
                    end: '2017-10-12T12:30:00'
                },
                {
                    title: 'Lunch',
                    start: '2017-10-12T12:00:00'
                },
                {
                    title: 'Meeting',
                    start: '2017-10-12T14:30:00'
                },
                {
                    title: 'Happy Hour',
                    start: '2017-10-12T17:30:00'
                },
                {
                    title: 'Dinner',
                    start: '2017-10-12T20:00:00'
                },
                {
                    title: 'Birthday Party',
                    start: '2017-10-13T07:00:00'
                },
                {
                    title: 'Click for Google',
                    url: 'http://google.com/',
                    start: '2017-10-28'
                }
            ]
        });

    });

</script>
<style>

    body {
        margin: 40px 10px;
        padding: 0;
        font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
        font-size: 14px;
    }

    #calendar {
        max-width: 900px;
        margin: 0 auto;
    }
</style>
</head>
<body>

    <div id='calendar'></div>

</body>
</html>
