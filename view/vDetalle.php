<header class="headerPropio">
    <h1>Aplicación LoginLogoff</h1>
</header>
<main>
    <article>
        <h3>Detalle de variables superglobales <strong>+ </strong>phpinfo</h3>
        <form name="ejercicio" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <input type="submit" id="volverPrograma" value="Volver" name="volverPrograma">
        </form>
        <?php /**
         * @author Ricardo Santiago Tomé - RicardoSantom en Github https://github.com/RicardoSantom
         * @version 1.0
         * @since 15/01/2023
         */ ?>
        <table class="tablaGlobales"><caption><?php printf('$_COOKIE') ?></caption>
            <?php
            if (is_null($_COOKIE) || empty($_COOKIE)) {
                print('<thead><th  style="border:none;color:red;text-align:center;">La variable $_COOKIE no guarda ningún valor</th></thead>');
            } else {
                foreach ($_COOKIE as $clave => $valor) {
                    echo '<tr>';
                    echo "<td>$clave</td>";
                    echo "<td>$valor</td>";
                    echo '</tr>';
                }
            }
            ?>
        </table>
        <table class="tablaGlobales"><caption><?php printf('$_SESSION') ?></caption>
            <?php
            if (is_null($_SESSION) || empty($_SESSION)) {
                print('<thead><th  style="border:none;color:red;text-align:center;">La variable $_SESSION no guarda ningún valor</th></thead>');
            } else {
                foreach ($_SESSION as $clave => $valor) {
                    echo '<tr>';
                    echo "<td>$clave</td><td><pre>";
                    print_r($valor);
                    echo '</pre></td></tr>';
                }
            }
            ?>
        </table>
        <table class="tablaGlobales"><caption><?php printf('$_SERVER') ?></caption>
            <?php
            if (is_null($_SERVER) || empty($_SERVER)) {
                print('<thead><th  style="border:none;color:red;text-align:center;">La variable $_SERVER no guarda ningún valor</th></thead>');
            } else {
                foreach ($_SERVER as $clave => $valor) {
                    echo '<tr>';
                    echo "<td>$clave</td>";
                    echo "<td>$valor</td>";
                    echo '</tr>';
                }
            }
            ?>
        </table>
        <table class="tablaGlobales"><caption><?php printf('$_REQUEST') ?></caption>
            <?php
            if (is_null($_REQUEST) || empty($_REQUEST)) {
                print('<thead><th  style="border:none;color:red;text-align:center;">La variable $_REQUEST no guarda ningún valor</th></thead>');
            } else {
                foreach ($_REQUEST as $clave => $valor) {
                    echo '<tr>';
                    echo "<td>$clave</td>";
                    echo "<td>$valor</td>";
                    echo '</tr>';
                }
            }
            ?>
        </table>
        <table class="tablaGlobales"><caption><?php printf('$_FILES') ?></caption>
            <?php
            if (is_null($_FILES) || empty($_FILES)) {
                print('<thead><th  style="border:none;color:red;text-align:center;">La variable $_FILES no guarda ningún valor</th></thead>');
            } else {
                foreach ($_FILES as $clave => $valor) {
                    echo '<tr>';
                    echo "<td>$clave</td>";
                    echo "<td>$valor</td>";
                    echo '</tr>';
                }
            }
            ?>
        </table>
        <table class="tablaGlobales"><caption><?php printf('$_ENV') ?></caption>
            <?php
            if (is_null($_ENV) || empty($_ENV)) {
                print('<thead><th  style="border:none;color:red;text-align:center;">La variable $_ENV no guarda ningún valor</th></thead>');
            } else {
                foreach ($_ENV as $clave => $valor) {
                    echo '<tr>';
                    echo "<td>$clave</td>";
                    echo "<td>$valor</td>";
                    echo '</tr>';
                }
            }
            ?>
        </table>
        <table class="tablaGlobales"><caption><?php printf('$_GET') ?></caption>
            <?php
            if (is_null($_GET) || empty($_GET)) {
                print('<thead><th  style="border:none;color:red;text-align:center;">La variable $_GET no guarda ningún valor</th></thead>');
            } else {
                foreach ($_GET as $clave => $valor) {
                    echo '<tr>';
                    echo "<td>$clave</td>";
                    echo "<td>$valor</td>";
                    echo '</tr>';
                }
            }
            ?>
        </table>
        <table class="tablaGlobales"><caption><?php printf('$_POST') ?></caption>
                <?php
                if (is_null($_POST) || empty($_POST)) {
                    print('<thead><th  style="border:none;color:red;text-align:center;">La variable $_POST no guarda ningún valor</th></thead>');
                } else {
                    foreach ($_POST as $clave => $valor) {
                        echo '<tr>';
                        echo "<td>$clave</td>";
                        echo "<td>$valor</td>";
                        echo '</tr>';
                    }
                }
                ?>
        </table>
        <?php
        phpinfo();
        ?>
    </article>
</main>