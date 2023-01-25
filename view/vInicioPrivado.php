<header id="headerId">
    <h1>Aplicación LoginLogoff</h1>
    <h3>Vista Inicio Privado</h3>
    <input type="checkbox" name="rd" id="hbger">
    <label id="labelInicioPublico" for="hbger"></label>
    <input type="checkbox"  name="br" id="brClose">
    <ul class="menu">
        <label id="labelClose" for="brClose">X</label>
        <h1>Login Logoff</h1>
        <ul class="listaInternaDesplegable">
            <h2>EN DESARROLLO</h2>
            <li>Vista registro</li>
            <li>Vista password</li>
            <li>Vista borrar</li>
        </ul>
        <h2>NOVEDADES</h2>
        <li>Vista Inicio Público</li>
        <li>Vista Login</li>
        <li>Vista Inicio Privado</li>
        <li>Vista Detalle</li>
        <h2>TECNOLOGÍAS USADAS</h2>
        <li><a href="webroot/images/imagenPHP.png" target="blank">PHP</a></li>
        <li><a href="webroot/images/imagenMySQL.png" target="blank">MySQL</a></li>
        <li><a href="webroot/images/imagenHTML.png" target="blank">HTML 5</a></li>
        <li><a href="webroot/images/imagenCSS.png" target="blank">CSS 3</a></li>
    </ul>
</header>
<main>
    <form name="formInicioPrivado" id="formInicioPrivado" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="submit"  id="login" value="" name="login">
        <input type="submit" id="detalle" value="Detalle" name="detalle">
        <input type="submit" id="salirInicioPrivado" value="Salir" name="salir">
    </form>
    <article>
        <h2 id="bienvenida"><?php echo"Bienvenido " . $_SESSION['user208DWESLoginLogoff']->getDescUsuario(); ?></h2>
        <div id="divBienvenida">
            <div id="divBienvenidaInicio">
                <h3>Ultimo inicio de sesión: </h3>
                <p>
                    <?php
                    //comprobamos el numero de conexiones si es mayor a 1 tambien mostramos la fecha y hora de la ultima conexion
                    if ($_SESSION['user208DWESLoginLogoff']->getNumConexiones() > 1) {
                        echo $_SESSION['user208DWESLoginLogoff']->getFechaHoraUltimaConexionAnterior();
                    } else {
                        ?>
                    </p>
                    <p>
                        <?php
                        echo 'Es la primera vez que te conectas, aún no hay una fecha guardada de tu última conexión';
                    }
                    ?>
                </p>
            </div>
            <div id="divBienvenidaTabla">
                <h3>Datos objeto usuario</h3>
                <table>
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
            </div>
            <div id="divBienvenidaConexiones">
                <h3>Número de conexiones</h3>
                <p>
                    <?php
                    if ($_SESSION['user208DWESLoginLogoff']->getNumConexiones() == 2) {
                        echo"Es la primera vez que te conectas.";
                    } else {
                        //Mostramos el numero de conexiones
                        echo"<p>Te has conectado " . $_SESSION['user208DWESLoginLogoff']->getNumConexiones() . " veces";
                    }
                    ?>
            </div>
        </div>
        <?php
        /**
         * @author Ricardo Santiago Tomé - RicardoSantom en Github https://github.com/RicardoSantom
         * @version 1.0
         * @since 15/01/2023
         */
        //Damos la bienvenida al usuario haciendo uso de la cookie y el valor en ella recojido para idioma
        /* switch ($_COOKIE['cookieIdioma']) {
          case "es":
          echo"<h5>Bienvenido " . $_SESSION['usuario208DWESLoginLogoffTema5']->T01_DescUsuario."</h5>";
          $_COOKIE=['cookieIdioma']['es'];
          break;
          case "en":
          echo"<h5>Welcome " . $_SESSION['usuario208DWESLoginLogoffTema5']->T01_DescUsuario."</h5>";
          $_COOKIE=['cookieIdioma']['en'];
          break;
          case "pt":
          echo"<h5>Bem-vido " . $_SESSION['usuario208DWESLoginLogoffTema5']->T01_DescUsuario."</h5>";
          $_COOKIE=['cookieIdioma']['pt'];
          break;
          default:
          echo"<h5>Bienvenido " . $_SESSION['usuario208DWESLoginLogoffTema5']->T01_DescUsuario."</h5>";
          $_COOKIE=['cookieIdioma']['es'];
          break;
          } */
        ?>
    </article>
</main>
<script>
    window.addEventListener("load", intervalo);
            **
            * Crear dentro de vuestra aplicación final, un reloj con la hora actual donde los números serán imágenes o gifs sacados de internet.
            * /
    
    
            function crearReloj() {
                var horaActual = new Date();
                //-----------HORAS-------------
                var unidadHoras = parseInt((horaActual.getHours()) / 10);
                var decenaHoras = horaActual.getHours() % 10;
                //-----------MINUTOS-------------
                var unidadMinutos = parseInt((horaActual.getMinutes()) / 10);
                var decenaMinutos = horaActual.getMinutes() % 10;
                //-----------SEGUNDOS-------------
                var unidadSegundos = parseInt((horaActual.getSeconds()) / 10);
                var decenaSegundos = horaActual.getSeconds() % 10;

                var divReloj = document.createElement("div");
                //var divForm =document.getElementById("formInicioPrivado");
                //divForm.append(divReloj);
                document.body.append(divReloj);
                divReloj.setAttribute("id", "divReloj");

                var dosPuntos = document.createElement("img");
                var dosPuntos2 = document.createElement("img");
                var horaDerecho = document.createElement("img");
                var horaIzquierdo = document.createElement("img");
                var minutoDerecho = document.createElement("img");
                var minutoIzquierdo = document.createElement("img");
                var segundoDerecho = document.createElement("img");
                var segundoIzquierdo = document.createElement("img");


                divReloj.append(horaDerecho, horaIzquierdo, dosPuntos, minutoDerecho, minutoIzquierdo,
                        dosPuntos2, segundoDerecho, segundoIzquierdo);
                var ruta = "../images/";
                //--------------------PUNTOS----------------------
                dosPuntos2.setAttribute("src", "../images/puntos.gif");
                dosPuntos2.setAttribute("alt", "Imagen dos puntos");
                dosPuntos2.setAttribute("class", "puntos");
                dosPuntos.setAttribute("src", "../images/puntos.gif");
                dosPuntos.setAttribute("alt", "Imagen dos puntos");
                dosPuntos.setAttribute("class", "puntos");
                //---------------------HORAS----------------------
                horaDerecho.setAttribute("src", ruta.concat(unidadHoras, ".jpg"));
                horaDerecho.setAttribute("alt", "hora derecha");
                horaIzquierdo.setAttribute("src", ruta.concat(decenaHoras, ".jpg"));
                horaIzquierdo.setAttribute("alt", "hora izquierda");
                //---------------------MINUTOS----------------------
                minutoDerecho.setAttribute("src", ruta.concat(unidadMinutos, ".jpg"));
                minutoDerecho.setAttribute("alt", "minuto derecho");
                minutoIzquierdo.setAttribute("src", ruta.concat(decenaMinutos, ".jpg"));
                minutoIzquierdo.setAttribute("alt", "minuto izquierdo");
                //---------------------SEGUNDOS----------------------
                segundoDerecho.setAttribute("src", ruta.concat(unidadSegundos, ".jpg"));
                segundoDerecho.setAttribute("alt", "segundo derecho");
                segundoIzquierdo.setAttribute("src", ruta.concat(decenaSegundos, ".jpg"));
                segundoIzquierdo.setAttribute("alt", "segundo izquierdo");

            }

    crearReloj();
    var intervalo = setInterval(() => {
        var divReloj = document.getElementById("divReloj");
        for (const iterator of divReloj.children) {
            divReloj.removeChild[iterator];
        }
        divReloj.remove();
        crearReloj();
    }, 1000);
</script>
</body>
</html>