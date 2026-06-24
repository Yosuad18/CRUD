<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Formulario Computer</h1>

    <form action="{{route('computer.store')}}" method="POST" enctype="multipart/form-data">

@csrf

<label>
    Number:
    <br>
    <input type="number" name="number">
</label>
<br>
<label>
    Brand:
    <br>
    <input type="text" name="brand">
</label>
<br>
<br>


<button type="submit">Crear Computador:</button>
</form>

</body>
</html>
