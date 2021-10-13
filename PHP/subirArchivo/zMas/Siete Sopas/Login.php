<?php 
    if(isset($_POST['submit'])){
        $usuario = $_POST['usuario'];
        $contraseña = $_POST['contraseña'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresar - Siete Sopas</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/fontello.css">
    <link rel="icon" href="Imagenes/ImgInicio/sopa.png">
    <link rel="stylesheet" href="Estilos/Inicio/Header.css">    
    <link rel="stylesheet" href="Estilos/Inicio/Menu.css">
    <link rel="stylesheet" href="Estilos/Inicio/Footer.css">    
    <link rel="stylesheet" href="Estilos/Login/login.css">
</head>
<body>
    <header>
        <div class="contenedor">
            <a href="Inicio.html" class="icon-food">Siete Sopas</a>     
            <input type="checkbox" id="menu-bar">
            <label class="icon-menu" for="menu-bar"></label>
            <nav class="menu">
                <a href="Login.php">INGRESAR</a>
                <a href="MenuFood.html">MENU</a>
                <a href="Delivery.html">DELIVERY</a>
                <a href="Reservaciones.html">RESERVAR</a>
                <!-- <a href="Inicio.html">HOME</a>                 -->
            </nav>
        </div>        
    </header>
    <div class="contenedor-login">
        <form class="form-caja" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST" onsubmit="return validar()">
            <div class="caja-btn">                
                <h2>Iniciar Sesion</h2>
            </div>
            <div class="redes-sociales">
                <img  class="rs-f" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/51/Facebook_f_logo_%282019%29.svg/1200px-Facebook_f_logo_%282019%29.svg.png" alt="">
                <img class="rs-t" src="https://hipertextual.com/files/2012/06/twitter-bird-white-on-blue.jpg" alt="">
                <img class="rs-g" src="https://logodownload.org/wp-content/uploads/2017/05/google-chrome-logo.png" alt="">
            </div>            
            <div id="login" class="input-group">
                <?php 
                    include("../Siete Sopas/ConexionesBD/validar-login.php");
                ?> 
                <input type="text" class="input-field" placeholder="Nombre de Usuario" required id="usuario" name="usuario">
                <input type="password" class="input-field" placeholder="Contraseña" required id="contraseña" name="contraseña">
                <input type="checkbox" class="check-box-contra"><span>Recordar Contraseña</span>
                <input type="submit" class="submit-btn" value="Ingresar" id="btn-acceso" name="submit">  
                             
                <div class="register">
                    <p>¿No estas Registrado?</p>
                    <a href="Registro.php">REGISTRATE</a>
                </div>
            </div>           
        </form>
    </div>    
    <footer>
        <section id="info">
            <div class="contenedor">
                <div class="info_siete">
                    <h4 class="acerca">Acerca de:</h4>
                    <a href="Nosotros.html">Nosotros</a>
                    <a href="Ubicacion.html">Ubicaciones</a>
                    <a href="Descuentos.html">Descuentos</a>
                </div>
                <div class="info_siete">
                    <h4 class="acerca">Contactanos:</h4>
                    <a href="https://www.facebook.com/SieteSopas/"><img src="Imagenes/ImgInicio/face.png"> Facebook</a>
                    <a href="https://www.instagram.com/sietesopas/?hl=es-la"><img src="Imagenes/ImgInicio/insta.png"> Instagram</a>
                    <a href="https://api.whatsapp.com/send/?phone=51927904269&text&app_absent=0"><img src="Imagenes/ImgInicio/wasap.png"> WhatsApp</a>
                </div>
                <div class="info_siete">
                    <h4 class="acerca">Trabajos:</h4>
                    <a href="Trabajos.html" id="cocinero">Cocineros</a>
                    <a href="Trabajos.html" id="camarero">Camareros</a>
                    <a href="Trabajos.html" id="seguridad">Seguridad</a>
                </div>
            </div>   
            <span>&copy;Boris Flores Cordova 2020</span>                  
        </section>
    </footer>    
    <script src="https://widget.sirena.app/get?token=ef8a14b8922f452da4f07e96909fdb01"></script>
    <script src="Estilos/Inicio/general.js"></script>    
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="Estilos/Login/validarLogin.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>       
</body>
</html>