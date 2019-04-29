<?php
    include 'header.php';
?>
    <title>Administrador</title>
</head>
<body>
    <div class="container">
        <table class="table table-bordered">
            <tr>
                <th>Correo Electrónico</th>
                <th>Nombre Usuario</th>
                <th>Acciones</th>
            </tr>
            <tbody>
                <?php 
                    include 'Registro.php';
                    $ListaUsuarios=ConsultarListaUsuarios();
                    while($Registro=mysqli_fetch_array($ListaUsuarios)){?>             
                    <tr>
                            <td><?php echo $Registro['CorreoElectronico'] ?></td>
                            <td><?php echo $Registro['NombreUsuario'] ?></td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-warning btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Acciones
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">Editar</a>
                                        <a class="dropdown-item" href="">Eliminar</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    <?php } ?>
            </tbody>
        </table>
    </div>
    
<?php
    include 'footer.php';
?>