<header id="headerId">
    <h1>Aplicación LoginLogoff</h1>
    <h3>Vista Login</h3>
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
    <form id="formInicioPublico" method="post">
        <fieldset id="fieldsetInicioPublico">
            <input type="submit"  id="login" value="" name="login2">
        </fieldset>
    </form>
</header>
<form id="formLogin" method="post">
    <fieldset>
        <div class="divRegistroCancelar">
            <h2>YA SOY UN USUARIO REGISTRADO</h2>
            <h5 style="opacity: 0 !important;">--------</h5>
            <input type="text" name="usuario" placeholder="Usuario" class="entradadatos"/>
            <input type="password" name="password" placeholder="Contraseña" id="password" class="entradadatos" />
            <div class="inicarSesionLogin"><input type="submit" id="iniciarsesion" value="Iniciar Sesión" name="login"></div>
        </div>
        <div class="divRegistroCancelar">
            <h2>SOY NUEVO EN APLICACIÓN LOGINLOGOFF</h2>
            <h5><strong>REGÍSTRESE HOY!!! ES IGUAL DE GRATIS QUE MAÑANA</strong></h5>
            <p>Si pulsa el botón <strong>"registrarse"</strong> le redirigiremos a nuestro </p>
            <p><strong>formulario de registro.</strong></p>
            <div class="inicarSesionLogin"><input type="submit" id="registrarse" value="Registrarse" name="registrarse"></div>
            <div class="inicarSesionLogin"><input type="submit" id="cancelar" value="Cancelar" name="cancelar"></div>
        </div>
    </fieldset>
</form>
<div id="divIdioma">
    <h3>En desarrollo mostrar aquí lista desplegable para seleccionar idioma</h3>
     <!--<select name="listaDesplegable" value="<?php
    /* if (isset($_REQUEST['listaDesplegable'])) {
      echo $_REQUEST['listaDesplegable'];
      } */
    ?>"
 <option value="null">Elija una opcion :</option>
 <option value="es">Español</option>
 <option value="pt">Portugués</option>
 <option value="en">Inglés</option>
</select>>-->
</div>