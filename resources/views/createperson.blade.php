<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>Add Person</title>
    <link type="text/css" rel="stylesheet" href="{{ URL::asset('css/arkusz.css') }}"}/>
</head>
<body>
    <div class>
        <form method="POST" action="{{ config('app.url')}}/persons">
            <h1> Enter Details to add Person</h1>
            <div>
                <label>Name</label> <input type="text" name="name">
            </div>

            <div>
                <label>Surname</label> <input type="text" name="surname">
            </div>

            <div>
                <label>Numbers</label> <input type="number" name="numbers">
            </div>

            <div>
                <label>Description</label> <input type="text" name="description">
            </div>

            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>

