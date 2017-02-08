<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{!! csrf_token() !!}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.3.6/sweetalert2.min.css">
    <link rel="stylesheet" href="{{ elixir('/css/app.css') }}">
    <title>My App</title>
</head>
<body>
    <div id="root"></div>
    <script src="{{ elixir('/js/app.js') }}"></script>
</body>
</html>
