<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=chrome">
    <title>Document</title>
</head>
<body>
    <form action=" {{ route('soldados.store') }} " method="POST">
        @csrf

        <label> Nombre: 
        <input type="text" id="name" name="nom_s">
    </label>
         <br>
        <label> Apellido:
        <input type="text" id="apellido" name="apell_s">
    </label>
        <br>

        <label for="grado_s"> Grado:
        <input type="text" name="grado_s">
    </label>
        <br>

        <label> Codigo de cuerpo:
        <input type="number"name="cod_ce1">
    </label>
        <br>

        <label> numero de compañia: 
        <input type="number"  name="num_com1">
    </label>
        <br>

        <label> Codigo de cuartel: 
        <input type="number" name="cod_c2">
    </label>
        <br>
        <button type="submit">enviar</button>
    </form>
</body>
</html>