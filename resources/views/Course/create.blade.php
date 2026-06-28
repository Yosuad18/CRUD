<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Curso</title>
</head>
<body>

<h1>formulario Curso</h1>

<form action="{{route('course.store')}}" method="POST" enctype="multipart/form-data">

@csrf

<label>
    Number:
    <br>
    <input type="text" name="course_number">
</label>
<label>
    Dia:
    <br>
    <input type="text" name="day">
</label>
<br>
<br>



<button type="submit">Enviar Formulario:</button>
</form>

</body>
</html>
