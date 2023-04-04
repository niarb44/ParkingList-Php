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

            <h1> Enter Details to Update Person</h1>
            <div>
                <label>Name &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label> <input type="text" name="person->name">
            </div>

            <div>
                <label>Surname &nbsp&nbsp&nbsp</label> <input type="text" style="width: 291px;" name="person->surname">
            </div>

            <div>
                <label>Numbers &nbsp&nbsp&nbsp</label> <input type="number" name="person->numbers">
            </div>

            <div>
                <label>Description</label> <input type="text" name="person->description">
            </div>

            <button type="submit">Update</button>
        </form>

        <div>
        <h1>
        </h1>
        <a href="{{ config('app.url')}}/persons" class="links2">View List</a>
        </div>

    </div>
</body>
</html>

