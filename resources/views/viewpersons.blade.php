<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>View Products | Product Store</title>
    <!-- Styles etc. -->
</head>
<body>
<div class="flex-center position-ref full-height">
    <div class="content">
        <h1>Here's a list of available products</h1>
        <table>
            <thead>
            <td>Name</td>
            <td>Surname</td>
            <td>Numbers</td>
            <td>Description</td>
            </thead>
            <tbody>
            @foreach ($allPersons as $person)
                <tr>
                    <td>{{ $person->name }}</td>
                    <td class="inner-table">{{ $person->surname }}</td>
                    <td class="inner-table">{{ $person->numbers }}</td>
                    <td class="inner-table">{{ $person->description }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
</body>
</html>

