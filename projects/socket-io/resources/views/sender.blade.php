<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <button id="notify">Send Notification</button>
    {{-- <script src="{{ asset('js/socket.io.js') }}"></script> --}}
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.socket.io/4.7.4/socket.io.min.js"
        integrity="sha384-Gr6Lu2Ajx28mzwyVR8CFkULdCU7kMlZ9UthllibdOSo6qAiN+yXNHqtgdTvFXMT4" crossorigin="anonymous">
    </script>
    <script>
        // import io from 'socket.io-client';

        const socket = io('http://localhost:3000');

        socket.on('connect', () => {
            console.log('Connected to server');
        });
        $('#notify').click(function(e) {
            e.preventDefault();
            const now = new Date();
            const currentTime = now.toLocaleTimeString();
            socket.emit('test-event', {
                message: `New notification! ${currentTime}`
            });
        });
    </script>
</body>

</html>
