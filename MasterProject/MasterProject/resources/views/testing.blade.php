<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>belajar mandiri</title>
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        @foreach ($src as $item)
            <div class="container">
                <img src="{{ $item }}" class="img-fluid">
            </div>
        @endforeach
    </body>
</html>
