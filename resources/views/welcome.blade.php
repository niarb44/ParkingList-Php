<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ParkingList</title>
    <link type="text/css" rel="stylesheet" href="{{ URL::asset('css/arkusz.css') }}"}/>
    <?php
    $cssFile = "arkusz.css";
    echo '<link rel="stylesheet" href="' . $cssFile . '">';
    ?>
</head>
<body class="antialiased">

<div class="content">
    <div class="title">Product Store</div>
    <div class="links">
        <a href="{{ config('app.url')}}/persons/create" class="links">Create Product</a>
        <a href="{{ config('app.url')}}/persons" class="links">View Products</a>
    </div>
</div>

</body>
</html>
