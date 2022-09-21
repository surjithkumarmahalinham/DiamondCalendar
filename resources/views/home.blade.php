@extends('layouts.app')

@section('content')
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
<section class="py-5 mb-5">
    <div class="container">
        <div id="calendar"></div>
        
    </div>
</section>
<script>
$(document).ready(function() {

$('#calendar').fullCalendar({
    header:{
            left:'prev,next today',
            center:'title',
            right:'month,agendaWeek,agendaDay'
        },
        editable: true,
        dayRender: function (date, cell) {
            cell.append('<button class="dayButton btn btn-success btn-xs sharp" data-date="'+ date +'" onclick="add()" style="margin-left:2px;margin-top:45px;"><i class="fa fa-plus"></i></button><button class="dayButton btn btn-primary btn-xs sharp" onclick="edit()" style="margin-left:2px;margin-top:45px;"><i class="fa fa-edit"></i></button><button class="dayButton btn btn-info btn-xs sharp" onclick="view()" style="margin-left:2px;margin-top:45px;"><i class="fa fa-eye"></i></button>');
        }
    });
});

getevent();
function getevent()
{
    $.ajax({
        type : 'GET',
        url : '{{ route("getevent") }}',
        dataType : 'json',
        success: function (result) {
            
        var newEvents = result.eventdata;

        $('#calendar').fullCalendar('addEventSource',(newEvents));
        $('#calendar').fullCalendar('render'); 
        },
        error: function (e) {
            console.log(e);
        }
    }); 
}
function add()
{
    alert("add event");
}
function edit()
{
    alert("edit event");
}
function view()
{
    alert("view event");
}
</script>
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://momentjs.com/downloads/moment.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.js'></script>
<link rel='stylesheet' href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css"/>