<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Socket.IO Notifications</title>
</head>

<body>
    <div id="temp"></div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    {{-- <script src="{{ asset('js/socket.io.js') }}"></script> --}}
    <script src="https://cdn.socket.io/4.7.4/socket.io.min.js"
        integrity="sha384-Gr6Lu2Ajx28mzwyVR8CFkULdCU7kMlZ9UthllibdOSo6qAiN+yXNHqtgdTvFXMT4" crossorigin="anonymous">
    </script>
    <script>
        // import io from 'socket.io-client';

        const socket = io('http://localhost:3000');

        socket.on('connect', () => {
            console.log('Connected to server');
        });
        socket.on('test-event', (data) => {
            console.log(data);
            $('#temp').append('<br>');
            $('#temp').append(data.message);
            // Trigger your notification logic here
        });
    </script>
</body>

</html>
