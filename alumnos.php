<?php
    include("conexion.php");
    $con=conectar();

    // Consulta a BD
    $sql = "SELECT * FROM alumnos";

    // Ejecutamos consulta en BD
    $query = mysqli_query($con,$sql);

    // Guardamos la consultar de la fila en una variable
    $row = mysqli_fetch_array($query);
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumn Page</title>
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <div class="row">

            <div class="col-md-3">
                <h1>Ingrese datos</h1>
                <form action="insertar.php" method="POST">

                    <input type="text" class="form-control mb-3" name="nombres" placeholder="Nombres">
                    <input type="text" class="form-control mb-3" name="apellidos" placeholder="Apellidos">
                    <input type="number" class="form-control mb-3" name="dni" placeholder="DNI">

                    <input type="submit" class="btn btn-primary"></input>

                </form>
            </div>
            <div class="col-md-8">
                <h1>Tabla de Alumnos</h1>
                <table class="table">
                    <thead class="table-succes table-striped">
                        <tr>
                            <th>Id</th>
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th>DNI</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                            while($row=mysqli_fetch_array($query)){
                        ?>      
                            <tr>
                                <th><?php echo $row['id']?></th>
                                <th><?php echo $row['Nombres']?></th>
                                <th><?php echo $row['Apellidos']?></th>
                                <th><?php echo $row['dni']?></th>

                                <th><a href="actualizar.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Editar</a></th>
                                <th><a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">X</a></th>
                                
                                <!-- Para probar -->
                                <!-- <th >
                                    <button class="btn btn-info">Editar</button>
                                    <button class="btn btn-danger">x</button>
                                </th> -->
                            </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>

            </div>

        </div>
    </div>
</body>
</html>