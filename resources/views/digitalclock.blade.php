@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Digital Clock</h1>
@stop

@section('content')

<div id="clock"></div>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
    <script>
        function updateClock() {
            var now = new Date();
            var hours = now.getHours();
            var minutes = now.getMinutes();
            var seconds = now.getSeconds();
            hours = (hours < 10 ? "0" : "") + hours;
            minutes = (minutes < 10 ? "0" : "") + minutes;
            seconds = (seconds < 10 ? "0" : "") + seconds;
            var timeString = hours + ":" + minutes + ":" + seconds;
            $('#clock').text(timeString);
        }

        $(document).ready(function() {
            updateClock();
            setInterval(updateClock, 1000);
        });
    </script>
@stop
