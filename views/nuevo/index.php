<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <?php require 'views/header.php' ?>
        <div id="main">
            <h1 class="center ">Sección de Consulta </h1>

            <div class="center"><?php echo $this->mensaje; ?> </div>

            <form action="<?php echo constant('URL'); ?>nuevo/registrarAlumno" method="POST">
                <P>
                    <label for="matricula">Matricula: </label><br>
                    <input type="text" name="matricula" required>
                </P>
                <P>
                    <label for="nombre">Nombre: </label><br>
                    <input type="text" name="nombre" required>
                </P>
                <P>
                    <label for="apellido">Apellido: </label><br>
                    <input type="text" name="apellido" required>
                </P>
                <P>
                    
                    <input type="submit" value="Registrar nuevo alumno">
                </P>

            </form>
        
        </div>
        
    <?php require 'views/footer.php' ?>    

</body>
</html>