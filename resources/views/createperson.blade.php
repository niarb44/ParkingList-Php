<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>Add Person</title>
    <link type="text/css" rel="stylesheet" href="{{ URL::asset('css/arkusz.css') }}"}/>
</head>
<body>
    <div>
        <form method="POST" action="{{ config('app.url')}}/persons">
            <h1> Enter Details to add Person</h1>
            <div>
                <label>Name &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label> <input type="text" name="name">
            </div>

            <div>
                <label>Surname &nbsp&nbsp&nbsp</label> <input type="text" style="width: 291px;" name="surname">
            </div>

            <div>
                <label>Numbers &nbsp&nbsp&nbsp</label> <input type="number" name="numbers">
            </div>

            <div>
                <label>Description</label> <input type="text" name="description">
            </div>

            <button type="submit">Submit &nbsp;</button>
        </form>

         <div>
         <h1>
         </h1>
         <a href="{{ config('app.url')}}/persons" class="links2">View List</a>
         </div>

    </div>

</body>
</html>

