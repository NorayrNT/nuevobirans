<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{env('APP_NAME')}}</title>
</head>
<body>
    <div>
        <p>The message is sent from @if ($data['email']) {{$data['email'] }} @endif </p>
        <p> @if ($data['description']) {{$data['description'] }}  @endif
    </div>
</body>
</html>