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
            <td><h4>Name</h4></td>
            <td><h4>Surname</h4></td>
            <td><h4>Numbers</h4></td>
            <td><h4>Description</h4></td>
            </thead>
            <tbody>
            @foreach ($allPersons as $person)
                <tr>
                    <td>{{ $person->name }}</td>
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
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
</body>
</html>

