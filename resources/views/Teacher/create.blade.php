<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Teacher</title>
</head>
<body>

<h1>formulario Profesor</h1>

<form action="{{route('teacher.store')}}" method="POST" enctype="multipart/form-data">

@csrf

<label>
    Name:
    <br>
    <input type="text" name="name">
</label>
<br>
<label>
    Correo:
    <br>
    <input type="text" name="email">
</label>



<button type="submit">Enviar Formulario:</button>
</form>

</body>
</html>
