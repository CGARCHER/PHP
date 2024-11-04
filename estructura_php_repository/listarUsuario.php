<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi listado de usuarios</title>
</head>

<style>
    table{
        border-collapse: collapse;
    }
    th,td{
        border: 1px solid black;
        padding: 10px;
    }

</style> 
<body>
    <h1>Listado de Usuarios</h1>
    <br>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Edad</th>
            <th></th>
        </tr>
        <a href="crearUsuarioForm.html">Crear usuario</a>
        <a href="cerrarSesion.php">Cerrar sesión</a>
        <!-- pintar la info que tengo en mi array usuarios de la sesión -->
        <?php
            //require_once("model/usuario.php");
            require_once("repository/userRepository.php");
            $userRepository = new UserRepositorty();
            $usuarios = $userRepository->getAllUsers();
            if(count($usuarios) == 0){
                echo "<tr><td colspan=3>No hay usuarios creados</td></tr>";
            }
            foreach($usuarios as $key=>$usu){
                echo "<tr>";
                echo "<td>".$usu->getNombre()."</td>";
                echo "<td>".$usu->getApellidos()."</td>";
                echo "<td>".$usu->getEdad()."</td>";
                echo "<td><a href='eliminarUsuario.php?nombre=".$usu->getNombre().
                "&apellidos=".$usu->getApellidos()."'>Eliminar</a></td>";
                echo "</tr>";
            }
        ?>
    </table>
    
</body>
</html>