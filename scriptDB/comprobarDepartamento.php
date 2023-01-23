<!DOCTYPE html>
<html lang="es">
    <!--
            Autor: Ricardo Santiago Tomé.
            Utilidad: Comprobación tablas de base de datos.
            Fecha-última-revisión: 11/01/2023.
    -->
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="robots" content="index, follow">
        <meta name="author" content="Ricardo Santiago Tomé">
        <link rel="stylesheet" href="../webroot/css/estilosPlantilla.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="icon" type="image/png" sizes="96x96" href="../../webroot/images/favicon-96x96.png">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <title>Script comprobacion T02_Departamento</title>
    </head>
    <body>
        <header>
            <h1>Scripts proyecto LoginLogoff</h1>
            <h2>Scripts comprobación de datos DB entorno de explotaciónS</h2>
        </header>
        <main>
            <article>
                <h3>script comprobación de datos T02_Departamento</h3>
                <?php
                require_once '../core/validacionFormularios.php';
                require_once '../config/confDB.php';
                try {
                    //Establecimiento de la conexión 
                    $DB208DWESLoginLogoff = new PDO(DSN, NOMBREUSUARIO, PASSWORD);
                    $comprobacion = $DB208DWESLoginLogoff->prepare(<<<SQL
                    select * from T02_Departamento;
                    SQL);
                    $comprobacion->execute(); //Ejecuto la consulta
                    $registroObjeto = $comprobacion->fetch(PDO::FETCH_OBJ);
                    //Mientras la fila cargada no sea null se ejecuta el bucle while
                    //Creación de la tabla para mostrar los datos
                    echo "<table><thead><tr><th>T02_CodDepartamento</th><th>T02_DescDepartamento</th><th>T02_FechaCreaciónDepartamento</th>"
                    . "<th>T02_VolumenNegocio</th><th>T02_FechaBajaDepartamento</th></tr></thead><tbody>";
                    while ($registroObjeto != null) {
                        echo "<tr>";
                        foreach ($registroObjeto as $clave => $valor) {
                            if ($valor != null) {
                                echo "<td>$valor</td>";
                            } else {
                                echo"<td>null</td>";
                            }
                        }
                        echo "</tr>";
                        //Cargado de una nueva fila para que el bucle while pueda evaluar si
                        //se cumple la condición de permanencia o no.
                        $registroObjeto = $comprobacion->fetch(PDO::FETCH_OBJ);
                    }
                    echo "</tbody></table>";
                } catch (PDOException $excepcion) { //Código que se ejecutará si se produce alguna excepción
                    //Almacenamos el código del error de la excepción en la variable $errorExcepcion
                    $errorExcep = $excepcion->getCode();
                    //Almacenamos el mensaje de la excepción en la variable $mensajeExcep
                    $mensajeExcep = $excepcion->getMessage();
                    echo "<span style='color: red;'>Error: </span>" . $mensajeExcep . "<br>"; //Mostramos el mensaje de la excepción
                    echo "<span style='color: red;'>Código del error: </span>" . $errorExcep; //Mostramos el código de la excepción
                } finally {
                    // Cierre de la conexión.
                    unset($DB208DWESLoginLogoff);
                }
                ?>
                <a href="https://daw208.ieslossauces.es/208DWESLoginLogoff/index.php">VOLVER</a>
            </article>
        </main>
        <footer>
            <p>2022-23  IES LOS SAUCES. <a href="../../../index.html" id="enlacePrincipal" title="Enlace a Index Principal">Ricardo Santiago Tomé</a> © Todos los derechos reservados</p>
            <a href="https://github.com/RicardoSantom" target="blank" id="github" title="RicardoSantom en GitHub">
            </a>
            <a href="https://www.linkedin.com/in/ricardo-santiago-tom%C3%A9/" id="linkedin" title="Ricardo Santiago Tomé en Linkedim" target="_blank"></a>
            <a href="https://daw208.ieslossauces.es/doc/curriculumRicardo.pdf" class="material-icons" title="Curriculum Vitae Ricardo Santiago Tomé" target="_blank" id="curriculum"><span class="material-icons md-18">face</span></a>
            <a href="https://daw208.ieslossauces.es/208DWESLoginLogoff/index.php" id="enlaceSecundario" title="Enlace a Index">Index</a>
        </footer>
    </body>
</html>