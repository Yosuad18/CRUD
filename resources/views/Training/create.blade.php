<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Formulario Training Center</h1>

    <form action="{{route('training.store')}}" method="POST" enctype="multipart/form-data">

@csrf

<label>
    Name:
    <br>
    <input type="text" name="name">
</label>
<br>
<label>
    Location:
    <br>
    <input type="text" name="location">
</label>
<br>
<br>


<button type="submit">Crear Training Center:</button>
</form>


</body>
</html>
