<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posture Collection</title>
</head>

<body>
    <h1>Posture Collection</h1>

    <!-- Tampilkan data dalam bentuk list -->
    <ul>
        @foreach ($data as $posture)
            <li>
                <strong>Title:</strong> {{ $posture->title }} <br>
                <strong>Body:</strong> {{ $posture->body }} <br>
                <strong>Slug:</strong> {{ $posture->slug }}
            </li>
        @endforeach
    </ul>
</body>

</html>
