<header class="headerPropio">
    <h1>Aplicación LoginLogoff</h1>
</header>
<main>
    <article>
        <h3>Detalle de variables superglobales <strong>+ </strong>phpinfo</h3>
        <form name="ejercicio" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <input type="submit" id="volverPrograma" value="Volver" name="volverPrograma">
        </form>
        <?php
        /**
         * @author Ricardo Santiago Tomé - RicardoSantom en Github https://github.com/RicardoSantom
         * @version 1.0
         * @since 15/01/2023
         */
        if (!empty($_SESSION)) {
            echo "<table class='tablaGlobales'><caption>\$_SESSION</caption><tr><th>Clave</th><th>Valor</th></tr>";
            foreach ($_SESSION as $clave => $valor) {
                echo "<tr>";
                echo "<td><strong>$clave</strong></td>";
                if (is_object($valor)) {
                    echo "<td>Los datos del objeto Usuario guardados en \$_SESSION se muestran en la tabla siguiente.</td>";
                } else {
                    echo "<td>" . $valor . "</td>";
                }
                echo "</tr>";
            }
            echo "</table>";

            echo "</br>";
        } else {
            printf('<h3>La variable superglobal $_SESSION está vacía</h3>');
        }
        ?>
        <table class="tablaGlobales">
            <caption>Datos Objeto Usuario en $_SESSION</caption>
            <thead>
                <tr>
                    <th>Atributo</th>
                    <th>Valor</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Código usuario</td>
                    <td><?php echo $_SESSION['user208DWESLoginLogoff']->getCodUsuario() ?></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><?php echo $_SESSION['user208DWESLoginLogoff']->getPassword() ?></td>
                </tr>
                <tr>
                    <td>Descripción usuario</td>
                    <td><?php echo $_SESSION['user208DWESLoginLogoff']->getDescUsuario() ?></td>
                </tr>
                <tr>
                    <td>Número conexiones</td>
                    <td><?php echo $_SESSION['user208DWESLoginLogoff']->getNumConexiones() ?></td>
                </tr>
                <tr>
                    <td>Fecha Hora Ultima Conexion</td>
                    <td><?php echo date_format($_SESSION['user208DWESLoginLogoff']->getFechaHoraUltimaConexion(), 'Y-m-d H:i:s') ?></td>
                </tr>
                <tr>
                    <td>Fecha Hora Ultima Conexion Anterior</td>
                    <td><?php echo $_SESSION['user208DWESLoginLogoff']->getFechaHoraUltimaConexionAnterior() ?></td>
                </tr>
                <tr>
                    <td>Perfil</td>
                    <td><?php echo $_SESSION['user208DWESLoginLogoff']->getPerfil() ?></td>
                </tr>
                <tr>
                    <td>Imagen usuario</td>
                    <td><?php echo $_SESSION['user208DWESLoginLogoff']->getImagenUsuario() ?></td>
                </tr>
            </tbody>
        </table>

        <?php

        function imprimirTablaVariablesSuperGlobales($aVariableSuperglobal, $sNombreVariableSuperGlobal) {
            /**
             * Esta función recibe dos parámetros, con ellos construye una tabla, evalua si el primer parámetro recibido
             * es null o está vacío; en caso de que así sea, devuelve un mensaje impreso por pantalla declarando que
             * no hay nada que mostrar de esta variable superglobal, si no, construye una fila por cada pareja de variable - valor 
             * imprimiendo el valor de cada una de ellas en una celda diferente.
             *  Esta impresión la realiza con print_r pasándole como primer parámetro en una ocasión el nombre de la variable 
             * y en otra el valor de esta, y como segundo parámetro un valor booleano que si está establecido a true no mostrará
             * el primer parámetro, por contra, si está establecido a false si lo mostrará.
             * @author Ricardo Santiago Tomé - RicardoSantom en Github https://github.com/RicardoSantom
             * @version 1.0
             * @since 05/11/2022
             * @param array $aVariableSuperglobal array que contiene datos de la variable superglobal. Como parámetro la pasamos con el 
             *  identificador de dicha variable superglobal.
             * @param string $sNombreVariableSuperGlobal nombre de la variable superglobal abriendo comillas seguidas por la secuencia
             * de escape \ y a continuación el identificador de la variable supeglobal y para finalizar, cerramos con comillas.
             */
            printf('<table class="tablaGlobales"><caption>%s</caption>', $sNombreVariableSuperGlobal);
            if (is_null($aVariableSuperglobal) || empty($aVariableSuperglobal)) {
                printf('<thead><th  style="border:none;color:red;text-align:center;">La variable superglobal %s está vacía</th></thead>', $sNombreVariableSuperGlobal);
            } else {
                foreach ($aVariableSuperglobal as $nombreSuperglobal => $valorSuperglobal) {
                    if ($nombreSuperglobal == '_SESSION') {
                        
                    } else {
                        if ($nombreSuperglobal == '_SERVER') {
                            print("<tr>");
                            print '<td>';
                            print($sNombreVariableSuperGlobal);
                            print '</td>';
                            print '<td>';
                            echo '<table class="tablaFlobales">';
                            foreach ($_SERVER as $claveServer => $valorServer) {
                                echo '<tr>';
                                print '<td>';
                                print_r($claveServer);
                                print '</td>';
                                print '<td>';
                                print_r($valorServer);
                                print '</td>';
                                echo '</tr>';
                            }
                            echo '</table>';
                            print '</td>';
                        } else {
                                echo "<tr><th>";
                                print_r($nombreSuperglobal, $booleanoSuperglobal = false) . "</th>";
                                echo "<td>";
                                print_r($valorSuperglobal, $booleanoSuperglobal2 = false) . "</td>";
                                print "</tr>";
                            
                        }
                    }
                }
                echo "</table>";
            }
        }

        imprimirTablaVariablesSuperGlobales($_COOKIE, "\$_COOKIE");
        imprimirTablaVariablesSuperGlobales($_SERVER, "\$_SERVER");
        imprimirTablaVariablesSuperGlobales($_REQUEST, "\$_REQUEST");
        imprimirTablaVariablesSuperGlobales($GLOBALS, "\$_GLOBALS");
        imprimirTablaVariablesSuperGlobales($_FILES, "\$_FILES");
        imprimirTablaVariablesSuperGlobales($_ENV, "\$_ENV");
        imprimirTablaVariablesSuperGlobales($_POST, "\$_POST");
        imprimirTablaVariablesSuperGlobales($_GET, "\$_GET");
        ?>
        <?php phpinfo();
        ?>
    </article>
</main>