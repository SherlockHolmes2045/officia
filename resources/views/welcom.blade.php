<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<script src="{{ asset('js/app.js') }}"></script>
<script>
    Echo.channel('events')
        .listen('RealTimeMessage', (e) => console.log('RealTimeMessage: ' + e.message));
</script>
</body>
</html>
