<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Available Properties</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous">
    <style>
        .property-image {
    max-width: 100%;
    height: auto;
        }
    </style>
</head>
<body>
    <h1>Available Properties</h1>
    <ul class="list-group">
        @foreach ($properties as $property)

        <li class="list-group-item">
            <p><strong>Property Title:</strong><a href="{{ route('show.property', $property->id) }}">{{ $property->title }}</a></p>
            <p><strong>Property Description:</strong>{{ Str::limit($property->description, 100) }}</p>
            <p><strong>Name:</strong> {{ $property->name }}</p>
            <div class="property-image">
                
                <img src="{{ asset($property->image) }}" alt="Property Image">
            </div>

            <p><strong>Availability Date:</strong> {{ $property->availability_date }}</p>
        </li>
    @endforeach
    </ul>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
   crossorigin="anonymous"></script>
</body>
</html>
