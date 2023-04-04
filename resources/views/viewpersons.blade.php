<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>View Parking-List</title>
    <link type="text/css" rel="stylesheet" href="{{ URL::asset('css/arkusz.css') }}"}/>
</head>
<body>
<div class="flex-center position-ref full-height">
    <div class="content">
        <h1>Here's a parking list</h1>
        <table>
            <thead>
            <td><h3>Name</h3></td>
            <td><h3>Surname</h3></td>
            <td><h3>Numbers</h3></td>
            <td><h3>Description</h3></td>
            </thead>
            <tbody>
            @foreach ($allPersons as $person)
                <tr>
                    <td class="inner-table">{{ $person->name }}</td>
                    <td class="inner-table">{{ $person->surname }}</td>
                    <td class="inner-table">{{ $person->numbers }}</td>
                    <td class="inner-table">{{ $person->description }}</td>
                    <td>
                        <form action="{{ url('delete-person/'.$person->numbers) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                    <td>
                         <form action="{{ url('edit-person/'.$person->numbers) }}" method="GET">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Edit</button>
                         </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div>
    <h1>
    </h1>
    <a href="{{ config('app.url')}}/persons/create" class="links2">Add person</a>
    </div>

</div>
</body>
</html>

