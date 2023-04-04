<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>Edit Person</title>
    <link type="text/css" rel="stylesheet" href="{{ URL::asset('css/arkusz.css') }}"}/>
</head>
<body>
    <div class>
        <form method="POST" action="{{ url('update-person/'.$myPerson->numbers) }}">
            @csrf
            @method('PUT')

            <h1> Enter Details to update Person</h1>
            <div>
                <label>Name</label> <input type="text" name="person->name">
            </div>

            <div>
                <label>Surname</label> <input type="text" name="person->surname">
            </div>

            <div>
                <label>Numbers</label> <input type="number" name="person->numbers">
            </div>

            <div>
                <label>Description</label> <input type="text" name="person->description">
            </div>

            <button type="submit">Update</button>
        </form>
    </div>
</body>
</html>

